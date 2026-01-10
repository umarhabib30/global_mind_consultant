@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="card-title">Add New Blog Post</h4>
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

                    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="title" class="font-weight-bold">Blog Title</label>
                            <input type="text" name="title" class="form-control" placeholder="Enter a catchy title" value="{{ old('title') }}" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="image" class="font-weight-bold">Feature Image</label>
                            <input type="file" name="image" class="form-control" accept="image/*">
                            <small class="text-muted">Recommended size: 1200x800px (Max 2MB)</small>
                        </div>

                        <div class="form-group mb-3">
                            <label for="content" class="font-weight-bold">Content</label>
                            <textarea name="content" id="editor" class="form-control" rows="15">{{ old('content') }}</textarea>
                        </div>

                        <div class="form-group mt-4">
                            <button type="submit" class="btn btn-success px-5">Publish Blog</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Standard CKEditor CDNs --}}
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
    // Initialize CKEditor on the textarea with id="editor"
    CKEDITOR.replace('editor', {
        height: 400,
        filebrowserUploadMethod: 'form'
    });
</script>
@endsection
