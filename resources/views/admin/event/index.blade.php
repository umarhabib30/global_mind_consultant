@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <!-- Card Header -->
        <div class="card-header d-flex justify-content-between align-items-center" style="background-color: #0A245D; color: white;">
            <h5 class="mb-0 text-white">Event Table</h5>
            <a href="{{ route('event.create') }}" class="btn" style="background-color: #74BF1A; color: white;">
                Add Event
            </a>
        </div>

        <!-- Card Body -->
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-striped table-bordered mb-0">
                    <thead style="background-color: #74BF1A; color: white;">
                        <tr>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Duration</th>
                            <th>Location</th>
                            <th>Person</th>
                            <th>Status</th>
                            <th>Attendees</th>
                            <th colspan="3" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($events as $event)
                            <tr>
                                <td>{{ $event->title }}</td>
                                <td>{{ $event->date }}</td>
                                <td>{{ $event->time }}</td>
                                <td>{{ $event->duration ?? '-' }}</td>
                                <td>{{ $event->location }}</td>
                                <td>{{ $event->person }}</td>
                                <td>
                                        <span class="badge bg-success text-white">{{ ucfirst($event->status) }}</span>

                                </td>
                                <td>{{ $event->attendees }}</td>
                                <td>
                                    <a href="{{ route('event.edit', $event->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                </td>
                                <td>
                                    <a href="{{ route('event.destroy', $event->id) }}"
                                       onclick="return confirm('Are you sure you want to delete this event?')"
                                       class="btn btn-danger btn-sm">Delete</a>
                                </td>
                                <td>
                                    <a href="{{ route('event.show', $event->id) }}" class="btn btn-info btn-sm" style="background-color: #0A245D; color: white;">Details</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="12" class="text-center">No events found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
