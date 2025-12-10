@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="card shadow-lg rounded-lg border-0">
        <!-- Card Header -->
        <div class="card-header text-white d-flex justify-content-between align-items-center" style="background-color: #0A245D;">
            <h5 class="mb-0 text-white">Add Team Member</h5>
            <a href="{{ url('/admin/team/index') }}" class="btn btn-success btn-sm" style="font-weight: 600;">Back to Team</a>
        </div>

        <!-- Card Body -->
        <div class="card-body p-4">
            <form action="{{ route('team.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3">

                    <div class="col-md-6  mb-4">
                        <label for="name" class="form-label fw-semibold">Name</label>
                        <input id="name" type="text" class="form-control form-control-lg shadow-sm rounded" name="name" required>
                    </div>

                    <div class="col-md-6  mb-4">
                        <label for="email" class="form-label fw-semibold">Email</label>
                        <input id="email" type="email" class="form-control form-control-lg shadow-sm rounded" name="email" required>
                    </div>

                    <div class="col-md-6  mb-4">
                        <label for="phone" class="form-label fw-semibold">Phone</label>
                        <input id="phone" type="text" class="form-control form-control-lg shadow-sm rounded" name="phone">
                    </div>

                    <div class="col-md-6  mb-4">
                        <label for="role" class="form-label fw-semibold">Role</label>
                        <input id="role" type="text" class="form-control form-control-lg shadow-sm rounded" name="role">
                    </div>

                    <div class="col-md-12 mb-4">
                        <label for="role_details" class="form-label fw-semibold">Role Details</label>
                        <input id="role_details" type="text" class="form-control form-control-lg shadow-sm rounded" name="role_details">
                    </div>

                    <div class="col-md-12 mb-4">
                        <label for="bio" class="form-label fw-semibold">Bio</label>
                        <textarea id="bio" class="form-control form-control-lg shadow-sm rounded" name="bio" rows="3"></textarea>
                    </div>

                    <div class="col-md-4 mb-4">
                        <label for="linkedin" class="form-label fw-semibold">LinkedIn</label>
                        <input id="linkedin" type="text" class="form-control form-control-lg shadow-sm rounded" name="linkedin">
                    </div>

                    <div class="col-md-4 mb-4">
                        <label for="facebook" class="form-label fw-semibold">Facebook</label>
                        <input id="facebook" type="text" class="form-control form-control-lg shadow-sm rounded" name="facebook">
                    </div>

                    <div class="col-md-4 mb-4">
                        <label for="instagram" class="form-label fw-semibold">Instagram</label>
                        <input id="instagram" type="text" class="form-control form-control-lg shadow-sm rounded" name="instagram">
                    </div>

                    <div class="col-md-6  mb-4">
                        <label for="experience_years" class="form-label fw-semibold">Experience (Years)</label>
                        <input id="experience_years" type="number" class="form-control form-control-lg shadow-sm rounded" name="experience_years">
                    </div>

                    <div class="col-md-6  mb-4">
                        <label for="education" class="form-label fw-semibold">Education</label>
                        <input id="education" type="text" class="form-control form-control-lg shadow-sm rounded" name="education">
                    </div>

                    <div class="col-md-6  mb-4">
                        <label for="specialization" class="form-label fw-semibold">Specialization</label>
                        <input id="specialization" type="text" class="form-control form-control-lg shadow-sm rounded" name="specialization">
                    </div>

                  <div class="col-md-6 mb-4">
    <label for="status" class="form-label fw-semibold">Status</label>
    <select id="status" name="status" class="form-select form-control form-control-lg shadow-sm rounded">
        <option value="active" {{ isset($team) && $team->status == 'active' ? 'selected' : '' }}>Active</option>
        <option value="inactive" {{ isset($team) && $team->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
    </select>
</div>


                    <div class="col-md-12 mb-4">
                        <label for="image" class="form-label fw-semibold">Profile Image</label>
                        <input id="image" type="file" class="form-control form-control-lg shadow-sm rounded" name="image">
                    </div>

                </div>

                <div class="mt-4 text-center">
                    <button type="submit" class="btn" style="background-color: #74BF1A; color: white; padding: 10px 40px; font-weight: 600;">
                        Save Team Member
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
