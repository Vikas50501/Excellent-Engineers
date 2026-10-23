<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CareerController extends Controller
{
    /**
     * Display Careers page
     */
    public function index()
    {
        return view('pages.careers');
    }

    /**
     * Handle job application form submission
     */
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'full_name'  => 'required|string|max:150',
            'phone'      => 'required|string|max:30',
            'email'      => 'required|email|max:150',
            'position'   => 'required|string',
            'experience' => 'nullable|string|max:50',
            'resume'     => 'required|file|mimes:pdf,doc,docx|max:5120',
            'cover_note' => 'nullable|string|max:2000',
        ]);

        // Store the resume in storage/app/resumes
        if ($request->hasFile('resume')) {
            $path = $request->file('resume')->store('resumes');
        }

        return back()->with('success', 'Your application has been received by our engineering recruitment team. We will contact shortlisted candidates directly.');
    }
}
