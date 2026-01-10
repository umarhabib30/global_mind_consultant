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
                                <th>Role</th>
                                {{-- <th>Company</th>
                                <th>Experience</th> --}}
                                <th>Profile Pic</th>
                                <th>Status</th>
                                <th class="text-center">Edit</th>
                                <th class="text-center">Delete</th>
                                <th class="text-center">Details</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($teams as $team)
                                <tr>
                                    <td>{{ $team->name }}</td>
                                    <td>{{ $team->email }}</td>

                                    <td>{{ $team->role ?? '—' }}</td>
                                    {{-- <td>{{ $team->company_name ?? '—' }}</td>

                                    <td>
                                        @if ($team->work_start_year)
                                            {{ $team->work_start_year }}
                                            @if ($team->work_end_year)
                                                - {{ $team->work_end_year }}
                                            @else
                                                - Present
                                            @endif
                                        @else
                                            —
                                        @endif
                                    </td> --}}

                                    <td>
                                        @if ($team->profile_pic)
                                            <img src="{{ asset($team->profile_pic) }}" alt="{{ $team->name }}"
                                                class="rounded-circle" width="50" height="50"
                                                style="object-fit: cover;">
                                        @else
                                            <span class="text-muted">No Image</span>
                                        @endif
                                    </td>

                                    <td>
                                        @if ($team->status === 'active')
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-danger">Inactive</span>
                                        @endif
                                    </td>

                                    {{-- Edit --}}
                                    <td class="text-center">
                                        <a href="{{ route('team.edit', $team->id) }}" class="btn btn-primary btn-sm">
                                            Edit
                                        </a>
                                    </td>

                                    {{-- Delete --}}
                                    {{-- Delete --}}
                                    <td class="text-center">
                                        <form action="{{ route('team.destroy', $team->id) }}" method="POST"
                                            onsubmit="return confirm('Are you sure you want to delete this team member?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                Delete
                                            </button>
                                        </form>
                                    </td>


                                    {{-- Details --}}
                                    <td class="text-center">
                                        <a href="{{ route('team.show', $team->id) }}" class="btn btn-info btn-sm"
                                            style="background-color:#0A245D; color:#fff;">
                                            Details
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="10" class="text-center text-muted">
                                        No team members found
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
