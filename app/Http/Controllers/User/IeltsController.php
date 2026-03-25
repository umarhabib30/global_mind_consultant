<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\IeltsCourse;
use App\Models\IeltsCourseEnrollment;
use App\Models\IeltsFaq;
use App\Models\IeltsPopup;
use Illuminate\Http\Request;

class IeltsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = IeltsCourse::where('is_active', true)
            ->orderBy('sort_order')
            ->orderByDesc('id')
            ->get();
        $popup = IeltsPopup::where('is_active', true)->latest()->first();

        $faqs = IeltsFaq::where('is_active', true)
            ->orderBy('sort_order')
            ->orderByDesc('id')
            ->get();

        return view('user.ielts', compact('faqs', 'courses', 'popup'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'ielts_course_id' => ['required', 'exists:ielts_courses,id'],
            'full_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:30'],
            'preferred_time' => ['nullable', 'string', 'max:100'],
            'study_goal' => ['nullable', 'string', 'max:150'],
            'message' => ['nullable', 'string', 'max:2000'],
        ]);

        $course = IeltsCourse::findOrFail($validated['ielts_course_id']);

        IeltsCourseEnrollment::create([
            'ielts_course_id' => $course->id,
            'course_title' => $course->title,
            'full_name' => $validated['full_name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'preferred_time' => $validated['preferred_time'] ?? null,
            'study_goal' => $validated['study_goal'] ?? null,
            'message' => $validated['message'] ?? null,
        ]);

        return redirect()->route('ielts')->with([
            'enrollment_success' => 'Enrollment request sent successfully. Our team will contact you soon.',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
