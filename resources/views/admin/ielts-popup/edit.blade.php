@extends('layouts.admin')

@section('content')
    <div class="container-fluid mb-5">
        <div class="card shadow-lg rounded-lg border-0">
            <div class="card-header text-white d-flex justify-content-between align-items-center"
                style="background-color: #0A245D;">
                <h5 class="mb-0 text-white">Edit IELTS Popup</h5>
                <a href="{{ route('ielts-popup.index') }}" class="btn admin-btn admin-btn-secondary admin-btn-sm">Back to IELTS Popup List</a>
            </div>

            <div class="card-body p-4">
                <form action="{{ route('ielts-popup.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" value="{{ $popup->id }}">
                    @include('admin.ielts-popup._form', ['popup' => $popup])

                    <div class="mt-4 text-center">
                        <button type="submit" class="btn admin-btn admin-btn-primary admin-btn-wide">
                            Update IELTS Popup
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
