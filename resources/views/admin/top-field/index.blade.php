@extends('layouts.admin')

@section('content')
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Top Fields</h5>
                <a href="{{ route('top-field.create') }}" class="btn btn-sm btn-success">Add Top Field</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Button Text</th>
                                <th>Button Link</th>
                                <th>Status</th>
                                <th>Order</th>
                                <th>Created</th>
                                <th class="text-center">Details</th>
                                <th class="text-center">Edit</th>
                                <th class="text-center">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($fields as $field)
                                <tr>
                                    <td>
                                        @if ($field->image)
                                            @php
                                                $imageUrl = \Illuminate\Support\Str::startsWith($field->image, ['http://', 'https://'])
                                                    ? $field->image
                                                    : asset(ltrim($field->image, '/'));
                                            @endphp
                                            <img src="{{ $imageUrl }}" alt="{{ $field->title }}"
                                                style="width: 90px; height: 55px; object-fit: cover; border-radius: 6px;">
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td>{{ $field->title }}</td>
                                    <td>{{ $field->button_text ?: '-' }}</td>
                                    <td>
                                        @if ($field->button_link)
                                            <a href="{{ $field->button_link }}" target="_blank">Open Link</a>
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td>
                                        @if ($field->is_active)
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td>{{ $field->sort_order }}</td>
                                    <td>{{ optional($field->created_at)->format('d M Y') }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('top-field.details', $field->id) }}"
                                            class="btn btn-sm btn-info text-white">Details</a>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('top-field.edit', $field->id) }}"
                                            class="btn btn-sm btn-primary">Edit</a>
                                    </td>
                                    <td class="text-center">
                                        <form action="{{ route('top-field.destroy', $field->id) }}" method="POST"
                                            onsubmit="return confirm('Delete this field?')">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="10" class="text-center">No top fields found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
