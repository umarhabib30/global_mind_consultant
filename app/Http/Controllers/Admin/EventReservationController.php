<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EventReservation;
use Illuminate\Http\Request;

class EventReservationController extends Controller
{
    public function index()
    {
        $reservations = EventReservation::with('event')
            ->latest()
            ->paginate(10);

        $data = [
            'heading' => 'Event Reservations',
            'title' => 'View Event Reservations',
            'active' => 'event-reservations',
            'reservations' => $reservations,
        ];

        return view('admin.event-reservation.index', $data);
    }

    public function show(string $id)
    {
        $reservation = EventReservation::with('event')->findOrFail($id);

        $data = [
            'heading' => 'Event Reservation Details',
            'title' => 'Reservation from ' . $reservation->full_name,
            'active' => 'event-reservations',
            'reservation' => $reservation,
        ];

        return view('admin.event-reservation.details', $data);
    }

    public function destroy(string $id)
    {
        $reservation = EventReservation::findOrFail($id);
        $reservation->delete();

        return redirect()->route('admin.event-reservation.index')->with('success', 'Reservation deleted successfully.');
    }
}
