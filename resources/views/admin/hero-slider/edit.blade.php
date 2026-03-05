@extends('layouts.admin')

@section('content')
    <div class="container-fluid mb-5">
        <div class="card shadow-lg rounded-lg border-0">
            <div class="card-header text-white d-flex justify-content-between align-items-center"
                style="background-color: #0A245D;">
                <h5 class="mb-0 text-white">Edit Hero Slide</h5>
                <a href="{{ route('hero-slider.index') }}" class="btn btn-success btn-sm">Back to Slider</a>
            </div>

            <div class="card-body p-4">
                <form action="{{ route('hero-slider.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" value="{{ $slide->id }}">

                    <div class="row g-3">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">Title</label>
                            <input type="text" name="title" value="{{ old('title', $slide->title) }}"
                                class="form-control form-control-lg" required>
                            @error('title')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">Highlight Text</label>
                            <input type="text" name="highlight_text"
                                value="{{ old('highlight_text', $slide->highlight_text) }}"
                                class="form-control form-control-lg" placeholder="Optional green highlighted text">
                            @error('highlight_text')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-12 mb-3">
                            <label class="form-label fw-semibold">Description</label>
                            <textarea name="description" rows="4" class="form-control form-control-lg">{{ old('description', $slide->description) }}</textarea>
                            @error('description')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">Button Text</label>
                            <input type="text" name="button_text"
                                value="{{ old('button_text', $slide->button_text) }}" class="form-control form-control-lg">
                            @error('button_text')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">Button Link</label>
                            <input type="text" name="button_link"
                                value="{{ old('button_link', $slide->button_link) }}" class="form-control form-control-lg"
                                placeholder="/consultation-form or https://example.com">
                            @error('button_link')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">Background Image</label>
                            <input type="file" name="background_image" class="form-control form-control-lg"
                                accept=".jpg,.jpeg,.png,.webp">
                            @if ($slide->background_image)
                                <div class="mt-2">
                                    <img src="{{ asset($slide->background_image) }}" alt="Current Slide"
                                        style="width: 120px; height: 70px; object-fit: cover; border-radius: 6px;">
                                </div>
                            @endif
                            @error('background_image')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-3 mb-3">
                            <label class="form-label fw-semibold">Sort Order</label>
                            <input type="number" name="sort_order" value="{{ old('sort_order', $slide->sort_order) }}"
                                class="form-control form-control-lg" min="0">
                            @error('sort_order')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-3 mb-3">
                            <label class="form-label fw-semibold">Status</label>
                            <select name="is_active" class="form-control form-control-lg" required>
                                <option value="1" {{ old('is_active', (string) $slide->is_active) == '1' ? 'selected' : '' }}>
                                    Active
                                </option>
                                <option value="0" {{ old('is_active', (string) $slide->is_active) == '0' ? 'selected' : '' }}>
                                    Inactive
                                </option>
                            </select>
                            @error('is_active')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="mt-4 text-center">
                        <button type="submit" class="btn btn-lg shadow-sm"
                            style="background-color: #74BF1A; color: white; padding: 12px 60px; font-weight: 600; border-radius: 30px;">
                            Update Slide
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
