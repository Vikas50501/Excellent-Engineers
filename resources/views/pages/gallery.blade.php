@extends('layouts.app')

@section('title', 'Installed Plants & Projects Gallery | Excellent Dry-Tech')
@section('meta_description', 'View operating industrial plant installations delivered by Excellent Dry-Tech Pvt Ltd across India: Spray Dryers, Evaporators, and Bio-Ethanol distillation complexes.')
@section('meta_keywords', 'installed spray dryer plants, evaporator project gallery, bio ethanol plant installations, industrial fabrication Pune')

@section('content')

  <!-- PAGE HERO -->
  <header class="page-hero blueprint-bg--dark">
    <div class="container">
      <h1 class="page-hero__title">Installed Plants &amp; Turnkey Projects</h1>
      <p class="page-hero__sub">
        Showcasing operational process installations executed across food, dairy, chemical, and bio-fuel sectors in India — engineered, fabricated, and commissioned by Excellent Dry-Tech.
      </p>
    </div>
  </header>

  <!-- GALLERY SECTION -->
  <section class="section" aria-label="Project Installations">
    <div class="container">
      
      <div class="gallery-preview-grid">
        <!-- 1. Spray Dryer -->
        <article class="project-card reveal">
          <div class="project-card__img-wrap duotone-photo">
            <img src="{{ asset('images/spray-dryer-plant.jpg') }}" alt="1,500 kg/hr Spray Drying Plant in Pune" />
          </div>
          <div class="project-card__body">
            <h3 class="project-card__title">1,500 kg/hr Turnkey Spray Drying Facility</h3>
            <p class="project-card__spec"><strong>Client Sector:</strong> Dairy &amp; Food Ingredients | <strong>Location:</strong> Pune, Maharashtra</p>
            <p style="font-size: 0.9rem; color: #3b4859; margin-top: 0.5rem;">
              Complete automated spray drying train with tall SS 316L main drying chamber, high-efficiency twin cyclone separators, pulse-jet bag filter, indirect air heater, and sanitary powder bagging station.
            </p>
          </div>
        </article>

        <!-- 2. Evaporator -->
        <article class="project-card reveal stagger-1">
          <div class="project-card__img-wrap duotone-photo">
            <img src="{{ asset('images/evaporator-plant.jpg') }}" alt="Forced Circulation Evaporator System in Gujarat" />
          </div>
          <div class="project-card__body">
            <h3 class="project-card__title">4-Effect Forced Circulation Evaporation Plant</h3>
            <p class="project-card__spec"><strong>Client Sector:</strong> Specialty Chemical ZLD | <strong>Location:</strong> Dahej, Gujarat</p>
            <p style="font-size: 0.9rem; color: #3b4859; margin-top: 0.5rem;">
              High-solids concentration system with non-scaling axial circulation pumps, vapor separators, vacuum condensers, and automated salt slurry centrifuge discharge handling 25 kL/day high-TDS effluent.
            </p>
          </div>
        </article>

        <!-- 3. Bio-Tech Ethanol -->
        <article class="project-card reveal stagger-2">
          <div class="project-card__img-wrap duotone-photo">
            <img src="{{ asset('images/fermentation-distillery.jpg') }}" alt="Fuel Ethanol Fermentation and Distillation Complex" />
          </div>
          <div class="project-card__body">
            <h3 class="project-card__title">60 KLPD Turnkey Fuel Ethanol Distillation Complex</h3>
            <p class="project-card__spec"><strong>Client Sector:</strong> Distilleries &amp; Bio-Refinery | <strong>Location:</strong> Western Maharashtra</p>
            <p style="font-size: 0.9rem; color: #3b4859; margin-top: 0.5rem;">
              End-to-end continuous grain fermentation, multi-pressure distillation column train, and Molecular Sieve Dehydration Unit (MSDU) consistently achieving 99.8% fuel-grade blending purity.
            </p>
          </div>
        </article>

        <!-- 4. Fluid Bed Dryer -->
        <article class="project-card reveal stagger-3">
          <div class="project-card__img-wrap duotone-photo">
            <img src="{{ asset('images/fluid-bed-dryer.jpg') }}" alt="Pharmaceutical Fluid Bed Dryer Hyderabad" />
          </div>
          <div class="project-card__body">
            <h3 class="project-card__title">Fluid Bed Granulation &amp; Drying System</h3>
            <p class="project-card__spec"><strong>Client Sector:</strong> Pharmaceutical Bulk Actives | <strong>Location:</strong> Hyderabad, Telangana</p>
            <p style="font-size: 0.9rem; color: #3b4859; margin-top: 0.5rem;">
              cGMP certified fluid bed dryer with HEPA air intake, precise moisture control within ±0.2% tolerance, automated pneumatic bag shaking, and CIP clean-in-place sanitary manifold.
            </p>
          </div>
        </article>

        <!-- 5. Heavy Fabrication Works -->
        <article class="project-card reveal">
          <div class="project-card__img-wrap duotone-photo">
            <img src="{{ asset('images/fabrication-workshop.jpg') }}" alt="Heavy Stainless Steel Pressure Vessel Fabrication in Moi Works" />
          </div>
          <div class="project-card__body">
            <h3 class="project-card__title">Heavy Pressure Vessel &amp; Calandria Fabrication</h3>
            <p class="project-card__spec"><strong>Facility:</strong> Moi Works, Khed, Pune | <strong>Standard:</strong> ASME Section IX / IS</p>
            <p style="font-size: 0.9rem; color: #3b4859; margin-top: 0.5rem;">
              Certified welding and precision tube-sheet rolling for high-temperature multi-effect calandrias, flash chambers, and explosion-rated cyclone separation vessels.
            </p>
          </div>
        </article>

        <!-- 6. Quality & Inspection -->
        <article class="project-card reveal stagger-1">
          <div class="project-card__img-wrap duotone-photo">
            <img src="{{ asset('images/quality-inspection.jpg') }}" alt="Ultrasonic Weld Testing of Pressure Vessel" />
          </div>
          <div class="project-card__body">
            <h3 class="project-card__title">Digital Ultrasonic &amp; Hydrostatic Validation</h3>
            <p class="project-card__spec"><strong>Quality Cell:</strong> In-House QA/QC Division | <strong>Testing:</strong> 1.5x Design Pressure</p>
            <p style="font-size: 0.9rem; color: #3b4859; margin-top: 0.5rem;">
              100% NDT inspection protocols: dye-penetrant testing, digital weld thickness gauging, and witnessed hydro-testing logged with material test certificates before shipment dispatch.
            </p>
          </div>
        </article>
      </div>

    </div>
  </section>

  <!-- CLOSING CTA -->
  <section class="cta-band blueprint-bg--dark" aria-labelledby="cta-heading-gallery">
    <div class="container">
      <div class="cta-band__inner reveal">
        <h2 id="cta-heading-gallery" class="cta-band__headline">Planning a Drying, Evaporation or Bio-Tech Plant?</h2>
        <p class="cta-band__sub">
          Whether replacing an inefficient legacy dryer or engineering a complete multi-crore turnkey bio-refinery, our team in Pune brings hands-on execution certainty to your project.
        </p>
        <div class="cta-band__actions">
          <a href="{{ route('contact') }}" class="btn btn--primary btn--magnetic">Request a Budgetary Proposal</a>
          <a href="{{ route('products') }}" class="btn btn--ghost-white">Explore Detailed Product Specs →</a>
        </div>
      </div>
    </div>
  </section>

@endsection
