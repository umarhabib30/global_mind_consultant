@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="card shadow-lg rounded-lg border-0">

            <!-- Card Header -->
            <div class="card-header d-flex justify-content-between align-items-center" style="background-color: #0A245D;">
                <h5 class="text-white mb-0">Edit University</h5>
                <a href="{{ url('admin/university/index') }}" class="btn"
                    style="background-color: #74BF1A; color: white; font-weight: 600;">
                    Back to Universities
                </a>
            </div>

            <!-- Card Body -->
            <div class="card-body p-5">
                <form action="{{ route('university.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{ $university->id }}">

                    <div class="row g-4">

                        <!-- Name + Logo in one line -->
                        <div class="col-md-6 mb-4">
                            <label for="name" class="form-label fw-semibold">University Name</label>
                            <input id="name" type="text" class="form-control form-control-lg shadow-sm rounded"
                                name="name" value="{{ $university->name }}" required>
                        </div>

                        <div class="col-md-6 mb-4">
                            <label for="country" class="form-label fw-semibold">Country</label>
                            <input id="country" type="text" class="form-control form-control-lg shadow-sm rounded"
                                name="country" value="{{ $university->country }}" required>
                        </div>

                        <div class="col-md-6 mb-4">
                            <label for="image" class="form-label fw-semibold">University Logo</label>
                            <input id="image" type="file" class="form-control form-control-lg shadow-sm rounded"
                                name="image">

                            @if ($university->image)
                                <div class="mt-3">
                                    <img src="{{ asset($university->image) }}" alt="University Logo"
                                        class="rounded shadow-sm" width="100" height="100">
                                </div>
                            @endif
                        </div>

                        <!-- Description Below -->
                        <div class="col-md-12 mb-4">
                            <label for="description" class="form-label fw-semibold">Description</label>
                            <textarea id="description" class="form-control form-control-lg shadow-sm rounded" name="description" rows="4">{{ $university->description }}</textarea>
                        </div>

                        <div class="col-md-6 mb-4">
                            <label for="button_text" class="form-label fw-semibold">Button Text</label>
                            <input id="button_text" type="text" class="form-control form-control-lg shadow-sm rounded"
                                name="button_text" value="{{ $university->button_text }}">
                        </div>

                        <div class="col-md-6 mb-4">
                            <label for="button_link" class="form-label fw-semibold">Button Link</label>
                            <input id="button_link" type="text" class="form-control form-control-lg shadow-sm rounded"
                                name="button_link" value="{{ $university->button_link }}">
                        </div>

                    </div>

                    <div class="mt-5 text-center">
                        <button type="submit" class="btn btn-lg shadow"
                            style="background-color: #74BF1A; color: white; font-weight: 600; padding: 12px 50px; transition: 0.3s;"
                            onmouseover="this.style.backgroundColor='#5DA114'"
                            onmouseout="this.style.backgroundColor='#74BF1A'">
                            Update University
                        </button>
                    </div>

                </form>
            </div>

        </div>
    </div>
@endsection
