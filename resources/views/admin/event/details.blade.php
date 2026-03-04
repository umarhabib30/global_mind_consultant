@extends('layouts.admin')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-lg-4">
                <div class="card shadow-sm border-0 mb-4 overflow-hidden">
                    @php
                        $statusColor = match ($event->status) {
                            'scheduled' => '#0d6efd',
                            'in_progress' => '#0dcaf0',
                            'completed' => '#198754',
                            'cancelled' => '#dc3545',
                            default => '#6c757d',
                        };
                    @endphp
                    <div style="height: 6px; background-color: {{ $statusColor }};"></div>

                    <div class="card-body p-4 text-start">
                        <h5 class="fw-bold mb-1">{{ $event->title }}</h5>
                        <p class="text-muted small mb-4">{{ ucfirst($event->event_type ?? 'event') }}</p>

                        <div class="mb-3">
                            <small class="text-muted d-block">Date</small>
                            <span class="fw-bold text-dark">{{ optional($event->date)->format('d M Y') }}</span>
                        </div>

                        <div class="mb-3">
                            <small class="text-muted d-block">Time</small>
                            <span class="fw-bold text-dark">
                                {{ $event->start_time ? date('h:i A', strtotime($event->start_time)) : 'N/A' }}
                                -
                                {{ $event->end_time ? date('h:i A', strtotime($event->end_time)) : 'N/A' }}
                            </span>
                        </div>

                        <div class="mb-3">
                            <small class="text-muted d-block">Speaker</small>
                            <span class="fw-bold text-dark">{{ $event->speaker ?? 'N/A' }}</span>
                        </div>

                        <div class="mb-3">
                            <small class="text-muted d-block">Location</small>
                            <span class="fw-bold text-dark">{{ $event->location ?? 'N/A' }}</span>
                        </div>

                        <div class="mb-3">
                            <small class="text-muted d-block">Attendees</small>
                            <span class="fw-bold text-dark">{{ $event->attendees ?? 0 }}</span>
                        </div>

                        <div>
                            <small class="text-muted d-block">Status</small>
                            <span class="fw-bold text-dark">{{ ucfirst(str_replace('_', ' ', $event->status)) }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-header bg-white border-bottom d-flex justify-content-between align-items-center py-3">
                        <h5 class="fw-bold mb-0" style="color: #0A245D;">Event Details</h5>
                        <a href="{{ route('event.index') }}" class="btn btn-sm px-3" style="background-color: #74BF1A; color: white;">
                            Back to List
                        </a>
                    </div>

                    <div class="card-body p-4">
                        @if ($event->picture)
                            <div class="mb-4 text-center">
                                <img src="{{ asset($event->picture) }}" class="img-fluid rounded" alt="Event Image">
                            </div>
                        @endif

                        @if ($event->short_description)
                            <div class="mb-3">
                                <h6 class="fw-bold">Short Description</h6>
                                <p>{{ $event->short_description }}</p>
                            </div>
                        @endif

                        @if ($event->long_description)
                            <div class="mb-3">
                                <h6 class="fw-bold">Long Description</h6>
                                <p>{!! nl2br(e($event->long_description)) !!}</p>
                            </div>
                        @endif

                        @if (!empty($event->parameters))
                            <div class="mb-3">
                                <h6 class="fw-bold">Parameters</h6>
                                <ul class="ms-3">
                                    @foreach ($event->parameters as $param)
                                        <li>{{ $param }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if (!empty($event->why_attend))
                            <div class="mb-3">
                                <h6 class="fw-bold">Why Attend</h6>
                                <ul class="ms-3">
                                    @foreach ($event->why_attend as $point)
                                        <li>{{ $point }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
