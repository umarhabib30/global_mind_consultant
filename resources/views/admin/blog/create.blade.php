@extends('layouts.admin')

@section('content')
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="mb-3">
            <a href="{{ route('posts.index') }}" class="btn btn-sm shadow-sm text-white" style="background-color: #0A245D;">
                <i class="fa fa-arrow-left me-1"></i> Back to List
            </a>
        </div>

        <div class="card shadow-sm border-0">
            <div class="card-header bg-white border-bottom py-3" style="border-left: 5px solid #0A245D;">
                <h3 class="mb-0 fw-bold" style="color: #0A245D;">Create New Post</h3>
            </div>

            <div class="card-body p-4">
                @if ($errors->any())
                    <div class="alert alert-danger border-0 shadow-sm">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-lg-8">
                            <div class="form-group mb-4">
                                <label class="small text-uppercase fw-bold text-muted mb-2">Blog Title</label>
                                <input type="text" name="title" class="form-control form-control-lg border-0 shadow-sm"
                                    placeholder="Enter title here..." value="{{ old('title') }}"
                                    style="background-color: #f8faff;" required>
                            </div>

                            <div class="form-group mb-4">
                                <label class="small text-uppercase fw-bold text-muted mb-2">Content</label>
                                <div class="shadow-sm">
                                    <textarea name="content" id="editor">{{ old('content') }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="card bg-light border-0 mb-4 shadow-sm">
                                <div class="card-body">
                                    <h6 class="fw-bold mb-3" style="color: #0A245D;"><i
                                            class="fa fa-image me-2"></i>Featured Image</h6>
                                    <div class="mb-3">
                                        <input type="file" name="image" class="form-control form-control-sm"
                                            accept="image/*" id="imgInp">
                                    </div>
                                    <div class="bg-white rounded border border-dashed p-2 text-center"
                                        style="min-height: 150px; display: flex; align-items: center; justify-content: center;">
                                        <img id="preview" src="#" alt="Image Preview"
                                            class="img-fluid rounded d-none" />
                                        <div id="placeholder-text" class="text-muted small">
                                            <i class="fa fa-cloud-upload-alt fa-2x d-block mb-2"></i>
                                            Preview will appear here
                                        </div>
                                    </div>
                                    <div class="mt-2 small text-muted">
                                        <i class="fa fa-info-circle me-1"></i> Max size: 2MB (JPG, PNG)
                                    </div>
                                </div>
                            </div>

                            <div class="card border-0 shadow-sm overflow-hidden">
                                <div class="card-header text-white border-0" style="background-color: #0A245D;">
                                    <h6 class="mb-0 small text-uppercase fw-bold">Publishing</h6>
                                </div>
                                <div class="card-body bg-white">
                                    <p class="small text-muted mb-4">By clicking publish, this post will be immediately
                                        visible on the website.</p>
                                    <button type="submit" class="btn btn-lg w-100 fw-bold border-0 shadow-sm text-white"
                                        style="background-color: #79BD21;">
                                        <i class="fa fa-check-circle me-2"></i>PUBLISH NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>

    <style>
        /* Customizing the Editor Height */
        .ck-editor__editable {
            min-height: 400px;
            background-color: #f8faff !important;
        }

        /* Matching the editor border to your brand blue on focus */
        .ck.ck-editor__editable:not(.ck-focused) {
            border-color: #e1e5eb !important;
        }

        .ck.ck-editor__editable.ck-focused {
            border-color: #0A245D !important;
        }
    </style>

    <script>
        // Initialize Free CKEditor 5
        ClassicEditor
            .create(document.querySelector('#editor'), {
                toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote',
                    'insertTable', 'undo', 'redo'
                ]
            })
            .catch(error => {
                console.error(error);
            });

        // Image Preview logic
        imgInp.onchange = evt => {
            const [file] = imgInp.files;
            if (file) {
                const preview = document.getElementById('preview');
                const placeholder = document.getElementById('placeholder-text');
                preview.src = URL.createObjectURL(file);
                preview.classList.remove('d-none');
                placeholder.classList.add('d-none');
            }
        }
    </script>
@endsection
