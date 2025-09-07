<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::all();

        $data = [
            'heading' => "Event",
            'title' => "View Event ",
            'active' => 'event',
            'events' => $events
        ];
        return view('admin.event.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'heading' => "Event",
            'title' => "Add Event ",
            'active' => 'event',
        ];
        return view("admin.event.create", $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Event::create([
            'title' => $request->title,
            'description' => $request->description,
            'date' => $request->date,
            'time' => $request->time,
            'duration' => $request->duration,
            'location' => $request->location,
            'person' => $request->person,
            'status' => $request->status,
            'attendees' => $request->attendees,


        ]);
        return redirect()->back()->with('success', 'Event added succesfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $event = Event::findOrFail($id);
        $data = [
            'heading' => "Event  Detail",
            'title' => "View Event  Detail",
            'active' => 'event',
            'event' => $event
        ];
        return view('admin.event.details', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $event = Event::findOrFail($id);
        $data = [
            'heading' => 'Event',
            'title' => 'Enter Event Member',
            'active' => 'event',
            "event" => $event
        ];
        return view('admin.event.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $event = Event::findOrFail($request->id);
        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'date' => $request->date,
            'time' => $request->time,
            'duration' => $request->duration,
            'location' => $request->location,
            'person' => $request->person,
            'status' => $request->status,
            'attendees' => $request->attendees,

        ];

        $event->update($data);
        return redirect()->route('event.index')->with('success', 'Event  updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $event = Event::findOrFail($id);
        $event->delete();

        return redirect()->back()->with('success', 'Event  deleted successfully');
    }
}
