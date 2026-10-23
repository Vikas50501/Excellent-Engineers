/* ============================================================
   EXCELLENT DRY-TECH — Animations JavaScript
   Intersection Observer scroll reveals, hero animation, counters
   ============================================================ */

(function () {
  'use strict';

  const prefersReducedMotion = () =>
    window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  /* ================================================================
     INTERSECTION OBSERVER — Scroll Reveal
  ================================================================ */
  function initScrollReveals() {
    if (prefersReducedMotion()) {
      document.querySelectorAll(
        '.reveal-up, .reveal-left, .reveal-right, .section-line, ' +
        '.timeline-step, .checklist-item, .value-item, .accordion-item, .support-step'
      ).forEach(el => {
        el.classList.add('revealed');
        el.style.opacity = '1';
        el.style.transform = 'none';
      });
      return;
    }

    const revealObs = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('revealed');
          revealObs.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.12,
      rootMargin: '0px 0px -40px 0px'
    });

    const targets = document.querySelectorAll(
      '.reveal-up, .reveal-left, .reveal-right, .section-line, ' +
      '.timeline-step, .checklist-item, .value-item, .accordion-item, .support-step'
    );

    targets.forEach(el => revealObs.observe(el));
  }

  /* ================================================================
     STAGGERED CHILD REVEALS (auto-stagger within containers)
  ================================================================ */
  function initStaggeredReveals() {
    if (prefersReducedMotion()) return;

    const containers = document.querySelectorAll('.card-stagger-parent');

    const obs = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const children = entry.target.querySelectorAll('.reveal-up');
          children.forEach((child, i) => {
            setTimeout(() => child.classList.add('revealed'), i * 80);
          });
          obs.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1 });

    containers.forEach(c => obs.observe(c));
  }

  /* ================================================================
     STAT ITEMS — direction-aware reveal
  ================================================================ */
  function initStatReveals() {
    if (prefersReducedMotion()) return;

    const grid = document.querySelector('.stats__grid');
    if (!grid) return;

    const items = grid.querySelectorAll('.stat-item');
    items.forEach((item, i) => {
      item.style.opacity = '0';
      item.style.transform = 'translateY(16px)';
      item.style.transition = `opacity 0.65s cubic-bezier(0.16,1,0.3,1) ${i * 80}ms,
                               transform 0.65s cubic-bezier(0.16,1,0.3,1) ${i * 80}ms`;
    });

    const obs = new IntersectionObserver((entries) => {
      if (entries[0].isIntersecting) {
        items.forEach(item => {
          item.style.opacity = '1';
          item.style.transform = 'none';
        });
        obs.unobserve(grid);
      }
    }, { threshold: 0.2 });

    obs.observe(grid);
  }

  /* ================================================================
     PRODUCT CARD REVEALS
  ================================================================ */
  function initProductCardReveals() {
    if (prefersReducedMotion()) return;

    const cards = document.querySelectorAll('.product-card, .product-spec-card');
    cards.forEach((card, i) => {
      card.style.opacity = '0';
      card.style.transform = 'translateY(12px)';
      card.style.transition = `opacity 0.6s cubic-bezier(0.16,1,0.3,1) ${i * 70}ms,
                               transform 0.6s cubic-bezier(0.16,1,0.3,1) ${i * 70}ms`;
    });

    const obs = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.style.opacity = '1';
          entry.target.style.transform = 'none';
          obs.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1 });

    cards.forEach(c => obs.observe(c));
  }

  /* ================================================================
     HERO SVG — start path draw animations
  ================================================================ */
  function initHeroSVG() {
    const svg = document.querySelector('.hero-blueprint-svg');
    if (!svg) return;

    const paths = svg.querySelectorAll('path, circle, line, rect, polyline');
    paths.forEach((path, i) => {
      try {
        const len = path.getTotalLength ? path.getTotalLength() : 200;
        path.style.strokeDasharray = len;
        path.style.strokeDashoffset = len;
        path.style.transition = `stroke-dashoffset 0.8s cubic-bezier(0.16,1,0.3,1) ${900 + i * 120}ms`;
      } catch (e) {
        // SVG element doesn't support getTotalLength
        path.style.strokeDasharray = '300';
        path.style.strokeDashoffset = '300';
        path.style.transition = `stroke-dashoffset 0.8s cubic-bezier(0.16,1,0.3,1) ${900 + i * 120}ms`;
      }
    });

    // Trigger after overlay is gone
    setTimeout(() => {
      paths.forEach(path => {
        path.style.strokeDashoffset = '0';
      });
    }, 1400);
  }

  /* ================================================================
     PARALLAX — subtle on hero section (desktop only)
  ================================================================ */
  function initParallax() {
    if (prefersReducedMotion()) return;
    if (window.innerWidth < 1024) return;

    const heroRight = document.querySelector('.hero__right');
    if (!heroRight) return;

    let ticking = false;

    window.addEventListener('scroll', () => {
      if (!ticking) {
        requestAnimationFrame(() => {
          const scrollY = window.scrollY;
          const shift = scrollY * 0.06;
          heroRight.style.backgroundPositionY = `${shift}px`;
          ticking = false;
        });
        ticking = true;
      }
    }, { passive: true });
  }

  /* ================================================================
     SECTION NUMBER REVEAL — blueprint callout style
  ================================================================ */
  function initSectionNumbers() {
    if (prefersReducedMotion()) return;

    const nums = document.querySelectorAll('.section-number');
    nums.forEach(num => {
      num.style.opacity = '0';
      num.style.transform = 'translateX(-6px)';
      num.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
    });

    const obs = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.style.opacity = '1';
          entry.target.style.transform = 'none';
          obs.unobserve(entry.target);
        }
      });
    }, { threshold: 0.5 });

    nums.forEach(n => obs.observe(n));
  }

  /* ================================================================
     TRUST STRIP MARQUEE — duplicate items for seamless loop
  ================================================================ */
  function initMarquee() {
    const track = document.querySelector('.marquee-track');
    if (!track) return;

    // Clone items for seamless loop
    const items = [...track.children];
    items.forEach(item => {
      const clone = item.cloneNode(true);
      clone.setAttribute('aria-hidden', 'true');
      track.appendChild(clone);
    });
  }

  /* ================================================================
     INIT
  ================================================================ */
  document.addEventListener('DOMContentLoaded', () => {
    initScrollReveals();
    initStaggeredReveals();
    initStatReveals();
    initProductCardReveals();
    initHeroSVG();
    initParallax();
    initSectionNumbers();
    initMarquee();
  });

})();
