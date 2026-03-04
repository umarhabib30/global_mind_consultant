<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Popup;
use Illuminate\Http\Request;

class PopupController extends Controller
{
    public function index()
    {
        $popups = Popup::latest()->get();

        return view('admin.popup.index', [
            'heading' => 'Popup',
            'title' => 'View Popups',
            'active' => 'popup',
            'popups' => $popups,
        ]);
    }

    public function create()
    {
        return view('admin.popup.create', [
            'heading' => 'Popup',
            'title' => 'Create Popup',
            'active' => 'popup',
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'button_text' => ['nullable', 'string', 'max:100'],
            'button_link' => ['nullable', 'string', 'max:500'],
            'is_active' => ['required', 'in:0,1'],
        ]);

        Popup::create($validated);

        return redirect()->route('popup.index')->with('success', 'Popup created successfully');
    }

    public function edit(string $id)
    {
        $popup = Popup::findOrFail($id);

        return view('admin.popup.edit', [
            'heading' => 'Popup',
            'title' => 'Edit Popup',
            'active' => 'popup',
            'popup' => $popup,
        ]);
    }

    public function update(Request $request)
    {
        $popup = Popup::findOrFail($request->id);

        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'button_text' => ['nullable', 'string', 'max:100'],
            'button_link' => ['nullable', 'string', 'max:500'],
            'is_active' => ['required', 'in:0,1'],
        ]);

        $popup->update($validated);

        return redirect()->route('popup.index')->with('success', 'Popup updated successfully');
    }

    public function destroy(string $id)
    {
        $popup = Popup::findOrFail($id);
        $popup->delete();

        return redirect()->route('popup.index')->with('success', 'Popup deleted successfully');
    }
}
