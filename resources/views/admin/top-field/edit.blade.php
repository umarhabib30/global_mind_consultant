@extends('layouts.admin')

@section('content')
    <div class="container-fluid mb-5">
        <div class="card shadow-lg rounded-lg border-0">
            <div class="card-header text-white d-flex justify-content-between align-items-center"
                style="background-color: #0A245D;">
                <h5 class="mb-0 text-white">Edit Top Field</h5>
                <a href="{{ route('top-field.index') }}" class="btn btn-success btn-sm">Back to Top Fields</a>
            </div>

            <div class="card-body p-4">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('top-field.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{ $field->id }}">

                    <div class="row g-3">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">Title</label>
                            <input type="text" name="title" value="{{ old('title', $field->title) }}"
                                class="form-control form-control-lg" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">Image</label>
                            <input type="file" name="image" class="form-control form-control-lg"
                                accept=".jpg,.jpeg,.png,.webp">
                            @if ($field->image)
                                @php
                                    $imageUrl = \Illuminate\Support\Str::startsWith($field->image, ['http://', 'https://'])
                                        ? $field->image
                                        : asset(ltrim($field->image, '/'));
                                @endphp
                                <div class="mt-2">
                                    <img src="{{ $imageUrl }}" alt="{{ $field->title }}"
                                        style="width: 100px; height: 65px; object-fit: cover; border-radius: 6px;">
                                </div>
                            @endif
                        </div>

                        <div class="col-md-12 mb-3">
                            <label class="form-label fw-semibold">Short Description</label>
                            <textarea name="short_description" rows="3" class="form-control form-control-lg">{{ old('short_description', $field->short_description) }}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label class="form-label fw-semibold">Long Description (Detail Page)</label>
                            <textarea name="long_description" id="long_description_editor" rows="7" class="form-control form-control-lg">{{ old('long_description', $field->long_description) }}</textarea>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label class="form-label fw-semibold">Card Button Text</label>
                            <input type="text" name="button_text"
                                value="{{ old('button_text', $field->button_text ?: 'Discover More') }}"
                                class="form-control form-control-lg">
                        </div>

                        <div class="col-md-4 mb-3">
                            <label class="form-label fw-semibold">Detail CTA Link (Optional)</label>
                            <input type="text" name="button_link" value="{{ old('button_link', $field->button_link) }}"
                                class="form-control form-control-lg">
                        </div>

                        <div class="col-md-2 mb-3">
                            <label class="form-label fw-semibold">Sort Order</label>
                            <input type="number" name="sort_order" value="{{ old('sort_order', $field->sort_order) }}"
                                class="form-control form-control-lg" min="0">
                        </div>

                        <div class="col-md-2 mb-3">
                            <label class="form-label fw-semibold">Status</label>
                            <select name="is_active" class="form-control form-control-lg" required>
                                <option value="1"
                                    {{ old('is_active', (string) $field->is_active) == '1' ? 'selected' : '' }}>
                                    Active
                                </option>
                                <option value="0"
                                    {{ old('is_active', (string) $field->is_active) == '0' ? 'selected' : '' }}>
                                    Inactive
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="mt-4 text-center">
                        <button type="submit" class="btn btn-lg shadow-sm"
                            style="background-color: #74BF1A; color: white; padding: 12px 60px; font-weight: 600; border-radius: 30px;">
                            Update Top Field
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#long_description_editor'), {
                toolbar: [
                    'heading', '|', 'bold', 'italic', 'link',
                    'bulletedList', 'numberedList', '|',
                    'blockQuote', 'insertTable', '|', 'undo', 'redo'
                ]
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
