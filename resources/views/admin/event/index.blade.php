@extends('layouts.admin')
@section('content')
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered first">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Duration</th>
                                <th>Location</th>
                                <th>Status</th>
                                <th>Attendees</th>
                                <th class="text-center">Action</th>
                                <th class="text-center">Action</th>
                                <th class="text-center">Action</th>
                            </tr>
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
                                    <td>
                                        <span class="badge bg-success text-white">{{ ucfirst($event->status) }}</span>

                                    </td>
                                    <td>{{ $event->attendees }}</td>
                                    <td>
                                        <a href="{{ route('event.edit', $event->id) }}"
                                            class="btn btn-primary btn-sm">Edit</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('event.destroy', $event->id) }}"
                                            onclick="return confirm('Are you sure you want to delete this event?')"
                                            class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('event.show', $event->id) }}" class="btn btn-info btn-sm"
                                            style="background-color: #0A245D; color: white;">Details</a>
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
