@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title">All Blog Posts</h4>
                <a href="{{ route('posts.create') }}" class="btn btn-primary">
                    <i class="fa fa-plus"></i> Add New Blog
                </a>
            </div>
            <div class="card-body">

                {{-- Success Message --}}
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                        <thead class="bg-light">
                            <tr>
                                <th style="width: 50px;">ID</th>
                                <th style="width: 100px;">Image</th>
                                <th>Title</th>
                                <th>Slug</th>
                                <th>Created At</th>
                                <th style="width: 150px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($posts as $post)
                                <tr>
                                    <td>{{ $post->id }}</td>
                                    <td>
                                        @if ($post->image)
                                            <img src="{{ asset('uploads/blogs/' . $post->image) }}" alt="Blog Image"
                                                style="width: 60px; height: 40px; object-fit: cover; border-radius: 4px;">
                                        @else
                                            <span class="badge bg-secondary">No Image</span>
                                        @endif
                                    </td>
                                    <td class="font-weight-bold">{{ $post->title }}</td>
                                    <td><small class="text-muted">{{ $post->slug }}</small></td>
                                    <td>{{ $post->created_at->format('d M, Y') }}</td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            {{-- View/Details Button --}}
                                            <a href="{{ route('posts.show', $post->id) }}"
                                                class="btn btn-sm btn-primary text-white" title="View Details">
                                                <i class="fa fa-eye"></i> View
                                            </a>

                                            {{-- Edit Button --}}
                                            <a href="{{ route('posts.edit', $post->id) }}"
                                                class="btn btn-sm btn-info text-white" title="Edit">
                                                <i class="fa fa-edit"></i> Edit
                                            </a>

                                            {{-- Delete Button --}}
                                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST"
                                                onsubmit="return confirm('Are you sure you want to delete this post?');"
                                                style="display: inline-block; margin-left: 5px;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" title="Delete">
                                                    <i class="fa fa-trash"></i> Delete
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center py-4 text-muted">No blog posts found. Click "Add
                                        New Blog" to get started!</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
