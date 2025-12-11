@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="card shadow-lg rounded-lg border-0">

            <!-- Card Header -->
            <div class="card-header d-flex justify-content-between align-items-center" style="background-color: #0A245D;">
                <h5 class="text-white mb-0">Event Details</h5>
                <a href="{{ route('event.index') }}" class="btn"
                    style="background-color: #74BF1A; color: white; font-weight: 600;">
                    Back to Events
                </a>
            </div>

            <!-- Card Body -->
            <div class="card-body p-5">
                <div class="row g-4">

                    <!-- Title -->
                    <div class="col-md-6 mb-4">
                        <label class="form-label fw-semibold">Title</label>
                        <div class="form-control form-control-lg shadow-sm rounded bg-light">{{ $event->title }}</div>
                    </div>

                    <!-- Person -->
                    <div class="col-md-6 mb-4">
                        <label class="form-label fw-semibold">Person</label>
                        <div class="form-control form-control-lg shadow-sm rounded bg-light">{{ $event->person }}</div>
                    </div>

                    <!-- Date -->
                    <div class="col-md-4 mb-4">
                        <label class="form-label fw-semibold">Date</label>
                        <div class="form-control form-control-lg shadow-sm rounded bg-light">{{ $event->date }}</div>
                    </div>

                    <!-- Time -->
                    <div class="col-md-4 mb-4">
                        <label class="form-label fw-semibold">Time</label>
                        <div class="form-control form-control-lg shadow-sm rounded bg-light">{{ $event->time }}</div>
                    </div>

                    <!-- Duration -->
                    <div class="col-md-4 mb-4">
                        <label class="form-label fw-semibold">Duration</label>
                        <div class="form-control form-control-lg shadow-sm rounded bg-light">{{ $event->duration ?? '-' }}
                        </div>
                    </div>

                    <!-- Location -->
                    <div class="col-md-6 mb-4">
                        <label class="form-label fw-semibold">Location</label>
                        <div class="form-control form-control-lg shadow-sm rounded bg-light">{{ $event->location }}</div>
                    </div>

                    <!-- Attendees -->
                    <div class="col-md-6 mb-4">
                        <label class="form-label fw-semibold">Attendees</label>
                        <div class="form-control form-control-lg shadow-sm rounded bg-light">{{ $event->attendees }}</div>
                    </div>

                    <!-- Description -->
                    <div class="col-md-12 mb-4">
                        <label class="form-label fw-semibold">Description</label>
                        <div class="form-control form-control-lg shadow-sm rounded bg-light" style="min-height:120px;">
                            {{ $event->description ?? '-' }}
                        </div>
                    </div>

                    <!-- Status -->
                    <div class="col-md-6 mb-4">
                        <label class="form-label fw-semibold">Status</label>
                        <div class="form-control form-control-lg shadow-sm rounded bg-light">
                            @php
                                $statusClass = match ($event->status) {
                                    'scheduled' => 'badge bg-primary',
                                    'in_progress' => 'badge bg-info',
                                    'completed' => 'badge bg-success',
                                    'cancelled' => 'badge bg-danger',
                                    default => 'badge bg-secondary',
                                };
                            @endphp
                            <span
                                class="{{ $statusClass }} px-3 py-2">{{ ucfirst(str_replace('_', ' ', $event->status)) }}</span>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
