@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card shadow-sm border-0">
                <div class="card-header d-flex justify-content-between align-items-center" style="background-color: #0A245D;">
                    <h5 class="mb-0 text-white">Destinations</h5>
                    <a href="{{ route('destination.create') }}" class="btn btn-success btn-sm">Add Destination</a>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered first">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Picture</th>
                                    <th class="text-center" style="min-width: 170px;">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($destinations as $destination)
                                    <tr>
                                        <td class="font-weight-bold">{{ $destination->title }}</td>
                                        <td>{{ \Illuminate\Support\Str::limit($destination->description, 120) }}</td>
                                        <td>
                                            @if ($destination->pic)
                                                <img src="{{ asset($destination->pic) }}" alt="{{ $destination->title }}"
                                                    class="rounded" width="70" height="70"
                                                    style="object-fit: cover;">
                                            @else
                                                <span class="text-muted">No Image</span>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route('destination.edit', $destination->id) }}"
                                                class="btn btn-primary btn-sm mr-1">Edit</a>
                                            <form action="{{ route('destination.destroy', $destination->id) }}"
                                                method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you sure you want to delete this destination?')">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center">No destinations found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

