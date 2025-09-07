@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Edit Event</h5>
            <div class="card-body">
                <form action="{{ route('event.update') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $event->id }}">

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label for="title" class="col-form-label">Title</label>
                            <input id="title" type="text" class="form-control" name="title" value="{{ $event->title }}" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="person" class="col-form-label">Person</label>
                            <input id="person" type="text" class="form-control" name="person" value="{{ $event->person }}" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="date" class="col-form-label">Date</label>
                            <input id="date" type="date" class="form-control" name="date" value="{{ $event->date }}" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="time" class="col-form-label">Time</label>
                            <input id="time" type="time" class="form-control" name="time" value="{{ $event->time }}" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="duration" class="col-form-label">Duration</label>
                            <input id="duration" type="text" class="form-control" name="duration" value="{{ $event->duration }}" placeholder="e.g., 2 hours">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="location" class="col-form-label">Location</label>
                            <input id="location" type="text" class="form-control" name="location" value="{{ $event->location }}" required>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="description" class="col-form-label">Description</label>
                            <textarea id="description" class="form-control" name="description" rows="3">{{ $event->description }}</textarea>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="status" class="col-form-label">Status</label>
                            <select id="status" name="status" class="form-control">
                                <option value="scheduled" {{ $event->status == 'scheduled' ? 'selected' : '' }}>Scheduled</option>
                                <option value="in_progress" {{ $event->status == 'in_progress' ? 'selected' : '' }}>In Progress</option>
                                <option value="completed" {{ $event->status == 'completed' ? 'selected' : '' }}>Completed</option>
                                <option value="cancelled" {{ $event->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="attendees" class="col-form-label">Attendees</label>
                            <input id="attendees" type="number" class="form-control" name="attendees" value="{{ $event->attendees }}" min="0">
                        </div>

                    </div>

                    <button type="submit" class="btn btn-primary px-5">Update Event</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
