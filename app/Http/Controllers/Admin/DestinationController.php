<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $destinations = Destination::all();
        $data = [
            'heading' => "Destination",
            'title' => "View Destinations",
            'active' => 'destination',
            'destinations' => $destinations

        ];
        return view('admin.destination.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'heading' => "Destination",
            'title' => "Add Destination",
            'active' => 'destination',
        ];
        return view('admin.destination.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Destination::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('success', 'Destination added successfully');
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
        $destination = Destination::findOrFail($id);
        $data = [
            'heading' => 'Destination',
            'title' => 'Edit Destination',
            'active' => 'destination',
            'destination' => $destination
        ];
        return view('admin.destination.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $destination = Destination::findOrFail($id);
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $destination->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('success', 'Destination updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Destination = Destination::findOrFail($id);
        $Destination->delete();
        return redirect()->back()->with('success', 'Destination deleted successfully');
    }
}
