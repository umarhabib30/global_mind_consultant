@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="card shadow-lg rounded-lg border-0">
        <!-- Card Header -->
        <div class="card-header d-flex justify-content-between align-items-center" style="background-color: #0A245D;">
            <h5 class="text-white mb-0">Edit Event</h5>
            <a href="{{ url('admin/event/index') }}" class="btn" style="background-color: #74BF1A; color: white; font-weight: 600;">Back to Events</a>
        </div>

        <!-- Card Body -->
        <div class="card-body p-5">
            <form action="{{ route('event.update') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $event->id }}">

                <div class="row g-4">

                  <div class="col-md-6 mb-4">
    <label for="title" class="form-label fw-semibold">Title</label>
    <input id="title" type="text" class="form-control form-control-lg shadow-sm rounded" name="title" value="{{ $event->title }}" required>
</div>

<div class="col-md-6 mb-4">
    <label for="person" class="form-label fw-semibold">Person</label>
    <input id="person" type="text" class="form-control form-control-lg shadow-sm rounded" name="person" value="{{ $event->person }}" required>
</div>

<div class="col-md-6 mb-4">
    <label for="date" class="form-label fw-semibold">Date</label>
    <input id="date" type="date" class="form-control form-control-lg shadow-sm rounded" name="date" value="{{ $event->date }}" required>
</div>

<div class="col-md-6 mb-4">
    <label for="time" class="form-label fw-semibold">Time</label>
    <input id="time" type="time" class="form-control form-control-lg shadow-sm rounded" name="time" value="{{ $event->time }}" required>
</div>

<div class="col-md-6 mb-4">
    <label for="duration" class="form-label fw-semibold">Duration</label>
    <input id="duration" type="text" class="form-control form-control-lg shadow-sm rounded" name="duration" value="{{ $event->duration }}" placeholder="e.g., 2 hours">
</div>

<div class="col-md-6 mb-4">
    <label for="location" class="form-label fw-semibold">Location</label>
    <input id="location" type="text" class="form-control form-control-lg shadow-sm rounded" name="location" value="{{ $event->location }}" required>
</div>

<div class="col-md-12 mb-4">
    <label for="description" class="form-label fw-semibold">Description</label>
    <textarea id="description" class="form-control form-control-lg shadow-sm rounded" name="description" rows="4">{{ $event->description }}</textarea>
</div>

<div class="col-md-6 mb-4">
    <label for="status" class="form-label fw-semibold">Status</label>
    <select id="status" name="status" class="form-control form-control-lg shadow-sm rounded">
        <option value="scheduled" {{ $event->status == 'scheduled' ? 'selected' : '' }}>Scheduled</option>
        <option value="in_progress" {{ $event->status == 'in_progress' ? 'selected' : '' }}>In Progress</option>
        <option value="completed" {{ $event->status == 'completed' ? 'selected' : '' }}>Completed</option>
        <option value="cancelled" {{ $event->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
    </select>
</div>

<div class="col-md-6 mb-4">
    <label for="attendees" class="form-label fw-semibold">Attendees</label>
    <input id="attendees" type="number" class="form-control form-control-lg shadow-sm rounded" name="attendees" value="{{ $event->attendees }}" min="0">
</div>


                </div>

                <div class="mt-5 text-center">
                    <button type="submit" class="btn btn-lg shadow" style="background-color: #74BF1A; color: white; font-weight: 600; padding: 12px 50px; transition: 0.3s;"
                        onmouseover="this.style.backgroundColor='#5DA114'" onmouseout="this.style.backgroundColor='#74BF1A'">
                        Update Event
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
