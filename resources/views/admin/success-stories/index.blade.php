@extends('layouts.admin')

@section('content')
    <div class="col-12">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="card shadow-sm border-0">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Success Stories</h5>
                <a href="{{ route('admin.success-stories.create') }}" class="btn btn-success btn-sm">Create Story</a>
            </div>
            <div class="card-body">
                <form method="GET" class="mb-4">
                    <div class="form-row">
                        <div class="col-md-2 mb-2">
                            <input type="text" name="country" value="{{ request('country') }}" class="form-control"
                                placeholder="Country">
                        </div>
                        <div class="col-md-2 mb-2">
                            <input type="text" name="visa_type" value="{{ request('visa_type') }}" class="form-control"
                                placeholder="Visa Type">
                        </div>
                        <div class="col-md-2 mb-2">
                            <select name="status" class="form-control">
                                <option value="">All Status</option>
                                <option value="draft" {{ request('status') === 'draft' ? 'selected' : '' }}>Draft</option>
                                <option value="published" {{ request('status') === 'published' ? 'selected' : '' }}>
                                    Published</option>
                            </select>
                        </div>
                        <div class="col-md-2 mb-2">
                            <select name="featured" class="form-control">
                                <option value="">Featured: All</option>
                                <option value="1" {{ request('featured') === '1' ? 'selected' : '' }}>Featured</option>
                                <option value="0" {{ request('featured') === '0' ? 'selected' : '' }}>Not Featured</option>
                            </select>
                        </div>
                        <div class="col-md-2 mb-2">
                            <input type="date" name="date_from" value="{{ request('date_from') }}" class="form-control">
                        </div>
                        <div class="col-md-2 mb-2">
                            <input type="date" name="date_to" value="{{ request('date_to') }}" class="form-control">
                        </div>
                    </div>
                    <button class="btn btn-primary btn-sm">Filter</button>
                    <a href="{{ route('admin.success-stories.index') }}" class="btn btn-light btn-sm border">Reset</a>
                </form>

                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Story</th>
                                <th>Country / Visa</th>
                                <th>Status</th>
                                <th>Featured</th>
                                <th>Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($stories as $story)
                                <tr>
                                    <td>
                                        <div class="font-weight-bold">{{ $story->title ?: 'Untitled Story' }}</div>
                                        <small class="text-muted">{{ $story->slug }}</small>
                                    </td>
                                    <td>
                                        <div>{{ $story->country ?: '-' }}</div>
                                        <small class="text-muted">{{ $story->visa_type ?: '-' }}</small>
                                    </td>
                                    <td>
                                        @if ($story->status === 'published')
                                            <span class="badge badge-success">Published</span>
                                        @else
                                            <span class="badge badge-secondary">Draft</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($story->featured)
                                            <span class="badge badge-info">Featured</span>
                                        @else
                                            <span class="badge badge-light border">No</span>
                                        @endif
                                    </td>
                                    <td>{{ optional($story->created_at)->format('d M Y') }}</td>
                                    <td>
                                        <div class="d-flex flex-wrap" style="gap: 6px;">
                                            <a href="{{ route('admin.success-stories.edit', $story->id) }}"
                                                class="btn btn-sm btn-primary">Edit</a>
                                            <form method="POST"
                                                action="{{ route('admin.success-stories.toggle-status', $story->id) }}">
                                                @csrf
                                                @method('PATCH')
                                                <button class="btn btn-sm btn-warning">
                                                    {{ $story->status === 'published' ? 'Unpublish' : 'Publish' }}
                                                </button>
                                            </form>
                                            <form method="POST"
                                                action="{{ route('admin.success-stories.toggle-featured', $story->id) }}">
                                                @csrf
                                                @method('PATCH')
                                                <button class="btn btn-sm btn-info text-white">
                                                    {{ $story->featured ? 'Unfeature' : 'Feature' }}
                                                </button>
                                            </form>
                                            <form method="POST" action="{{ route('admin.success-stories.destroy', $story->id) }}"
                                                onsubmit="return confirm('Delete this story?')">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">No success stories found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="mt-3">
                    {{ $stories->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
