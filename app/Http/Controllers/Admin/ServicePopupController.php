<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServicePopup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ServicePopupController extends Controller
{
    public function index()
    {
        $popups = ServicePopup::latest()->get();

        return view('admin.service-popup.index', [
            'heading' => 'Service Popup',
            'title' => 'View Service Popups',
            'active' => 'service-popup',
            'popups' => $popups,
        ]);
    }

    public function create()
    {
        return view('admin.service-popup.create', [
            'heading' => 'Service Popup',
            'title' => 'Create Service Popup',
            'active' => 'service-popup',
        ]);
    }

    public function store(Request $request)
    {
        ServicePopup::create($this->validatedData($request));

        return redirect()->route('service-popup.index')->with('success', 'Service popup created successfully.');
    }

    public function edit(string $id)
    {
        $popup = ServicePopup::findOrFail($id);

        return view('admin.service-popup.edit', [
            'heading' => 'Service Popup',
            'title' => 'Edit Service Popup',
            'active' => 'service-popup',
            'popup' => $popup,
        ]);
    }

    public function update(Request $request)
    {
        $popup = ServicePopup::findOrFail($request->id);
        $popup->update($this->validatedData($request, $popup));

        return redirect()->route('service-popup.index')->with('success', 'Service popup updated successfully.');
    }

    public function destroy(string $id)
    {
        $popup = ServicePopup::findOrFail($id);

        if ($popup->image_path) {
            Storage::disk('public')->delete($popup->image_path);
            File::delete(public_path($popup->image_path));
        }

        $popup->delete();

        return redirect()->route('service-popup.index')->with('success', 'Service popup deleted successfully.');
    }

    private function validatedData(Request $request, ?ServicePopup $popup = null): array
    {
        $validated = $request->validate([
            'heading' => ['nullable', 'string', 'max:255'],
            'subheading' => ['nullable', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'points' => ['nullable', 'array'],
            'points.*' => ['nullable', 'string', 'max:255'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp,gif', 'max:4096'],
            'video_url' => ['nullable', 'url', 'max:1000'],
            'button_text' => ['nullable', 'string', 'max:100', 'required_with:button_link'],
            'button_link' => ['nullable', 'url', 'max:1000', 'required_with:button_text'],
            'facebook_link' => ['nullable', 'url', 'max:1000'],
            'instagram_link' => ['nullable', 'url', 'max:1000'],
            'youtube_link' => ['nullable', 'url', 'max:1000'],
            'whatsapp_link' => ['nullable', 'url', 'max:1000'],
            'delay_seconds' => ['nullable', 'integer', 'min:1', 'max:10'],
            'is_active' => ['required', 'in:0,1'],
        ]);

        $points = collect($validated['points'] ?? [])
            ->map(fn ($point) => trim($point))
            ->filter()
            ->values()
            ->all();

        $imagePath = $popup->image_path ?? null;
        if ($request->hasFile('image')) {
            if ($popup && $popup->image_path) {
                Storage::disk('public')->delete($popup->image_path);
                File::delete(public_path($popup->image_path));
            }

            $file = $request->file('image');
            $filename = uniqid() . '_' . preg_replace('/[^A-Za-z0-9._-]/', '', $file->getClientOriginalName());
            $destination = public_path('uploads/service-popup');

            if (!File::exists($destination)) {
                File::makeDirectory($destination, 0755, true);
            }

            $file->move($destination, $filename);
            $imagePath = 'uploads/service-popup/' . $filename;
        }

        return [
            'heading' => $validated['heading'] ?: null,
            'subheading' => $validated['subheading'] ?: null,
            'description' => $validated['description'] ?: null,
            'points' => $points,
            'image_path' => $imagePath,
            'video_url' => $validated['video_url'] ?: null,
            'button_text' => $validated['button_text'] ?: null,
            'button_link' => $validated['button_link'] ?: null,
            'facebook_link' => $validated['facebook_link'] ?: null,
            'instagram_link' => $validated['instagram_link'] ?: null,
            'youtube_link' => $validated['youtube_link'] ?: null,
            'whatsapp_link' => $validated['whatsapp_link'] ?: null,
            'delay_seconds' => $validated['delay_seconds'] ?? 2,
            'is_active' => (bool) $validated['is_active'],
        ];
    }
}
