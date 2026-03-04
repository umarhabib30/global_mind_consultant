<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $today = Carbon::today();

        $events = Event::orderBy('date')->orderBy('start_time')->get();
        $upcomingEvents = Event::whereDate('date', '>=', $today)
            ->orderBy('date')
            ->orderBy('start_time')
            ->take(3)
            ->get();
        $pastEvents = Event::whereDate('date', '<', $today)
            ->orderByDesc('date')
            ->orderByDesc('start_time')
            ->get();
        $webinars = Event::where('event_type', 'webinar')
            ->orderByDesc('date')
            ->orderByDesc('start_time')
            ->get();
        $latestEvent = Event::orderByDesc('date')
            ->orderByDesc('start_time')
            ->orderByDesc('id')
            ->first();

        return view('user.events', compact('events', 'upcomingEvents', 'pastEvents', 'webinars', 'latestEvent'));

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
        //
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
