@extends('layouts.admin')

@section('content')
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">{{ $heading ?? 'Event Reservations' }}</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered first">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Event</th>
                                <th class="text-center">Details</th>
                                <th class="text-center">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($reservations as $reservation)
                                <tr>
                                    <td>{{ $reservation->created_at->format('d M Y') }}</td>
                                    <td><strong>{{ $reservation->full_name }}</strong></td>
                                    <td>{{ $reservation->email }}</td>
                                    <td>{{ $reservation->phone }}</td>
                                    <td>{{ $reservation->event->title ?? '-' }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.event-reservation.show', $reservation->id) }}"
                                            class="btn btn-info btn-sm" style="background-color: #0A245D; color: white;">
                                            Details
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <form action="{{ route('admin.event-reservation.destroy', $reservation->id) }}" method="POST"
                                            style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                onclick="return confirm('Are you sure you want to delete this reservation?')"
                                                class="btn btn-danger btn-sm">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center text-muted">No event reservations found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="mt-3">
                    {{ $reservations->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
