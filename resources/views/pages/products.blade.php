@extends('layouts.app')

@section('title', 'Dryers, Evaporators & Bio-Tech Plants | Product Range | Excellent Dry-Tech')
@section('meta_description', 'Explore our full industrial process equipment range: Spray, Fluid Bed, Flash & Rotary Dryers; Falling Film, Scraped Surface & Forced Circulation Evaporators; Turnkey Fuel Ethanol Plants.')
@section('meta_keywords', 'spray dryer, fluid bed dryer, flash dryer, rotary dryer manufacturer, falling film evaporator, scraped surface evaporator, forced circulation evaporator, fermentation plant manufacturer')

@section('content')

  <!-- PAGE HERO -->
  <header class="page-hero blueprint-bg--dark">
    <div class="container">
      <h1 class="page-hero__title">Our Process Equipment Range</h1>
      <p class="page-hero__sub">
        Excellent Dry-Tech designs and manufactures process equipment across three core categories — Dryers, Evaporators and Bio-Technology Plants — engineered individually or supplied as part of a complete turnkey system.
      </p>
    </div>
  </header>

  <!-- PRODUCT TABS & DETAIL SECTION -->
  <section class="section" aria-label="Equipment Catalogue">
    <div class="container">

      <!-- Drawing Index Tabs -->
      <div class="product-tabs-bar" role="tablist">
        <button class="product-tab-btn active" role="tab" aria-selected="true" data-tab="dryers">Dryers (4 Systems)</button>
        <button class="product-tab-btn" role="tab" aria-selected="false" data-tab="evaporators">Evaporators (3 Systems)</button>
        <button class="product-tab-btn" role="tab" aria-selected="false" data-tab="biotech">Bio-Technology Plants</button>
      </div>

      <!-- TAB 1: DRYERS -->
      <div id="tab-dryers" class="product-tab-panel active" role="tabpanel">
        
        <!-- Spray Dryers -->
        <article class="product-deep-card reveal">
          <div class="product-deep-header">
            <div>
              <h2>Spray Dryers</h2>
              <p>
                Converts liquid feed — solutions, emulsions or slurries — into a fine, free-flowing powder in a single continuous pass. Feed is atomised into a heated air chamber where moisture evaporates almost instantly, preserving product quality while giving you consistent particle size and bulk density batch after batch.
              </p>
            </div>
            <div class="product-deep-diagram">
              <svg width="220" height="150" viewBox="0 0 220 150" fill="none" stroke="#0E5794" stroke-width="1.5">
                <path d="M40,25 L120,25 L120,80 L80,125 L80,140 L70,140 L40,80 Z" fill="rgba(14,87,148,0.06)"/>
                <circle cx="80" cy="25" r="7" stroke="#EF7F1A" stroke-width="2"/>
                <path d="M120,45 L155,45 L155,75 L140,110 L140,135 L130,135 L120,75 Z" fill="rgba(47,117,182,0.06)"/>
                <line x1="80" y1="140" x2="80" y2="148" stroke="#3CA742" stroke-width="2"/>
                <text x="35" y="16" fill="#7688A1" font-family="monospace" font-size="9">[ CHAMBER ]</text>
                <text x="145" y="38" fill="#7688A1" font-family="monospace" font-size="9">[ CYCLONE ]</text>
              </svg>
            </div>
          </div>

          <div class="two-col-bullets">
            <div>
              <h4>Key Applications</h4>
              <ul class="bullet-list" style="margin-top: 0.5rem;">
                <li class="bullet-item"><span class="bullet-item__icon"></span><span>Dairy powders (whole milk, skimmed milk, whey, caseinates).</span></li>
                <li class="bullet-item"><span class="bullet-item__icon"></span><span>Food ingredients, plant extracts, coffee, malt, and flavorings.</span></li>
                <li class="bullet-item"><span class="bullet-item__icon"></span><span>Pharma intermediates, herbal powders, vitamins, and bulk APIs.</span></li>
                <li class="bullet-item"><span class="bullet-item__icon"></span><span>Chemical dyes, pigments, ceramics, detergents, and industrial catalysts.</span></li>
              </ul>
            </div>
            <div>
              <h4>Engineering Benefits</h4>
              <ul class="bullet-list" style="margin-top: 0.5rem;">
                <li class="bullet-item"><span class="bullet-item__icon"></span><span>Uniform particle size distribution and controlled bulk density.</span></li>
                <li class="bullet-item"><span class="bullet-item__icon"></span><span>Rapid continuous flash drying protecting heat-sensitive molecules.</span></li>
                <li class="bullet-item"><span class="bullet-item__icon"></span><span>High product recovery rates up to 99.5% with high-efficiency cyclones.</span></li>
                <li class="bullet-item"><span class="bullet-item__icon"></span><span>Available with rotary disc, pressure nozzle, or two-fluid nozzle atomizers.</span></li>
              </ul>
            </div>
          </div>

          <div class="table-responsive">
            <table class="product-spec-table">
            <thead>
              <tr><th>Technical Parameter</th><th>Typical Engineering Range</th></tr>
            </thead>
            <tbody>
              <tr><td>Inlet Air Temperature</td><td>140 °C – 250 °C (process and material-dependent)</td></tr>
              <tr><td>Outlet Air Temperature</td><td>70 °C – 110 °C</td></tr>
              <tr><td>Atomisation Options</td><td>High-speed rotary disc (up to 24,000 RPM) / Pressure nozzle / Two-fluid nozzle</td></tr>
              <tr><td>Evaporation Capacity</td><td>Custom sized from pilot 5 kg/hr to commercial 5,000+ kg/hr</td></tr>
              <tr><td>Construction Metallurgy</td><td>SS 304, SS 316, SS 316L mirror polished product contact surfaces</td></tr>
            </tbody>
          </table>
          </div>

          <p style="font-size: 0.875rem; color: var(--steel);">
            <strong>How It’s Built:</strong> Features integrated cyclone or pulse-jet bag filter powder recovery, indirect hot-air generator (steam, thermic fluid, or direct-fired gas), and instrumented PLC control console with automated inlet/outlet temperature interlocking.
          </p>
        </article>

        <!-- Fluid Bed Dryers -->
        <article class="product-deep-card reveal">
          <div class="product-deep-header">
            <div>
              <h2>Fluid Bed Dryers</h2>
              <p>
                Suspends wet granules or powder on an upward cushion of conditioned hot air for gentle, uniform drying with minimal attrition. Ideal where consistent moisture content across every batch is critical.
              </p>
            </div>
            <div class="product-deep-diagram">
              <svg width="220" height="150" viewBox="0 0 220 150" fill="none" stroke="#0E5794" stroke-width="1.5">
                <rect x="50" y="30" width="100" height="75" rx="3" fill="rgba(14,87,148,0.06)"/>
                <line x1="50" y1="85" x2="150" y2="85" stroke-dasharray="3 3"/>
                <path d="M65,100 Q100,60 135,100" stroke="#EF7F1A" stroke-width="2"/>
                <path d="M70,115 L70,85 M100,115 L100,85 M130,115 L130,85" stroke="#3CA742"/>
                <text x="55" y="24" fill="#7688A1" font-family="monospace" font-size="9">[ EXPANSION CHAMBER ]</text>
              </svg>
            </div>
          </div>

          <div class="table-responsive">
            <table class="product-spec-table">
            <thead>
              <tr><th>Technical Parameter</th><th>Typical Engineering Range</th></tr>
            </thead>
            <tbody>
              <tr><td>Operation Mode</td><td>Batch or continuous multi-chamber plug flow</td></tr>
              <tr><td>Bed Construction</td><td>Static bed, vibrating fluid bed, or CIP agitated bed</td></tr>
              <tr><td>Air Handling System</td><td>HEPA filtration, dehumidification, and precision face &amp; bypass dampers</td></tr>
              <tr><td>Material of Construction</td><td>SS 304, SS 316, SS 316L with 0.3 Ra sanitary weld finishes</td></tr>
            </tbody>
          </table>
        </article>

        <!-- Flash Dryer -->
        <article class="product-deep-card reveal">
          <div class="product-deep-header">
            <div>
              <h2>Flash Dryers</h2>
              <p>
                A high-velocity pneumatic drying system suited to free-flowing or pasty filter cakes requiring rapid moisture removal in seconds. Compact installation footprint with continuous throughput.
              </p>
            </div>
            <div class="product-deep-diagram">
              <svg width="220" height="150" viewBox="0 0 220 150" fill="none" stroke="#0E5794" stroke-width="1.5">
                <path d="M50,135 L50,30 L110,30 L110,135" stroke-width="2"/>
                <path d="M110,50 L155,50 L155,90 L140,120 L140,140 L125,140" fill="rgba(47,117,182,0.06)"/>
                <circle cx="50" cy="115" r="8" fill="#EF7F1A"/>
                <text x="15" y="118" fill="#7688A1" font-family="monospace" font-size="9">[ FEED ]</text>
              </svg>
            </div>
          </div>

          <div class="table-responsive">
            <table class="product-spec-table">
            <thead>
              <tr><th>Technical Parameter</th><th>Typical Engineering Range</th></tr>
            </thead>
            <tbody>
              <tr><td>Residence Contact Time</td><td>2 to 10 seconds (ultra-rapid moisture flash)</td></tr>
              <tr><td>Feed Condition</td><td>Centrifuge wet cakes, filter-press pastes, powders, starches</td></tr>
              <tr><td>De-agglomeration</td><td>Integrated cage mill or high-shear pin mill disintegrator</td></tr>
            </tbody>
          </table>
        </article>

        <!-- Rotary Dryers -->
        <article class="product-deep-card reveal">
          <div class="product-deep-header">
            <div>
              <h2>Rotary Dryers</h2>
              <p>
                A rugged rotating-drum cylinder for high-capacity bulk materials, granules and minerals where continuous volume handling and mechanical durability are paramount.
              </p>
            </div>
            <div class="product-deep-diagram">
              <svg width="220" height="150" viewBox="0 0 220 150" fill="none" stroke="#0E5794" stroke-width="1.5">
                <rect x="35" y="45" width="135" height="50" rx="3" transform="rotate(-6 100 70)" fill="rgba(14,87,148,0.06)"/>
                <circle cx="65" cy="85" r="8" stroke="#EF7F1A"/>
                <circle cx="140" cy="76" r="8" stroke="#EF7F1A"/>
                <text x="45" y="32" fill="#7688A1" font-family="monospace" font-size="9">[ ROTATING DRUM ]</text>
              </svg>
            </div>
          </div>

          <div class="table-responsive">
            <table class="product-spec-table">
            <thead>
              <tr><th>Technical Parameter</th><th>Typical Engineering Range</th></tr>
            </thead>
            <tbody>
              <tr><td>Flow Configuration</td><td>Co-current or counter-current airflow geometry</td></tr>
              <tr><td>Heat Sources</td><td>Direct-fired burner, steam radiator tube matrix, or thermic fluid</td></tr>
              <tr><td>Shell Metallurgy</td><td>Wear-resistant alloy steel, boiler quality plates, or SS 304 cladding</td></tr>
            </tbody>
          </table>
        </article>
      </div>

      <!-- TAB 2: EVAPORATORS -->
      <div id="tab-evaporators" class="product-tab-panel" role="tabpanel">

        <!-- Falling Film Evaporator -->
        <article class="product-deep-card reveal">
          <div class="product-deep-header">
            <div>
              <h2>Falling Film Evaporators</h2>
              <p>
                Liquid flows as a thin turbulent film down heated vertical tube walls under gravity, providing fast, gentle heat transfer and short contact residence time. Sized in single or multi-effect trains with Thermal Vapor Recompression (TVR).
              </p>
            </div>
            <div class="product-deep-diagram">
              <svg width="220" height="150" viewBox="0 0 220 150" fill="none" stroke="#0E5794" stroke-width="1.5">
                <rect x="40" y="20" width="35" height="95" rx="2" fill="rgba(14,87,148,0.06)"/>
                <line x1="57" y1="20" x2="57" y2="115" stroke-dasharray="2 2"/>
                <circle cx="120" cy="55" r="30" stroke="#3CA742" fill="rgba(60,167,66,0.06)"/>
                <path d="M75,35 L90,35 M120,85 L120,135" stroke="#EF7F1A"/>
                <text x="35" y="14" fill="#7688A1" font-family="monospace" font-size="9">[ CALANDRIA ]</text>
                <text x="100" y="20" fill="#7688A1" font-family="monospace" font-size="9">[ VAPOR SEPARATOR ]</text>
              </svg>
            </div>
          </div>

          <div class="table-responsive">
            <table class="product-spec-table">
            <thead>
              <tr><th>Technical Parameter</th><th>Typical Engineering Range</th></tr>
            </thead>
            <tbody>
              <tr><td>Effect Configuration</td><td>2 to 5+ effects with Thermal Vapor Recompression (TVR) for 0.15–0.25 steam economy</td></tr>
              <tr><td>Residence Exposure</td><td>Single-pass thin-film gravity flow under full vacuum</td></tr>
              <tr><td>Applications</td><td>Dairy whey, milk concentration, fruit juice, pharmaceutical extracts, chemical liquors</td></tr>
            </tbody>
          </table>
        </article>

        <!-- Scraped Surface Evaporator -->
        <article class="product-deep-card reveal">
          <div class="product-deep-header">
            <div>
              <h2>Scraped Surface Evaporators</h2>
              <p>
                Spring-loaded or centrifugal mechanical scraper blades continuously wipe the heated cylindrical wall, preventing thermal scorching and scaling when concentrating high-viscosity or crystallizing liquors.
              </p>
            </div>
            <div class="product-deep-diagram">
              <svg width="220" height="150" viewBox="0 0 220 150" fill="none" stroke="#0E5794" stroke-width="1.5">
                <rect x="50" y="25" width="60" height="95" rx="3" fill="rgba(14,87,148,0.06)"/>
                <line x1="80" y1="15" x2="80" y2="130" stroke="#EF7F1A" stroke-width="2"/>
                <line x1="60" y1="45" x2="100" y2="45" stroke="#3CA742"/>
                <line x1="60" y1="75" x2="100" y2="75" stroke="#3CA742"/>
                <line x1="60" y1="105" x2="100" y2="105" stroke="#3CA742"/>
                <text x="40" y="18" fill="#7688A1" font-family="monospace" font-size="9">[ ROTOR ASSEMBLY ]</text>
              </svg>
            </div>
          </div>

          <div class="table-responsive">
            <table class="product-spec-table">
            <thead>
              <tr><th>Technical Parameter</th><th>Typical Engineering Range</th></tr>
            </thead>
            <tbody>
              <tr><td>Viscosity Range</td><td>Handles up to 50,000+ cP viscous concentrates and pasty slurries</td></tr>
              <tr><td>Scraper Assembly</td><td>PTFE / PEEK / hardened stainless steel hinged wiper blades</td></tr>
              <tr><td>Duty</td><td>Viscous food pastes, caramel, gelatin, resin concentrates, crystallization</td></tr>
            </tbody>
          </table>
        </article>

        <!-- Forced Circulation Evaporator -->
        <article class="product-deep-card reveal">
          <div class="product-deep-header">
            <div>
              <h2>Forced Circulation Evaporators</h2>
              <p>
                High-capacity axial circulation pumps drive liquor through heat exchanger tubes at high velocities (2–3 m/s), suppressing boiling inside tubes to completely prevent fouling in Zero Liquid Discharge (ZLD) plants.
              </p>
            </div>
            <div class="product-deep-diagram">
              <svg width="220" height="150" viewBox="0 0 220 150" fill="none" stroke="#0E5794" stroke-width="1.5">
                <rect x="35" y="30" width="35" height="75" rx="2" fill="rgba(14,87,148,0.06)"/>
                <circle cx="115" cy="55" r="28" stroke="#0E5794"/>
                <path d="M115,83 L115,125 L45,125 L45,105" stroke="#EF7F1A" stroke-width="2"/>
                <circle cx="80" cy="125" r="9" stroke="#3CA742" fill="#fff"/>
                <text x="68" y="142" fill="#7688A1" font-family="monospace" font-size="8">[ AXIAL PUMP ]</text>
              </svg>
            </div>
          </div>

          <div class="table-responsive">
            <table class="product-spec-table">
            <thead>
              <tr><th>Technical Parameter</th><th>Typical Engineering Range</th></tr>
            </thead>
            <tbody>
              <tr><td>Recirculation Rate</td><td>High velocity 1.8 to 3.0 m/s preventing crystallization inside tubes</td></tr>
              <tr><td>Solids Handling</td><td>Concentrates slurries up to 45% suspended solids without choking</td></tr>
              <tr><td>Applications</td><td>Effluent ZLD systems, sodium chloride crystallization, multi-salt recovery</td></tr>
            </tbody>
          </table>
        </article>
      </div>

      <!-- TAB 3: BIO-TECHNOLOGY -->
      <div id="tab-biotech" class="product-tab-panel" role="tabpanel">

        <!-- Fermentation & Distillation -->
        <article class="product-deep-card reveal">
          <div class="product-deep-header">
            <div>
              <h2>Fermentation &amp; Distillation Systems</h2>
              <p>
                Complete fermentation trains engineered for tight temperature and microbial control, coupled with continuous multi-column distillation towers designed for consistent high-yield alcohol extraction.
              </p>
            </div>
            <div class="product-deep-diagram">
              <svg width="220" height="150" viewBox="0 0 220 150" fill="none" stroke="#0E5794" stroke-width="1.5">
                <rect x="30" y="35" width="45" height="70" rx="6" fill="rgba(60,167,66,0.06)"/>
                <rect x="100" y="20" width="24" height="95" rx="2" fill="rgba(14,87,148,0.06)"/>
                <rect x="140" y="25" width="22" height="90" rx="2" fill="rgba(14,87,148,0.06)"/>
                <path d="M75,65 L100,65 M124,55 L140,55" stroke="#EF7F1A"/>
                <text x="25" y="24" fill="#7688A1" font-family="monospace" font-size="8">[ FERMENTER ]</text>
                <text x="95" y="14" fill="#7688A1" font-family="monospace" font-size="8">[ WASH / RECTIFIER ]</text>
              </svg>
            </div>
          </div>

          <div class="table-responsive">
            <table class="product-spec-table">
            <thead>
              <tr><th>Technical Parameter</th><th>Typical Engineering Range</th></tr>
            </thead>
            <tbody>
              <tr><td>Feedstock Substrates</td><td>Grain (broken rice, maize, sorghum) or molasses-based distillery wash</td></tr>
              <tr><td>Distillation Configuration</td><td>Multipressure distillation (vacuum wash column, atmospheric rectifier) for low steam</td></tr>
              <tr><td>Capacity Scale</td><td>Modular designs from 10 KLPD pilot units to 150+ KLPD commercial plants</td></tr>
            </tbody>
          </table>
        </article>

        <!-- Fuel Ethanol Plants -->
        <article class="product-deep-card reveal">
          <div class="product-deep-header">
            <div>
              <h2>Fuel Ethanol Plants (Turnkey Delivery)</h2>
              <p>
                End-to-end fuel-grade anhydrous ethanol production complexes — from feedstock slurry milling, continuous fermentation, multi-pressure distillation, through to Molecular Sieve Dehydration Units (MSDU).
              </p>
            </div>
            <div class="product-deep-diagram">
              <svg width="220" height="150" viewBox="0 0 220 150" fill="none" stroke="#0E5794" stroke-width="1.5">
                <rect x="25" y="40" width="35" height="60" rx="4" fill="rgba(14,87,148,0.06)"/>
                <rect x="75" y="25" width="22" height="85" rx="2"/>
                <rect x="115" y="30" width="22" height="80" rx="2"/>
                <rect x="155" y="45" width="35" height="55" rx="2" stroke="#3CA742" fill="rgba(60,167,66,0.06)"/>
                <path d="M60,65 L75,65 M97,60 L115,60 M137,65 L155,65" stroke="#EF7F1A"/>
                <text x="150" y="35" fill="#3CA742" font-family="monospace" font-size="8">[ MSDU DEHYDRATION ]</text>
              </svg>
            </div>
          </div>

          <div class="table-responsive">
            <table class="product-spec-table">
            <thead>
              <tr><th>Technical Parameter</th><th>Typical Engineering Range</th></tr>
            </thead>
            <tbody>
              <tr><td>Product Purity</td><td>99.8% v/v Anhydrous Fuel Ethanol meeting IS 15464 blending specifications</td></tr>
              <tr><td>Dehydration Technology</td><td>Molecular Sieve Dehydration Unit (MSDU) with automated pressure swing regeneration</td></tr>
              <tr><td>Project Delivery</td><td>Complete turnkey: design, equipment fabrication, erection, instrumentation, handover</td></tr>
            </tbody>
          </table>
        </article>
      </div>

    </div>
  </section>

  <!-- CLOSING CTA -->
  <section class="cta-band blueprint-bg--dark" aria-labelledby="cta-heading-products">
    <div class="container">
      <div class="cta-band__inner reveal">
        <h2 id="cta-heading-products" class="cta-band__headline">Not Sure Which System Fits Your Process?</h2>
        <p class="cta-band__sub">
          Share your feed material rheology, temperature sensitivity, moisture curve, and target output capacity — our engineering team in Pune will calculate mass-energy balances and recommend the optimal equipment sizing.
        </p>
        <div class="cta-band__actions">
          <a href="{{ route('contact') }}" class="btn btn--primary btn--magnetic">Request Engineering Sizing</a>
          <a href="{{ route('gallery') }}" class="btn btn--ghost-white">View Installed Plant Gallery →</a>
        </div>
      </div>
    </div>
  </section>

@endsection
