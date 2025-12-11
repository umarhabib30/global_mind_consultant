@extends('layouts.admin')
@section('content')
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered first">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Role</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th class="text-center">Action</th>
                                <th class="text-center">Action</th>
                                <th class="text-center">Action</th>
                            </tr>
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
                                            <img src="{{ asset($team->image) }}" alt="{{ $team->name }}"
                                                class="rounded-circle" width="50" height="50">
                                        @else
                                            <span class="text-muted">No Image</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($team->status === 'active')
                                            <span class="badge bg-success text-white">{{ $team->status }}</span>
                                        @else
                                            <span class="badge bg-danger text-white">{{ $team->status }}</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ url('admin/team/edit', $team->id) }}"
                                            class="btn btn-primary btn-sm">Edit</a>
                                    </td>
                                    <td>
                                        <a href="{{ url('admin/team/destroy', $team->id) }}"
                                            onclick="return confirm('Are you sure you want to delete this team member?')"
                                            class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                    <td>
                                        <a href="{{ url('admin/team/details', $team->id) }}" class="btn btn-info btn-sm"
                                            style="background-color: #0A245D; color: white;">Details</a>
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
