@extends('layouts.admin')

@section('content')
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Service Popup List</h5>
                <a href="{{ route('service-popup.create') }}" class="btn btn-sm btn-success">Add Service Popup</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Heading</th>
                                <th>Sub Heading</th>
                                <th>Delay</th>
                                <th>Status</th>
                                <th class="text-center">Edit</th>
                                <th class="text-center">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($popups as $popup)
                                <tr>
                                    <td>{{ $popup->heading ?: '-' }}</td>
                                    <td>{{ $popup->subheading ?: '-' }}</td>
                                    <td>{{ $popup->delay_seconds }}s</td>
                                    <td>
                                        @if ($popup->is_active)
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('service-popup.edit', $popup->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                    </td>
                                    <td class="text-center">
                                        <form action="{{ route('service-popup.destroy', $popup->id) }}" method="POST"
                                            onsubmit="return confirm('Are you sure you want to delete this service popup?')">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">No service popup found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
