@extends('layouts.admin')

@section('content')
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

        {{-- Success Message --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm mb-4" role="alert">
                <i class="fa fa-check-circle me-2"></i> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card shadow-sm border-0">
            {{-- Consistent Header --}}
            <div class="card-header bg-white d-flex justify-content-between align-items-center py-3"
                style="border-left: 5px solid #0A245D;">
                <h5 class="mb-0 fw-bold" style="color: #0A245D;">Blog Post Directory</h5>
                <a href="{{ route('posts.create') }}" class="btn btn-sm shadow-sm text-white px-3"
                    style="background-color: #79BD21; border: none;">
                    <i class="fa fa-plus me-1"></i> Add New Blog
                </a>
            </div>

            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered mb-0 align-middle">
                        <thead class="bg-light">
                            <tr>
                                <th class="text-center" style="width: 80px;">Image</th>
                                <th>Title & Details</th>
                                <th style="width: 150px;">Date Created</th>
                                <th class="text-center" style="width: 100px;">Details</th>
                                <th class="text-center" style="width: 100px;">Edit</th>
                                <th class="text-center" style="width: 100px;">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($posts as $post)
                                <tr>
                                    {{-- Thumbnail --}}
                                    <td class="text-center">
                                        @if ($post->image)
                                            <img src="{{ asset('uploads/blogs/' . $post->image) }}" alt="Blog"
                                                style="width: 50px; height: 35px; object-fit: cover; border-radius: 4px; border: 1px solid #ddd;">
                                        @else
                                            <div class="bg-light text-muted small d-flex align-items-center justify-content-center mx-auto"
                                                style="width: 50px; height: 35px; border-radius: 4px;">
                                                <i class="fa fa-image"></i>
                                            </div>
                                        @endif
                                    </td>

                                    {{-- Title and Slug --}}
                                    <td>
                                        <div class="fw-bold text-dark">{{ Str::limit($post->title, 60) }}</div>
                                        <small class="text-muted d-block">Slug: {{ $post->slug }}</small>
                                    </td>

                                    {{-- Date --}}
                                    <td>
                                        <span class="small">
                                            <i class="fa fa-calendar-alt me-1 text-muted"></i>
                                            {{ $post->created_at->format('d M, Y') }}
                                        </span>
                                    </td>

                                    {{-- Details Action (Brand Blue) --}}
                                    <td class="text-center">
                                        <a href="{{ route('posts.show', $post->id) }}"
                                            class="btn btn-sm text-white shadow-sm"
                                            style="background-color: #0A245D; border: none; min-width: 70px;">
                                            Details
                                        </a>
                                    </td>

                                    {{-- Edit Action --}}
                                    <td class="text-center">
                                        <a href="{{ route('posts.edit', $post->id) }}"
                                            class="btn btn-info btn-sm text-white shadow-sm" style="min-width: 70px;">
                                            Edit
                                        </a>
                                    </td>

                                    {{-- Delete Action --}}
                                    <td class="text-center">
                                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST"
                                            onsubmit="return confirm('Permanently delete this post?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm shadow-sm"
                                                style="min-width: 70px;">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center py-5 text-muted">
                                        No blog posts found. <a href="{{ route('posts.create') }}"
                                            style="color: #79BD21;">Create your first post.</a>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

    <style>
        /* Style pagination buttons to match Brand Blue */
        .pagination .page-item.active .page-link {
            background-color: #0A245D;
            border-color: #0A245D;
        }

        .pagination .page-link {
            color: #0A245D;
        }
    </style>
@endsection
