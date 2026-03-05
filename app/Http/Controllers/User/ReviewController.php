<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Mail\ReviewPendingAdminMail;
use App\Mail\ReviewSubmittedUserMail;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ReviewController extends Controller
{
    public function index(Request $request)
    {
        $sort = $request->get('sort', 'newest');
        $query = Review::approved();

        if ($sort === 'highest_rating') {
            $query->orderByDesc('rating')->orderByDesc('id');
        } elseif ($sort === 'oldest') {
            $query->orderBy('created_at');
        } else {
            $query->orderByDesc('created_at');
        }

        $reviews = $query->paginate(9)->withQueryString();

        return view('user.reviews', [
            'reviews' => $reviews,
            'sort' => $sort,
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'rating' => ['required', 'integer', 'between:1,5'],
            'title' => ['nullable', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:3000'],
            'company_role' => ['nullable', 'string', 'max:255'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:4096'],
        ]);

        if ($request->hasFile('image')) {
            $validated['image_url'] = $this->uploadImage($request);
        }

        $validated['status'] = 'pending';
        $review = Review::create($validated);

        $adminEmail = env('ADMIN_EMAIL', config('mail.from.address'));
        if ($adminEmail) {
            Mail::to($adminEmail)->send(new ReviewPendingAdminMail($review));
        }
        Mail::to($review->email)->send(new ReviewSubmittedUserMail($review));

        return redirect()
            ->route('reviews.index')
            ->with('success', 'Thanks! Your review is submitted and will appear after admin approval.');
    }

    private function uploadImage(Request $request): ?string
    {
        if (! $request->hasFile('image')) {
            return null;
        }

        $file = $request->file('image');
        $directory = public_path('uploads/reviews');

        if (! is_dir($directory)) {
            mkdir($directory, 0755, true);
        }

        $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
        $file->move($directory, $fileName);

        return 'uploads/reviews/' . $fileName;
    }
}
