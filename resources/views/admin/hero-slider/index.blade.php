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
                <h5 class="mb-0">Hero Slider</h5>
                <a href="{{ route('hero-slider.create') }}" class="btn btn-sm btn-success">Add Slide</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Button Text</th>
                                <th>Order</th>
                                <th>Status</th>
                                <th class="text-center">Edit</th>
                                <th class="text-center">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($slides as $slide)
                                <tr>
                                    <td>
                                        @if ($slide->background_image)
                                            <img src="{{ asset($slide->background_image) }}" alt="Slide Image"
                                                style="width: 90px; height: 50px; object-fit: cover; border-radius: 6px;">
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td>{{ $slide->title }}</td>
                                    <td>{{ $slide->button_text ?: '-' }}</td>
                                    <td>{{ $slide->sort_order }}</td>
                                    <td>
                                        @if ($slide->is_active)
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('hero-slider.edit', $slide->id) }}"
                                            class="btn btn-sm btn-primary">Edit</a>
                                    </td>
                                    <td class="text-center">
                                        <form action="{{ route('hero-slider.destroy', $slide->id) }}" method="POST"
                                            onsubmit="return confirm('Delete this slide?')">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">No hero slides found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
