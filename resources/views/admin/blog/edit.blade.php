@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="card-title">Edit Blog Post: {{ $post->title }}</h4>
                        <a href="{{ route('posts.index') }}" class="btn btn-secondary btn-sm">Back to List</a>
                    </div>
                    <div class="card-body">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group mb-3">
                                <label for="title" class="font-weight-bold">Blog Title</label>
                                <input type="text" name="title" class="form-control"
                                    value="{{ old('title', $post->title) }}" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="image" class="font-weight-bold">Feature Image</label>
                                <div class="mb-2">
                                    @if ($post->image)
                                        <p>Current Image:</p>
                                        <img src="{{ asset('uploads/blogs/' . $post->image) }}" alt="Current Blog Image"
                                            style="width: 200px; border: 1px solid #ddd; padding: 5px; border-radius: 5px;">
                                    @endif
                                </div>
                                <input type="file" name="image" class="form-control" accept="image/*">
                                <small class="text-muted">Upload a new image only if you want to change the current
                                    one.</small>
                            </div>

                            <div class="form-group mb-3">
                                <label for="content" class="font-weight-bold">Content</label>
                                <textarea name="content" id="editor" class="form-control" rows="15">{{ old('content', $post->content) }}</textarea>
                            </div>

                            <div class="form-group mt-4">
                                <button type="submit" class="btn btn-primary px-5">Update Blog</button>
                                <a href="{{ route('posts.index') }}" class="btn btn-light px-5">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- CKEditor CDN --}}
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor', {
            height: 400,
        });
    </script>
@endsection
