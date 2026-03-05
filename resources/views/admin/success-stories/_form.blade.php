@php
    $isEdit = isset($story);
    $tagsValue = old('tags', $isEdit ? implode(', ', $story->tags ?? []) : '');
@endphp

<form action="{{ $isEdit ? route('admin.success-stories.update') : route('admin.success-stories.store') }}" method="POST"
    enctype="multipart/form-data">
    @csrf
    @if ($isEdit)
        <input type="hidden" name="id" value="{{ $story->id }}">
    @endif

    <div class="row g-3">
        <div class="col-md-8 mb-3">
            <label class="form-label fw-semibold">Title</label>
            <input type="text" name="title" value="{{ old('title', $story->title ?? '') }}"
                class="form-control form-control-lg">
        </div>
        <div class="col-md-4 mb-3">
            <label class="form-label fw-semibold">Status *</label>
            <select name="status" class="form-control form-control-lg" required>
                <option value="draft" {{ old('status', $story->status ?? 'draft') === 'draft' ? 'selected' : '' }}>Draft</option>
                <option value="published" {{ old('status', $story->status ?? '') === 'published' ? 'selected' : '' }}>Published
                </option>
            </select>
        </div>

        <div class="col-md-4 mb-3">
            <label class="form-label fw-semibold">Client Name</label>
            <input type="text" name="client_name" value="{{ old('client_name', $story->client_name ?? '') }}"
                class="form-control form-control-lg">
        </div>
        <div class="col-md-2 mb-3 d-flex align-items-end">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="1" id="is_anonymous" name="is_anonymous"
                    {{ old('is_anonymous', $story->is_anonymous ?? false) ? 'checked' : '' }}>
                <label class="form-check-label" for="is_anonymous">Anonymous</label>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <label class="form-label fw-semibold">Country</label>
            <input type="text" name="country" value="{{ old('country', $story->country ?? '') }}"
                class="form-control form-control-lg">
        </div>
        <div class="col-md-3 mb-3">
            <label class="form-label fw-semibold">Visa Type</label>
            <input type="text" name="visa_type" value="{{ old('visa_type', $story->visa_type ?? '') }}"
                class="form-control form-control-lg">
        </div>

        <div class="col-md-4 mb-3">
            <label class="form-label fw-semibold">Approval Status</label>
            <input type="text" name="approval_status" value="{{ old('approval_status', $story->approval_status ?? '') }}"
                class="form-control form-control-lg" placeholder="Approved / Refused / Appeal Won">
        </div>
        <div class="col-md-4 mb-3">
            <label class="form-label fw-semibold">Approval Date</label>
            <input type="date" name="approval_date"
                value="{{ old('approval_date', isset($story) && $story->approval_date ? $story->approval_date->format('Y-m-d') : '') }}"
                class="form-control form-control-lg">
        </div>
        <div class="col-md-2 mb-3">
            <label class="form-label fw-semibold">Processing Days</label>
            <input type="number" min="0" name="processing_time_days"
                value="{{ old('processing_time_days', $story->processing_time_days ?? '') }}" class="form-control form-control-lg">
        </div>
        <div class="col-md-2 mb-3">
            <label class="form-label fw-semibold">Time Text</label>
            <input type="text" name="processing_time_text"
                value="{{ old('processing_time_text', $story->processing_time_text ?? '') }}" class="form-control form-control-lg"
                placeholder="e.g. 2 months">
        </div>

        <div class="col-md-12 mb-3">
            <label class="form-label fw-semibold">Case Summary</label>
            <textarea name="case_summary" rows="3" class="form-control form-control-lg">{{ old('case_summary', $story->case_summary ?? '') }}</textarea>
        </div>

        <div class="col-md-12 mb-3">
            <label class="form-label fw-semibold">Full Story (Rich Text)</label>
            <textarea name="full_story" id="full_story_editor" rows="8" class="form-control form-control-lg">{{ old('full_story', $story->full_story ?? '') }}</textarea>
        </div>

        <div class="col-md-4 mb-3">
            <label class="form-label fw-semibold">Cover Image</label>
            <input type="file" name="cover_image" class="form-control form-control-lg" accept=".jpg,.jpeg,.png,.webp">
            @if ($isEdit && $story->cover_image)
                <img src="{{ asset($story->cover_image) }}" alt="Cover" class="mt-2 rounded" style="width: 100px; height: 70px; object-fit: cover;">
            @endif
        </div>
        <div class="col-md-4 mb-3">
            <label class="form-label fw-semibold">Cover Alt Text</label>
            <input type="text" name="cover_image_alt" value="{{ old('cover_image_alt', $story->cover_image_alt ?? '') }}"
                class="form-control form-control-lg">
            <div class="form-check mt-2">
                <input class="form-check-input" type="checkbox" value="1" id="cover_image_blur" name="cover_image_blur"
                    {{ old('cover_image_blur', $story->cover_image_blur ?? false) ? 'checked' : '' }}>
                <label class="form-check-label" for="cover_image_blur">Blur for privacy</label>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <label class="form-label fw-semibold">OpenGraph Image</label>
            <input type="file" name="og_image" class="form-control form-control-lg" accept=".jpg,.jpeg,.png,.webp">
            @if ($isEdit && $story->og_image)
                <img src="{{ asset($story->og_image) }}" alt="OG Image" class="mt-2 rounded"
                    style="width: 100px; height: 70px; object-fit: cover;">
            @endif
        </div>

        <div class="col-md-4 mb-3">
            <label class="form-label fw-semibold">Visa Approval Image</label>
            <input type="file" name="visa_approval_image" class="form-control form-control-lg"
                accept=".jpg,.jpeg,.png,.webp">
            @if ($isEdit && $story->visa_approval_image)
                <img src="{{ asset($story->visa_approval_image) }}" alt="Visa Approval" class="mt-2 rounded"
                    style="width: 100px; height: 70px; object-fit: cover;">
            @endif
        </div>
        <div class="col-md-4 mb-3">
            <label class="form-label fw-semibold">Visa Approval Alt Text</label>
            <input type="text" name="visa_approval_image_alt"
                value="{{ old('visa_approval_image_alt', $story->visa_approval_image_alt ?? '') }}"
                class="form-control form-control-lg">
            <div class="form-check mt-2">
                <input class="form-check-input" type="checkbox" value="1" id="visa_approval_image_blur"
                    name="visa_approval_image_blur"
                    {{ old('visa_approval_image_blur', $story->visa_approval_image_blur ?? false) ? 'checked' : '' }}>
                <label class="form-check-label" for="visa_approval_image_blur">Blur for privacy</label>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <label class="form-label fw-semibold">Gallery Images (Multiple)</label>
            <input type="file" name="gallery_images[]" multiple class="form-control form-control-lg"
                accept=".jpg,.jpeg,.png,.webp">
            <div class="form-check mt-2">
                <input class="form-check-input" type="checkbox" value="1" id="gallery_blur_all" name="gallery_blur_all"
                    {{ old('gallery_blur_all') ? 'checked' : '' }}>
                <label class="form-check-label" for="gallery_blur_all">Blur all gallery images</label>
            </div>
            @if ($isEdit && !empty($story->gallery_images))
                <small class="text-muted d-block mt-1">Uploading new gallery replaces existing gallery.</small>
            @endif
        </div>

        <div class="col-md-12 mb-3">
            <label class="form-label fw-semibold">Gallery Alt Texts (one per line, same order as selected files)</label>
            <textarea name="gallery_alt_texts_text" rows="3" class="form-control form-control-lg"
                placeholder="Line 1 = image 1 alt text&#10;Line 2 = image 2 alt text">{{ old('gallery_alt_texts_text') }}</textarea>
        </div>

        <div class="col-md-4 mb-3">
            <label class="form-label fw-semibold">Rating (1-5)</label>
            <input type="number" min="1" max="5" name="rating" value="{{ old('rating', $story->rating ?? '') }}"
                class="form-control form-control-lg">
        </div>
        <div class="col-md-8 mb-3">
            <label class="form-label fw-semibold">Tags (comma separated)</label>
            <input type="text" name="tags" value="{{ $tagsValue }}" class="form-control form-control-lg"
                placeholder="No Travel History, Gap Years, Refusal Overturned">
        </div>

        <div class="col-md-12 mb-3">
            <label class="form-label fw-semibold">Testimonial Quote</label>
            <textarea name="testimonial_quote" rows="2" class="form-control form-control-lg">{{ old('testimonial_quote', $story->testimonial_quote ?? '') }}</textarea>
        </div>

        <div class="col-md-4 mb-3 d-flex align-items-end">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="1" id="documents_verified" name="documents_verified"
                    {{ old('documents_verified', $story->documents_verified ?? false) ? 'checked' : '' }}>
                <label class="form-check-label" for="documents_verified">Documents Verified</label>
            </div>
        </div>
        <div class="col-md-4 mb-3 d-flex align-items-end">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="1" id="featured" name="featured"
                    {{ old('featured', $story->featured ?? false) ? 'checked' : '' }}>
                <label class="form-check-label" for="featured">Featured Story</label>
            </div>
        </div>

        <div class="col-md-6 mb-3">
            <label class="form-label fw-semibold">Meta Title</label>
            <input type="text" name="meta_title" value="{{ old('meta_title', $story->meta_title ?? '') }}"
                class="form-control form-control-lg">
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label fw-semibold">Meta Description</label>
            <textarea name="meta_description" rows="2" class="form-control form-control-lg">{{ old('meta_description', $story->meta_description ?? '') }}</textarea>
        </div>
    </div>

    <div class="mt-4 text-center">
        <button type="submit" class="btn btn-lg shadow-sm"
            style="background-color: #74BF1A; color: white; padding: 12px 60px; font-weight: 600; border-radius: 30px;">
            {{ $isEdit ? 'Update Story' : 'Create Story' }}
        </button>
    </div>
</form>

<script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#full_story_editor'), {
            toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote',
                'insertTable', 'undo', 'redo'
            ]
        })
        .catch(error => {
            console.error(error);
        });
</script>
