<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::latest()->get();

        $data = [
            'heading' => "Blog",
            'title' => "View Blogs",
            'active' => 'blog',
            'posts' => $posts
        ];

        return view('admin.blog.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'heading' => "Blog",
            'title' => "Add New Blog",
            'active' => 'blog',
        ];

        return view("admin.blog.create", $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048'
        ]);

        $imageName = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imageName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/blogs/'), $imageName);
        }

        Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $imageName,
        ]);

        return redirect()->route('posts.index')->with('success', 'Blog added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::findOrFail($id);

        $data = [
            'heading' => "Blog Detail",
            'title' => "View Blog Detail",
            'active' => 'blog',
            'post' => $post
        ];

        return view('admin.blog.details', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::findOrFail($id);

        $data = [
            'heading' => 'Blog',
            'title' => 'Edit Blog Post',
            'active' => 'blog',
            "post" => $post
        ];

        return view('admin.blog.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Post::findOrFail($id);

        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048'
        ]);

        $imageName = $post->image; // Keep old image by default

        if ($request->hasFile('image')) {
            // Delete old image if it exists
            $oldPath = public_path('uploads/blogs/' . $post->image);
            if (File::exists($oldPath)) {
                File::delete($oldPath);
            }

            $file = $request->file('image');
            $imageName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/blogs/'), $imageName);
        }

        $post->update([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $imageName,
        ]);

        return redirect()->route('posts.index')->with('success', 'Blog updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);

        // Delete image file from server
        $imagePath = public_path('uploads/blogs/' . $post->image);
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }

        $post->delete();

        return redirect()->back()->with('success', 'Blog deleted successfully');
    }
}
