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
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th class="text-center">Action</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($destinations as $destination)
                                    <tr>
                                        <td>{{ $destination->title }}</td>
                                        <td>{{ $destination->description }}</td>
                                                {{-- <td>
                                                    @if ($university->image)
                                                        <img src="{{ asset($university->image) }}" alt="{{ $university->name }}"
                                                            class="rounded-circle" width="50" height="50">
                                                    @else
                                                        <span class="text-muted">No Image</span>
                                                    @endif
                                                </td> --}}
                                        {{-- <td>
                                            <a href="{{ url('admin/university/edit', $university->id) }}"
                                                class="btn btn-primary btn-sm">Edit</a>
                                        </td>
                                        <td>
                                            <a href="{{ url('admin/university/destroy', $university->id) }}"
                                                onclick="return confirm('Are you sure you want to delete this university?')"
                                                class="btn btn-danger btn-sm">Delete</a>
                                        </td> --}}
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
