@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Add Team Member</h5>
                <div class="card-body">
                    <form action="{{ route('team.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <div class="form-group col-md-6">
                                <label for="name" class="col-form-label">Name</label>
                                <input id="name" type="text" class="form-control" name="name" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="email" class="col-form-label">Email</label>
                                <input id="email" type="email" class="form-control" name="email" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="phone" class="col-form-label">Phone</label>
                                <input id="phone" type="text" class="form-control" name="phone">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="role" class="col-form-label">Role</label>
                                <input id="role" type="text" class="form-control" name="role">
                            </div>

                            <div class="form-group col-md-12">
                                <label for="role_details" class="col-form-label">Role Details</label>
                                <input id="role_details" type="text" class="form-control" name="role_details">
                            </div>

                            <div class="form-group col-md-12">
                                <label for="bio" class="col-form-label">Bio</label>
                                <textarea id="bio" class="form-control" name="bio" rows="3"></textarea>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="linkedin" class="col-form-label">LinkedIn</label>
                                <input id="linkedin" type="text" class="form-control" name="linkedin">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="facebook" class="col-form-label">Facebook</label>
                                <input id="facebook" type="text" class="form-control" name="facebook">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="instagram" class="col-form-label">Instagram</label>
                                <input id="instagram" type="text" class="form-control" name="instagram">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="experience_years" class="col-form-label">Experience (Years)</label>
                                <input id="experience_years" type="number" class="form-control" name="experience_years">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="education" class="col-form-label">Education</label>
                                <input id="education" type="text" class="form-control" name="education">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="specialization" class="col-form-label">Specialization</label>
                                <input id="specialization" type="text" class="form-control" name="specialization">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="status" class="col-form-label">Status</label>
                                <select id="status" name="status" class="form-control">
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="image" class="col-form-label">Profile Image</label>
                                <input id="image" type="file" class="form-control" name="image">
                            </div>

                        </div>

                        <button type="submit" class="btn btn-primary px-5">Save Team Member</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
