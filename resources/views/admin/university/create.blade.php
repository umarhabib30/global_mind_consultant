@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="card shadow-lg rounded-lg border-0">

            <!-- Card Header -->
            <div class="card-header text-white d-flex justify-content-between align-items-center"
                style="background-color: #0A245D;">
                <h5 class="mb-0 text-white">Add University</h5>
                <a href="{{ route('university.index') }}" class="btn btn-success btn-sm" style="font-weight: 600;">
                    Back to Universities
                </a>
            </div>

            <!-- Card Body -->
            <div class="card-body p-4">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        Please fix the highlighted fields and try again.
                    </div>
                @endif

                <form action="{{ route('university.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row g-4">

                        <!-- Name + Logo on same line -->
                        <div class="col-md-6">
                            <label for="name" class="form-label fw-semibold">University Name</label>
                            <input id="name" type="text" class="form-control form-control-lg shadow-sm rounded"
                                name="name" value="{{ old('name') }}" required>
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="country" class="form-label fw-semibold">Country</label>
                            <input id="country" type="text" class="form-control form-control-lg shadow-sm rounded"
                                name="country" value="{{ old('country') }}" placeholder="e.g. UK, USA, Germany" required>
                            @error('country')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="image" class="form-label fw-semibold">University Logo</label>
                            <input id="image" type="file" class="form-control form-control-lg shadow-sm rounded"
                                name="image">
                            @error('image')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>



                        <div class="col-md-6 mt-10">
                            <label for="button_text" class="form-label fw-semibold">Button Text</label>
                            <input id="button_text" type="text" class="form-control form-control-lg shadow-sm rounded"
                                name="button_text" value="{{ old('button_text') }}" placeholder="Apply Now">
                            @error('button_text')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="button_link" class="form-label fw-semibold">Button Link</label>
                            <input id="button_link" type="text" class="form-control form-control-lg shadow-sm rounded"
                                name="button_link" value="{{ old('button_link') }}"
                                placeholder="/consultation-form or https://example.com">
                            @error('button_link')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <!-- Description field below -->
                        <div class="col-md-12">
                            <label for="description" class="form-label fw-semibold">Description</label>
                            <textarea id="description" class="form-control form-control-lg shadow-sm rounded" name="description" rows="4">{{ old('description') }}</textarea>
                            @error('description')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                    </div>

                    <div class="mt-4 text-center">
                        <button type="submit" class="btn"
                            style="background-color: #74BF1A; color: white; padding: 10px 40px; font-weight: 600;">
                            Save University
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
