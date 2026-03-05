@extends('layouts.admin')

@section('content')
    <div class="col-12">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="card shadow-sm border-0">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Review Moderation</h5>
                <span class="badge badge-primary">{{ $reviews->total() }} Total</span>
            </div>
            <div class="card-body">
                <form method="GET" action="{{ route('admin.reviews.index') }}" class="mb-4">
                    <div class="form-row">
                        <div class="col-md-4 mb-2">
                            <input type="text" name="search" value="{{ $search }}" class="form-control"
                                placeholder="Search by name, email, title, message">
                        </div>
                        <div class="col-md-3 mb-2">
                            <select name="status" class="form-control">
                                <option value="">All Statuses</option>
                                <option value="pending" {{ $status === 'pending' ? 'selected' : '' }}>Pending</option>
                                <option value="approved" {{ $status === 'approved' ? 'selected' : '' }}>Approved</option>
                                <option value="rejected" {{ $status === 'rejected' ? 'selected' : '' }}>Rejected</option>
                            </select>
                        </div>
                        <div class="col-md-3 mb-2">
                            <button class="btn btn-primary">Filter</button>
                            <a href="{{ route('admin.reviews.index') }}" class="btn btn-light border">Reset</a>
                        </div>
                    </div>
                </form>

                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Reviewer</th>
                                <th>Rating</th>
                                <th>Title / Message</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th style="min-width: 250px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($reviews as $review)
                                <tr>
                                    <td>
                                        <div class="font-weight-bold">{{ $review->name }}</div>
                                        <div class="small text-muted">{{ $review->email }}</div>
                                        @if ($review->company_role)
                                            <div class="small text-info">{{ $review->company_role }}</div>
                                        @endif
                                    </td>
                                    <td>
                                        @for ($i = 1; $i <= 5; $i++)
                                            <i
                                                class="fa{{ $i <= $review->rating ? 's' : 'r' }} fa-star text-warning"></i>
                                        @endfor
                                    </td>
                                    <td>
                                        <div class="font-weight-bold">{{ $review->title ?: 'Untitled Review' }}</div>
                                        <div class="small text-muted">{{ \Illuminate\Support\Str::limit($review->message, 120) }}
                                        </div>
                                    </td>
                                    <td>
                                        @if ($review->image_url)
                                            <img src="{{ asset($review->image_url) }}" alt="{{ $review->name }}"
                                                style="width: 58px; height: 58px; object-fit: cover; border-radius: 50%;">
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td>
                                        @if ($review->status === 'approved')
                                            <span class="badge badge-success">Approved</span>
                                        @elseif($review->status === 'rejected')
                                            <span class="badge badge-danger">Rejected</span>
                                        @else
                                            <span class="badge badge-warning">Pending</span>
                                        @endif
                                    </td>
                                    <td>{{ optional($review->created_at)->format('d M Y h:i A') }}</td>
                                    <td>
                                        <div class="d-flex flex-wrap" style="gap: 6px;">
                                            <form method="POST" action="{{ route('admin.reviews.approve', $review->id) }}">
                                                @csrf
                                                @method('PATCH')
                                                <button class="btn btn-sm btn-success">Approve</button>
                                            </form>
                                            <form method="POST" action="{{ route('admin.reviews.reject', $review->id) }}">
                                                @csrf
                                                @method('PATCH')
                                                <button class="btn btn-sm btn-warning">Reject</button>
                                            </form>
                                            <form method="POST" action="{{ route('admin.reviews.destroy', $review->id) }}"
                                                onsubmit="return confirm('Delete this review permanently?')">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">No reviews found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="mt-3">
                    {{ $reviews->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
