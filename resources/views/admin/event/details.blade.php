@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Event Details</h5>
            <div class="card-body">

                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered">
                            <tr>
                                <th>Title</th>
                                <td>{{ $event->title }}</td>
                            </tr>
                            <tr>
                                <th>Person</th>
                                <td>{{ $event->person }}</td>
                            </tr>
                            <tr>
                                <th>Date</th>
                                <td>{{ $event->date }}</td>
                            </tr>
                            <tr>
                                <th>Time</th>
                                <td>{{ $event->time }}</td>
                            </tr>
                            <tr>
                                <th>Duration</th>
                                <td>{{ $event->duration ?? '-' }}</td>
                            </tr>
                            <tr>
                                <th>Location</th>
                                <td>{{ $event->location }}</td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td>{{ $event->description ?? '-' }}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>
                                    @php
                                        $statusClass = match($event->status) {
                                            'scheduled' => 'badge bg-primary',
                                            'in_progress' => 'badge bg-info',
                                            'completed' => 'badge bg-success',
                                            'cancelled' => 'badge bg-danger',
                                            default => 'badge bg-secondary',
                                        };
                                    @endphp
                                    <span class="{{ $statusClass }}">{{ ucfirst($event->status) }}</span>
                                </td>
                            </tr>
                            <tr>
                                <th>Attendees</th>
                                <td>{{ $event->attendees }}</td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>
            <div class="card-footer text-end">
                <a href="{{ route('event.index') }}" class="btn btn-secondary">Back</a>
            </div>
        </div>
    </div>
</div>
@endsection
