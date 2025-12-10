@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <!-- Card Header -->
        <div class="card-header d-flex justify-content-between align-items-center" style="background-color: #0A245D; color: white;">
            <h5 class="mb-0 text-white">Team Members</h5>
            <a href="{{ url('admin/team/create') }}" class="btn" style="background-color: #74BF1A; color: white;">
                Add Team Member
            </a>
        </div>

        <!-- Card Body -->
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-striped table-bordered mb-0">
                    <thead style="background-color: #74BF1A; color: white;">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Role</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th colspan="3" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($teams as $team)
                            <tr>
                                <td>{{ $team->name }}</td>
                                <td>{{ $team->email }}</td>
                                <td>{{ $team->phone }}</td>
                                <td>{{ $team->role }}</td>
                                <td>
                                    @if ($team->image)
                                        <img src="{{ asset($team->image) }}" alt="{{ $team->name }}" class="rounded-circle" width="50" height="50">
                                    @else
                                        <span class="text-muted">No Image</span>
                                    @endif
                                </td>
                                <td>
                                    @if($team->status === 'active')
                                        <span class="badge bg-success text-white">{{ $team->status }}</span>
                                    @else
                                        <span class="badge bg-danger text-white">{{ $team->status }}</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ url('admin/team/edit', $team->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                </td>
                                <td>
                                    <a href="{{ url('admin/team/destroy', $team->id) }}"
                                       onclick="return confirm('Are you sure you want to delete this team member?')"
                                       class="btn btn-danger btn-sm">Delete</a>
                                </td>
                                <td>
                                    <a href="{{ url('admin/team/details', $team->id) }}" class="btn btn-info btn-sm" style="background-color: #0A245D; color: white;">Details</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
