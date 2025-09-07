@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Add Event</h5>
            <div class="card-body">
                <form action="{{ route('event.store') }}" method="POST">
                    @csrf
                    <div class="row">

                        <div class="form-group col-md-6">
                            <label for="title" class="col-form-label">Title</label>
                            <input id="title" type="text" class="form-control" name="title" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="person" class="col-form-label">Person</label>
                            <input id="person" type="text" class="form-control" name="person" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="date" class="col-form-label">Date</label>
                            <input id="date" type="date" class="form-control" name="date" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="time" class="col-form-label">Time</label>
                            <input id="time" type="time" class="form-control" name="time" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="duration" class="col-form-label">Duration</label>
                            <input id="duration" type="text" class="form-control" name="duration" placeholder="e.g., 2 hours">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="location" class="col-form-label">Location</label>
                            <input id="location" type="text" class="form-control" name="location" required>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="description" class="col-form-label">Description</label>
                            <textarea id="description" class="form-control" name="description" rows="3"></textarea>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="status" class="col-form-label">Status</label>
                            <select id="status" name="status" class="form-control">
                                <option value="scheduled">Scheduled</option>
                                <option value="in_progress">In Progress</option>
                                <option value="completed">Completed</option>
                                <option value="cancelled">Cancelled</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="attendees" class="col-form-label">Attendees</label>
                            <input id="attendees" type="number" class="form-control" name="attendees" value="0" min="0">
                        </div>

                    </div>

                    <button type="submit" class="btn btn-primary px-5">Save Event</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
