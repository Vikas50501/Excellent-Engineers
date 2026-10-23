@extends('layouts.app')

@section('title', 'Maintenance & After-Sales Support | Excellent Dry-Tech')
@section('meta_description', 'Preventive maintenance, breakdown support, genuine OEM spares, and performance audits for dryers, evaporators and bio-tech plants. AMC plans available across India.')
@section('meta_keywords', 'dryer maintenance services, evaporator AMC, industrial equipment maintenance Pune, spray dryer spares, distillation plant service')

@section('content')

  <!-- PAGE HERO -->
  <header class="page-hero blueprint-bg--dark">
    <div class="container">
      <h1 class="page-hero__title">Your Plant’s Performance Doesn’t End at Commissioning</h1>
      <p class="page-hero__sub">
        Excellent Dry-Tech provides structured maintenance, spares and technical support so your dryer, evaporator or bio-tech plant keeps running at the design efficiency it was built for.
      </p>
    </div>
  </header>

  <!-- SECTION: WHY MAINTENANCE MATTERS -->
  <section class="section section--white" aria-labelledby="why-maint-heading">
    <div class="container">
      <div class="snapshot-grid">
        <div class="reveal">
          <h2 id="why-maint-heading">Why Scheduled Maintenance Protects Your Investment</h2>
          <p class="snapshot__lead">
            Drying, evaporation and fermentation systems run continuous long hours under elevated temperatures, high vacuum, cyclical mechanical vibration, and aggressive chemical feed stocks.
          </p>
          <p>
            Scheduled maintenance protects your final product purity, prevents unplanned production shutdowns, maintains optimal steam and electrical economy, and significantly extends the operational working life of your capital equipment.
          </p>
        </div>
        <div class="reveal stagger-1">
          <div class="spec-box">
            <ul class="bullet-list">
              <li class="bullet-item"><span class="bullet-item__icon"></span><span><strong>99.2% Plant Uptime:</strong> Regular calibration of atomizers, seals and circulation pumps.</span></li>
              <li class="bullet-item"><span class="bullet-item__icon"></span><span><strong>Thermal Efficiency:</strong> Descaling and tube matrix inspection conserving boiler steam.</span></li>
              <li class="bullet-item"><span class="bullet-item__icon"></span><span><strong>Regulatory Compliance:</strong> Clean-In-Place (CIP) audit validating zero cross-contamination.</span></li>
            </ul>
          </div>
          <div class="duotone-photo crop-marks" style="height: 280px; margin-top: 1.5rem;">
            <img src="{{ asset('images/quality-inspection.jpg') }}" alt="Senior Inspection Engineer Auditing Industrial Pressure Vessel" />
          </div>
          <div class="snapshot__caption">
            <span>ON-SITE PLANT AUDIT</span>
            <span>ULTRASONIC NDT &amp; CALIBRATION</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION: OUR MAINTENANCE SERVICES -->
  <section class="section" aria-labelledby="services-heading">
    <div class="container">
      <div class="section-head reveal">
        <h2 id="services-heading">Maintenance &amp; After-Sales Services</h2>
        <p>Comprehensive technical support delivered on-site by experienced process engineers.</p>
      </div>

      <div class="checklist-grid">
        <div class="checklist-box reveal">
          <span class="checklist-icon"></span>
          <div>
            <h4>Preventive Maintenance Contracts (AMC)</h4>
            <p class="text-muted">Scheduled periodic inspection, dynamic balancing, mechanical seal renewal, calibration, and cleaning visits.</p>
          </div>
        </div>

        <div class="checklist-box reveal stagger-1">
          <span class="checklist-icon"></span>
          <div>
            <h4>Rapid Breakdown Support</h4>
            <p class="text-muted">Fast-response troubleshooting and on-site emergency repair crews deployed anywhere across India.</p>
          </div>
        </div>

        <div class="checklist-box reveal stagger-2">
          <span class="checklist-icon"></span>
          <div>
            <h4>Genuine OEM Spares Supply</h4>
            <p class="text-muted">High-precision replacement nozzles, rotary discs, scraper assemblies, mechanical seals, and heat transfer tubes.</p>
          </div>
        </div>

        <div class="checklist-box reveal stagger-3">
          <span class="checklist-icon"></span>
          <div>
            <h4>Performance &amp; Energy Audits</h4>
            <p class="text-muted">Efficiency validation against original design mass-energy balances, with a corrective action engineering report.</p>
          </div>
        </div>

        <div class="checklist-box reveal stagger-1">
          <span class="checklist-icon"></span>
          <div>
            <h4>Operator Training &amp; Refresher Sessions</h4>
            <p class="text-muted">In-depth SOP operational training for new plant operators, safety practices, and recipe changeovers.</p>
          </div>
        </div>

        <div class="checklist-box reveal stagger-2">
          <span class="checklist-icon"></span>
          <div>
            <h4>Retrofit &amp; Capacity Upgrade Support</h4>
            <p class="text-muted">Throughput debottlenecking, automation retrofits, PLC logic upgrades, and adding TVR thermal recompression stages.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION: CONTRACT TIERS -->
  <section class="section section--white" aria-labelledby="tiers-heading">
    <div class="container">
      <div class="section-head reveal">
        <h2 id="tiers-heading">Flexible Maintenance Contract Options</h2>
        <p>Choose the level of service and parts coverage tailored to your plant operating intensity.</p>
      </div>

      <div class="reveal table-responsive">
        <table class="contract-tiers-table">
          <thead>
            <tr>
              <th>Service Plan</th>
              <th>Coverage &amp; Inclusions</th>
              <th>Response Time Commitment</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><strong>Annual Maintenance Contract (AMC)</strong></td>
              <td>4 quarterly scheduled preventive visits, full wear-part and bearing inspection, burner/heater tuning, and priority breakdown escalation.</td>
              <td>Priority dispatch within 24–48 hours</td>
            </tr>
            <tr>
              <td><strong>Comprehensive AMC</strong></td>
              <td>All preventive visits, routine wear consumables included, priority emergency site support, and quarterly process performance audit reports.</td>
              <td>Guaranteed dispatch within 24 hours</td>
            </tr>
            <tr>
              <td><strong>Pay-Per-Visit On-Call</strong></td>
              <td>Ad-hoc site inspections, emergency troubleshooting, operator refresher courses, or major overhaul assistance billed per day/visit.</td>
              <td>Subject to technician scheduling</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- SECTION: 5-STEP SUPPORT PROCESS -->
  <section class="section" aria-labelledby="support-proc-heading">
    <div class="container">
      <div class="section-head reveal">
        <h2 id="support-proc-heading">5-Step Service Request Process</h2>
        <p>Transparent escalation from first service ticket to final performance log.</p>
      </div>

      <div class="process-rail-wrap">
        <div class="process-rail-track">
          <div class="process-step-node reveal">
            <div class="process-step-node__badge">01</div>
            <h3 class="process-step-node__title">Log Request</h3>
            <p class="process-step-node__body">Raise ticket via direct hotline (+91 99227 54848), email, or our online portal.</p>
          </div>
          <div class="process-step-node reveal stagger-1">
            <div class="process-step-node__badge">02</div>
            <h3 class="process-step-node__title">Prioritize</h3>
            <p class="process-step-node__body">Our Pune engineering desk assesses severity and assigns a senior process specialist.</p>
          </div>
          <div class="process-step-node reveal stagger-2">
            <div class="process-step-node__badge">03</div>
            <h3 class="process-step-node__title">Diagnose</h3>
            <p class="process-step-node__body">Remote telemetry analysis or immediate mobilization of field service engineers.</p>
          </div>
          <div class="process-step-node reveal stagger-3">
            <div class="process-step-node__badge">04</div>
            <h3 class="process-step-node__title">Execute</h3>
            <p class="process-step-node__body">On-site repair, genuine component replacement, alignment, and test run validation.</p>
          </div>
          <div class="process-step-node reveal stagger-4">
            <div class="process-step-node__badge">05</div>
            <h3 class="process-step-node__title">Document</h3>
            <p class="process-step-node__body">Detailed service report shared with operational recommendations and vibration logs.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION: SPARES WE SUPPLY -->
  <section class="section section--white" aria-labelledby="spares-heading">
    <div class="container">
      <div class="section-head reveal">
        <h2 id="spares-heading">Genuine Spares We Supply</h2>
        <p>Factory-machined components manufactured to the exact original drawing tolerances.</p>
      </div>

      <div class="product-preview-grid">
        <div class="spec-sheet-card reveal">
          <div class="spec-sheet-card__media">
            <img src="{{ asset('images/spares-atomizer.jpg') }}" alt="Precision Rotary Atomizer Wheels and Swirl Nozzles" class="spec-sheet-card__img" loading="lazy" />
            <div class="spec-sheet-card__badge">OEM // ATOMIZERS</div>
          </div>
          <h3 class="spec-sheet-card__title">Atomizers &amp; Nozzles</h3>
          <p class="spec-sheet-card__desc">Rotary atomizer wheels, tungsten carbide nozzle inserts, swirl chambers, and balanced high-speed spindle assemblies for Spray Dryers.</p>
        </div>

        <div class="spec-sheet-card reveal stagger-1">
          <div class="spec-sheet-card__media">
            <img src="{{ asset('images/scraped-surface-evaporator.jpg') }}" alt="Scraper Blades and Dynamic Rotor Assembly" class="spec-sheet-card__img" loading="lazy" />
            <div class="spec-sheet-card__badge">OEM // ROTORS</div>
          </div>
          <h3 class="spec-sheet-card__title">Scraper Blades &amp; Rotors</h3>
          <p class="spec-sheet-card__desc">PTFE, PEEK, and stainless scraper blade inserts, springs, and precision dynamic-balanced drive shafts for Scraped Surface Evaporators.</p>
        </div>

        <div class="spec-sheet-card reveal stagger-2">
          <div class="spec-sheet-card__media">
            <img src="{{ asset('images/spares-pumps-seals.jpg') }}" alt="Mechanical Seals and Axial Circulation Pumps" class="spec-sheet-card__img" loading="lazy" />
            <div class="spec-sheet-card__badge">OEM // SEALS &amp; PUMPS</div>
          </div>
          <h3 class="spec-sheet-card__title">Circulation Pumps &amp; Seals</h3>
          <p class="spec-sheet-card__desc">Axial flow impellers, high-temperature silicon carbide mechanical seals, and shaft sleeves for Forced Circulation Evaporators.</p>
        </div>

        <div class="spec-sheet-card reveal">
          <div class="spec-sheet-card__media">
            <img src="{{ asset('images/insight-evaporator.jpg') }}" alt="SS 304/316 Seamless Heat Transfer Tubes and Gaskets" class="spec-sheet-card__img" loading="lazy" />
            <div class="spec-sheet-card__badge">OEM // TUBES</div>
          </div>
          <h3 class="spec-sheet-card__title">Tubes &amp; Sanitary Gaskets</h3>
          <p class="spec-sheet-card__desc">SS 304/316 seamless heat transfer tubes, EPDM/Viton/PTFE food-grade sanitary gaskets, and expanded tube ferrules.</p>
        </div>

        <div class="spec-sheet-card reveal stagger-1">
          <div class="spec-sheet-card__media">
            <img src="{{ asset('images/insight-dryer.jpg') }}" alt="PTFE Membrane Filter Bags and Solenoid Valves" class="spec-sheet-card__img" loading="lazy" />
            <div class="spec-sheet-card__badge">OEM // FILTRATION</div>
          </div>
          <h3 class="spec-sheet-card__title">Filtration &amp; Cyclones</h3>
          <p class="spec-sheet-card__desc">Anti-static PTFE membrane filter bags, cage retainers, pulse-jet solenoid valves, and wear-resistant cyclone cone liners.</p>
        </div>

        <div class="spec-sheet-card reveal stagger-2">
          <div class="spec-sheet-card__media">
            <img src="{{ asset('images/quality-inspection.jpg') }}" alt="Calibrated Sensors and Industrial Transmitters" class="spec-sheet-card__img" loading="lazy" />
            <div class="spec-sheet-card__badge">OEM // SENSORS</div>
          </div>
          <h3 class="spec-sheet-card__title">Sensors &amp; Instrumentation</h3>
          <p class="spec-sheet-card__desc">RTD PT-100 temperature sensors, differential pressure transmitters, flame sensors, and safety interlock relays.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CLOSING CTA -->
  <section class="cta-band blueprint-bg--dark" aria-labelledby="cta-heading-maint">
    <div class="container">
      <div class="cta-band__inner reveal">
        <h2 id="cta-heading-maint" class="cta-band__headline">Schedule a Preventive Maintenance Visit</h2>
        <p class="cta-band__sub">
          Keep your equipment operating at peak thermal and mechanical efficiency. Reach out today to plan an annual service contract or report an urgent plant requirement.
        </p>
        <div class="cta-band__actions">
          <a href="{{ route('contact') }}" class="btn btn--primary btn--magnetic">Request Maintenance Support</a>
          <a href="tel:+919922754848" class="btn btn--ghost-white">Emergency Hotline: +91 99227 54848</a>
        </div>
      </div>
    </div>
  </section>

@endsection
