<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\ReviewApprovedMail;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ReviewController extends Controller
{
    public function index(Request $request)
    {
        $status = $request->get('status');
        $search = $request->get('search');

        $query = Review::query()->latest();

        if (in_array($status, ['pending', 'approved', 'rejected'], true)) {
            $query->where('status', $status);
        }

        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', '%' . $search . '%')
                    ->orWhere('email', 'like', '%' . $search . '%')
                    ->orWhere('title', 'like', '%' . $search . '%')
                    ->orWhere('message', 'like', '%' . $search . '%');
            });
        }

        $reviews = $query->paginate(15)->withQueryString();

        return view('admin.reviews.index', [
            'heading' => 'Reviews',
            'title' => 'Manage Reviews',
            'active' => 'reviews',
            'reviews' => $reviews,
            'status' => $status,
            'search' => $search,
        ]);
    }

    public function approve(string $id)
    {
        $review = Review::findOrFail($id);
        $review->update([
            'status' => 'approved',
            'approved_at' => now(),
        ]);

        Mail::to($review->email)->send(new ReviewApprovedMail($review));

        return back()->with('success', 'Review approved successfully.');
    }

    public function reject(string $id)
    {
        $review = Review::findOrFail($id);
        $review->update([
            'status' => 'rejected',
            'approved_at' => null,
        ]);

        return back()->with('success', 'Review rejected.');
    }

    public function destroy(string $id)
    {
        $review = Review::findOrFail($id);
        $this->deleteImage($review->image_url);
        $review->delete();

        return back()->with('success', 'Review deleted.');
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
}
