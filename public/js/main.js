/* ============================================================
   EXCELLENT DRY-TECH PVT LTD — Main JavaScript
   Nav, Interactive Slides, Accordion, Tabs, Counters, Motion
   ============================================================ */

(function () {
  'use strict';

  const qs  = (sel, ctx = document) => ctx.querySelector(sel);
  const qsa = (sel, ctx = document) => [...ctx.querySelectorAll(sel)];
  const prefersReduced = () => window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  /* ================================================================
     1. BLUEPRINT OVERLAY / DRAW-IN
  ================================================================ */
  function initOverlay() {
    const overlay = qs('#blueprint-overlay');
    if (!overlay) return;

    if (prefersReduced()) {
      overlay.remove();
      return;
    }

    setTimeout(() => {
      overlay.classList.add('exit');
      setTimeout(() => {
        if (overlay.parentNode) overlay.remove();
      }, 700);
    }, 750);
  }

  /* ================================================================
     2. STICKY NAV & ACTIVE LINKS
  ================================================================ */
  function initNav() {
    const nav = qs('.nav');
    if (!nav) return;

    const handleScroll = () => {
      if (window.scrollY > 80) {
        nav.classList.add('scrolled');
      } else {
        nav.classList.remove('scrolled');
      }
    };

    window.addEventListener('scroll', handleScroll, { passive: true });
    handleScroll();
  }

  /* ================================================================
     3. MOBILE MENU
  ================================================================ */
  function initMobileMenu() {
    const hamburger = qs('.nav__hamburger');
    const mobileNav = qs('.mobile-nav');
    const closeBtn = qs('.mobile-nav__close');
    if (!hamburger || !mobileNav) return;

    let isOpen = false;

    const setMenuState = (open) => {
      isOpen = open;
      mobileNav.classList.toggle('open', isOpen);
      hamburger.setAttribute('aria-expanded', isOpen);
      document.body.classList.toggle('nav-open', isOpen);

      const spans = qsa('span', hamburger);
      if (spans.length === 3) {
        if (isOpen) {
          spans[0].style.transform = 'translateY(7px) rotate(45deg)';
          spans[1].style.opacity = '0';
          spans[2].style.transform = 'translateY(-7px) rotate(-45deg)';
        } else {
          spans[0].style.transform = '';
          spans[1].style.opacity = '';
          spans[2].style.transform = '';
        }
      }
    };

    hamburger.addEventListener('click', (e) => {
      e.stopPropagation();
      setMenuState(!isOpen);
    });

    if (closeBtn) {
      closeBtn.addEventListener('click', () => setMenuState(false));
    }

    // Close on link click
    qsa('a', mobileNav).forEach(link => {
      link.addEventListener('click', () => setMenuState(false));
    });

    // Close on Escape key
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && isOpen) setMenuState(false);
    });

    // Close if resized to desktop viewport
    window.addEventListener('resize', () => {
      if (window.innerWidth > 1024 && isOpen) setMenuState(false);
    }, { passive: true });
  }

  /* ================================================================
     4. HERO ROTATING SLIDES (3 Core Systems)
  ================================================================ */
  function initHeroSlides() {
    const tabs = qsa('.hero-slide-tab');
    if (!tabs.length) return;

    let currentIndex = 0;
    let timer = null;

    const showSlide = (idx) => {
      tabs.forEach((t, i) => t.classList.toggle('active', i === idx));
      currentIndex = idx;
    };

    tabs.forEach((tab, i) => {
      tab.addEventListener('click', () => {
        showSlide(i);
        restartTimer();
      });
    });

    const nextSlide = () => {
      showSlide((currentIndex + 1) % tabs.length);
    };

    const restartTimer = () => {
      clearInterval(timer);
      timer = setInterval(nextSlide, 5000);
    };

    const heroWrap = qs('.hero');
    if (heroWrap) {
      heroWrap.addEventListener('mouseenter', () => clearInterval(timer));
      heroWrap.addEventListener('mouseleave', restartTimer);
    }

    restartTimer();
  }

  /* ================================================================
     5. STATS COUNTER WITH EASING
  ================================================================ */
  function initCounters() {
    const counters = qsa('.stat-counter');
    if (!counters.length) return;

    if (prefersReduced()) {
      counters.forEach(c => {
        c.textContent = c.dataset.target + (c.dataset.suffix || '');
      });
      return;
    }

    const ease = t => (t < 0.5 ? 2 * t * t : -1 + (4 - 2 * t) * t);

    const animateCounter = (el) => {
      if (el.dataset.done) return;
      el.dataset.done = '1';

      const target = parseInt(el.dataset.target, 10);
      const suffix = el.dataset.suffix || '';
      const duration = 1600;
      const start = performance.now();

      function tick(now) {
        const elapsed = now - start;
        const progress = Math.min(elapsed / duration, 1);
        const val = Math.round(ease(progress) * target);
        el.textContent = val + suffix;
        if (progress < 1) requestAnimationFrame(tick);
      }

      requestAnimationFrame(tick);
    };

    const obs = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) animateCounter(entry.target);
      });
    }, { threshold: 0.25 });

    counters.forEach(c => obs.observe(c));
  }

  /* ================================================================
     6. FAQ ACCORDION
  ================================================================ */
  function initFaq() {
    qsa('.faq-item').forEach(item => {
      const header = qs('.faq-header', item);
      if (!header) return;

      header.addEventListener('click', () => {
        const wasOpen = item.classList.contains('open');
        qsa('.faq-item').forEach(i => i.classList.remove('open'));
        if (!wasOpen) item.classList.add('open');
      });
    });
  }

  /* ================================================================
     7. PRODUCT TABS (Anchor Index)
  ================================================================ */
  function initProductTabs() {
    const btns = qsa('.product-tab-btn');
    const panels = qsa('.product-tab-panel');
    if (!btns.length) return;

    btns.forEach(btn => {
      btn.addEventListener('click', () => {
        const target = btn.dataset.tab;
        btns.forEach(b => b.classList.remove('active'));
        panels.forEach(p => p.classList.remove('active'));

        btn.classList.add('active');
        const panel = qs(`#tab-${target}`);
        if (panel) panel.classList.add('active');
      });
    });

    // Check URL hash
    const hash = window.location.hash.replace('#', '');
    if (hash) {
      const matchingBtn = qs(`.product-tab-btn[data-tab="${hash}"]`);
      if (matchingBtn) matchingBtn.click();
    }
  }

  /* ================================================================
     8. MAGNETIC CTA BUTTON EFFECT
  ================================================================ */
  function initMagneticButtons() {
    if (prefersReduced()) return;

    qsa('.btn--magnetic').forEach(btn => {
      const radius = 50;
      const strength = 5;

      btn.addEventListener('mousemove', (e) => {
        const rect = btn.getBoundingClientRect();
        const cx = rect.left + rect.width / 2;
        const cy = rect.top + rect.height / 2;
        const dx = e.clientX - cx;
        const dy = e.clientY - cy;
        const dist = Math.sqrt(dx * dx + dy * dy);

        if (dist < radius) {
          const factor = (radius - dist) / radius;
          btn.style.transform = `translate(${dx * factor * 0.2}px, ${dy * factor * 0.2}px)`;
        }
      });

      btn.addEventListener('mouseleave', () => {
        btn.style.transform = '';
      });
    });
  }

  /* ================================================================
     9. SCROLL REVEALS — NO DEAD SPACE
  ================================================================ */
  function initScrollReveals() {
    const reveals = qsa('.reveal, .reveal-left');
    if (!reveals.length) return;

    if (prefersReduced()) {
      reveals.forEach(r => r.classList.add('revealed'));
      return;
    }

    const obs = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('revealed');
          obs.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.08,
      rootMargin: '0px 0px -20px 0px'
    });

    reveals.forEach(r => obs.observe(r));
  }

  /* ================================================================
     10. FORM SUBMISSION FEEDBACK (Front-End Prototype)
  ================================================================ */
  function initForms() {
    qsa('form[data-form]').forEach(form => {
      form.addEventListener('submit', (e) => {
        e.preventDefault();
        const submitBtn = qs('button[type="submit"]', form);
        const originalText = submitBtn.textContent;

        submitBtn.textContent = 'Verifying Specification…';
        submitBtn.disabled = true;

        setTimeout(() => {
          submitBtn.textContent = '✓ Enquiry Logged with Engineering Team';
          submitBtn.style.backgroundColor = 'var(--green)';
          submitBtn.style.borderColor = 'var(--green)';

          setTimeout(() => {
            submitBtn.textContent = originalText;
            submitBtn.style.backgroundColor = '';
            submitBtn.style.borderColor = '';
            submitBtn.disabled = false;
            form.reset();
          }, 3500);
        }, 1200);
      });
    });
  }

  /* ================================================================
     INIT ON DOM READY
  ================================================================ */
  document.addEventListener('DOMContentLoaded', () => {
    initOverlay();
    initNav();
    initMobileMenu();
    initHeroSlides();
    initCounters();
    initFaq();
    initProductTabs();
    initMagneticButtons();
    initScrollReveals();
    initForms();
  });

})();
