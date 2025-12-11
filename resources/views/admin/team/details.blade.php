@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="card shadow-lg rounded-lg border-0">

            <!-- Card Header -->
            <div class="card-header d-flex justify-content-between align-items-center" style="background-color: #0A245D;">
                <h5 class="text-white mb-0">Team Member Details</h5>
                <a href="{{ url('admin/team/index') }}" class="btn"
                    style="background-color: #74BF1A; color: white; font-weight: 600;">
                    Back to Team
                </a>
            </div>

            <!-- Card Body -->
            <div class="card-body p-5">
                <div class="row g-4">

                    <!-- Name -->
                    <div class="col-md-6 mb-4">
                        <label class="form-label fw-semibold ">Name</label>
                        <div class="form-control form-control-lg shadow-sm rounded bg-light">{{ $team->name }}</div>
                    </div>

                    <!-- Email -->
                    <div class="col-md-6 mb-4">
                        <label class="form-label fw-semibold ">Email</label>
                        <div class="form-control form-control-lg shadow-sm rounded bg-light">{{ $team->email }}</div>
                    </div>

                    <!-- Phone -->
                    <div class="col-md-6 mb-4">
                        <label class="form-label fw-semibold ">Phone</label>
                        <div class="form-control form-control-lg shadow-sm rounded bg-light">{{ $team->phone }}</div>
                    </div>

                    <!-- Role -->
                    <div class="col-md-6 mb-4">
                        <label class="form-label fw-semibold ">Role</label>
                        <div class="form-control form-control-lg shadow-sm rounded bg-light">{{ $team->role }}</div>
                    </div>

                    <!-- Role Details -->
                    <div class="col-md-12 mb-4">
                        <label class="form-label fw-semibold ">Role Details</label>
                        <div class="form-control form-control-lg shadow-sm rounded bg-light">{{ $team->role_details }}</div>
                    </div>

                    <!-- Bio -->
                    <div class="col-md-12 mb-4">
                        <label class="form-label fw-semibold ">Bio</label>
                        <div class="form-control form-control-lg shadow-sm rounded bg-light" style="min-height:120px;">
                            {{ $team->bio }}
                        </div>
                    </div>

                    <!-- Social Links -->
                    <div class="col-md-4 mb-4">
                        <label class="form-label fw-semibold ">LinkedIn</label>
                        <div class="form-control form-control-lg shadow-sm rounded bg-light">{{ $team->linkedin }}</div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <label class="form-label fw-semibold ">Facebook</label>
                        <div class="form-control form-control-lg shadow-sm rounded bg-light">{{ $team->facebook }}</div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <label class="form-label fw-semibold ">Instagram</label>
                        <div class="form-control form-control-lg shadow-sm rounded bg-light">{{ $team->instagram }}</div>
                    </div>

                    <!-- Experience -->
                    <div class="col-md-4 mb-4">
                        <label class="form-label fw-semibold ">Experience (Years)</label>
                        <div class="form-control form-control-lg shadow-sm rounded bg-light">{{ $team->experience_years }}
                        </div>
                    </div>

                    <!-- Education -->
                    <div class="col-md-4 mb-4">
                        <label class="form-label fw-semibold ">Education</label>
                        <div class="form-control form-control-lg shadow-sm rounded bg-light">{{ $team->education }}</div>
                    </div>

                    <!-- Specialization -->
                    <div class="col-md-4 mb-4">
                        <label class="form-label fw-semibold ">Specialization</label>
                        <div class="form-control form-control-lg shadow-sm rounded bg-light">{{ $team->specialization }}
                        </div>
                    </div>

                    <!-- Status -->
                    <div class="col-md-6 mb-4">
                        <label class="form-label fw-semibold ">Status</label>
                        <div class="form-control form-control-lg shadow-sm rounded bg-light">
                            @if ($team->status === 'active')
                                <span class="badge bg-success text-white px-3 py-2">Active</span>
                            @else
                                <span class="badge bg-danger text-white px-3 py-2">Inactive</span>
                            @endif
                        </div>
                    </div>

                    <!-- Profile Image -->
                    <div class="col-md-6 mb-4">
                        <label class="form-label fw-semibold ">Profile Image</label>
                        <div class="p-3 bg-light rounded shadow-sm">
                            @if ($team->image)
                                <img src="{{ asset($team->image) }}" width="130" height="130"
                                    class="rounded shadow-sm border">
                            @else
                                <div class="text-muted">No Image</div>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
