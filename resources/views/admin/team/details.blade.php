@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Team Member Details</h5>
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-4 text-center">
                            @if ($team->image)
                                <img src="{{ asset($team->image) }}" alt="{{ $team->name }}" class="img-fluid rounded-circle mb-3" width="200" height="200">
                            @else
                                <span class="text-muted">No Image Available</span>
                            @endif
                        </div>

                        <div class="col-md-8">
                            <table class="table table-bordered">
                                <tr>
                                    <th>Name</th>
                                    <td>{{ $team->name }}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{ $team->email }}</td>
                                </tr>
                                <tr>
                                    <th>Phone</th>
                                    <td>{{ $team->phone }}</td>
                                </tr>
                                <tr>
                                    <th>Role</th>
                                    <td>{{ $team->role }}</td>
                                </tr>
                                <tr>
                                    <th>Role Details</th>
                                    <td>{{ $team->role_details }}</td>
                                </tr>
                                <tr>
                                    <th>Bio</th>
                                    <td>{{ $team->bio }}</td>
                                </tr>
                                <tr>
                                    <th>LinkedIn</th>
                                    <td>
                                        @if ($team->linkedin)
                                            <a href="{{ $team->linkedin }}" target="_blank">{{ $team->linkedin }}</a>
                                        @else
                                            <span class="text-muted">N/A</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Facebook</th>
                                    <td>
                                        @if ($team->facebook)
                                            <a href="{{ $team->facebook }}" target="_blank">{{ $team->facebook }}</a>
                                        @else
                                            <span class="text-muted">N/A</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Instagram</th>
                                    <td>
                                        @if ($team->instagram)
                                            <a href="{{ $team->instagram }}" target="_blank">{{ $team->instagram }}</a>
                                        @else
                                            <span class="text-muted">N/A</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Experience (Years)</th>
                                    <td>{{ $team->experience_years ?? 'N/A' }}</td>
                                </tr>
                                <tr>
                                    <th>Education</th>
                                    <td>{{ $team->education ?? 'N/A' }}</td>
                                </tr>
                                <tr>
                                    <th>Specialization</th>
                                    <td>{{ $team->specialization ?? 'N/A' }}</td>
                                </tr>
                              <tr>
    <th>Status</th>
    <td>
        @if ((int) $team->status === 1)
            <span class="badge bg-success">Active</span>
        @else
            <span class="badge bg-danger">Inactive</span>
        @endif
    </td>
</tr>

                            </table>
                        </div>
                    </div>

                </div>
                <div class="card-footer text-end">

                    <a href="{{ url('admin/team/index') }}" class="btn btn-secondary">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
