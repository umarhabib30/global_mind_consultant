@extends('layouts.admin')

@section('content')
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Add Service Popup</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('service-popup.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @include('admin.service-popup._form')

                    <div class="mt-4 d-flex flex-wrap gap-3">
                        <button type="submit" class="admin-btn admin-btn-primary admin-btn-wide">Save Service Popup</button>
                        <a href="{{ route('service-popup.index') }}" class="admin-btn admin-btn-secondary">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
