@extends('layouts.admin')
@section('content')
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">IELTS Courses</h5>
                <a href="{{ route('ielts-courses.create') }}" class="btn btn-success btn-sm">Add Course</a>
            </div>
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <div class="table-responsive">
                    <table class="table table-striped table-bordered first">
                        <thead>
                            <tr>
                                <th width="50">#</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th width="110">Features</th>
                                <th width="110">Status</th>
                                <th width="110">Order</th>
                                <th width="100" class="text-center">Edit</th>
                                <th width="100" class="text-center">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($courses as $index => $course)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $course->title }}</td>
                                    <td>{{ \Illuminate\Support\Str::limit($course->short_description, 100) }}</td>
                                    <td>{{ count($course->features ?? []) }}</td>
                                    <td>
                                        @if ($course->is_active)
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-secondary">Inactive</span>
                                        @endif
                                    </td>
                                    <td>{{ $course->sort_order }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('ielts-courses.edit', $course->id) }}"
                                            class="btn btn-primary btn-sm">Edit</a>
                                    </td>
                                    <td class="text-center">
                                        <form action="{{ route('ielts-courses.destroy', $course->id) }}" method="POST"
                                            style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                onclick="return confirm('Are you sure you want to delete this course?')"
                                                class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="text-center">No courses found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
