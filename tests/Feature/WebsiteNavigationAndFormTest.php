<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class WebsiteNavigationAndFormTest extends TestCase
{
    /**
     * Test all 7 primary public routes return HTTP 200.
     */
    public function test_all_primary_pages_load_successfully(): void
    {
        $routes = [
            '/' => 'Industrial Dryers, Evaporators & Bio-Tech Plants',
            '/about' => 'Engineering Dependable Process Equipment',
            '/products' => 'Our Process Equipment Range',
            '/gallery' => 'Installed Plants & Turnkey Projects',
            '/maintenance' => "Performance Doesn",
            '/careers' => 'Build Your Career in Process Engineering',
            '/contact' => "Talk About Your Process Requirement",
        ];

        foreach ($routes as $uri => $expectedSnippet) {
            $response = $this->get($uri);
            $response->assertStatus(200);
            $response->assertSeeText($expectedSnippet);
            // Verify no eyebrow tags
            $this->assertStringNotContainsString('class="callout-tag', $response->getContent());
            $this->assertStringNotContainsString('ENGINEERED FOR PURITY | BUILT FOR PERFORMANCE', $response->getContent());
        }
    }

    /**
     * Test alternative SEO route aliases.
     */
    public function test_seo_route_aliases_work(): void
    {
        $this->get('/about-us')->assertStatus(200);
        $this->get('/projects')->assertStatus(200);
        $this->get('/contact-us')->assertStatus(200);
    }

    /**
     * Test contact form submission validation and success.
     */
    public function test_contact_form_validation_and_submission(): void
    {
        // 1. Invalid submission (missing required fields)
        $invalidResp = $this->post('/contact', []);
        $invalidResp->assertSessionHasErrors(['full_name', 'phone', 'email', 'product_interest', 'message']);

        // 2. Valid submission
        $validResp = $this->post('/contact', [
            'full_name'        => 'Dr. Rajesh Sharma',
            'company_name'     => 'Apex Bio-Pharma Ltd',
            'phone'            => '+91 98230 12345',
            'email'            => 'rajesh.sharma@apexbio.example.com',
            'product_interest' => 'Spray Dryers',
            'capacity'         => '500 kg/hr',
            'message'          => 'We require a turnkey spray drying plant for pharmaceutical active ingredients.',
        ]);

        $validResp->assertSessionHas('success');
        $validResp->assertRedirect();
    }

    /**
     * Test careers application form validation and file upload.
     */
    public function test_career_form_validation_and_resume_upload(): void
    {
        Storage::fake('local');

        // 1. Invalid submission (missing resume and required fields)
        $invalidResp = $this->post('/careers', []);
        $invalidResp->assertSessionHasErrors(['full_name', 'phone', 'email', 'position', 'resume']);

        // 2. Valid submission with fake PDF resume
        $fakeResume = UploadedFile::fake()->create('candidate_cv.pdf', 300, 'application/pdf');

        $validResp = $this->post('/careers', [
            'full_name'  => 'Amit Kulkarni',
            'phone'      => '+91 98765 43210',
            'email'      => 'amit.kulkarni@example.com',
            'position'   => 'Mechanical Design Engineer',
            'experience' => '5 Years',
            'resume'     => $fakeResume,
            'cover_note' => 'Experienced in SolidWorks and ASME pressure vessel calculations.',
        ]);

        $validResp->assertSessionHas('success');
        $validResp->assertRedirect();
    }
}
