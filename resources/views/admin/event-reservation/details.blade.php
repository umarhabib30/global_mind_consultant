@extends('layouts.admin')

@section('content')
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="mb-3">
            <a href="{{ route('admin.event-reservation.index') }}" class="btn btn-sm shadow-sm"
                style="background-color: #0A245D; color: white;">
                <i class="fa fa-arrow-left"></i> Back to List
            </a>
        </div>

        <div class="card shadow-sm border-0">
            <div class="card-header bg-white border-bottom" style="border-left: 5px solid #0A245D;">
                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="mb-0 fw-bold" style="color: #0A245D;">Event Reservation Detail</h3>
                    <span class="text-muted small">ID: #{{ $reservation->id }}</span>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 border-end">
                        <h5 class="mb-4 pb-2 border-bottom fw-bold" style="color: #79BD21;">
                            <i class="fa fa-user-circle me-2"></i>User Information
                        </h5>

                        <div class="mb-4">
                            <label class="small text-uppercase fw-bold text-muted d-block mb-1">Full Name</label>
                            <p class="fs-5 fw-semibold text-dark">{{ $reservation->full_name }}</p>
                        </div>

                        <div class="mb-4">
                            <label class="small text-uppercase fw-bold text-muted d-block mb-1">Email Address</label>
                            <p class="fs-5">
                                <a href="mailto:{{ $reservation->email }}" style="color: #0A245D; text-decoration: none;">
                                    <i class="fa fa-envelope-open me-1 small"></i> {{ $reservation->email }}
                                </a>
                            </p>
                        </div>

                        <div class="mb-4">
                            <label class="small text-uppercase fw-bold text-muted d-block mb-1">Phone Number</label>
                            <p class="fs-5 text-dark"><i class="fa fa-phone me-1 small"></i> {{ $reservation->phone }}</p>
                        </div>

                        <div class="mb-3">
                            <label class="small text-uppercase fw-bold text-muted d-block mb-1">Submitted On</label>
                            <p class="text-muted">{{ $reservation->created_at->format('F d, Y \a\t h:i A') }}</p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <h5 class="mb-4 pb-2 border-bottom fw-bold" style="color: #79BD21;">
                            <i class="fa fa-info-circle me-2"></i>Reservation Details
                        </h5>

                        <div class="mb-4">
                            <label class="small text-uppercase fw-bold text-muted d-block mb-1">Event</label>
                            <p class="fs-5 fw-medium text-dark">{{ $reservation->event->title ?? '-' }}</p>
                        </div>

                        <div class="mb-4">
                            <label class="small text-uppercase fw-bold text-muted d-block mb-1">Event Date</label>
                            <p class="fs-5 fw-medium text-dark">
                                {{ optional($reservation->event?->date)->format('d M Y') ?? '-' }}
                            </p>
                        </div>

                        <div class="mb-4">
                            <label class="small text-uppercase fw-bold text-muted d-block mb-1">Country Interested In</label>
                            <span class="badge px-3 py-2 fs-6" style="background-color: #79BD21; color: white;">
                                {{ strtoupper($reservation->country_interested) }}
                            </span>
                        </div>

                        <div class="mb-4">
                            <label class="small text-uppercase fw-bold text-muted d-block mb-1">Study Level</label>
                            <p class="fs-5 fw-medium text-dark">{{ $reservation->study_level }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-footer bg-light d-flex justify-content-end py-3">
                <form action="{{ route('admin.event-reservation.destroy', $reservation->id) }}" method="POST"
                    onsubmit="return confirm('WARNING: This will permanently delete this record. Continue?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger btn-sm px-4">
                        <i class="fa fa-trash me-1"></i> Delete Reservation
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
