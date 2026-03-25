<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\IeltsCourseEnrollment;

class IeltsEnrollmentController extends Controller
{
    public function index()
    {
        $enrollments = IeltsCourseEnrollment::with('course')
            ->latest()
            ->paginate(10);

        return view('admin.ielts-enrollments.index', [
            'heading' => 'IELTS Enrollments',
            'title' => 'View IELTS Enrollments',
            'active' => 'ielts-enrollments',
            'enrollments' => $enrollments,
        ]);
    }

    public function show(string $id)
    {
        $enrollment = IeltsCourseEnrollment::with('course')->findOrFail($id);

        return view('admin.ielts-enrollments.details', [
            'heading' => 'IELTS Enrollment Details',
            'title' => 'Enrollment from ' . $enrollment->full_name,
            'active' => 'ielts-enrollments',
            'enrollment' => $enrollment,
        ]);
    }

    public function destroy(string $id)
    {
        $enrollment = IeltsCourseEnrollment::findOrFail($id);
        $enrollment->delete();

        return redirect()->route('admin.ielts-enrollments.index')->with('success', 'Enrollment deleted successfully.');
    }
}
