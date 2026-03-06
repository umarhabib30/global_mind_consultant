@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="card shadow-lg rounded-lg border-0">
            <div class="card-header d-flex justify-content-between align-items-center" style="background-color: #0A245D;">
                <h5 class="text-white mb-0">Edit Destination</h5>
                <a href="{{ route('destination.index') }}" class="btn"
                    style="background-color: #74BF1A; color: white; font-weight: 600;">
                    Back to Destinations
                </a>
            </div>

            <div class="card-body p-5">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        Please fix the highlighted fields and try again.
                    </div>
                @endif

                <form action="{{ route('destination.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" value="{{ $destination->id }}">

                    <div class="row g-4">
                        <div class="col-md-6 mb-4">
                            <label for="title" class="form-label fw-semibold">Title</label>
                            <input id="title" type="text" class="form-control form-control-lg shadow-sm rounded"
                                name="title" value="{{ old('title', $destination->title) }}" required>
                            @error('title')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-4">
                            <label for="pic" class="form-label fw-semibold">Picture</label>
                            <input id="pic" type="file" class="form-control form-control-lg shadow-sm rounded"
                                name="pic">
                            @error('pic')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror

                            @if ($destination->pic)
                                <div class="mt-3">
                                    <img src="{{ asset($destination->pic) }}" alt="{{ $destination->title }}"
                                        class="rounded shadow-sm" width="120" height="80" style="object-fit: cover;">
                                </div>
                            @endif
                        </div>

                        <div class="col-md-12 mb-4">
                            <label for="description" class="form-label fw-semibold">Description</label>
                            <textarea id="description" class="form-control form-control-lg shadow-sm rounded" name="description" rows="5" required>{{ old('description', $destination->description) }}</textarea>
                            @error('description')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="mt-5 text-center">
                        <button type="submit" class="btn btn-lg shadow"
                            style="background-color: #74BF1A; color: white; font-weight: 600; padding: 12px 50px;">
                            Update Destination
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

