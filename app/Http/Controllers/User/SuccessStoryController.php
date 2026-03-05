<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\SuccessStory;
use Illuminate\Http\Request;

class SuccessStoryController extends Controller
{
    public function index(Request $request)
    {
        $query = SuccessStory::published();

        if ($request->filled('country')) {
            $query->where('country', $request->country);
        }
        if ($request->filled('visa_type')) {
            $query->where('visa_type', $request->visa_type);
        }
        if ($request->filled('approval_status')) {
            $query->where('approval_status', $request->approval_status);
        }
        if ($request->filled('processing_time_min')) {
            $query->whereNotNull('processing_time_days')
                ->where('processing_time_days', '>=', (int) $request->processing_time_min);
        }
        if ($request->filled('processing_time_max')) {
            $query->whereNotNull('processing_time_days')
                ->where('processing_time_days', '<=', (int) $request->processing_time_max);
        }
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', '%' . $search . '%')
                    ->orWhere('client_name', 'like', '%' . $search . '%')
                    ->orWhere('case_summary', 'like', '%' . $search . '%')
                    ->orWhereRaw('CAST(tags AS CHAR) LIKE ?', ['%' . $search . '%']);
            });
        }

        $sort = $request->get('sort', 'recent');
        if ($sort === 'fastest') {
            $query->orderBy('processing_time_days');
        } elseif ($sort === 'featured') {
            $query->orderByDesc('featured')->orderByDesc('created_at');
        } else {
            $query->orderByDesc('created_at');
        }

        $stories = $query->paginate(9)->withQueryString();

        return view('user.success-stories.index', [
            'stories' => $stories,
            'sort' => $sort,
        ]);
    }

    public function show(string $slug)
    {
        $story = SuccessStory::published()->where('slug', $slug)->firstOrFail();

        $relatedStories = SuccessStory::published()
            ->where('id', '!=', $story->id)
            ->where(function ($query) use ($story) {
                $query->where('country', $story->country)
                    ->orWhere('visa_type', $story->visa_type);
            })
            ->latest()
            ->take(3)
            ->get();

        return view('user.success-stories.show', compact('story', 'relatedStories'));
    }
}
