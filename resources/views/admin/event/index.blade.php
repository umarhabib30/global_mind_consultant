@extends('layouts.admin')
@section('content')
<div class="row">
    <!-- ============================================================== -->
    <!-- Event Table -->
    <!-- ============================================================== -->
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Event Table</h5>
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
                                <th>Person</th>
                                <th>Status</th>
                                <th>Attendees</th>
                                <th colspan="3">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($events as $event)
                                <tr>
                                    <td>{{ $event->title }}</td>
                                    <td>{{ $event->date }}</td>
                                    <td>{{ $event->time }}</td>
                                    <td>{{ $event->duration ?? '-' }}</td>
                                    <td>{{ $event->location }}</td>
                                    <td>{{ $event->person }}</td>
                                    <td>{{ ucfirst($event->status) }}</td>
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
                                        <a href="{{ route('event.show', $event->id) }}" class="btn btn-info btn-sm">Details</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @if($events->isEmpty())
                        <p class="text-center mt-3">No events found.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Event Table -->
    <!-- ============================================================== -->
</div>
@endsection
