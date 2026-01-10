@extends('layouts.admin')

@section('content')
    <div class="container-fluid mb-5">
        <div class="card shadow-lg rounded-lg border-0">

            <div class="card-header text-white d-flex justify-content-between align-items-center"
                style="background-color: #0A245D;">
                <h5 class="mb-0 text-white">Add Consultant / Team Member</h5>
                <a href="{{ route('team.index') }}" class="btn btn-success btn-sm" style="font-weight: 600;">
                    Back to Team
                </a>
            </div>

            <div class="card-body p-4">
                <form action="{{ route('team.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    {{-- SECTION 1: Personal Information --}}
                    <div class="mb-4">
                        <h5 class="text-primary border-bottom pb-2 mb-3">1. Professional Profile</h5>
                        <div class="row g-3">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Full Name</label>
                                <input type="text" name="name" class="form-control form-control-lg"
                                    placeholder="e.g. Muhammad Umar" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Professional Email</label>
                                <input type="email" name="email" class="form-control form-control-lg"
                                    placeholder="umar@consultancy.com">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Role </label>
                                <input type="text" name="role" class="form-control form-control-lg"
                                    placeholder="e.g. Consultant, Analyst, Strategist">
                            </div>


                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Availability Status</label>
                                <select name="status" class="form-control form-control-lg">
                                    <option value="active">Active </option>
                                    <option value="inactive"> Inactive</option>
                                </select>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label class="form-label fw-semibold">Professional Executive Summary</label>
                                <textarea name="bio" rows="3" class="form-control form-control-lg"
                                    placeholder="Briefly describe the consultant's background, mission, and key value proposition..."></textarea>
                            </div>
                        </div>
                    </div>

                    {{-- SECTION 2: Media & Expertise --}}
                    <div class="mb-4">
                        <h5 class="text-primary border-bottom pb-2 mb-3">2. Media & Expertise</h5>
                        <div class="row g-3">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Profile Pic</label>
                                <input type="file" name="profile_pic" class="form-control form-control-lg">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Profile Banner</label>
                                <input type="file" name="banner" class="form-control form-control-lg">
                            </div>

                            <div class="col-md-12 mb-3">
                                <label class="form-label fw-semibold">Areas of Expertise </label>
                                <input type="text" name="skills" class="form-control form-control-lg"
                                    placeholder="Risk Management, Tax Strategy, Corporate Law, Mergers & Acquisitions">
                            </div>
                        </div>
                    </div>

                    {{-- SECTION 3: Career History --}}
                    <div class="mb-4">
                        <h5 class="text-primary border-bottom pb-2 mb-3">3. Career History</h5>
                        <div class="row g-3">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Current/Last Designation</label>
                                <input type="text" name="designation" class="form-control form-control-lg"
                                    placeholder="e.g. Principal Strategy Consultant">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Organization / Firm</label>
                                <input type="text" name="company_name" class="form-control form-control-lg"
                                    placeholder="e.g. Global Insights Group">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Start Year</label>
                                <input type="number" name="work_start_year" class="form-control form-control-lg"
                                    placeholder="2015">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">End Year</label>
                                <input type="number" name="work_end_year" class="form-control form-control-lg"
                                    placeholder="Leave blank if currently engaged">
                            </div>
                        </div>
                    </div>

                    {{-- SECTION 4: Academic Background --}}
                    <div class="mb-4">
                        <h5 class="text-primary border-bottom pb-2 mb-3">4. Academic Background</h5>
                        <div class="row g-3">
                            <div class="col-md-4 mb-3">
                                <label class="form-label fw-semibold">Highest Qualification</label>
                                <input type="text" name="degree_name" class="form-control form-control-lg"
                                    placeholder="e.g. MBA in Finance">
                            </div>

                            <div class="col-md-4 mb-3">
                                <label class="form-label fw-semibold">Institution</label>
                                <input type="text" name="university_name" class="form-control form-control-lg"
                                    placeholder="e.g. Harvard Business School">
                            </div>

                            <div class="col-md-4 mb-3">
                                <label class="form-label fw-semibold">Year of Graduation</label>
                                <input type="number" name="education_year" class="form-control form-control-lg"
                                    placeholder="2010">
                            </div>
                        </div>
                    </div>

                    {{-- SECTION 5: Social & Networking --}}
                    <div class="mb-4">
                        <h5 class="text-primary border-bottom pb-2 mb-3">5. Professional Links</h5>
                        <div class="row g-3">
                            <div class="col-md-4 mb-3">
                                <label class="form-label fw-semibold">Facebook </label>
                                <input type="text" name="facebook" class="form-control form-control-lg"
                                    placeholder="https://facebook.com/username">
                            </div>

                            <div class="col-md-4 mb-3">
                                <label class="form-label fw-semibold">Instagram </label>
                                <input type="text" name="instagram" class="form-control form-control-lg"
                                    placeholder="https://instagram.com/username">
                            </div>

                            <div class="col-md-4 mb-3">
                                <label class="form-label fw-semibold">LinkedIn Profile</label>
                                <input type="text" name="linkedin" class="form-control form-control-lg"
                                    placeholder="https://linkedin.com/in/username">
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 text-center">
                        <button type="submit" class="btn btn-lg shadow-sm"
                            style="background-color: #74BF1A; color: white; padding: 12px 60px; font-weight: 600; border-radius: 30px;">
                            Finalize Consultant Profile
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
