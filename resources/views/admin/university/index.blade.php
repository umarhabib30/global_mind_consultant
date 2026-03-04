@extends('layouts.admin')
@section('content')
    <div class="row">
        <!-- ============================================================== -->
        <!-- basic table  -->
        <!-- ============================================================== -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
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
                                    <th class="text-center">Action</th>
                                    <th class="text-center">Action</th>
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
                                        <td>
                                            <a href="{{ url('admin/university/edit', $university->id) }}"
                                                class="btn btn-primary btn-sm">Edit</a>
                                        </td>
                                        <td>
                                            <a href="{{ url('admin/university/destroy', $university->id) }}"
                                                onclick="return confirm('Are you sure you want to delete this university?')"
                                                class="btn btn-danger btn-sm">Delete</a>
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
