<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SuccessStory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SuccessStoryController extends Controller
{
    public function index(Request $request)
    {
        $query = SuccessStory::query()->latest();

        if ($request->filled('country')) {
            $query->where('country', $request->country);
        }
        if ($request->filled('visa_type')) {
            $query->where('visa_type', $request->visa_type);
        }
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }
        if ($request->filled('featured')) {
            $query->where('featured', $request->featured === '1');
        }
        if ($request->filled('date_from')) {
            $query->whereDate('created_at', '>=', $request->date_from);
        }
        if ($request->filled('date_to')) {
            $query->whereDate('created_at', '<=', $request->date_to);
        }

        $stories = $query->paginate(15)->withQueryString();

        return view('admin.success-stories.index', [
            'heading' => 'Success Stories',
            'title' => 'Manage Success Stories',
            'active' => 'success-stories',
            'stories' => $stories,
        ]);
    }

    public function create()
    {
        return view('admin.success-stories.create', [
            'heading' => 'Success Stories',
            'title' => 'Create Success Story',
            'active' => 'success-stories',
        ]);
    }

    public function store(Request $request)
    {
        $validated = $this->validateRequest($request);
        $data = $this->buildData($request, $validated);
        $data['slug'] = $this->makeUniqueSlug($validated['title'] ?? 'success-story');

        SuccessStory::create($data);

        return redirect()->route('admin.success-stories.index')->with('success', 'Success story created.');
    }

    public function edit(string $id)
    {
        $story = SuccessStory::findOrFail($id);

        return view('admin.success-stories.edit', [
            'heading' => 'Success Stories',
            'title' => 'Edit Success Story',
            'active' => 'success-stories',
            'story' => $story,
        ]);
    }

    public function update(Request $request)
    {
        $story = SuccessStory::findOrFail($request->id);
        $validated = $this->validateRequest($request, true);
        $data = $this->buildData($request, $validated, $story);

        if (($validated['title'] ?? null) && $validated['title'] !== $story->title) {
            $data['slug'] = $this->makeUniqueSlug($validated['title'], $story->id);
        }

        $story->update($data);

        return redirect()->route('admin.success-stories.index')->with('success', 'Success story updated.');
    }

    public function destroy(string $id)
    {
        $story = SuccessStory::findOrFail($id);
        $this->deleteImage($story->cover_image);
        $this->deleteImage($story->visa_approval_image);
        $this->deleteImage($story->og_image);
        foreach (($story->gallery_images ?? []) as $img) {
            $this->deleteImage($img);
        }
        $story->delete();

        return back()->with('success', 'Success story deleted.');
    }

    public function toggleStatus(string $id)
    {
        $story = SuccessStory::findOrFail($id);
        $story->status = $story->status === 'published' ? 'draft' : 'published';
        $story->save();

        return back()->with('success', 'Story status updated.');
    }

    public function toggleFeatured(string $id)
    {
        $story = SuccessStory::findOrFail($id);
        $story->featured = ! $story->featured;
        $story->save();

        return back()->with('success', 'Story featured status updated.');
    }

    private function validateRequest(Request $request, bool $isUpdate = false): array
    {
        $rules = [
            'id' => [$isUpdate ? 'required' : 'nullable', 'exists:success_stories,id'],
            'title' => ['nullable', 'string', 'max:255'],
            'client_name' => ['nullable', 'string', 'max:255'],
            'is_anonymous' => ['nullable', 'boolean'],
            'country' => ['nullable', 'string', 'max:120'],
            'visa_type' => ['nullable', 'string', 'max:120'],
            'approval_status' => ['nullable', 'string', 'max:120'],
            'approval_date' => ['nullable', 'date'],
            'processing_time_days' => ['nullable', 'integer', 'min:0'],
            'processing_time_text' => ['nullable', 'string', 'max:120'],
            'case_summary' => ['nullable', 'string'],
            'full_story' => ['nullable', 'string'],
            'cover_image' => [$isUpdate ? 'nullable' : 'nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:4096'],
            'cover_image_alt' => ['nullable', 'string', 'max:255'],
            'cover_image_blur' => ['nullable', 'boolean'],
            'visa_approval_image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:4096'],
            'visa_approval_image_alt' => ['nullable', 'string', 'max:255'],
            'visa_approval_image_blur' => ['nullable', 'boolean'],
            'gallery_images.*' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:4096'],
            'gallery_alt_texts_text' => ['nullable', 'string'],
            'documents_verified' => ['nullable', 'boolean'],
            'testimonial_quote' => ['nullable', 'string'],
            'rating' => ['nullable', 'integer', 'between:1,5'],
            'tags' => ['nullable', 'string'],
            'meta_title' => ['nullable', 'string', 'max:255'],
            'meta_description' => ['nullable', 'string', 'max:500'],
            'og_image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:4096'],
            'status' => ['required', 'in:draft,published'],
            'featured' => ['nullable', 'boolean'],
        ];

        return $request->validate($rules);
    }

    private function buildData(Request $request, array $validated, ?SuccessStory $story = null): array
    {
        $data = [
            'title' => $validated['title'] ?? null,
            'client_name' => $validated['client_name'] ?? null,
            'is_anonymous' => $request->boolean('is_anonymous'),
            'country' => $validated['country'] ?? null,
            'visa_type' => $validated['visa_type'] ?? null,
            'approval_status' => $validated['approval_status'] ?? null,
            'approval_date' => $validated['approval_date'] ?? null,
            'processing_time_days' => $validated['processing_time_days'] ?? null,
            'processing_time_text' => $validated['processing_time_text'] ?? null,
            'case_summary' => $validated['case_summary'] ?? null,
            'full_story' => $validated['full_story'] ?? null,
            'cover_image_alt' => $validated['cover_image_alt'] ?? null,
            'cover_image_blur' => $request->boolean('cover_image_blur'),
            'visa_approval_image_alt' => $validated['visa_approval_image_alt'] ?? null,
            'visa_approval_image_blur' => $request->boolean('visa_approval_image_blur'),
            'documents_verified' => $request->boolean('documents_verified'),
            'testimonial_quote' => $validated['testimonial_quote'] ?? null,
            'rating' => $validated['rating'] ?? null,
            'meta_title' => $validated['meta_title'] ?? null,
            'meta_description' => $validated['meta_description'] ?? null,
            'status' => $validated['status'],
            'featured' => $request->boolean('featured'),
        ];

        $data['tags'] = $this->parseTags($validated['tags'] ?? null);

        if ($request->hasFile('cover_image')) {
            $this->deleteImage($story?->cover_image);
            $data['cover_image'] = $this->uploadImage($request->file('cover_image'));
        } else {
            $data['cover_image'] = $story?->cover_image;
        }

        if ($request->hasFile('visa_approval_image')) {
            $this->deleteImage($story?->visa_approval_image);
            $data['visa_approval_image'] = $this->uploadImage($request->file('visa_approval_image'));
        } else {
            $data['visa_approval_image'] = $story?->visa_approval_image;
        }

        if ($request->hasFile('og_image')) {
            $this->deleteImage($story?->og_image);
            $data['og_image'] = $this->uploadImage($request->file('og_image'));
        } else {
            $data['og_image'] = $story?->og_image;
        }

        if ($request->hasFile('gallery_images')) {
            if ($story && is_array($story->gallery_images)) {
                foreach ($story->gallery_images as $oldImage) {
                    $this->deleteImage($oldImage);
                }
            }

            $gallery = [];
            $meta = [];
            $alts = $this->parseAltLines($request->input('gallery_alt_texts_text'));
            foreach ($request->file('gallery_images') as $index => $image) {
                $path = $this->uploadImage($image);
                $gallery[] = $path;
                $meta[] = [
                    'alt' => $alts[$index] ?? null,
                    'blur' => $request->boolean('gallery_blur_all'),
                ];
            }
            $data['gallery_images'] = $gallery;
            $data['gallery_meta'] = $meta;
        } else {
            $data['gallery_images'] = $story?->gallery_images;
            $data['gallery_meta'] = $story?->gallery_meta;
        }

        return $data;
    }

    private function makeUniqueSlug(string $title, ?int $ignoreId = null): string
    {
        $base = Str::slug($title) ?: 'success-story';
        $slug = $base;
        $counter = 1;

        while (
            SuccessStory::where('slug', $slug)
                ->when($ignoreId, fn($q) => $q->where('id', '!=', $ignoreId))
                ->exists()
        ) {
            $slug = $base . '-' . $counter;
            $counter++;
        }

        return $slug;
    }

    private function parseTags(?string $tags): array
    {
        if (! $tags) {
            return [];
        }

        return collect(explode(',', $tags))
            ->map(fn($tag) => trim($tag))
            ->filter()
            ->values()
            ->all();
    }

    private function parseAltLines(?string $lines): array
    {
        if (! $lines) {
            return [];
        }

        return collect(preg_split('/\r\n|\r|\n/', $lines))
            ->map(fn($line) => trim($line))
            ->filter()
            ->values()
            ->all();
    }

    private function uploadImage($file): string
    {
        $directory = public_path('uploads/success-stories');
        if (! is_dir($directory)) {
            mkdir($directory, 0755, true);
        }

        $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
        $fullPath = $directory . '/' . $fileName;
        $file->move($directory, $fileName);
        $this->compressImage($fullPath);

        return 'uploads/success-stories/' . $fileName;
    }

    private function deleteImage(?string $path): void
    {
        if (! $path) {
            return;
        }

        $fullPath = public_path($path);
        if (file_exists($fullPath)) {
            unlink($fullPath);
        }
    }

    private function compressImage(string $path): void
    {
        if (! function_exists('getimagesize')) {
            return;
        }

        $imageInfo = @getimagesize($path);
        if (! $imageInfo || empty($imageInfo['mime'])) {
            return;
        }

        $mime = $imageInfo['mime'];
        $resource = null;

        if ($mime === 'image/jpeg' && function_exists('imagecreatefromjpeg')) {
            $resource = @imagecreatefromjpeg($path);
            if ($resource) {
                @imagejpeg($resource, $path, 78);
            }
        } elseif ($mime === 'image/png' && function_exists('imagecreatefrompng')) {
            $resource = @imagecreatefrompng($path);
            if ($resource) {
                @imagepng($resource, $path, 6);
            }
        } elseif ($mime === 'image/webp' && function_exists('imagecreatefromwebp')) {
            $resource = @imagecreatefromwebp($path);
            if ($resource && function_exists('imagewebp')) {
                @imagewebp($resource, $path, 78);
            }
        }

        if ($resource) {
            imagedestroy($resource);
        }
    }
}
