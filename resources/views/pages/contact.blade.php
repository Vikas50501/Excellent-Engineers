@extends('layouts.app')

@section('title', 'Contact Us | Excellent Dry-Tech Pvt Ltd, Khed, Pune')
@section('meta_description', 'Contact Excellent Dry-Tech for industrial dryer, evaporator and bio-tech plant enquiries. Call +91 99227 54848 or visit our works at Moi, Khed, Pune, Maharashtra.')
@section('meta_keywords', 'contact Excellent Dry-Tech, dryer manufacturer contact Pune, evaporator supplier contact, bio ethanol plant Pune contact')

@section('content')

  <!-- PAGE HERO -->
  <header class="page-hero blueprint-bg--dark">
    <div class="container">
      <h1 class="page-hero__title">Let’s Talk About Your Process Requirement</h1>
      <p class="page-hero__sub">
        Reach our engineering team directly — no call center or third-party agent in between. We typically evaluate process requirements and revert within one business day.
      </p>
    </div>
  </header>

  <!-- SECTION: ENQUIRY FORM & CONTACT DETAILS -->
  <section class="section" aria-labelledby="form-heading">
    <div class="container">
      <div class="contact-split-grid">

        <!-- Left: Engineering Enquiry Form -->
        <div class="form-box reveal">
          <h2 id="form-heading" style="font-size: 1.6rem; margin-bottom: 0.5rem;">Send Technical Enquiry</h2>
          <p class="text-muted" style="margin-bottom: 1.75rem;">Submit your material, capacity, and target moisture. We provide budgetary sizing and P&amp;ID guidance.</p>

          @if(session('success'))
            <div style="background: rgba(60, 167, 66, 0.12); border: 1px solid var(--green); padding: 1.25rem; border-radius: 2px; margin-bottom: 1.5rem; color: #1e6922; font-weight: 500;">
              ✓ {{ session('success') }}
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

          <form action="{{ route('contact.submit') }}" method="POST">
            @csrf
            <div class="form-grid-2">
              <div class="form-group">
                <label class="form-label" for="full_name">Full Name *</label>
                <input type="text" id="full_name" name="full_name" class="form-input" value="{{ old('full_name') }}" required placeholder="e.g. Ramesh Kulkarni" />
              </div>
              <div class="form-group">
                <label class="form-label" for="company_name">Company Name</label>
                <input type="text" id="company_name" name="company_name" class="form-input" value="{{ old('company_name') }}" placeholder="e.g. Agro-Chemicals Ltd" />
              </div>
            </div>

            <div class="form-grid-2">
              <div class="form-group">
                <label class="form-label" for="phone">Phone Number *</label>
                <input type="tel" id="phone" name="phone" class="form-input" value="{{ old('phone') }}" required placeholder="+91 99227 XXXXX" />
              </div>
              <div class="form-group">
                <label class="form-label" for="email">Email Address *</label>
                <input type="email" id="email" name="email" class="form-input" value="{{ old('email') }}" required placeholder="name@company.com" />
              </div>
            </div>

            <div class="form-grid-2">
              <div class="form-group">
                <label class="form-label" for="product_interest">Product of Interest *</label>
                <select id="product_interest" name="product_interest" class="form-select" required>
                  <option value="">Select Equipment…</option>
                  <option value="Spray Dryer" {{ old('product_interest') == 'Spray Dryer' ? 'selected' : '' }}>Spray Dryer</option>
                  <option value="Fluid Bed Dryer" {{ old('product_interest') == 'Fluid Bed Dryer' ? 'selected' : '' }}>Fluid Bed Dryer</option>
                  <option value="Flash Dryer" {{ old('product_interest') == 'Flash Dryer' ? 'selected' : '' }}>Flash Dryer</option>
                  <option value="Rotary Dryer" {{ old('product_interest') == 'Rotary Dryer' ? 'selected' : '' }}>Rotary Dryer</option>
                  <option value="Falling Film Evaporator" {{ old('product_interest') == 'Falling Film Evaporator' ? 'selected' : '' }}>Falling Film Evaporator</option>
                  <option value="Scraped Surface Evaporator" {{ old('product_interest') == 'Scraped Surface Evaporator' ? 'selected' : '' }}>Scraped Surface Evaporator</option>
                  <option value="Forced Circulation Evaporator" {{ old('product_interest') == 'Forced Circulation Evaporator' ? 'selected' : '' }}>Forced Circulation Evaporator</option>
                  <option value="Fermentation & Distillation" {{ old('product_interest') == 'Fermentation & Distillation' ? 'selected' : '' }}>Fermentation &amp; Distillation System</option>
                  <option value="Fuel Ethanol Plant" {{ old('product_interest') == 'Fuel Ethanol Plant' ? 'selected' : '' }}>Fuel Ethanol Plant (Turnkey)</option>
                  <option value="Maintenance Support / AMC" {{ old('product_interest') == 'Maintenance Support / AMC' ? 'selected' : '' }}>Maintenance Support / AMC</option>
                  <option value="Other Custom Process Vessel" {{ old('product_interest') == 'Other Custom Process Vessel' ? 'selected' : '' }}>Other Custom Process Vessel</option>
                </select>
              </div>
              <div class="form-group">
                <label class="form-label" for="capacity">Required Capacity / Output</label>
                <input type="text" id="capacity" name="capacity" class="form-input" value="{{ old('capacity') }}" placeholder="e.g. 1,000 kg/hr evaporation" />
              </div>
            </div>

            <div class="form-group">
              <label class="form-label" for="message">Message / Process Feed Details *</label>
              <textarea id="message" name="message" class="form-textarea" rows="4" required placeholder="Provide feed characteristics (initial solids %, final moisture target, temperature limit, heat source available)…">{{ old('message') }}</textarea>
            </div>

            <button type="submit" class="btn btn--primary btn--magnetic" style="width: 100%;">Send Technical Enquiry</button>
          </form>
        </div>

        <!-- Right: Direct Contact & Location Info -->
        <div class="reveal stagger-1">
          <div class="contact-info-card">
            <h3 style="font-size: 1.35rem; margin-bottom: 0.25rem; color: var(--blue-deep);">Excellent Dry-Tech Pvt Ltd</h3>
            <p style="font-family: var(--font-mono); font-size: 0.75rem; color: var(--steel); margin-bottom: 1.5rem;">Formerly Excellent Engineers</p>

            <div class="contact-meta-item">
              <span class="contact-meta-icon">👤</span>
              <div>
                <div style="font-size: 0.8125rem; font-family: var(--font-mono); color: var(--steel);">MANAGING DIRECTOR</div>
                <div style="font-weight: 600; color: var(--ink);">Mr. Santosh Maurya</div>
              </div>
            </div>

            <div class="contact-meta-item">
              <span class="contact-meta-icon">📍</span>
              <div>
                <div style="font-size: 0.8125rem; font-family: var(--font-mono); color: var(--steel);">REGISTERED WORKS &amp; OFFICE</div>
                <div style="color: var(--ink); line-height: 1.5;">Gat No. 607, Nighoje–Moi Road, At. Moi, Post. Kurli, Tal. Khed, Dist. Pune – 410501, Maharashtra, India</div>
              </div>
            </div>

            <div class="contact-meta-item">
              <span class="contact-meta-icon">📞</span>
              <div>
                <div style="font-size: 0.8125rem; font-family: var(--font-mono); color: var(--steel);">DIRECT PHONES</div>
                <div><a href="tel:+919922754848" style="font-weight: 600; color: var(--blue-deep);">+91 99227 54848</a> / <a href="tel:+919922654848" style="font-weight: 600; color: var(--blue-deep);">+91 99226 54848</a></div>
              </div>
            </div>

            <div class="contact-meta-item">
              <span class="contact-meta-icon">✉️</span>
              <div>
                <div style="font-size: 0.8125rem; font-family: var(--font-mono); color: var(--steel);">OFFICIAL EMAIL</div>
                <div><a href="mailto:excellentengineers.sr@gmail.com" style="font-weight: 600; color: var(--blue-deep);">excellentengineers.sr@gmail.com</a></div>
              </div>
            </div>

            <div class="contact-meta-item">
              <span class="contact-meta-icon">⏱️</span>
              <div>
                <div style="font-size: 0.8125rem; font-family: var(--font-mono); color: var(--steel);">OPERATING HOURS</div>
                <div>Monday – Saturday, 9:00 AM – 6:30 PM IST (Site visits by appointment)</div>
              </div>
            </div>
          </div>

          <!-- What Happens After You Enquire Mini-Process -->
          <div class="spec-plate-box">
            <div class="spec-plate-item" style="padding: 0.75rem 0;">
              <div class="spec-plate-text">
                <h4 style="font-size: 0.95rem;">Direct Engineering Review</h4>
                <p>Your enquiry reaches senior process engineers directly — no call center delays.</p>
              </div>
            </div>
            <div class="spec-plate-item" style="padding: 0.75rem 0;">
              <div class="spec-plate-text">
                <h4 style="font-size: 0.95rem;">Technical Clarification</h4>
                <p>We may call you to clarify feed moisture curves, viscosity, and utilities.</p>
              </div>
            </div>
            <div class="spec-plate-item" style="padding: 0.75rem 0;">
              <div class="spec-plate-text">
                <h4 style="font-size: 0.95rem;">Budgetary Proposal</h4>
                <p>You receive sizing, layout footprint, and formal budgetary pricing.</p>
              </div>
            </div>
          </div>

          <!-- Google Map -->
          <div style="margin-top: 1.5rem;">
            <iframe 
              class="map-embed-frame"
              src="https://maps.google.com/maps?q=Moi,+Khed,+Pune,+Maharashtra+410501&t=&z=13&ie=UTF8&iwloc=&output=embed" 
              title="Excellent Dry-Tech Works Location at Moi, Khed, Pune" 
              loading="lazy">
            </iframe>
            <p style="font-size: 0.8125rem; color: var(--steel); margin-top: 0.5rem; text-align: center;">
              Works located in the industrial corridor of Moi–Nighoje, Taluka Khed, Pune.
            </p>
          </div>
        </div>

      </div>
    </div>
  </section>

@endsection
