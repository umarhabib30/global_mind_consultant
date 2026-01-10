@extends('layouts.admin')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            {{-- Left Sidebar --}}
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

                    <div class="card-body p-4 text-center">
                        <div class="mb-3">
                            <div class="rounded-circle d-inline-flex align-items-center justify-content-center bg-light shadow-sm"
                                style="width: 80px; height: 80px;">
                                <i class="fas fa-calendar-check fa-2x text-primary"></i>
                            </div>
                        </div>

                        <h5 class="fw-bold mb-1">{{ ucfirst(str_replace('_', ' ', $event->status)) }}</h5>
                        <p class="text-muted small">Current Event Status</p>

                        <hr class="my-4">

                        <div class="text-start">
                            {{-- Date --}}
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon-box me-3 bg-light rounded p-2">
                                    <i class="fas fa-calendar-day text-muted"></i>
                                </div>
                                <div>
                                    <small class="text-muted d-block">Date</small>
                                    <span
                                        class="fw-bold text-dark">{{ \Carbon\Carbon::parse($event->date)->format('d M Y') }}</span>
                                </div>
                            </div>

                            {{-- Time --}}
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon-box me-3 bg-light rounded p-2">
                                    <i class="fas fa-clock text-muted"></i>
                                </div>
                                <div>
                                    <small class="text-muted d-block">Time</small>
                                    <span class="fw-bold text-dark">
                                        {{ $event->start_time ?? 'N/A' }} - {{ $event->end_time ?? 'N/A' }}
                                    </span>
                                </div>
                            </div>

                            {{-- Duration --}}
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon-box me-3 bg-light rounded p-2">
                                    <i class="fas fa-hourglass-half text-muted"></i>
                                </div>
                                <div>
                                    <small class="text-muted d-block">Duration</small>
                                    <span class="fw-bold text-dark">{{ $event->duration ?? 'N/A' }}</span>
                                </div>
                            </div>

                            {{-- Location --}}
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon-box me-3 bg-light rounded p-2">
                                    <i class="fas fa-map-marker-alt text-muted"></i>
                                </div>
                                <div>
                                    <small class="text-muted d-block">Location</small>
                                    <span class="fw-bold text-dark">{{ $event->location ?? 'N/A' }}</span>
                                </div>
                            </div>

                            {{-- Attendees --}}
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon-box me-3 bg-light rounded p-2">
                                    <i class="fas fa-users text-muted"></i>
                                </div>
                                <div>
                                    <small class="text-muted d-block">Attendees</small>
                                    <span class="fw-bold text-dark">{{ $event->attendees ?? 'N/A' }} People</span>
                                </div>
                            </div>

                            {{-- Speaker --}}
                            <div class="d-flex align-items-center">
                                <div class="icon-box me-3 bg-light rounded p-2">
                                    <i class="fas fa-user text-muted"></i>
                                </div>
                                <div>
                                    <small class="text-muted d-block">Speaker</small>
                                    <span class="fw-bold text-dark">{{ $event->speaker ?? 'N/A' }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Right Content --}}
            <div class="col-lg-8">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-header bg-white border-bottom d-flex justify-content-between align-items-center py-3">
                        <h5 class="fw-bold mb-0" style="color: #0A245D;">Event Details</h5>
                        <a href="{{ route('event.index') }}" class="btn btn-sm px-3"
                            style="background-color: #74BF1A; color: white;">
                            <i class="fas fa-arrow-left me-1"></i> Back to List
                        </a>
                    </div>

                    <div class="card-body p-4">
                        {{-- Event Picture --}}
                        @if ($event->picture)
                            <div class="mb-4 text-center">
                                <img src="{{ asset($event->picture) }}" class="img-fluid rounded" alt="Event Image">
                            </div>
                        @endif

                        {{-- Short Description --}}
                        @if ($event->short_description)
                            <div class="mb-3">
                                <h6 class="fw-bold">Short Description</h6>
                                <p>{{ $event->short_description }}</p>
                            </div>
                        @endif

                        {{-- Long Description --}}
                        @if ($event->long_description)
                            <div class="mb-3">
                                <h6 class="fw-bold">Long Description</h6>
                                <p>{!! nl2br(e($event->long_description)) !!}</p>
                            </div>
                        @endif

                        {{-- Parameters --}}
                        @if ($event->parameters)
                            <div class="mb-3">
                                <h6 class="fw-bold">Parameters</h6>
                                <ul class="ms-3">
                                    @foreach (is_array($event->parameters) ? $event->parameters : explode("\n", $event->parameters) as $param)
                                        <li>{{ trim($param) }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        {{-- Why Attend --}}
                        @if ($event->why_attend)
                            <div class="mb-3">
                                <h6 class="fw-bold">Why Attend</h6>
                                <ul class="ms-3">
                                    @foreach (is_array($event->why_attend) ? $event->why_attend : explode("\n", $event->why_attend) as $point)
                                        <li>{{ trim($point) }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>

                    <div class="card-footer bg-white border-top text-end py-3">
                        <a href="{{ route('event.edit', $event->id) }}" class="btn btn-primary btn-sm px-4">
                            <i class="fas fa-edit me-1"></i> Edit Event
                        </a>
                        <button class="btn btn-outline-secondary btn-sm me-2">
                            <i class="fas fa-print me-1"></i> Print Details
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .icon-box {
            width: 40px;
            height: 40px;
            text-align: center;
        }

        .card {
            border-radius: 12px;
        }

        .bg-light {
            background-color: #f8f9fa !important;
        }

        h2,
        h4,
        h5,
        h6 {
            letter-spacing: -0.5px;
        }
    </style>
@endsection
