<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display Contact Us page
     */
    public function index()
    {
        return view('pages.contact');
    }

    /**
     * Handle incoming contact enquiry
     */
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'full_name'        => 'required|string|max:150',
            'company_name'     => 'nullable|string|max:150',
            'phone'            => 'required|string|max:30',
            'email'            => 'required|email|max:150',
            'product_interest' => 'required|string',
            'capacity'         => 'nullable|string|max:100',
            'message'          => 'required|string|max:3000',
        ]);

        // In a production application, you can persist to Database or send an email via Mailable:
        // Mail::to('excellentengineers.sr@gmail.com')->send(new TechnicalEnquiryMail($validated));

        return back()->with('success', 'Your technical enquiry has been logged successfully. An engineering specialist will review your specifications and contact you within one business day.');
    }
}
