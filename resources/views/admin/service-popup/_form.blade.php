@php
    $pointItems = old('points', $popup->points ?? ['']);
    if (empty($pointItems)) {
        $pointItems = [''];
    }
@endphp

<div class="row g-3">
    <div class="col-md-6 mb-3">
        <label class="form-label fw-semibold">Heading</label>
        <input type="text" name="heading" value="{{ old('heading', $popup->heading ?? '') }}"
            class="form-control form-control-lg" placeholder="Exclusive Service Offer">
    </div>

    <div class="col-md-6 mb-3">
        <label class="form-label fw-semibold">Sub Heading</label>
        <input type="text" name="subheading" value="{{ old('subheading', $popup->subheading ?? '') }}"
            class="form-control form-control-lg" placeholder="Limited Seats / Free Guidance / New Intake">
    </div>

    <div class="col-md-12 mb-3">
        <label class="form-label fw-semibold">Paragraph</label>
        <textarea name="description" rows="4" class="form-control form-control-lg"
            placeholder="Add short details about the service page offer, support package, or campaign">{{ old('description', $popup->description ?? '') }}</textarea>
    </div>

    <div class="col-md-12 mb-3">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <label class="form-label fw-semibold mb-0">Points</label>
            <button type="button" class="btn btn-sm btn-outline-primary" id="add-service-popup-point">Add Point</button>
        </div>
        <div id="service-popup-points-wrapper">
            @foreach ($pointItems as $pointItem)
                <div class="input-group mb-3 service-popup-point-row">
                    <input type="text" name="points[]" value="{{ $pointItem }}"
                        class="form-control form-control-lg shadow-sm" placeholder="Add one popup point">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-outline-danger remove-service-popup-point">Remove</button>
                    </div>
                </div>
            @endforeach
        </div>
        <small class="text-muted">Optional. Click `Add Point` to add more service popup points.</small>
    </div>

    <div class="col-md-6 mb-3">
        <label class="form-label fw-semibold">Image</label>
        <input type="file" name="image" class="form-control form-control-lg" accept=".jpg,.jpeg,.png,.webp,.gif">
        @if (!empty($popup?->image_url))
            <div class="mt-2">
                <img src="{{ $popup->image_url }}" alt="Service Popup Image"
                    style="width: 110px; height: 90px; object-fit: cover; border-radius: 10px;">
            </div>
        @endif
    </div>

    <div class="col-md-6 mb-3">
        <label class="form-label fw-semibold">Video URL</label>
        <input type="text" name="video_url" value="{{ old('video_url', $popup->video_url ?? '') }}"
            class="form-control form-control-lg" placeholder="https://youtube.com/... or direct mp4 link">
    </div>

    <div class="col-md-6 mb-3">
        <label class="form-label fw-semibold">Button Text</label>
        <input type="text" name="button_text" value="{{ old('button_text', $popup->button_text ?? '') }}"
            class="form-control form-control-lg" placeholder="Explore Offer">
    </div>

    <div class="col-md-6 mb-3">
        <label class="form-label fw-semibold">External Link</label>
        <input type="text" name="button_link" value="{{ old('button_link', $popup->button_link ?? '') }}"
            class="form-control form-control-lg" placeholder="https://example.com/service-offer">
    </div>

    <div class="col-md-3 mb-3">
        <label class="form-label fw-semibold">Facebook Link</label>
        <input type="text" name="facebook_link" value="{{ old('facebook_link', $popup->facebook_link ?? '') }}"
            class="form-control form-control-lg" placeholder="https://facebook.com/...">
    </div>

    <div class="col-md-3 mb-3">
        <label class="form-label fw-semibold">Instagram Link</label>
        <input type="text" name="instagram_link" value="{{ old('instagram_link', $popup->instagram_link ?? '') }}"
            class="form-control form-control-lg" placeholder="https://instagram.com/...">
    </div>

    <div class="col-md-3 mb-3">
        <label class="form-label fw-semibold">YouTube Link</label>
        <input type="text" name="youtube_link" value="{{ old('youtube_link', $popup->youtube_link ?? '') }}"
            class="form-control form-control-lg" placeholder="https://youtube.com/...">
    </div>

    <div class="col-md-3 mb-3">
        <label class="form-label fw-semibold">WhatsApp Link</label>
        <input type="text" name="whatsapp_link" value="{{ old('whatsapp_link', $popup->whatsapp_link ?? '') }}"
            class="form-control form-control-lg" placeholder="https://wa.me/...">
    </div>

    <div class="col-md-6 mb-3">
        <label class="form-label fw-semibold">Load Delay (seconds)</label>
        <input type="number" name="delay_seconds" value="{{ old('delay_seconds', $popup->delay_seconds ?? 2) }}"
            class="form-control form-control-lg" min="1" max="10" placeholder="2">
    </div>

    <div class="col-md-6 mb-3">
        <label class="form-label fw-semibold">Status</label>
        <select name="is_active" class="form-control form-control-lg" required>
            <option value="1" {{ old('is_active', (string) ($popup->is_active ?? '1')) == '1' ? 'selected' : '' }}>Active</option>
            <option value="0" {{ old('is_active', (string) ($popup->is_active ?? '1')) == '0' ? 'selected' : '' }}>Inactive</option>
        </select>
    </div>
</div>

<template id="service-popup-point-template">
    <div class="input-group mb-3 service-popup-point-row">
        <input type="text" name="points[]" class="form-control form-control-lg shadow-sm"
            placeholder="Add one popup point">
        <div class="input-group-append">
            <button type="button" class="btn btn-outline-danger remove-service-popup-point">Remove</button>
        </div>
    </div>
</template>

<script>
    (function() {
        const wrapper = document.getElementById('service-popup-points-wrapper');
        const addButton = document.getElementById('add-service-popup-point');
        const template = document.getElementById('service-popup-point-template');

        if (!wrapper || !addButton || !template) return;

        const bindRemoveButtons = () => {
            wrapper.querySelectorAll('.remove-service-popup-point').forEach((button) => {
                button.onclick = () => {
                    const rows = wrapper.querySelectorAll('.service-popup-point-row');

                    if (rows.length === 1) {
                        const input = rows[0].querySelector('input');
                        if (input) input.value = '';
                        return;
                    }

                    button.closest('.service-popup-point-row')?.remove();
                };
            });
        };

        addButton.addEventListener('click', () => {
            wrapper.appendChild(template.content.cloneNode(true));
            bindRemoveButtons();
        });

        bindRemoveButtons();
    })();
</script>
