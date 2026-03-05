<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\University;
use Illuminate\Http\Request;
use App\Helpers\ImageHelper;

class UniversityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $universities = University::latest()->get();
        $data = [
            'heading' => "University",
            'title' => "View Universities",
            'active' => 'university',
            'universities' => $universities

        ];
        return view('admin.university.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'heading' => "University",
            'title' => "Add University",
            'active' => 'university',
        ];
        return view("admin.university.create", $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:100'],
            'description' => ['nullable', 'string'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:4096'],
            'button_text' => ['nullable', 'string', 'max:100'],
            'button_link' => ['nullable', 'string', 'max:500'],
        ]);

        $path = null;
        if ($request->hasFile('image')) {
            $path = ImageHelper::saveImage($request->image, 'Image');
        }

        University::create([
            'name' => $validated['name'],
            'country' => $validated['country'],
            'description' => $validated['description'] ?? null,
            'image' => $path,
            'button_text' => $validated['button_text'] ?? null,
            'button_link' => $validated['button_link'] ?? null,
        ]);
        return redirect()->route('university.index')->with('success', 'University added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $university = University::findOrFail($id);
        $data = [
            'heading' => 'University',
            'title' => 'Enter University',
            'active' => 'university',
            "university" => $university
        ];
        return view('admin.university.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validated = $request->validate([
            'id' => ['required', 'exists:universities,id'],
            'name' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:100'],
            'description' => ['nullable', 'string'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:4096'],
            'button_text' => ['nullable', 'string', 'max:100'],
            'button_link' => ['nullable', 'string', 'max:500'],
        ]);
        $university = University::findOrFail($validated['id']);

        $data = [
            'name' => $validated['name'],
            'country' => $validated['country'],
            'description' => $validated['description'] ?? null,
            'button_text' => $validated['button_text'] ?? null,
            'button_link' => $validated['button_link'] ?? null,
        ];

        // handle image update
        if ($request->hasFile('image')) {
            $path         = ImageHelper::saveImage($request->image, 'Image');
            $data['image'] = $path;
        } else {
            $data['image'] = $university->image;
        }

        $university->update($data);
        return redirect()->route('university.index')->with('success', 'University updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $university = University::findOrFail($id);
        $university->delete();

        return redirect()->route('university.index')->with('success', 'University deleted successfully');
    }
}
