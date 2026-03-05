<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TopField;
use Illuminate\Http\Request;

class TopFieldController extends Controller
{
    public function index()
    {
        $fields = TopField::orderBy('sort_order')->orderByDesc('id')->get();

        return view('admin.top-field.index', [
            'heading' => 'Top Fields',
            'title' => 'View Top Fields',
            'active' => 'top-field',
            'fields' => $fields,
        ]);
    }

    public function create()
    {
        return view('admin.top-field.create', [
            'heading' => 'Top Fields',
            'title' => 'Create Top Field',
            'active' => 'top-field',
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'short_description' => ['nullable', 'string'],
            'long_description' => ['nullable', 'string'],
            'button_text' => ['nullable', 'string', 'max:100'],
            'button_link' => ['nullable', 'string', 'max:500'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
            'is_active' => ['required', 'in:0,1'],
            'image' => ['required', 'image', 'mimes:jpg,jpeg,png,webp', 'max:4096'],
        ]);

        $validated['sort_order'] = (int) ($validated['sort_order'] ?? 0);
        $validated['image'] = $this->uploadImage($request);

        TopField::create($validated);

        return redirect()->route('top-field.index')->with('success', 'Top field created successfully');
    }

    public function edit(string $id)
    {
        $field = TopField::findOrFail($id);

        return view('admin.top-field.edit', [
            'heading' => 'Top Fields',
            'title' => 'Edit Top Field',
            'active' => 'top-field',
            'field' => $field,
        ]);
    }

    public function show(string $id)
    {
        $field = TopField::findOrFail($id);

        return view('admin.top-field.details', [
            'heading' => 'Top Fields',
            'title' => 'Top Field Details',
            'active' => 'top-field',
            'field' => $field,
        ]);
    }

    public function update(Request $request)
    {
        $field = TopField::findOrFail($request->id);

        $validated = $request->validate([
            'id' => ['required', 'exists:top_fields,id'],
            'title' => ['required', 'string', 'max:255'],
            'short_description' => ['nullable', 'string'],
            'long_description' => ['nullable', 'string'],
            'button_text' => ['nullable', 'string', 'max:100'],
            'button_link' => ['nullable', 'string', 'max:500'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
            'is_active' => ['required', 'in:0,1'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:4096'],
        ]);

        if ($request->hasFile('image')) {
            $this->deleteImage($field->image);
            $validated['image'] = $this->uploadImage($request);
        } else {
            $validated['image'] = $field->image;
        }

        $validated['sort_order'] = (int) ($validated['sort_order'] ?? 0);

        $field->update($validated);

        return redirect()->route('top-field.index')->with('success', 'Top field updated successfully');
    }

    public function destroy(string $id)
    {
        $field = TopField::findOrFail($id);
        $this->deleteImage($field->image);
        $field->delete();

        return redirect()->route('top-field.index')->with('success', 'Top field deleted successfully');
    }

    private function uploadImage(Request $request): ?string
    {
        if (! $request->hasFile('image')) {
            return null;
        }

        $file = $request->file('image');
        $directory = public_path('uploads/top-fields');

        if (! is_dir($directory)) {
            mkdir($directory, 0755, true);
        }

        $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
        $file->move($directory, $fileName);

        return 'uploads/top-fields/' . $fileName;
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
