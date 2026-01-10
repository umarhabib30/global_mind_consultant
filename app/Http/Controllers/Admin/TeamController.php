<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ImageHelper;
use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::all();

        return view('admin.team.index', [
            'heading' => "Team",
            'title' => "View Team Member",
            'active' => 'team',
            'teams' => $teams
        ]);
    }

    public function create()
    {
        return view("admin.team.create", [
            'heading' => "Team",
            'title' => "Add Team Member",
            'active' => 'team',
        ]);
    }

    public function store(Request $request)
    {
        // Profile image
        $profilePicPath = null;
        if ($request->hasFile('profile_pic')) {
            $profilePicPath = ImageHelper::saveImage($request->profile_pic, 'Image');
        }

        // Banner image
        $bannerPath = null;
        if ($request->hasFile('banner')) {
            $bannerPath = ImageHelper::saveImage($request->banner, 'Image');
        }

        Team::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'bio' => $request->bio,

            'profile_pic' => $profilePicPath,
            'banner' => $bannerPath,

            'skills' => $request->skills, // array → JSON (auto cast)

            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'linkedin' => $request->linkedin,

            'work_start_year' => $request->work_start_year,
            'work_end_year' => $request->work_end_year,
            'designation' => $request->designation,
            'company_name' => $request->company_name,

            'degree_name' => $request->degree_name,
            'university_name' => $request->university_name,
            'education_year' => $request->education_year,

            'status' => $request->status,
        ]);

        return redirect()->back()->with('success', 'Team member added successfully');
    }

    public function show(string $id)
    {
        $team = Team::findOrFail($id);

        return view('admin.team.details', [
            'heading' => "Team Member Detail",
            'title' => "View Team Member Detail",
            'active' => 'team',
            'team' => $team
        ]);
    }

    public function edit(string $id)
    {
        $team = Team::findOrFail($id);

        return view('admin.team.edit', [
            'heading' => 'Team',
            'title' => 'Edit Team Member',
            'active' => 'team',
            'team' => $team
        ]);
    }

    public function update(Request $request)
    {
        $team = Team::findOrFail($request->id);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'bio' => $request->bio,

            'skills' => $request->skills,

            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'linkedin' => $request->linkedin,

            'work_start_year' => $request->work_start_year,
            'work_end_year' => $request->work_end_year,
            'designation' => $request->designation,
            'company_name' => $request->company_name,

            'degree_name' => $request->degree_name,
            'university_name' => $request->university_name,
            'education_year' => $request->education_year,

            'status' => $request->status,
        ];

        // Profile image update
        if ($request->hasFile('profile_pic')) {
            $data['profile_pic'] = ImageHelper::saveImage($request->profile_pic, 'Image');
        }

        // Banner image update
        if ($request->hasFile('banner')) {
            $data['banner'] = ImageHelper::saveImage($request->banner, 'Image');
        }

        $team->update($data);

        return redirect()->route('team.index')->with('success', 'Team member updated successfully');
    }

    public function destroy(string $id)
    {
        $team = Team::findOrFail($id);
        $team->delete();

        return redirect()->back()->with('success', 'Team member deleted successfully');
    }
}
