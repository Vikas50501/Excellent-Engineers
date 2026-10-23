<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title', 'Excellent Dry-Tech Pvt Ltd | Industrial Process Equipment')</title>
  <meta name="description" content="@yield('meta_description', 'Excellent Dry-Tech Pvt Ltd (formerly Excellent Engineers) designs & manufactures Spray Dryers, Evaporators and Bio-Technology plants for food, pharma, dairy, chemical and ethanol industries.')" />
  <meta name="keywords" content="@yield('meta_keywords', 'industrial dryer manufacturer Pune, spray dryer manufacturer India, evaporator manufacturer Pune, bio ethanol plant manufacturer')" />

  <!-- Open Graph -->
  <meta property="og:title" content="@yield('title', 'Excellent Dry-Tech Pvt Ltd')" />
  <meta property="og:description" content="@yield('meta_description', 'Turnkey industrial process equipment engineered in Pune, trusted across India.')" />
  <meta property="og:image" content="{{ asset('images/spray-dryer-plant.jpg') }}" />
  <meta property="og:type" content="website" />
  <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}" />

  <!-- Typography Links & Local Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,300..900;1,9..144,300..900&family=IBM+Plex+Mono:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet" />
  <link href="https://api.fontshare.com/v2/css?f[]=general-sans@400,500,600,700&display=swap" rel="stylesheet" />

  <!-- Stylesheets -->
  <link rel="stylesheet" href="{{ asset('css/fonts.css') }}?v={{ time() }}" />
  <link rel="stylesheet" href="{{ asset('css/style.css') }}?v={{ time() }}" />
  <link rel="stylesheet" href="{{ asset('css/animations.css') }}?v={{ time() }}" />
</head>
<body class="blueprint-bg">

  <!-- ============================================================
       00. BLUEPRINT GRID DRAW-IN / PAGE LOAD OVERLAY
       ============================================================ -->
  <div id="blueprint-overlay" role="presentation" aria-hidden="true">
    <div class="overlay-grid"></div>
    <div class="overlay-content">
      <img src="{{ asset('images/logo.png') }}" alt="Excellent Dry-Tech Pvt Ltd" />
      <span class="overlay-tag">[ SYSTEM // INITIALIZING BLUEPRINT DATA ]</span>
    </div>
    <div class="overlay-progress"></div>
  </div>

  <!-- ============================================================
       HEADER NAVIGATION (Sticky & Compressing)
       ============================================================ -->
  <nav class="nav" role="navigation" aria-label="Main Navigation">
    <div class="nav__inner">
      <a href="{{ route('home') }}" class="nav__logo" title="Excellent Dry-Tech Home">
        <img src="{{ asset('images/logo.png') }}" alt="Excellent Dry-Tech Logo" />
        <div class="nav__logo-text">
          <span class="nav__logo-name">Excellent Dry-Tech</span>
          <span class="nav__logo-sub">Formerly Excellent Engineers</span>
        </div>
      </a>

      <ul class="nav__menu" role="list">
        <li><a href="{{ route('home') }}" class="nav__link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
        <li><a href="{{ route('about') }}" class="nav__link {{ request()->routeIs('about') ? 'active' : '' }}">About Us</a></li>
        <li><a href="{{ route('products') }}" class="nav__link {{ request()->routeIs('products') ? 'active' : '' }}">Product</a></li>
        <li><a href="{{ route('gallery') }}" class="nav__link {{ request()->routeIs('gallery') ? 'active' : '' }}">Projects</a></li>
        <li><a href="{{ route('maintenance') }}" class="nav__link {{ request()->routeIs('maintenance') ? 'active' : '' }}">Maintenance</a></li>
        <li><a href="{{ route('careers') }}" class="nav__link {{ request()->routeIs('careers*') ? 'active' : '' }}">Careers</a></li>
        <li><a href="{{ route('contact') }}" class="nav__link {{ request()->routeIs('contact*') ? 'active' : '' }}">Contact Us</a></li>
      </ul>

      <div class="nav__actions">
        <a href="{{ route('contact') }}" class="btn btn--primary btn--magnetic nav__cta">Get a Quote</a>
        <button class="nav__hamburger" aria-label="Toggle navigation menu" aria-expanded="false" aria-controls="mobile-nav">
          <span></span><span></span><span></span>
        </button>
      </div>
    </div>
  </nav>

  <!-- Mobile Navigation Drawer -->
  <div id="mobile-nav" class="mobile-nav" role="dialog" aria-modal="true" aria-label="Mobile Navigation">
    <div class="mobile-nav__header">
      <div class="mobile-nav__brand">
        <span class="mobile-nav__brand-title">Menu &amp; Quick Access</span>
        <span class="mobile-nav__brand-sub">Excellent Dry-Tech Pvt Ltd</span>
      </div>
      <button class="mobile-nav__close" aria-label="Close menu">&times;</button>
    </div>

    <div class="mobile-nav__menu">
      <a href="{{ route('home') }}" class="mobile-nav__link {{ request()->routeIs('home') ? 'active' : '' }}">
        <span class="mobile-nav__link-text">Home</span>
        <span class="mobile-nav__arrow">&rarr;</span>
      </a>
      <a href="{{ route('about') }}" class="mobile-nav__link {{ request()->routeIs('about') ? 'active' : '' }}">
        <span class="mobile-nav__link-text">About Us</span>
        <span class="mobile-nav__arrow">&rarr;</span>
      </a>
      <a href="{{ route('products') }}" class="mobile-nav__link {{ request()->routeIs('products') ? 'active' : '' }}">
        <span class="mobile-nav__link-text">Product Range</span>
        <span class="mobile-nav__arrow">&rarr;</span>
      </a>
      <a href="{{ route('gallery') }}" class="mobile-nav__link {{ request()->routeIs('gallery') ? 'active' : '' }}">
        <span class="mobile-nav__link-text">Installed Projects</span>
        <span class="mobile-nav__arrow">&rarr;</span>
      </a>
      <a href="{{ route('maintenance') }}" class="mobile-nav__link {{ request()->routeIs('maintenance') ? 'active' : '' }}">
        <span class="mobile-nav__link-text">Maintenance &amp; Support</span>
        <span class="mobile-nav__arrow">&rarr;</span>
      </a>
      <a href="{{ route('careers') }}" class="mobile-nav__link {{ request()->routeIs('careers*') ? 'active' : '' }}">
        <span class="mobile-nav__link-text">Careers</span>
        <span class="mobile-nav__arrow">&rarr;</span>
      </a>
      <a href="{{ route('contact') }}" class="mobile-nav__link {{ request()->routeIs('contact*') ? 'active' : '' }}">
        <span class="mobile-nav__link-text">Contact Us</span>
        <span class="mobile-nav__arrow">&rarr;</span>
      </a>
    </div>

    <div class="mobile-nav__cta-wrap">
      <a href="{{ route('contact') }}" class="btn btn--primary" style="width: 100%; justify-content: center;">
        Get a Technical Quote &rarr;
      </a>
    </div>

    <div class="mobile-nav__contact">
      <div class="mobile-nav__contact-heading">Direct Contact &amp; Works</div>
      <a href="tel:+919922754848" class="mobile-contact-row">
        <span class="contact-pill-icon">📞</span>
        <span>+91 99227 54848 / 99226 54848</span>
      </a>
      <a href="mailto:excellentengineers.sr@gmail.com" class="mobile-contact-row">
        <span class="contact-pill-icon">✉️</span>
        <span>excellentengineers.sr@gmail.com</span>
      </a>
      <div class="mobile-contact-row">
        <span class="contact-pill-icon">📍</span>
        <span>Gat No. 607, Nighoje–Moi Road, At. Moi, Pune – 410501</span>
      </div>
    </div>

    <div class="mobile-nav__footer">
      <span>PROVENANCE: Formerly Excellent Engineers · Pune</span>
    </div>
  </div>

  <!-- MAIN VIEW CONTENT -->
  <main id="main-content">
    @yield('content')
  </main>

  <!-- ============================================================
       FOOTER (4 Columns + Provenance Stamp)
       ============================================================ -->
  <footer class="footer" role="contentinfo">
    <div class="container">
      <div class="footer-grid">
        <!-- Col 1: Company -->
        <div class="footer-col">
          <a href="{{ route('home') }}" class="footer-logo">
            <img src="{{ asset('images/logo.png') }}" alt="Excellent Dry-Tech Logo" />
            <div>
              <div style="font-family: var(--font-head); font-weight: 700; font-size: 1.15rem; color: #fff;">Excellent Dry-Tech</div>
              <div style="font-family: var(--font-mono); font-size: 0.6875rem; color: var(--steel);">PVT LTD</div>
            </div>
          </a>
          <p style="font-style: italic; color: #e3edf7; margin-bottom: 0.75rem;">“Engineered for Purity. Built for Performance.”</p>
          <p>
            Manufacturer of industrial Dryers, Evaporators and Bio-Technology plants for the food, pharma, dairy, chemical and bio-fuel industries, with complete design, fabrication, commissioning and maintenance support.
          </p>
        </div>

        <!-- Col 2: Quick Links -->
        <div class="footer-col">
          <h4>Quick Links</h4>
          <ul class="footer-links">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About Us</a></li>
            <li><a href="{{ route('products') }}">Product Range</a></li>
            <li><a href="{{ route('gallery') }}">Installed Projects</a></li>
            <li><a href="{{ route('maintenance') }}">Maintenance &amp; Support</a></li>
            <li><a href="{{ route('careers') }}">Careers</a></li>
            <li><a href="{{ route('contact') }}">Contact Us</a></li>
          </ul>
        </div>

        <!-- Col 3: Products -->
        <div class="footer-col">
          <h4>Process Systems</h4>
          <ul class="footer-links">
            <li><a href="{{ route('products') }}#tab-dryers">Spray Dryers</a></li>
            <li><a href="{{ route('products') }}#tab-dryers">Fluid Bed Dryers</a></li>
            <li><a href="{{ route('products') }}#tab-dryers">Flash &amp; Rotary Dryers</a></li>
            <li><a href="{{ route('products') }}#tab-evaporators">Falling Film Evaporators</a></li>
            <li><a href="{{ route('products') }}#tab-evaporators">Forced Circulation Systems</a></li>
            <li><a href="{{ route('products') }}#tab-biotech">Fermentation &amp; Distillation</a></li>
            <li><a href="{{ route('products') }}#tab-biotech">Fuel Ethanol Plants</a></li>
          </ul>
        </div>

        <!-- Col 4: Contact & Provenance -->
        <div class="footer-col">
          <h4>Works &amp; Office</h4>
          <div class="footer-contact-item">
            <span>📍</span>
            <span>Gat No. 607, Nighoje–Moi Road, At. Moi, Post. Kurli, Tal. Khed, Dist. Pune – 410501, Maharashtra, India</span>
          </div>
          <div class="footer-contact-item">
            <span>📞</span>
            <span><a href="tel:+919922754848" style="color: inherit;">+91 99227 54848</a> / <a href="tel:+919922654848" style="color: inherit;">+91 99226 54848</a></span>
          </div>
          <div class="footer-contact-item">
            <span>✉️</span>
            <span><a href="mailto:excellentengineers.sr@gmail.com" style="color: inherit;">excellentengineers.sr@gmail.com</a></span>
          </div>

          <div class="social-links" aria-label="Social media channels">
            <a href="https://facebook.com" class="social-icon-btn" aria-label="Facebook" target="_blank" rel="noopener">f</a>
            <a href="https://twitter.com" class="social-icon-btn" aria-label="Twitter / X" target="_blank" rel="noopener">𝕏</a>
            <a href="https://google.com" class="social-icon-btn" aria-label="Google Business" target="_blank" rel="noopener">G</a>
          </div>
        </div>
      </div>

      <div class="footer-bottom">
        <div>
          © {{ date('Y') }} Excellent Dry-Tech Pvt Ltd. All Rights Reserved.
        </div>
        <div class="provenance-stamp">
          <span>PROVENANCE:</span> Formerly Excellent Engineers · Pune, India
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="{{ asset('js/main.js') }}?v={{ time() }}"></script>
</body>
</html>
