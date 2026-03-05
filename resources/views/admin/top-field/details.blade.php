@extends('layouts.admin')

@section('content')
    <div class="container-fluid mb-5">
        <div class="card shadow-lg rounded-lg border-0">
            <div class="card-header text-white d-flex justify-content-between align-items-center"
                style="background-color: #0A245D;">
                <h5 class="mb-0 text-white">Top Field Details</h5>
                <a href="{{ route('top-field.index') }}" class="btn btn-success btn-sm">Back to Top Fields</a>
            </div>

            <div class="card-body p-4">
                <div class="row g-4">
                    <div class="col-md-5">
                        @if ($field->image)
                            <img src="{{ asset($field->image) }}" alt="{{ $field->title }}" class="img-fluid rounded shadow-sm"
                                style="max-height: 320px; width: 100%; object-fit: cover;">
                        @else
                            <div class="border rounded d-flex align-items-center justify-content-center text-muted"
                                style="height: 320px;">
                                No image available
                            </div>
                        @endif
                    </div>

                    <div class="col-md-7">
                        <h3 class="font-weight-bold mb-3">{{ $field->title }}</h3>
                        <p class="mb-2"><strong>Status:</strong>
                            @if ($field->is_active)
                                <span class="badge bg-success">Active</span>
                            @else
                                <span class="badge bg-danger">Inactive</span>
                            @endif
                        </p>
                        <p class="mb-2"><strong>Sort Order:</strong> {{ $field->sort_order }}</p>
                        <p class="mb-2"><strong>Button Text:</strong> {{ $field->button_text ?: '-' }}</p>
                        <p class="mb-2"><strong>Button Link:</strong>
                            @if ($field->button_link)
                                <a href="{{ $field->button_link }}" target="_blank">{{ $field->button_link }}</a>
                            @else
                                -
                            @endif
                        </p>
                        <p class="mb-0"><strong>Created:</strong> {{ optional($field->created_at)->format('d M Y, h:i A') }}
                        </p>
                    </div>
                </div>

                <hr>

                <div class="mb-4">
                    <h5 class="font-weight-bold mb-2">Short Description</h5>
                    <div class="text-muted">
                        {!! $field->short_description ? nl2br(e($field->short_description)) : '-' !!}
                    </div>
                </div>

                <div>
                    <h5 class="font-weight-bold mb-2">Long Description</h5>
                    <div class="border rounded p-3 bg-light">
                        {!! $field->long_description ?: '<span class="text-muted">-</span>' !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
