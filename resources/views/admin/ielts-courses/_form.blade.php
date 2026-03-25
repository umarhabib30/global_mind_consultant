<div class="row g-4">
    <div class="col-md-6 mb-4">
        <label for="title" class="form-label fw-semibold">Course Title</label>
        <input id="title" type="text" class="form-control form-control-lg shadow-sm rounded" name="title"
            value="{{ old('title', $course->title ?? '') }}" required>
    </div>

    <div class="col-md-6 mb-4">
        <label for="button_text" class="form-label fw-semibold">Button Text</label>
        <input id="button_text" type="text" class="form-control form-control-lg shadow-sm rounded" name="button_text"
            value="{{ old('button_text', $course->button_text ?? 'Enroll Now') }}">
    </div>

    <div class="col-md-12 mb-4">
        <label for="short_description" class="form-label fw-semibold">Short Description</label>
        <textarea id="short_description" class="form-control form-control-lg shadow-sm rounded" name="short_description"
            rows="4" required>{{ old('short_description', $course->short_description ?? '') }}</textarea>
    </div>

    <div class="col-md-12 mb-4">
        @php
            $featureItems = old('features', $course->features ?? ['']);
            if (empty($featureItems)) {
                $featureItems = [''];
            }
        @endphp

        <div class="d-flex justify-content-between align-items-center mb-3">
            <label class="form-label fw-semibold mb-0">Features</label>
            <button type="button" class="btn btn-sm btn-outline-primary" id="add-feature-point">Add Point</button>
        </div>

        <div id="feature-points-wrapper">
            @foreach ($featureItems as $featureItem)
                <div class="input-group mb-3 feature-point-row">
                    <input type="text" class="form-control form-control-lg shadow-sm" name="features[]"
                        value="{{ $featureItem }}" placeholder="Enter feature point" required>
                    <div class="input-group-append">
                        <button type="button" class="btn btn-outline-danger remove-feature-point">Remove</button>
                    </div>
                </div>
            @endforeach
        </div>

        <small class="text-muted d-block">Click `Add Point` to add more course features.</small>
        @error('features')
            <small class="text-danger d-block">{{ $message }}</small>
        @enderror
        @error('features.*')
            <small class="text-danger d-block">{{ $message }}</small>
        @enderror
    </div>

    <div class="col-md-6 mb-4">
        <label for="sort_order" class="form-label fw-semibold">Sort Order</label>
        <input id="sort_order" type="number" min="0" class="form-control form-control-lg shadow-sm rounded"
            name="sort_order" value="{{ old('sort_order', $course->sort_order ?? 0) }}">
    </div>

    <div class="col-md-6 mb-4 d-flex align-items-center">
        <div class="form-check mt-4">
            <input class="form-check-input" type="checkbox" name="is_active" id="is_active" value="1"
                {{ old('is_active', $course->is_active ?? true) ? 'checked' : '' }}>
            <label class="form-check-label fw-semibold" for="is_active">
                Active
            </label>
        </div>
    </div>
</div>

<template id="feature-point-template">
    <div class="input-group mb-3 feature-point-row">
        <input type="text" class="form-control form-control-lg shadow-sm" name="features[]"
            placeholder="Enter feature point" required>
        <div class="input-group-append">
            <button type="button" class="btn btn-outline-danger remove-feature-point">Remove</button>
        </div>
    </div>
</template>

<script>
    (function() {
        const wrapper = document.getElementById('feature-points-wrapper');
        const addButton = document.getElementById('add-feature-point');
        const template = document.getElementById('feature-point-template');

        if (!wrapper || !addButton || !template) return;

        const bindRemoveButtons = () => {
            wrapper.querySelectorAll('.remove-feature-point').forEach((button) => {
                button.onclick = () => {
                    const rows = wrapper.querySelectorAll('.feature-point-row');

                    if (rows.length === 1) {
                        const input = rows[0].querySelector('input');
                        if (input) input.value = '';
                        return;
                    }

                    button.closest('.feature-point-row')?.remove();
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
