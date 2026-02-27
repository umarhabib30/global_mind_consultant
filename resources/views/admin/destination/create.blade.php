@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="card shadow-lg rounded-lg border-0">

            <!-- Card Header -->
            <div class="card-header text-white d-flex justify-content-between align-items-center"
                style="background-color: #0A245D;">
                <h5 class="mb-0 text-white">Add Destination</h5>
                <a href="{{ url('/admin/destination/index') }}" class="btn btn-success btn-sm" style="font-weight: 600;">
                    Back to Destinations
                </a>
            </div>

            <!-- Card Body -->
            <div class="card-body p-4">
                <form action="{{ route('destination.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row g-4">

                        <!-- Name + Logo on same line -->
                        <div class="col-md-6">
                            <label for="title" class="form-label fw-semibold">Title </label>
                            <input id="title" type="text" class="form-control form-control-lg shadow-sm rounded"
                                name="title" required>
                        </div>



                        <!-- Description field below -->
                        <div class="col-md-12">
                            <label for="description" class="form-label fw-semibold">Description</label>
                            <textarea id="description" class="form-control form-control-lg shadow-sm rounded" name="description" rows="4"></textarea>
                        </div>

                    </div>

                    <div class="mt-4 text-center">
                        <button type="submit" class="btn"
                            style="background-color: #74BF1A; color: white; padding: 10px 40px; font-weight: 600;">
                            Save Destination
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
