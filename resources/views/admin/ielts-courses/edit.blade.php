@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card shadow-lg rounded-lg border-0">
                <div class="card-header d-flex justify-content-between align-items-center" style="background-color: #0A245D;">
                    <h5 class="text-white mb-0">Edit IELTS Course</h5>
                    <a href="{{ route('ielts-courses.index') }}" class="btn admin-btn admin-btn-secondary admin-btn-sm">
                        Back to Courses
                    </a>
                </div>

                <div class="card-body p-5">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('ielts-courses.update', $course->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        @include('admin.ielts-courses._form', ['course' => $course])

                        <div class="mt-4 text-center">
                            <button type="submit" class="btn admin-btn admin-btn-primary admin-btn-wide">
                                Update Course
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
