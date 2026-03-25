<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\IeltsCourse;
use Illuminate\Http\Request;

class IeltsCourseController extends Controller
{
    public function index()
    {
        $courses = IeltsCourse::orderBy('sort_order')
            ->orderByDesc('id')
            ->get();

        return view('admin.ielts-courses.index', [
            'heading' => 'IELTS Courses',
            'title' => 'View IELTS Courses',
            'active' => 'ielts-courses',
            'courses' => $courses,
        ]);
    }

    public function create()
    {
        return view('admin.ielts-courses.create', [
            'heading' => 'IELTS Courses',
            'title' => 'Add IELTS Course',
            'active' => 'ielts-courses',
        ]);
    }

    public function store(Request $request)
    {
        $validated = $this->validateCourse($request);

        IeltsCourse::create($validated);

        return redirect()->route('ielts-courses.index')->with('success', 'Course added successfully.');
    }

    public function edit(string $id)
    {
        $course = IeltsCourse::findOrFail($id);

        return view('admin.ielts-courses.edit', [
            'heading' => 'IELTS Courses',
            'title' => 'Edit IELTS Course',
            'active' => 'ielts-courses',
            'course' => $course,
        ]);
    }

    public function update(Request $request, string $id)
    {
        $course = IeltsCourse::findOrFail($id);
        $course->update($this->validateCourse($request));

        return redirect()->route('ielts-courses.index')->with('success', 'Course updated successfully.');
    }

    public function destroy(string $id)
    {
        $course = IeltsCourse::findOrFail($id);
        $course->delete();

        return redirect()->route('ielts-courses.index')->with('success', 'Course deleted successfully.');
    }

    private function validateCourse(Request $request): array
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'short_description' => ['required', 'string'],
            'features' => ['required', 'array', 'min:1'],
            'features.*' => ['required', 'string', 'max:255'],
            'button_text' => ['nullable', 'string', 'max:100'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
            'is_active' => ['nullable', 'boolean'],
        ]);

        $features = collect($validated['features'] ?? [])
            ->map(fn($feature) => trim($feature))
            ->filter()
            ->values()
            ->all();

        return [
            'title' => $validated['title'],
            'short_description' => $validated['short_description'],
            'features' => $features,
            'button_text' => $validated['button_text'] ?: 'Enroll Now',
            'sort_order' => $validated['sort_order'] ?? 0,
            'is_active' => $request->boolean('is_active'),
        ];
    }
}
