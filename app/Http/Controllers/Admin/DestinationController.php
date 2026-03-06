<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function index()
    {
        return view('admin.destination.index', [
            'heading' => 'Destinations',
            'title' => 'View Destinations',
            'active' => 'destination',
            'destinations' => Destination::latest()->get(),
        ]);
    }

    public function create()
    {
        return view('admin.destination.create', [
            'heading' => 'Destinations',
            'title' => 'Add Destination',
            'active' => 'destination',
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'pic' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:4096'],
        ]);

        Destination::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'pic' => $this->uploadImage($request),
        ]);

        return redirect()->route('destination.index')->with('success', 'Destination added successfully.');
    }

    public function edit(string $id)
    {
        return view('admin.destination.edit', [
            'heading' => 'Destinations',
            'title' => 'Edit Destination',
            'active' => 'destination',
            'destination' => Destination::findOrFail($id),
        ]);
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'id' => ['required', 'exists:destinations,id'],
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'pic' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:4096'],
        ]);

        $destination = Destination::findOrFail($validated['id']);

        $data = [
            'title' => $validated['title'],
            'description' => $validated['description'],
            'pic' => $destination->pic,
        ];

        if ($request->hasFile('pic')) {
            $this->deleteImage($destination->pic);
            $data['pic'] = $this->uploadImage($request);
        }

        $destination->update($data);

        return redirect()->route('destination.index')->with('success', 'Destination updated successfully.');
    }

    public function destroy(string $id)
    {
        $destination = Destination::findOrFail($id);
        $this->deleteImage($destination->pic);
        $destination->delete();

        return redirect()->route('destination.index')->with('success', 'Destination deleted successfully.');
    }

    private function uploadImage(Request $request): ?string
    {
        if (! $request->hasFile('pic')) {
            return null;
        }

        $file = $request->file('pic');
        $directory = public_path('uploads/destinations');

        if (! is_dir($directory)) {
            mkdir($directory, 0755, true);
        }

        $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
        $file->move($directory, $fileName);

        return 'uploads/destinations/' . $fileName;
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

