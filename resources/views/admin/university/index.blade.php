@extends('layouts.admin')
@section('content')
    <div class="row">
        <!-- ============================================================== -->
        <!-- basic table  -->
        <!-- ============================================================== -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card shadow-sm border-0">
                <div class="card-header d-flex justify-content-between align-items-center"
                    style="background-color: #0A245D;">
                    <h5 class="mb-0 text-white">Universities</h5>
                    <a href="{{ route('university.create') }}" class="btn btn-success btn-sm">Add University</a>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered first">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Country</th>
                                    <th>Description</th>
                                    <th>Logo</th>
                                    <th>Button Text</th>
                                    <th>Button Link</th>
                                    <th class="text-center" style="min-width: 170px;">Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($universities as $university)
                                    <tr>
                                        <td class="font-weight-bold">{{ $university->name }}</td>
                                        <td>
                                            <span class="badge badge-info">{{ $university->country ?: '-' }}</span>
                                        </td>
                                        <td>{{ \Illuminate\Support\Str::limit($university->description, 80) }}</td>
                                        <td>
                                            @if ($university->image)
                                                <img src="{{ asset($university->image) }}" alt="{{ $university->name }}"
                                                    class="rounded-circle" width="50" height="50">
                                            @else
                                                <span class="text-muted">No Image</span>
                                            @endif
                                        </td>
                                        <td>{{ $university->button_text ?: '-' }}</td>
                                        <td>
                                            @if ($university->button_link)
                                                <a href="{{ $university->button_link }}" target="_blank">Open Link</a>
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route('university.edit', $university->id) }}"
                                                class="btn btn-primary btn-sm mr-1">Edit</a>
                                            <form action="{{ route('university.destroy', $university->id) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you sure you want to delete this university?')">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end basic table  -->
        <!-- ============================================================== -->
    </div>

@endsection
