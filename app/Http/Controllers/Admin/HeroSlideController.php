<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HeroSlide;
use Illuminate\Http\Request;

class HeroSlideController extends Controller
{
    public function index()
    {
        $slides = HeroSlide::orderBy('sort_order')->orderByDesc('id')->get();

        return view('admin.hero-slider.index', [
            'heading' => 'Hero Slider',
            'title' => 'View Hero Slides',
            'active' => 'hero-slider',
            'slides' => $slides,
        ]);
    }

    public function create()
    {
        return view('admin.hero-slider.create', [
            'heading' => 'Hero Slider',
            'title' => 'Create Hero Slide',
            'active' => 'hero-slider',
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'highlight_text' => ['nullable', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'button_text' => ['nullable', 'string', 'max:100'],
            'button_link' => ['nullable', 'string', 'max:500'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
            'is_active' => ['required', 'in:0,1'],
            'background_image' => ['required', 'image', 'mimes:jpg,jpeg,png,webp', 'max:4096'],
        ]);

        $validated['background_image'] = $this->uploadImage($request);
        $validated['sort_order'] = (int) ($validated['sort_order'] ?? 0);

        HeroSlide::create($validated);

        return redirect()->route('hero-slider.index')->with('success', 'Hero slide created successfully');
    }

    public function edit(string $id)
    {
        $slide = HeroSlide::findOrFail($id);

        return view('admin.hero-slider.edit', [
            'heading' => 'Hero Slider',
            'title' => 'Edit Hero Slide',
            'active' => 'hero-slider',
            'slide' => $slide,
        ]);
    }

    public function update(Request $request)
    {
        $slide = HeroSlide::findOrFail($request->id);

        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'highlight_text' => ['nullable', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'button_text' => ['nullable', 'string', 'max:100'],
            'button_link' => ['nullable', 'string', 'max:500'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
            'is_active' => ['required', 'in:0,1'],
            'background_image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:4096'],
        ]);

        if ($request->hasFile('background_image')) {
            $this->deleteImage($slide->background_image);
            $validated['background_image'] = $this->uploadImage($request);
        }

        $validated['sort_order'] = (int) ($validated['sort_order'] ?? 0);
        $slide->update($validated);

        return redirect()->route('hero-slider.index')->with('success', 'Hero slide updated successfully');
    }

    public function destroy(string $id)
    {
        $slide = HeroSlide::findOrFail($id);
        $this->deleteImage($slide->background_image);
        $slide->delete();

        return redirect()->route('hero-slider.index')->with('success', 'Hero slide deleted successfully');
    }

    private function uploadImage(Request $request): ?string
    {
        if (! $request->hasFile('background_image')) {
            return null;
        }

        $file = $request->file('background_image');
        $directory = public_path('uploads/hero-slides');

        if (! is_dir($directory)) {
            mkdir($directory, 0755, true);
        }

        $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
        $file->move($directory, $fileName);

        return 'uploads/hero-slides/' . $fileName;
    }

    private function deleteImage(?string $path): void
    {
        if (! $path) {
            return;
        }

        $fullPath = public_path($path);
        if (file_exists($fullPath)) {
            unlink($fullPath);
        }
    }
}
