@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="card shadow-lg rounded-lg border-0">
            <div class="card-header text-white d-flex justify-content-between align-items-center"
                style="background-color: #0A245D;">
                <h5 class="mb-0 text-white">Add Destination</h5>
                <a href="{{ route('destination.index') }}" class="btn btn-success btn-sm" style="font-weight: 600;">
                    Back to Destinations
                </a>
            </div>

            <div class="card-body p-4">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        Please fix the highlighted fields and try again.
                    </div>
                @endif

                <form action="{{ route('destination.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row g-4">
                        <div class="col-md-6">
                            <label for="title" class="form-label fw-semibold">Title</label>
                            <input id="title" type="text" class="form-control form-control-lg shadow-sm rounded"
                                name="title" value="{{ old('title') }}" required>
                            @error('title')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="pic" class="form-label fw-semibold">Picture</label>
                            <input id="pic" type="file" class="form-control form-control-lg shadow-sm rounded"
                                name="pic">
                            @error('pic')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-12">
                            <label for="description" class="form-label fw-semibold">Description</label>
                            <textarea id="description" class="form-control form-control-lg shadow-sm rounded" name="description" rows="5" required>{{ old('description') }}</textarea>
                            @error('description')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="mt-4 text-center">
                        <button type="submit" class="btn"
                            style="background-color: #74BF1A; color: white; padding: 10px 40px; font-weight: 600;">
                            Save Destination
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

