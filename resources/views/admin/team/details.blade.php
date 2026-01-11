@extends('layouts.admin')

@section('content')
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="mb-3">
            <a href="{{ route('team.index') }}" class="btn btn-sm shadow-sm text-white" style="background-color: #0A245D;">
                <i class="fa fa-arrow-left me-1"></i> Back to Team
            </a>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="card shadow-sm border-0 text-center p-4 mb-4">
                    <div class="mb-3 position-relative">
                        @if ($team->profile_pic)
                            <img src="{{ asset($team->profile_pic) }}" alt="{{ $team->name }}"
                                class="rounded-circle img-thumbnail shadow-sm"
                                style="width: 150px; height: 150px; object-fit: cover; border: 3px solid #79BD21;">
                        @else
                            <div class="rounded-circle bg-light d-inline-flex align-items-center justify-content-center shadow-sm"
                                style="width: 150px; height: 150px; border: 3px solid #dee2e6;">
                                <i class="fas fa-user fa-4x text-muted"></i>
                            </div>
                        @endif
                    </div>

                    <h4 class="fw-bold mb-1" style="color: #0A245D;">{{ $team->name }}</h4>
                    <p class="text-muted mb-2 fw-medium small text-uppercase letter-spacing-1">{{ $team->role }}</p>

                    <div class="mb-3">
                        @if ($team->status === 'active')
                            <span class="badge rounded-pill px-3 py-2" style="background-color: #e6f7ed; color: #28a745;">●
                                Active</span>
                        @else
                            <span class="badge rounded-pill px-3 py-2" style="background-color: #fde8e8; color: #dc3545;">●
                                Inactive</span>
                        @endif
                    </div>

                    <div class="d-flex justify-content-center gap-2 mb-4">
                        @if ($team->linkedin)
                            <a href="{{ $team->linkedin }}" target="_blank" class="social-icon btn-linkedin shadow-sm"><i
                                    class="fab fa-linkedin-in"></i></a>
                        @endif
                        @if ($team->facebook)
                            <a href="{{ $team->facebook }}" target="_blank" class="social-icon btn-facebook shadow-sm"><i
                                    class="fab fa-facebook-f"></i></a>
                        @endif
                        @if ($team->instagram)
                            <a href="{{ $team->instagram }}" target="_blank" class="social-icon btn-instagram shadow-sm"><i
                                    class="fab fa-instagram"></i></a>
                        @endif
                    </div>

                    <hr class="opacity-10">

                    <div class="text-start px-2 mt-3">
                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-muted small">Email:</span>
                            <span class="small fw-bold">{{ $team->email }}</span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span class="text-muted small">Tenure:</span>
                            <span class="small fw-bold text-dark">{{ $team->work_start_year }} -
                                {{ $team->work_end_year ?? 'Present' }}</span>
                        </div>
                    </div>
                </div>

                <div class="card shadow-sm border-0 p-4">
                    <h6 class="fw-bold mb-3 text-uppercase" style="color: #0A245D; font-size: 0.8rem; letter-spacing: 1px;">
                        <i class="fa fa-star me-2" style="color: #79BD21;"></i> Expertise & Skills
                    </h6>
                    <div class="d-flex flex-wrap" style="gap: 10px;"> @php
                        $skills = is_array($team->skills)
                            ? $team->skills
                            : (!empty($team->skills)
                                ? explode(',', $team->skills)
                                : []);
                    @endphp
                        @forelse($skills as $skill)
                            <span class="skill-badge shadow-sm">{{ trim($skill) }}</span>
                        @empty
                            <span class="text-muted small italic">No skills listed</span>
                        @endforelse
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-header bg-white border-bottom py-3" style="border-left: 5px solid #0A245D;">
                        <h5 class="fw-bold mb-0" style="color: #0A245D;">Member Profile Details</h5>
                    </div>

                    <div class="card-body p-4 p-md-5">
                        <section class="mb-5">
                            <h6 class="section-title">Biography</h6>
                            <div class="p-3 bg-light rounded shadow-xs"
                                style="line-height: 1.8; color: #444; border-left: 3px solid #79BD21;">
                                {{ $team->bio ?? 'No biography provided.' }}
                            </div>
                        </section>

                        <div class="row">
                            <div class="col-md-6 mb-4 mb-md-0">
                                <h6 class="section-title"><i class="fas fa-briefcase me-2"></i>Professional</h6>
                                <div class="info-box">
                                    <div class="mb-3">
                                        <label class="text-muted small d-block mb-1">Current Designation</label>
                                        <span class="fw-bold text-dark h6 mb-0">{{ $team->designation ?? 'N/A' }}</span>
                                    </div>
                                    <div class="mb-3">
                                        <label class="text-muted small d-block mb-1">Company Name</label>
                                        <span class="fw-bold text-dark">{{ $team->company_name ?? 'N/A' }}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <h6 class="section-title"><i class="fas fa-graduation-cap me-2"></i>Academic</h6>
                                <div class="info-box" style="border-left-color: #79BD21;">
                                    <div class="mb-3">
                                        <label class="text-muted small d-block mb-1">Degree</label>
                                        <span class="fw-bold text-dark h6 mb-0">{{ $team->degree_name ?? 'N/A' }}</span>
                                    </div>
                                    <div class="mb-3">
                                        <label class="text-muted small d-block mb-1">Institution</label>
                                        <span class="fw-bold text-dark">{{ $team->university_name ?? 'N/A' }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @if ($team->banner)
                            <div class="mt-5">
                                <h6 class="section-title">Profile Banner</h6>
                                <div class="banner-wrapper rounded shadow-sm border p-2">
                                    <img src="{{ asset($team->banner) }}" alt="Banner" class="img-fluid rounded"
                                        style="width: 100%; max-height: 200px; object-fit: cover;">
                                </div>
                            </div>
                        @endif
                    </div>

                    <div class="card-footer bg-white text-end py-3">
                        <a href="{{ route('team.edit', $team->id) }}" class="btn btn-sm text-white px-4"
                            style="background-color: #79BD21;">
                            <i class="fa fa-edit me-1"></i> Edit Profile
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Fixed Gap and Style for Skills */
        .skill-badge {
            background-color: #f8faff;
            color: #0A245D;
            border: 1px solid #e1e8f0;
            padding: 6px 15px;
            border-radius: 8px;
            font-size: 0.85rem;
            font-weight: 600;
            transition: all 0.2s ease;
        }

        .skill-badge:hover {
            background-color: #79BD21;
            color: white;
            border-color: #79BD21;
            transform: translateY(-2px);
        }

        /* Professional Styling */
        .section-title {
            text-transform: uppercase;
            font-size: 0.75rem;
            font-weight: 800;
            letter-spacing: 1.2px;
            color: #999;
            margin-bottom: 1.25rem;
            display: flex;
            align-items: center;
        }

        .section-title::after {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
            margin-left: 15px;
        }

        .info-box {
            background: #fcfcfc;
            padding: 1.25rem;
            border-radius: 12px;
            border: 1px solid #f0f0f0;
            border-left: 4px solid #0A245D;
        }

        .social-icon {
            width: 38px;
            height: 38px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            color: white;
            text-decoration: none;
            font-size: 1rem;
        }

        .btn-linkedin {
            background-color: #0077b5;
        }

        .btn-facebook {
            background-color: #1877f2;
        }

        .btn-instagram {
            background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
        }

        .letter-spacing-1 {
            letter-spacing: 1px;
        }
    </style>
@endsection
