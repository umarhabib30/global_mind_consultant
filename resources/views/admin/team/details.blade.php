@extends('layouts.admin')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-lg-4">
                <div class="card shadow-sm border-0 text-center p-4 mb-4">
                    <div class="mb-3 position-relative">
                        @if ($team->profile_pic)
                            <img src="{{ asset($team->profile_pic) }}" alt="{{ $team->name }}"
                                class="rounded-circle img-thumbnail shadow-sm"
                                style="width: 150px; height: 150px; object-fit: cover; border: 3px solid #74BF1A;">
                        @else
                            <div class="rounded-circle bg-light d-inline-flex align-items-center justify-content-center shadow-sm"
                                style="width: 150px; height: 150px; border: 3px solid #dee2e6;">
                                <i class="fas fa-user fa-4x text-muted"></i>
                            </div>
                        @endif
                    </div>

                    <h4 class="fw-bold mb-1" style="color: #0A245D;">{{ $team->name }}</h4>
                    <p class="text-muted mb-2 fw-medium">{{ $team->role }}</p>

                    <div class="mb-3">
                        @if ($team->status === 'active')
                            <span class="badge rounded-pill bg-success-soft text-success px-3">● Active</span>
                        @else
                            <span class="badge rounded-pill bg-danger-soft text-danger px-3">● Inactive</span>
                        @endif
                    </div>

                    <div class="d-flex justify-content-center gap-2 mb-4">
                        @if ($team->linkedin)
                            <a href="{{ $team->linkedin }}" target="_blank" class="social-icon btn-linkedin"><i
                                    class="fab fa-linkedin-in"></i></a>
                        @endif
                        @if ($team->facebook)
                            <a href="{{ $team->facebook }}" target="_blank" class="social-icon btn-facebook"><i
                                    class="fab fa-facebook-f"></i></a>
                        @endif
                        @if ($team->instagram)
                            <a href="{{ $team->instagram }}" target="_blank" class="social-icon btn-instagram"><i
                                    class="fab fa-instagram"></i></a>
                        @endif
                    </div>

                    <hr class="opacity-10">

                    <div class="text-start px-2">
                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-muted small">Email:</span>
                            <span class="small fw-bold">{{ $team->email }}</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-muted small">Experience:</span>
                            <span class="small fw-bold">{{ $team->work_start_year }} -
                                {{ $team->work_end_year ?? 'Present' }}</span>
                        </div>
                    </div>
                </div>

                <div class="card shadow-sm border-0 p-4">
                    <h6 class="fw-bold mb-3" style="color: #0A245D;">Expertise & Skills</h6>
                    <div class="d-flex flex-wrap gap-2">
                        @php
                            $skills = is_array($team->skills)
                                ? $team->skills
                                : (!empty($team->skills)
                                    ? explode(',', $team->skills)
                                    : []);
                        @endphp
                        @forelse($skills as $skill)
                            <span class="badge bg-light text-dark border px-3 py-2">{{ trim($skill) }}</span>
                        @empty
                            <span class="text-muted small">No skills listed</span>
                        @endforelse
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-header bg-white border-bottom d-flex justify-content-between align-items-center py-3">
                        <h5 class="fw-bold mb-0" style="color: #0A245D;"><i
                                class="fas fa-id-card me-2 text-primary"></i>Member Details</h5>
                        <a href="{{ route('team.index') }}" class="btn btn-sm px-4"
                            style="background-color: #74BF1A; color: white; border-radius: 8px;">
                            <i class="fas fa-arrow-left me-1"></i> Back
                        </a>
                    </div>

                    <div class="card-body p-4">
                        <section class="mb-5">
                            <h6 class="section-title">Biography</h6>
                            <p class="text-dark" style="line-height: 1.8; text-align: justify;">
                                {{ $team->bio ?? 'No biography provided.' }}
                            </p>
                        </section>

                        <div class="row">
                            <div class="col-md-6">
                                <h6 class="section-title"><i class="fas fa-briefcase me-2"></i>Professional Experience</h6>
                                <div class="info-box mb-4">
                                    <div class="mb-2">
                                        <label class="text-muted small d-block">Current Designation</label>
                                        <span class="fw-bold text-dark">{{ $team->designation ?? 'N/A' }}</span>
                                    </div>
                                    <div class="mb-2">
                                        <label class="text-muted small d-block">Company Name</label>
                                        <span class="fw-bold text-dark">{{ $team->company_name ?? 'N/A' }}</span>
                                    </div>
                                    <div class="mb-0">
                                        <label class="text-muted small d-block">Employment Period</label>
                                        <span class="fw-bold text-dark">{{ $team->work_start_year }} -
                                            {{ $team->work_end_year ?? 'Present' }}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <h6 class="section-title"><i class="fas fa-graduation-cap me-2"></i>Academic Background</h6>
                                <div class="info-box mb-4">
                                    <div class="mb-2">
                                        <label class="text-muted small d-block">Degree</label>
                                        <span class="fw-bold text-dark">{{ $team->degree_name ?? 'N/A' }}</span>
                                    </div>
                                    <div class="mb-2">
                                        <label class="text-muted small d-block">University / Institution</label>
                                        <span class="fw-bold text-dark">{{ $team->university_name ?? 'N/A' }}</span>
                                    </div>
                                    <div class="mb-0">
                                        <label class="text-muted small d-block">Year of Graduation</label>
                                        <span class="fw-bold text-dark">{{ $team->education_year ?? 'N/A' }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @if ($team->banner)
                            <div class="mt-4">
                                <h6 class="section-title">Profile Banner</h6>
                                <div class="banner-container">
                                    <img src="{{ asset($team->banner) }}" alt="{{ $team->name }}">
                                </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Section Styles */
        .section-title {
            text-transform: uppercase;
            font-size: 0.75rem;
            font-weight: 800;
            letter-spacing: 1.2px;
            color: #6c757d;
            margin-bottom: 1.25rem;
            border-bottom: 1px solid #eee;
            padding-bottom: 5px;
            display: block;
        }

        .info-box {
            background: #f8f9fa;
            padding: 1.25rem;
            border-radius: 10px;
            border-left: 4px solid #0A245D;
        }

        /* Social Icons */
        .social-icon {
            width: 35px;
            height: 35px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            color: white;
            transition: transform 0.2s;
            text-decoration: none;
        }

        .social-icon:hover {
            transform: translateY(-3px);
            color: white;
        }

        .btn-linkedin {
            background-color: #0077b5;
        }

        .btn-facebook {
            background-color: #1877f2;
        }

        .btn-instagram {
            background-color: #e4405f;
        }

        /* Badge Soft Colors */
        .bg-success-soft {
            background-color: #e6f7ed;
        }

        .bg-danger-soft {
            background-color: #fde8e8;
        }

        .banner-container img {
            width: 100%;
            max-height: 150px;
            object-fit: contain;
        }
    </style>
@endsection
