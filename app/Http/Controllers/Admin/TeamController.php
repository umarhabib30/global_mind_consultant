<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ImageHelper;
use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::all();
        $data = [
            'heading' => "Team",
            'title' => "View Team Member",
            'active' => 'team',
            'teams' => $teams
        ];
        return view('admin.team.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'heading' => "Team",
            'title' => "Add Team Member",
            'active' => 'team',
        ];
        return view("admin.team.create", $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $path = ImageHelper::saveImage($request->image, 'Image');

        Team::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'role' => $request->role,
            'role_details' => $request->role_details,
            'bio' => $request->bio,
            'image' => $path,
            'linkedin' => $request->linkedin,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'experience_years' => $request->experience_years,
            'education' => $request->education,
            'specialization' => $request->specialization,
            'status' => $request->status,

        ]);
        return redirect()->back()->with('success', 'Teacher added succesfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $team = Team::findOrFail($id);
        $data = [
            'heading' => "Team Member Detail",
            'title' => "View Team Member Detail",
            'active' => 'team',
            'team' => $team
        ];
        return view('admin.team.details', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $team = Team::findOrFail($id);
        $data = [
            'heading' => 'Team',
            'title' => 'Enter Team Member',
            'active' => 'team',
            "team" => $team
        ];
        return view('admin.team.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $team = Team::findOrFail($request->id);
        $data=[
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'role' => $request->role,
            'role_details' => $request->role_details,
            'bio' => $request->bio,
            'linkedin' => $request->linkedin,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'experience_years' => $request->experience_years,
            'education' => $request->education,
            'specialization' => $request->specialization,
            'status' => $request->status,

        ];
        // handle image update
        if ($request->hasFile('image')) {
            $path         = ImageHelper::saveImage($request->image, 'Image');
            $data['image'] = $path;
        } else {
            $data['image'] = $team->image;
        }

        $team->update($data);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $team = Team::findOrFail($id);
        $team->delete();

        return redirect()->back()->with('success', 'Team Member deleted successfully');
    }
}
