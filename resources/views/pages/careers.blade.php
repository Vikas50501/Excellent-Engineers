@extends('layouts.app')

@section('title', 'Careers at Excellent Dry-Tech | Process Engineering Jobs, Pune')
@section('meta_description', 'Join Excellent Dry-Tech\'s design, fabrication and service teams in Pune. Explore current openings in process & mechanical engineering, site supervision, and more.')
@section('meta_keywords', 'process engineering jobs Pune, mechanical design engineer jobs, fabrication welder jobs, careers Excellent Dry-Tech')

@section('content')

  <!-- PAGE HERO -->
  <header class="page-hero blueprint-bg--dark">
    <div class="container">
      <h1 class="page-hero__title">Build Your Career in Process Engineering</h1>
      <p class="page-hero__sub">
        Excellent Dry-Tech is growing its design, fabrication and service teams in Pune — we’re looking for people who take genuine pride in getting the engineering right.
      </p>
    </div>
  </header>

  <!-- SECTION: WHY WORK WITH US & LIFE AT EDT -->
  <section class="section section--white" aria-labelledby="why-work-heading">
    <div class="container">
      <div class="quality-grid">
        <div class="reveal">
          <h2 id="why-work-heading">Hands-On Engineering, Not Bureaucracy</h2>
          <p class="snapshot__lead">
            We are a small, hands-on engineering team by design — which means every engineer here works close to the actual equipment, not buried in disconnected spreadsheets or narrow repetitive tasks.
          </p>
          <p>
            You’ll see a multi-story plant from the first thermodynamic calculation and P&amp;ID layout through to the day it’s commissioned and running at full capacity on a customer’s floor. Direct mentorship from senior engineering leadership, including Managing Director Mr. Santosh Maurya.
          </p>

          <ul class="bullet-list" style="margin-top: 1.5rem;">
            <li class="bullet-item"><span class="bullet-item__icon"></span><span><strong>Direct visibility:</strong> Hands-on exposure to full-scale fabrication, hydro-testing, and plant trials.</span></li>
            <li class="bullet-item"><span class="bullet-item__icon"></span><span><strong>Multi-sector breadth:</strong> Work across dairy, food processing, pharmaceuticals, chemicals, and bio-fuel plants.</span></li>
            <li class="bullet-item"><span class="bullet-item__icon"></span><span><strong>Flat, merit-based culture:</strong> Fast decisions, visible contribution, and zero corporate politics.</span></li>
            <li class="bullet-item"><span class="bullet-item__icon"></span><span><strong>Pan-India field exposure:</strong> Opportunities to travel for plant erection, trial runs, and customer commissioning.</span></li>
          </ul>
        </div>

        <div class="reveal stagger-1">
          <div class="duotone-photo crop-marks" style="height: 440px;">
            <img src="{{ asset('images/team-engineering.jpg') }}" alt="Excellent Dry-Tech Process Engineers Collaborating on Technical Plant Drawings" />
          </div>
          <div class="snapshot__caption">
            <span>WORKS DESIGN DESK</span>
            <span>ENGINEERING COLLABORATION</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION: CURRENT OPENINGS -->
  <section class="section" aria-labelledby="openings-heading">
    <div class="container">
      <div class="section-head reveal">
        <h2 id="openings-heading">Typical Roles We Hire For</h2>
        <p>Explore current opportunities across design, workshop fabrication, and on-site field execution.</p>
      </div>

      <div class="faq-accordion reveal">
        <div class="faq-item">
          <button class="faq-header" type="button" aria-expanded="false">
            <span class="faq-question">Design Engineer – Mechanical / Process</span>
            <span class="faq-icon">+</span>
          </button>
          <div class="faq-body">
            <p><strong>Location:</strong> Moi, Khed, Pune Works | <strong>Experience:</strong> 2–5 Years</p>
            <p><strong>Key Responsibilities:</strong> Mass and energy balance calculations for spray dryers and evaporators; sizing heat exchangers, cyclones, and fans; preparing mechanical GA drawings and P&amp;IDs in AutoCAD and 3D modeling software.</p>
            <a href="#apply-form" class="btn btn--primary" style="margin-top: 0.75rem; padding: 0.5rem 1.25rem; font-size: 0.8125rem;">Apply for this Role</a>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-header" type="button" aria-expanded="false">
            <span class="faq-question">Site Supervisor / Erection &amp; Commissioning Engineer</span>
            <span class="faq-icon">+</span>
          </button>
          <div class="faq-body">
            <p><strong>Location:</strong> Field / Pan-India Project Sites | <strong>Experience:</strong> 3–6 Years</p>
            <p><strong>Key Responsibilities:</strong> On-site equipment erection supervision, alignment of rotary drums and atomizers, piping interconnection management, conducting water trials, and coordinating performance handover with client teams.</p>
            <a href="#apply-form" class="btn btn--primary" style="margin-top: 0.75rem; padding: 0.5rem 1.25rem; font-size: 0.8125rem;">Apply for this Role</a>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-header" type="button" aria-expanded="false">
            <span class="faq-question">Certified Fabrication Welder / Fitter (TIG / MIG)</span>
            <span class="faq-icon">+</span>
          </button>
          <div class="faq-body">
            <p><strong>Location:</strong> Moi, Khed, Pune Works | <strong>Experience:</strong> 3+ Years</p>
            <p><strong>Key Responsibilities:</strong> High-precision stainless steel (SS 304, SS 316) TIG and MIG welding on pressure vessels, calandrias, and ducting adhering strictly to ASME Section IX standards and radiograph quality.</p>
            <a href="#apply-form" class="btn btn--primary" style="margin-top: 0.75rem; padding: 0.5rem 1.25rem; font-size: 0.8125rem;">Apply for this Role</a>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-header" type="button" aria-expanded="false">
            <span class="faq-question">Service &amp; Maintenance Engineer</span>
            <span class="faq-icon">+</span>
          </button>
          <div class="faq-body">
            <p><strong>Location:</strong> Pune Base with Regional Site Visits | <strong>Experience:</strong> 2–4 Years</p>
            <p><strong>Key Responsibilities:</strong> Executing quarterly Annual Maintenance Contract (AMC) visits, troubleshooting rotary atomizer vibration, pump seals replacement, and conducting thermal performance audits on operating plants.</p>
            <a href="#apply-form" class="btn btn--primary" style="margin-top: 0.75rem; padding: 0.5rem 1.25rem; font-size: 0.8125rem;">Apply for this Role</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION: APPLICATION FORM -->
  <section class="section section--white" id="apply-form" aria-labelledby="apply-heading">
    <div class="container">
      <div style="max-width: 760px; margin: 0 auto;">
        <div class="section-head reveal" style="text-align: center; margin-left: auto; margin-right: auto;">
          <h2 id="apply-heading">Submit Your Application</h2>
          <p>Direct submission to our engineering recruitment desk. We typically review and respond within 2 business days.</p>
        </div>

        @if(session('success'))
          <div style="background: rgba(60, 167, 66, 0.12); border: 1px solid var(--green); padding: 1.25rem; border-radius: 2px; margin-bottom: 1.5rem; color: #1e6922; font-weight: 500;">
            {{ session('success') }}
          </div>
        @endif

        @if($errors->any())
          <div style="background: rgba(239, 127, 26, 0.1); border: 1px solid var(--orange); padding: 1.25rem; border-radius: 2px; margin-bottom: 1.5rem; color: #b85705;">
            <strong>Please check the form inputs:</strong>
            <ul style="margin-top: 0.5rem; padding-left: 1.25rem;">
              @foreach($errors->all() as $err)
                <li>{{ $err }}</li>
              @endforeach
            </ul>
          </div>
        @endif

        <div class="form-box reveal">
          <form action="{{ route('careers.submit') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-grid-2">
              <div class="form-group">
                <label class="form-label" for="full_name">Full Name *</label>
                <input type="text" id="full_name" name="full_name" class="form-input" value="{{ old('full_name') }}" required placeholder="e.g. Rahul Sharma" />
              </div>
              <div class="form-group">
                <label class="form-label" for="phone">Phone Number *</label>
                <input type="tel" id="phone" name="phone" class="form-input" value="{{ old('phone') }}" required placeholder="e.g. +91 98765 43210" />
              </div>
            </div>

            <div class="form-grid-2">
              <div class="form-group">
                <label class="form-label" for="email">Email Address *</label>
                <input type="email" id="email" name="email" class="form-input" value="{{ old('email') }}" required placeholder="name@company.com" />
              </div>
              <div class="form-group">
                <label class="form-label" for="position">Position Applying For *</label>
                <select id="position" name="position" class="form-select" required>
                  <option value="">Select a role…</option>
                  <option value="Design Engineer - Mechanical" {{ old('position') == 'Design Engineer - Mechanical' ? 'selected' : '' }}>Design Engineer – Mechanical</option>
                  <option value="Site Supervisor / Erection" {{ old('position') == 'Site Supervisor / Erection' ? 'selected' : '' }}>Site Supervisor / Erection</option>
                  <option value="Fabrication Welder / Fitter" {{ old('position') == 'Fabrication Welder / Fitter' ? 'selected' : '' }}>Fabrication Welder / Fitter</option>
                  <option value="Service & Maintenance Engineer" {{ old('position') == 'Service & Maintenance Engineer' ? 'selected' : '' }}>Service &amp; Maintenance Engineer</option>
                  <option value="Draughtsman AutoCAD/SolidWorks" {{ old('position') == 'Draughtsman AutoCAD/SolidWorks' ? 'selected' : '' }}>Draughtsman (AutoCAD/SolidWorks)</option>
                  <option value="General Technical Profile" {{ old('position') == 'General Technical Profile' ? 'selected' : '' }}>General / Other Technical Profile</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="form-label" for="experience">Years of Experience</label>
              <input type="text" id="experience" name="experience" class="form-input" value="{{ old('experience') }}" placeholder="e.g. 3.5 Years" />
            </div>

            <div class="form-group">
              <label class="form-label" for="resume">Upload Resume (PDF / DOC, max 5MB) *</label>
              <input type="file" id="resume" name="resume" class="form-input" accept=".pdf,.doc,.docx" required style="padding: 0.5rem;" />
            </div>

            <div class="form-group">
              <label class="form-label" for="cover_note">Brief Overview of Projects Handled</label>
              <textarea id="cover_note" name="cover_note" class="form-textarea" rows="3" placeholder="Summary of experience in pressure vessels, spray drying, or process piping…">{{ old('cover_note') }}</textarea>
            </div>

            <button type="submit" class="btn btn--primary btn--magnetic" style="width: 100%;">Submit Application</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- CLOSING CTA -->
  <section class="cta-band blueprint-bg--dark" aria-labelledby="cta-heading-careers">
    <div class="container">
      <div class="cta-band__inner reveal">
        <h2 id="cta-heading-careers" class="cta-band__headline">Don’t See the Right Role Listed?</h2>
        <p class="cta-band__sub">
          We’re always open to meeting skilled chemical, mechanical, and fabrication professionals. Send your resume directly to our engineering desk at <strong>excellentengineers.sr@gmail.com</strong> with your preferred role in the subject line.
        </p>
        <div class="cta-band__actions">
          <a href="mailto:excellentengineers.sr@gmail.com" class="btn btn--primary btn--magnetic">Email Your Resume</a>
          <a href="{{ route('about') }}" class="btn btn--ghost-white">Read About Our Story →</a>
        </div>
      </div>
    </div>
  </section>

@endsection
