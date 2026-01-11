@extends('layouts.admin')

@section('content')
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="mb-3">
            <a href="{{ route('posts.index') }}" class="btn btn-sm shadow-sm text-white" style="background-color: #0A245D;">
                <i class="fa fa-arrow-left me-1"></i> Back to List
            </a>
        </div>

        <div class="card shadow-sm border-0">
            <div class="card-header bg-white border-bottom py-3 d-flex justify-content-between align-items-center"
                style="border-left: 5px solid #0A245D;">
                <h4 class="mb-0 fw-bold" style="color: #0A245D;">Blog Post Details</h4>
                <div>
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm shadow-sm text-white"
                        style="background-color: #79BD21;">
                        <i class="fa fa-edit me-1"></i> Edit Post
                    </a>
                </div>
            </div>

            <div class="card-body p-0">
                @if ($post->image)
                    <div class="position-relative"
                        style="height: 350px; width: 100%; overflow: hidden; background-color: #f8f9fa;">
                        <img src="{{ asset('uploads/blogs/' . $post->image) }}" alt="{{ $post->title }}"
                            style="width: 100%; height: 100%; object-fit: cover; opacity: 0.9;">
                        <div class="position-absolute bottom-0 start-0 w-100 p-4"
                            style="background: linear-gradient(transparent, rgba(0,0,0,0.7));">
                            <h1 class="text-white fw-bold mb-0">{{ $post->title }}</h1>
                        </div>
                    </div>
                @else
                    <div class="p-5 text-center bg-light border-bottom">
                        <h1 class="fw-bold" style="color: #0A245D;">{{ $post->title }}</h1>
                    </div>
                @endif

                <div class="p-4 p-md-5">
                    <div class="row mb-4">
                        <div class="col-md-4">
                            <div class="d-flex align-items-center mb-3 mb-md-0">
                                <div class="rounded-circle bg-light p-3 me-3">
                                    <i class="fa fa-calendar-alt text-muted"></i>
                                </div>
                                <div>
                                    <small class="text-uppercase text-muted fw-bold d-block"
                                        style="font-size: 0.7rem;">Published On</small>
                                    <span class="fw-bold">{{ $post->created_at->format('M d, Y') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex align-items-center mb-3 mb-md-0">
                                <div class="rounded-circle bg-light p-3 me-3">
                                    <i class="fa fa-link text-muted"></i>
                                </div>
                                <div>
                                    <small class="text-uppercase text-muted fw-bold d-block" style="font-size: 0.7rem;">Post
                                        Slug</small>
                                    <span class="text-primary">{{ $post->slug ?? Str::slug($post->title) }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-md-end">
                            <span class="badge rounded-pill bg-light text-dark border px-3 py-2">
                                ID: #{{ $post->id }}
                            </span>
                        </div>
                    </div>

                    <hr class="opacity-10 mb-5">

                    <div class="blog-preview-content">
                        {!! $post->content !!}
                    </div>
                </div>
            </div>

            <div class="card-footer bg-white border-top py-3 d-flex justify-content-between align-items-center">
                <small class="text-muted">Last modified: {{ $post->updated_at->diffForHumans() }}</small>

                <form action="{{ route('posts.destroy', $post->id) }}" method="POST"
                    onsubmit="return confirm('Permanently delete this post?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-link text-danger p-0 text-decoration-none small fw-bold">
                        <i class="fa fa-trash me-1"></i> Delete This Post
                    </button>
                </form>
            </div>
        </div>
    </div>

    <style>
        /* Styling for the HTML content rendered from CKEditor */
        .blog-preview-content {
            line-height: 1.8;
            font-size: 1.1rem;
            color: #333;
        }

        .blog-preview-content img {
            max-width: 100%;
            height: auto;
            border-radius: 12px;
            margin: 25px 0;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .blog-preview-content blockquote {
            border-left: 5px solid #79BD21;
            /* Brand Green */
            padding: 20px 30px;
            background-color: #f9fdf4;
            font-style: italic;
            margin: 30px 0;
            border-radius: 0 8px 8px 0;
        }

        .blog-preview-content h2,
        .blog-preview-content h3 {
            color: #0A245D;
            /* Brand Blue */
            font-weight: bold;
            margin-top: 40px;
            margin-bottom: 20px;
        }

        .blog-preview-content p {
            margin-bottom: 20px;
        }
    </style>
@endsection
