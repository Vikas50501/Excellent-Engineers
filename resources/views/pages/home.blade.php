@extends('layouts.app')

@section('title', 'Industrial Dryers, Evaporators & Bio-Tech Plants | Excellent Dry-Tech')
@section('meta_description', 'Excellent Dry-Tech Pvt Ltd designs & manufactures Spray Dryers, Evaporators and Bio-Technology plants for food, pharma, dairy, chemical and ethanol industries.')
@section('meta_keywords', 'industrial dryer manufacturer Pune, spray dryer manufacturer India, evaporator manufacturer Pune, bio ethanol plant manufacturer')

@section('content')

  <!-- ============================================================
       SECTION 1: HERO BANNER (3-Slide Auto Carousel, Split Layout 55/45)
       ============================================================ -->
  <section class="hero" aria-label="Introduction">
    <div class="container">
      <div class="hero__inner">
        <div class="hero__content">
          <h1 class="hero__title" id="hero-title">
            Industrial <em id="hero-keyword">Spray Dryers</em>, Evaporators &amp; Bio-Technology Plants — Engineered in Pune, Trusted Across India.
          </h1>
          <p class="hero__sub" id="hero-sub">
            Excellent Dry-Tech designs, fabricates and commissions precision Spray Drying systems for food, pharma, chemical and dairy industries — from single units to complete turnkey plants.
          </p>
          <div class="hero__ctas">
            <a href="{{ route('contact') }}" class="btn btn--primary btn--magnetic">Get a Quote</a>
            <a href="{{ route('products') }}" class="btn btn--ghost">Explore Our Products <span class="btn-arrow">→</span></a>
          </div>

          <!-- Rotating Slide Control Strip (All 3 on White Background with Borders) -->
          <div class="hero-slider-nav" role="tablist" aria-label="Core Equipment Families">
            <button class="hero-slide-tab active" role="tab" aria-selected="true" data-slide="0">
              <span class="hero-slide-tab__label">Spray Dryers</span>
              <span class="hero-slide-tab__quote">“Uniform Particle Size. Lower Moisture. Higher Yield.”</span>
            </button>
            <button class="hero-slide-tab" role="tab" aria-selected="false" data-slide="1">
              <span class="hero-slide-tab__label">Evaporators</span>
              <span class="hero-slide-tab__quote">“Concentrate More. Waste Less. Recover Energy.”</span>
            </button>
            <button class="hero-slide-tab" role="tab" aria-selected="false" data-slide="2">
              <span class="hero-slide-tab__label">Bio-Technology</span>
              <span class="hero-slide-tab__quote">“From Fermentation to Fuel-Grade Ethanol — End-to-End Plants.”</span>
            </button>
          </div>
        </div>

        <!-- Hero Right: Clean Real Photography Visual Panel with Corner Framing -->
        <div class="hero__visual duotone-photo crop-marks">
          <div class="hero-visual-slides">
            <!-- Slide 0: Spray Dryers -->
            <div class="hero-visual-slide active" data-slide="0">
              <img src="{{ asset('images/spray-dryer-plant.jpg') }}" alt="Industrial Spray Drying Tower Facility" class="hero-visual-img" />
              <div class="hero-visual-overlay"></div>
              <div class="hero-visual-grid"></div>
            </div>

            <!-- Slide 1: Evaporators -->
            <div class="hero-visual-slide" data-slide="1">
              <img src="{{ asset('images/evaporator-plant.jpg') }}" alt="Multi-Effect Industrial Evaporator Plant" class="hero-visual-img" />
              <div class="hero-visual-overlay"></div>
              <div class="hero-visual-grid"></div>
            </div>

            <!-- Slide 2: Bio-Technology -->
            <div class="hero-visual-slide" data-slide="2">
              <img src="{{ asset('images/fermentation-distillery.jpg') }}" alt="Bio-Technology Fermentation and Distillation Plant" class="hero-visual-img" />
              <div class="hero-visual-overlay"></div>
              <div class="hero-visual-grid"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================
       SECTION 2: TRUST STRIP (Drifting Marquee Band & Provenance Plate)
       ============================================================ -->
  <section class="trust-strip blueprint-bg--dark" aria-label="Trust Attributes">
    <div class="trust-marquee">
      <div class="trust-marquee__track">
        <span class="trust-point">Custom-Engineered Equipment — not off-the-shelf</span>
        <span class="trust-divider"></span>
        <span class="trust-point">In-House Design, Fabrication &amp; Commissioning</span>
        <span class="trust-divider"></span>
        <span class="trust-point">Pan-India Installation &amp; Service Network</span>
        <span class="trust-divider"></span>
        <span class="trust-point">Dedicated After-Sales &amp; Maintenance Support</span>
        <span class="trust-divider"></span>
        <span class="trust-point">ASME Section IX &amp; IS Compliant Fabrication</span>
        <span class="trust-divider"></span>
        <span class="trust-point">Gat No. 607, Moi Works, Khed, Pune</span>
      </div>
    </div>
  </section>

  <!-- ============================================================
       SECTION 3: COMPANY SNAPSHOT ("Why Excellent Dry-Tech")
       ============================================================ -->
  <section class="section section--white" aria-labelledby="snapshot-heading">
    <div class="container">
      <div class="snapshot-grid">
        <div class="snapshot__content reveal">
          <h2 id="snapshot-heading">Why Process Leaders Choose Excellent Dry-Tech</h2>
          <p class="snapshot__lead">
            Excellent Dry-Tech Pvt Ltd (formerly Excellent Engineers) is a Pune-based manufacturer of industrial drying, evaporation and bio-technology process systems. We work closely with every client from first concept sketch to final commissioning, so the plant you get is the plant your process actually needs — not a standard catalogue model forced to fit.
          </p>
          <p>
            Our engineering team studies your feed material, moisture profile, capacity target and space constraints before a single drawing is finalised, which is why our equipment performs to specification from the first trial run.
          </p>

          <blockquote class="snapshot__quote">
            “We engineer around your product, your space and your budget — from concept sketch to commissioning.”
          </blockquote>

          <ul class="bullet-list" role="list">
            <li class="bullet-item">
              <span class="bullet-item__icon"></span>
              <span><strong>End-to-end project execution:</strong> In-house process calculations → fabrication → erection → commissioning → training.</span>
            </li>
            <li class="bullet-item">
              <span class="bullet-item__icon"></span>
              <span><strong>Severe duty capability:</strong> Equipment built to handle heat-sensitive, high-purity, viscous and hazardous-duty materials.</span>
            </li>
            <li class="bullet-item">
              <span class="bullet-item__icon"></span>
              <span><strong>Ongoing engineering accountability:</strong> A responsive team that stays involved well after the plant is running.</span>
            </li>
          </ul>
        </div>

        <div class="snapshot__visual reveal stagger-1">
          <div class="duotone-photo crop-marks" style="height: 420px;">
            <img src="{{ asset('images/fabrication-workshop.jpg') }}" alt="Excellent Dry-Tech Heavy Engineering Fabrication Workshop in Moi, Pune" />
          </div>
          <div class="snapshot__caption">
            <span>WORKS // MOI, KHED, PUNE</span>
            <span>PRESSURE VESSEL FABRICATION</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================
       SECTION 4: STATS STRIP (Blueprint Corner Brackets)
       ============================================================ -->
  <section class="stats-band blueprint-bg--dark" aria-label="Company Statistics">
    <div class="container">
      <div class="stats-grid">
        @foreach($stats as $i => $stat)
          <div class="stat-bracket-box reveal {{ $i > 0 ? 'stagger-' . $i : '' }}">
            <div class="stat-num stat-counter" data-target="{{ $stat['target'] }}" data-suffix="{{ $stat['suffix'] }}">
              {{ $stat['target'] }}{{ $stat['suffix'] }}
            </div>
            <div class="stat-label">{{ $stat['label'] }}</div>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- ============================================================
       SECTION 5: PRODUCT RANGE (3 Flat-Bordered Spec Cards)
       ============================================================ -->
  <section class="section" aria-labelledby="products-preview-heading">
    <div class="container">
      <div class="section-head reveal">
        <h2 id="products-preview-heading">Equipment Built for Critical Processing</h2>
        <p>Precision-engineered individually or supplied as part of complete turnkey production trains.</p>
      </div>

      <div class="product-preview-grid">
        @foreach($productFamilies as $i => $fam)
          <article class="spec-sheet-card reveal {{ $i > 0 ? 'stagger-' . $i : '' }}">
            <div class="spec-sheet-card__diagram">
              @if($fam['id'] === 'dryers')
                <svg width="100%" height="110" viewBox="0 0 200 110" fill="none" stroke="#0E5794" stroke-width="1.5">
                  <path d="M30,20 L80,20 L80,60 L55,95 L55,105 L45,105 L30,60 Z" fill="rgba(14,87,148,0.05)"/>
                  <line x1="80" y1="35" x2="115" y2="35"/>
                  <path d="M115,25 L140,25 L140,65 L128,88 L128,100 L115,65 Z" fill="rgba(47,117,182,0.05)"/>
                  <path d="M140,40 L175,40 L175,90" stroke-dasharray="3 3"/>
                  <circle cx="55" cy="20" r="5" stroke="#EF7F1A"/>
                </svg>
              @elseif($fam['id'] === 'evaporators')
                <svg width="100%" height="110" viewBox="0 0 200 110" fill="none" stroke="#0E5794" stroke-width="1.5">
                  <rect x="25" y="20" width="30" height="70" rx="2" fill="rgba(14,87,148,0.05)"/>
                  <line x1="40" y1="20" x2="40" y2="90" stroke-dasharray="2 2"/>
                  <rect x="75" y="25" width="30" height="65" rx="2" fill="rgba(14,87,148,0.05)"/>
                  <line x1="90" y1="25" x2="90" y2="90" stroke-dasharray="2 2"/>
                  <circle cx="150" cy="50" r="28" stroke="#3CA742" fill="rgba(60,167,66,0.05)"/>
                  <path d="M55,30 L75,30 M105,35 L125,45" stroke="#EF7F1A"/>
                </svg>
              @else
                <svg width="100%" height="110" viewBox="0 0 200 110" fill="none" stroke="#0E5794" stroke-width="1.5">
                  <rect x="30" y="30" width="45" height="60" rx="6" fill="rgba(60,167,66,0.05)"/>
                  <path d="M52,15 L52,30 M42,48 L62,48 M42,62 L62,62" stroke="#3CA742"/>
                  <rect x="110" y="15" width="26" height="85" rx="2" fill="rgba(14,87,148,0.05)"/>
                  <line x1="110" y1="35" x2="136" y2="35"/>
                  <line x1="110" y1="55" x2="136" y2="55"/>
                  <line x1="110" y1="75" x2="136" y2="75"/>
                  <path d="M75,60 L110,60" stroke="#EF7F1A"/>
                </svg>
              @endif
            </div>
            <h3 class="spec-sheet-card__title">{{ $fam['title'] }}</h3>
            <p class="spec-sheet-card__desc">{{ $fam['desc'] }}</p>
            <div class="spec-sheet-card__footer">
              <span class="text-muted" style="font-size: 0.8125rem;">{{ $fam['subproducts'] }}</span>
              <a href="{{ $fam['link'] }}" class="spec-sheet-link">View {{ $fam['title'] }} →</a>
            </div>
          </article>
        @endforeach
      </div>
    </div>
  </section>

  <!-- ============================================================
       SECTION 6: HOW WE WORK (Scroll-Scrubbed Process Rail)
       ============================================================ -->
  <section class="section section--white" aria-labelledby="process-heading">
    <div class="container">
      <div class="section-head reveal">
        <h2 id="process-heading">How We Work — From First Feasibility to Commissioning</h2>
        <p>Every phase is executed and monitored by the same dedicated project team. No hand-offs between sales desks and contractors.</p>
      </div>

      <div class="process-rail-wrap">
        <div class="process-rail-track">
          @foreach($processSteps as $i => $step)
            <div class="process-step-node reveal {{ $i > 0 ? 'stagger-' . $i : '' }}">
              <div class="process-step-node__badge">{{ $step['num'] }}</div>
              <h3 class="process-step-node__title">{{ $step['title'] }}</h3>
              <p class="process-step-node__body">{{ $step['body'] }}</p>
            </div>
          @endforeach
        </div>

        <div class="accountability-banner reveal">
          <strong>Single Point of Accountability:</strong> The engineering lead who calculates your plant’s thermodynamics also oversees the trial runs on your floor.
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================
       SECTION 7: INDUSTRIES WE SERVE (Marquee Chip Grid)
       ============================================================ -->
  <section class="section" aria-labelledby="industries-heading">
    <div class="container">
      <div class="section-head reveal">
        <h2 id="industries-heading">Industries Engineered For Purity &amp; Performance</h2>
        <p>Delivering custom solutions across diverse sectors with specific sanitary, thermal, and compliance demands.</p>
      </div>

      <div class="industry-chip-grid">
        @foreach($industries as $i => $ind)
          <div class="industry-chip reveal {{ $i > 0 ? 'stagger-' . ($i % 4) : '' }}">
            <div class="industry-chip__head">
              <span class="industry-chip__num">{{ $ind['num'] }}</span>
              <h3 class="industry-chip__title">{{ $ind['title'] }}</h3>
            </div>
            <p class="industry-chip__desc">{{ $ind['desc'] }}</p>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- ============================================================
       SECTION 8: FEATURED PROJECTS / GALLERY PREVIEW (REAL PHOTOS)
       ============================================================ -->
  <section class="section section--white" aria-labelledby="projects-heading">
    <div class="container">
      <div class="section-head reveal">
        <h2 id="projects-heading">Installed Plants &amp; Turnkey Execution</h2>
        <p>Real industrial installations operating across manufacturing hubs in India.</p>
      </div>

      <div class="gallery-preview-grid">
        <article class="project-card reveal">
          <div class="project-card__img-wrap duotone-photo">
            <img src="{{ asset('images/spray-dryer-plant.jpg') }}" alt="Spray Drying Plant Installation in Pune" />
          </div>
          <div class="project-card__body">
            <h3 class="project-card__title">1,500 kg/hr Turnkey Spray Drying Facility</h3>
            <p class="project-card__spec">Location: Pune, Maharashtra | Capacity: 1,500 kg/hr evaporation | SS 316L Contact Parts | Uniform 80-mesh yield</p>
          </div>
        </article>

        <article class="project-card reveal stagger-1">
          <div class="project-card__img-wrap duotone-photo">
            <img src="{{ asset('images/evaporator-plant.jpg') }}" alt="Forced Circulation Evaporator System Gujarat" />
          </div>
          <div class="project-card__body">
            <h3 class="project-card__title">4-Effect Forced Circulation Evaporation Plant</h3>
            <p class="project-card__spec">Location: Dahej, Gujarat | Capacity: 25 kL/Day | Zero Liquid Discharge | High TDS scaling-resistant slurry design</p>
          </div>
        </article>

        <article class="project-card reveal stagger-2">
          <div class="project-card__img-wrap duotone-photo">
            <img src="{{ asset('images/fermentation-distillery.jpg') }}" alt="Bio-Ethanol Fermentation and Distillation Plant" />
          </div>
          <div class="project-card__body">
            <h3 class="project-card__title">60 KLPD Turnkey Fuel Ethanol Distillation Plant</h3>
            <p class="project-card__spec">Location: Western Maharashtra | Continuous multi-pressure column distillation | 99.8% fuel-grade blending purity</p>
          </div>
        </article>

        <article class="project-card reveal stagger-3">
          <div class="project-card__img-wrap duotone-photo">
            <img src="{{ asset('images/fluid-bed-dryer.jpg') }}" alt="Pharmaceutical Fluid Bed Dryer Hyderabad" />
          </div>
          <div class="project-card__body">
            <h3 class="project-card__title">Fluid Bed Granulation &amp; Drying Train</h3>
            <p class="project-card__spec">Location: Hyderabad, Telangana | cGMP SS 316 unit | HEPA air treatment | Precise moisture ±0.2% tolerance</p>
          </div>
        </article>
      </div>

      <div style="text-align: center;" class="reveal">
        <a href="{{ route('gallery') }}" class="btn btn--secondary">View All Installed Projects &amp; Gallery <span class="btn-arrow">→</span></a>
      </div>
    </div>
  </section>

  <!-- ============================================================
       SECTION 9: QUALITY, STANDARDS & SAFETY
       ============================================================ -->
  <section class="section" aria-labelledby="quality-heading">
    <div class="container">
      <div class="quality-grid">
        <div class="reveal">
          <h2 id="quality-heading">Every System Built for Zero Compromise</h2>
          <p>Every vessel, pipe weld, and heat transfer matrix undergoes verified stage-gate inspections before dispatch.</p>

          <div class="spec-plate-box" style="margin-top: 1.75rem;">
            <div class="spec-plate-item">
              <div class="spec-plate-text">
                <h4>Full Material Traceability</h4>
                <p>100% Mill Test Certificates (MTC) logged for all product-contact and pressure-retaining stainless steel (SS 304, SS 316, 316L, Hastelloy).</p>
              </div>
            </div>

            <div class="spec-plate-item">
              <div class="spec-plate-text">
                <h4>Certified Coded Welding</h4>
                <p>All structural and pressure welding performed by certified welders adhering strictly to ASME Section IX and IS manufacturing standards.</p>
              </div>
            </div>

            <div class="spec-plate-item">
              <div class="spec-plate-text">
                <h4>Non-Destructive &amp; Hydro Testing</h4>
                <p>Dye-penetrant testing, digital ultrasonic thickness audits, hydrostatic testing at 1.5x design pressure, and air leak checks.</p>
              </div>
            </div>

            <div class="spec-plate-item">
              <div class="spec-plate-text">
                <h4>Safety-First Mechanical Design</h4>
                <p>Calibrated rupture discs, explosion vents, pressure relief valves, safety interlocks, and compliant maintenance access platforms built in.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="reveal stagger-1">
          <div class="duotone-photo crop-marks" style="height: 480px;">
            <img src="{{ asset('images/quality-inspection.jpg') }}" alt="Quality Inspector Auditing Pressure Vessel Weld with Ultrasonic Testing" />
          </div>
          <div class="snapshot__caption">
            <span>QA/QC VERIFICATION LAB</span>
            <span>ULTRASONIC WELD AUDIT</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================
       SECTION 10: TESTIMONIALS (Spec-Sheet Carousel)
       ============================================================ -->
  <section class="section section--white" aria-labelledby="testimonials-heading">
    <div class="container">
      <div class="section-head reveal">
        <h2 id="testimonials-heading">What Our Clients Say</h2>
        <p>Direct feedback from plant managers, technical directors, and chief engineers.</p>
      </div>

      <div class="testimonial-grid">
        <div class="testimonial-card reveal">
          <p class="testimonial-card__quote">
            “Excellent Dry-Tech delivered our 1,500 kg/hr spray drying facility ahead of our commissioning milestone. The uniform bulk density and yield matched laboratory specs on the first trial run.”
          </p>
          <div class="testimonial-card__author">
            <div class="testimonial-card__name">D. R. Patil</div>
            <div class="testimonial-card__role">General Manager (Operations), Pune Dairy &amp; Food Ingredients</div>
          </div>
        </div>

        <div class="testimonial-card reveal stagger-1">
          <p class="testimonial-card__quote">
            “Their forced circulation evaporator handles our corrosive, scaling effluent without fouling. What stands out is Mr. Maurya’s hands-on involvement — his engineering team doesn’t disappear after handover.”
          </p>
          <div class="testimonial-card__author">
            <div class="testimonial-card__name">Rajeshwar Rao</div>
            <div class="testimonial-card__role">VP Technical, Gujarat Speciality Chemicals Ltd</div>
          </div>
        </div>

        <div class="testimonial-card reveal stagger-2">
          <p class="testimonial-card__quote">
            “The 60 KLPD fuel ethanol distillation columns achieved 99.8% purity continuously from day one. Excellent Dry-Tech provided rigorous operator training that made plant takeover seamless.”
          </p>
          <div class="testimonial-card__author">
            <div class="testimonial-card__name">K. Somaiya</div>
            <div class="testimonial-card__role">Plant Director, Bio-Refineries &amp; Distilleries, Maharashtra</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================
       SECTION 11: FREQUENTLY ASKED QUESTIONS (Accordion)
       ============================================================ -->
  <section class="section" aria-labelledby="faq-heading">
    <div class="container">
      <div class="section-head section-head--center reveal">
        <h2 id="faq-heading">Frequently Asked Questions</h2>
        <p>Clear facts on custom sizing, turnkey scope, fabrication timelines, and warranty support.</p>
      </div>

      <div class="faq-accordion reveal">
        <div class="faq-item">
          <button class="faq-header" type="button" aria-expanded="false">
            <span class="faq-question">What industries do you supply equipment to?</span>
            <span class="faq-icon">+</span>
          </button>
          <div class="faq-body">
            We design and fabricate process equipment for food &amp; food processing, pharmaceuticals &amp; nutraceuticals, dairy, specialty chemicals, distilleries &amp; bio-fuel (ethanol), and agro-processing sectors across India and overseas.
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-header" type="button" aria-expanded="false">
            <span class="faq-question">Do you offer turnkey projects or only standalone equipment?</span>
            <span class="faq-icon">+</span>
          </button>
          <div class="faq-body">
            Both. We can engineer and deliver a single standalone spray dryer or evaporator column, or execute a comprehensive turnkey package including process calculation, piping, structural mezzanines, instrumentation panels, installation, trial validation, and operator training.
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-header" type="button" aria-expanded="false">
            <span class="faq-question">Can you customise equipment capacity to our exact process requirement?</span>
            <span class="faq-icon">+</span>
          </button>
          <div class="faq-body">
            Yes. Every single system leaving our Moi works is custom-sized around your feed rheology, moisture profile, temperature sensitivity, steam availability, and target throughput. We never force a standard catalogue unit into a process that demands custom engineering.
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-header" type="button" aria-expanded="false">
            <span class="faq-question">Do you provide ongoing after-sales maintenance and spares support?</span>
            <span class="faq-icon">+</span>
          </button>
          <div class="faq-body">
            Yes. We offer structured Annual Maintenance Contracts (AMC), emergency breakdown response, efficiency performance audits, and direct supply of genuine OEM spare parts including rotary atomiser discs, pumps, mechanical seals, and filter elements.
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-header" type="button" aria-expanded="false">
            <span class="faq-question">Where are your manufacturing works located, and can we visit?</span>
            <span class="faq-icon">+</span>
          </button>
          <div class="faq-body">
            Our registered engineering works and corporate office are located at Gat No. 607, Nighoje–Moi Road, At. Moi, Post. Kurli, Tal. Khed, Dist. Pune – 410501, Maharashtra. Client technical inspections and facility visits are warmly welcomed by prior appointment.
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================
       SECTION 12: NEWS & INSIGHTS PREVIEW
       ============================================================ -->
  <section class="section section--white" aria-labelledby="insights-heading">
    <div class="container">
      <div class="section-head reveal">
        <h2 id="insights-heading">Engineering Notes &amp; Industry Insights</h2>
        <p>Practical guides and project updates from our process engineering team in Pune.</p>
      </div>

      <div class="insights-grid">
        <article class="insight-card reveal">
          <div class="insight-card__img duotone-photo">
            <img src="{{ asset('images/insight-dryer.jpg') }}" alt="Industrial Spray Dryer Selection Guide" />
          </div>
          <div class="insight-card__body">
            <h3 class="insight-card__title">How to Choose the Right Dryer for Your Product Feed</h3>
            <p class="insight-card__excerpt">
              A technical comparison of Spray, Fluid Bed, and Flash drying systems based on feed viscosity, residence time, and thermal sensitivity.
            </p>
            <div class="insight-card__meta">
              <span>By Process Engineering Desk</span>
              <span>5 MIN READ</span>
            </div>
          </div>
        </article>

        <article class="insight-card reveal stagger-1">
          <div class="insight-card__img duotone-photo">
            <img src="{{ asset('images/insight-evaporator.jpg') }}" alt="Falling Film vs Forced Circulation Evaporator" />
          </div>
          <div class="insight-card__body">
            <h3 class="insight-card__title">Falling Film vs. Forced Circulation: Thermal Economy &amp; Scaling</h3>
            <p class="insight-card__excerpt">
              Selecting evaporator configurations and TVR recompression to cut steam consumption while eliminating tube scaling in high-TDS effluents.
            </p>
            <div class="insight-card__meta">
              <span>Thermal Design Group</span>
              <span>7 MIN READ</span>
            </div>
          </div>
        </article>

        <article class="insight-card reveal stagger-2">
          <div class="insight-card__img duotone-photo">
            <img src="{{ asset('images/insight-commissioning.jpg') }}" alt="Turnkey Plant Commissioning Handover" />
          </div>
          <div class="insight-card__body">
            <h3 class="insight-card__title">Commissioning a 60 KLPD Fuel Ethanol Facility in Maharashtra</h3>
            <p class="insight-card__excerpt">
              Field notes on continuous multi-column rectification, steam integration, and automated safety interlocks during zero-defect handover.
            </p>
            <div class="insight-card__meta">
              <span>Project Execution Team</span>
              <span>4 MIN READ</span>
            </div>
          </div>
        </article>
      </div>

      <div style="text-align: center;" class="reveal">
        <a href="{{ route('about') }}" class="btn btn--ghost">Learn More About Our Team <span class="btn-arrow">→</span></a>
      </div>
    </div>
  </section>

  <!-- ============================================================
       SECTION 13: CLOSING CTA BAND (Full-Bleed Primary Blue)
       ============================================================ -->
  <section class="cta-band blueprint-bg--dark" aria-labelledby="cta-heading">
    <div class="container">
      <div class="cta-band__inner reveal">
        <h2 id="cta-heading" class="cta-band__headline">Have a Drying, Evaporation or Bio-Tech Requirement?</h2>
        <p class="cta-band__sub">
          Tell us your feed material, moisture profile, capacity and target output specification — our engineering team in Pune will revert with a technical recommendation and budgetary quote within one business day.
        </p>
        <div class="cta-band__actions">
          <a href="{{ route('contact') }}" class="btn btn--primary btn--magnetic">Get a Quote</a>
          <a href="tel:+919922754848" class="btn btn--ghost-white">Talk to Our Engineer: +91 99227 54848</a>
        </div>
      </div>
    </div>
  </section>

@endsection
