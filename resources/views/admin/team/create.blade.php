@extends('layouts.admin')

@section('content')
    <div class="container-fluid mb-5">
        <div class="card shadow-lg rounded-lg border-0">
            <div class="card-header text-white d-flex justify-content-between align-items-center"
                style="background-color: #0A245D;">
                <h5 class="mb-0 text-white">Add Consultant Portfolio</h5>
                <a href="{{ route('team.index') }}" class="btn btn-success btn-sm" style="font-weight: 600;">
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

                <form action="{{ route('team.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @include('admin.team._form', ['isEdit' => false, 'team' => null])

                    <div class="mt-4 text-center">
                        <button type="submit" class="btn btn-lg shadow-sm"
                            style="background-color: #74BF1A; color: white; padding: 12px 60px; font-weight: 600; border-radius: 30px;">
                            Save Portfolio
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

