@extends('layouts.admin')

@section('content')
    <div class="container-fluid mb-5">
        <div class="card shadow-lg rounded-lg border-0">
            <div class="card-header text-white d-flex justify-content-between align-items-center"
                style="background-color: #0A245D;">
                <h5 class="mb-0 text-white">Edit Consultant Portfolio</h5>
                <a href="{{ route('team.index') }}" class="btn admin-btn admin-btn-secondary admin-btn-sm">
                    Back to Team
                </a>
            </div>

            <div class="card-body p-4">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('team.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" value="{{ $team->id }}">

                    @include('admin.team._form', ['isEdit' => true, 'team' => $team])

                    <div class="mt-4 text-center">
                        <button type="submit" class="btn admin-btn admin-btn-primary admin-btn-wide">
                            Update Portfolio
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
