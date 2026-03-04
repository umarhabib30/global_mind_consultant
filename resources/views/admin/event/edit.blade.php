@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="card shadow-lg rounded-lg border-0">
        <div class="card-header d-flex justify-content-between align-items-center" style="background-color: #0A245D;">
            <h5 class="text-white mb-0">Edit Event</h5>
            <a href="{{ route('event.index') }}" class="btn" style="background-color: #74BF1A; color: white; font-weight: 600;">Back to Events</a>
        </div>

        <div class="card-body p-5">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('event.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ $event->id }}">

                <div class="row g-4">
                    <div class="col-md-6 mb-4">
                        <label for="title" class="form-label fw-semibold">Title</label>
                        <input id="title" type="text" class="form-control form-control-lg shadow-sm rounded" name="title" value="{{ old('title', $event->title) }}" required>
                    </div>

                    <div class="col-md-6 mb-4">
                        <label for="picture" class="form-label fw-semibold">Event Image (optional)</label>
                        <input id="picture" type="file" class="form-control form-control-lg shadow-sm rounded" name="picture" accept=".jpg,.jpeg,.png,.webp">
                    </div>

                    @if ($event->picture)
                        <div class="col-md-12 mb-2">
                            <img src="{{ asset($event->picture) }}" alt="Event" style="max-height: 120px; border-radius: 8px;">
                        </div>
                    @endif

                    <div class="col-md-12 mb-4">
                        <label for="short_description" class="form-label fw-semibold">Short Description (for cards)</label>
                        <textarea id="short_description" class="form-control form-control-lg shadow-sm rounded" name="short_description" rows="3">{{ old('short_description', $event->short_description) }}</textarea>
                    </div>

                    <div class="col-md-12 mb-4">
                        <label for="long_description" class="form-label fw-semibold">Long Description (for single event page)</label>
                        <textarea id="long_description" class="form-control form-control-lg shadow-sm rounded" name="long_description" rows="6">{{ old('long_description', $event->long_description) }}</textarea>
                    </div>

                    <div class="col-md-4 mb-4">
                        <label for="date" class="form-label fw-semibold">Date</label>
                        <input id="date" type="date" class="form-control form-control-lg shadow-sm rounded" name="date" value="{{ old('date', optional($event->date)->format('Y-m-d')) }}" required>
                    </div>

                    <div class="col-md-4 mb-4">
                        <label for="start_time" class="form-label fw-semibold">Start Time</label>
                        <input id="start_time" type="time" class="form-control form-control-lg shadow-sm rounded" name="start_time" value="{{ old('start_time', $event->start_time) }}">
                    </div>

                    <div class="col-md-4 mb-4">
                        <label for="end_time" class="form-label fw-semibold">End Time</label>
                        <input id="end_time" type="time" class="form-control form-control-lg shadow-sm rounded" name="end_time" value="{{ old('end_time', $event->end_time) }}">
                    </div>

                    <div class="col-md-6 mb-4">
                        <label for="speaker" class="form-label fw-semibold">Speaker</label>
                        <input id="speaker" type="text" class="form-control form-control-lg shadow-sm rounded" name="speaker" value="{{ old('speaker', $event->speaker) }}">
                    </div>

                    <div class="col-md-6 mb-4">
                        <label for="location" class="form-label fw-semibold">Location</label>
                        <input id="location" type="text" class="form-control form-control-lg shadow-sm rounded" name="location" value="{{ old('location', $event->location) }}">
                    </div>

                    <div class="col-md-4 mb-4">
                        <label for="event_type" class="form-label fw-semibold">Event Type</label>
                        <select id="event_type" name="event_type" class="form-control form-control-lg shadow-sm rounded" required>
                            <option value="event" {{ old('event_type', $event->event_type) === 'event' ? 'selected' : '' }}>Event</option>
                            <option value="webinar" {{ old('event_type', $event->event_type) === 'webinar' ? 'selected' : '' }}>Webinar</option>
                        </select>
                    </div>

                    <div class="col-md-4 mb-4">
                        <label for="status" class="form-label fw-semibold">Status</label>
                        <select id="status" name="status" class="form-control form-control-lg shadow-sm rounded" required>
                            <option value="scheduled" {{ old('status', $event->status) === 'scheduled' ? 'selected' : '' }}>Scheduled</option>
                            <option value="in_progress" {{ old('status', $event->status) === 'in_progress' ? 'selected' : '' }}>In Progress</option>
                            <option value="completed" {{ old('status', $event->status) === 'completed' ? 'selected' : '' }}>Completed</option>
                            <option value="cancelled" {{ old('status', $event->status) === 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                        </select>
                    </div>

                    <div class="col-md-4 mb-4">
                        <label for="attendees" class="form-label fw-semibold">Attendees</label>
                        <input id="attendees" type="number" class="form-control form-control-lg shadow-sm rounded" name="attendees" value="{{ old('attendees', $event->attendees) }}" min="0">
                    </div>

                    <div class="col-md-6 mb-4">
                        <label for="parameters" class="form-label fw-semibold">Parameters (one line each)</label>
                        <textarea id="parameters" class="form-control form-control-lg shadow-sm rounded" name="parameters" rows="5">{{ old('parameters', is_array($event->parameters) ? implode("\n", $event->parameters) : '') }}</textarea>
                    </div>

                    <div class="col-md-6 mb-4">
                        <label for="why_attend" class="form-label fw-semibold">Why Attend (one line each)</label>
                        <textarea id="why_attend" class="form-control form-control-lg shadow-sm rounded" name="why_attend" rows="5">{{ old('why_attend', is_array($event->why_attend) ? implode("\n", $event->why_attend) : '') }}</textarea>
                    </div>
                </div>

                <div class="mt-5 text-center">
                    <button type="submit" class="btn btn-lg shadow" style="background-color: #74BF1A; color: white; font-weight: 600; padding: 12px 50px;">
                        Update Event
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
