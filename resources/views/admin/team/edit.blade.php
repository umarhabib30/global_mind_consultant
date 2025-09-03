@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Edit Team Member</h5>
                <div class="card-body">
                    <form action="{{ route('team.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $team->id }}">

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name" class="col-form-label">Name</label>
                                <input id="name" type="text" class="form-control" name="name" value="{{ $team->name }}" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="email" class="col-form-label">Email</label>
                                <input id="email" type="email" class="form-control" name="email" value="{{ $team->email }}" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="phone" class="col-form-label">Phone</label>
                                <input id="phone" type="text" class="form-control" name="phone" value="{{ $team->phone }}">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="role" class="col-form-label">Role</label>
                                <input id="role" type="text" class="form-control" name="role" value="{{ $team->role }}">
                            </div>

                            <div class="form-group col-md-12">
                                <label for="role_details" class="col-form-label">Role Details</label>
                                <input id="role_details" type="text" class="form-control" name="role_details" value="{{ $team->role_details }}">
                            </div>

                            <div class="form-group col-md-12">
                                <label for="bio" class="col-form-label">Bio</label>
                                <textarea id="bio" class="form-control" name="bio" rows="3">{{ $team->bio }}</textarea>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="linkedin" class="col-form-label">LinkedIn</label>
                                <input id="linkedin" type="text" class="form-control" name="linkedin" value="{{ $team->linkedin }}">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="facebook" class="col-form-label">Facebook</label>
                                <input id="facebook" type="text" class="form-control" name="facebook" value="{{ $team->facebook }}">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="instagram" class="col-form-label">Instagram</label>
                                <input id="instagram" type="text" class="form-control" name="instagram" value="{{ $team->instagram }}">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="experience_years" class="col-form-label">Experience (Years)</label>
                                <input id="experience_years" type="number" class="form-control" name="experience_years" value="{{ $team->experience_years }}">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="education" class="col-form-label">Education</label>
                                <input id="education" type="text" class="form-control" name="education" value="{{ $team->education }}">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="specialization" class="col-form-label">Specialization</label>
                                <input id="specialization" type="text" class="form-control" name="specialization" value="{{ $team->specialization }}">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="status" class="col-form-label">Status</label>
                                <select id="status" name="status" class="form-control">
                                    <option value="1" {{ $team->status == 1 ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ $team->status == 0 ? 'selected' : '' }}>Inactive</option>
                                </select>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="image" class="col-form-label">Profile Image</label>
                                <input id="image" type="file" class="form-control" name="image">
                                @if ($team->image)
                                    <div class="mt-2">
                                        <img src="{{ asset($team->image) }}" alt="Profile Image" width="80" height="80">
                                    </div>
                                @endif
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary px-5">Update Team Member</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
