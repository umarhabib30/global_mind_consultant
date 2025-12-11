<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\University;
use Illuminate\Http\Request;
use App\Helpers\ImageHelper;

class UniversityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $universities = University::all();
        $data = [
            'heading' => "University",
            'title' => "View Universities",
            'active' => 'university',
            'universities' => $universities

        ];
        return view('admin.university.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'heading' => "University",
            'title' => "Add University",
            'active' => 'university',
        ];
        return view("admin.university.create", $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $path = ImageHelper::saveImage($request->image, 'Image');

        University::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $path,


        ]);
        return redirect()->back()->with('success', 'University added succesfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $university = University::findOrFail($id);
        $data = [
            'heading' => 'University',
            'title' => 'Enter University',
            'active' => 'university',
            "university" => $university
        ];
        return view('admin.university.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {

        $university = University::findOrFail($request->id);
        $data = [
            'name' => $request->name,
            'description' => $request->description,


        ];
        // handle image update
        if ($request->hasFile('image')) {
            $path         = ImageHelper::saveImage($request->image, 'Image');
            $data['image'] = $path;
        } else {
            $data['image'] = $university->image;
        }

        $university->update($data);
        return redirect()->route('university.index')->with('success', 'University updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $university = University::findOrFail($id);
        $university->delete();

        return redirect()->back()->with('success', 'University deleted successfully');
    }
}
