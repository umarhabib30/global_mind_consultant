@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9 mx-auto">
                <div class="card shadow-sm">
                    <div class="card-header bg-white d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">Blog Preview</h4>
                        <div>
                            <a href="{{ route('posts.index') }}" class="btn btn-outline-secondary btn-sm">Back</a>
                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-info btn-sm text-white">Edit This
                                Post</a>
                        </div>
                    </div>

                    <div class="card-body">
                        {{-- Blog Title --}}
                        <h1 class="display-5 font-weight-bold">{{ $post->title }}</h1>

                        {{-- Meta Information --}}
                        <div class="text-muted mb-4">
                            <span><i class="fa fa-calendar"></i> Published on:
                                {{ $post->created_at->format('M d, Y') }}</span>
                            <span class="ms-3"><i class="fa fa-link"></i> Slug:
                                <strong>{{ $post->slug }}</strong></span>
                        </div>

                        <hr>

                        {{-- Feature Image --}}
                        @if ($post->image)
                            <div class="text-center mb-4">
                                <img src="{{ asset('uploads/blogs/' . $post->image) }}" alt="{{ $post->title }}"
                                    class="img-fluid rounded" style="max-height: 500px; width: 100%; object-fit: cover;">
                            </div>
                        @endif

                        {{-- Blog Content --}}
                        <div class="blog-content mt-4" style="line-height: 1.8; font-size: 1.1rem;">
                            {!! $post->content !!}
                        </div>
                    </div>

                    <div class="card-footer bg-light">
                        <p class="mb-0 small text-muted">ID: #{{ $post->id }} | Last Updated:
                            {{ $post->updated_at->diffForHumans() }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Styling for the content rendered from CKEditor */
        .blog-content img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .blog-content blockquote {
            border-left: 5px solid #eee;
            padding-left: 20px;
            font-style: italic;
        }
    </style>
@endsection
