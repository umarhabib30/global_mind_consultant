<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Consultation;
use Illuminate\Support\Facades\Mail; // Added for Mail support
use App\Mail\ConsultationSubmitted;   // Added to use your mailable class

class ConsultationFormController extends Controller
{
    /**
     * Display the consultation form page.
     */
    public function index()
    {
        return view('user.consultationForm');
    }

    /**
     * Store the consultation request in the database and send email.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name'       => 'required|string|max:255',
            'last_name'        => 'required|string|max:255',
            'email'            => 'required|email|max:255',
            'phone'            => 'required|string|max:20',
            'linkedin_profile' => 'nullable|url',
            'destination'      => 'required|string',
            'branch_time'      => 'required|string',
            'counseling_mode'  => 'required|string',
            'study_level'      => 'required|string',
            'message'          => 'required|string',
        ]);

        // 1. Store in Database
        Consultation::create($validatedData);

        // 2. Send Email to Admin
        // Replace 'admin@yourdomain.com' with your actual receiving email
        Mail::to('makeuse928@gmail.com')->send(new ConsultationSubmitted($validatedData));

        return redirect()->back()->with('success', 'Your details have been shared. Our experts will contact you soon!');
    }
}
