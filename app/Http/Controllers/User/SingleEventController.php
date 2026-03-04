<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\EventReservation;
use Illuminate\Http\Request;

class SingleEventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $event = Event::orderBy('date')->orderBy('start_time')->firstOrFail();
        return view('user.singleEvent', compact('event'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $event = Event::findOrFail($id);
        return view('user.singleEvent', compact('event'));
    }

    public function reserve(Request $request, string $id)
    {
        $event = Event::findOrFail($id);

        $validated = $request->validate([
            'full_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:30'],
            'country_interested' => ['required', 'string', 'max:255'],
            'study_level' => ['required', 'string', 'max:255'],
        ]);

        $validated['event_id'] = $event->id;
        EventReservation::create($validated);

        return redirect()
            ->route('single-event.show', $event->id)
            ->with('success', 'Your seat has been reserved successfully.');
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
