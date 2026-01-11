<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactSubmission;
// --- ADDED THESE TWO IMPORTS ---
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display the contact page.
     */
    public function index()
    {
        return view('user.contact');
    }

    /**
     * Store the form submission in the database and send email.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'country' => 'nullable|string',
            'message' => 'required|string',
        ]);

        // 1. Save to database
        ContactSubmission::create($validatedData);

        // 2. Send the email notification
        // Replace 'your-admin-email@example.com' with your actual email
        Mail::to('makeuse928@gmail.com')->send(new ContactFormMail($validatedData));
        return back()->with('success', 'Thank you! Your message has been received.');
    }
}
