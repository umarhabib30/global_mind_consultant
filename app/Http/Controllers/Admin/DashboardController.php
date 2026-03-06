<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutFaq;
use App\Models\Consultation;
use App\Models\ContactSubmission;
use App\Models\Destination;
use App\Models\DestinationFaqs;
use App\Models\Event;
use App\Models\EventReservation;
use App\Models\IeltsFaq;
use App\Models\Post;
use App\Models\Review;
use App\Models\SuccessStory;
use App\Models\Team;
use App\Models\University;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $now = Carbon::now();
        $monthLabels = collect(range(5, 0))
            ->map(fn($offset) => $now->copy()->subMonths($offset)->format('M'))
            ->push($now->format('M'))
            ->values();

        $contactsTrend = $this->getMonthlyTrend(ContactSubmission::class);
        $consultationTrend = $this->getMonthlyTrend(Consultation::class);
        $reservationTrend = $this->getMonthlyTrend(EventReservation::class);

        $universityCountries = University::query()
            ->selectRaw("COALESCE(country, 'Unknown') as country, COUNT(*) as total")
            ->groupBy('country')
            ->orderByDesc('total')
            ->limit(6)
            ->get();

        $faqsCount = AboutFaq::count() + DestinationFaqs::count() + IeltsFaq::count();
        $reviewsApproved = Review::where('status', 'approved')->count();
        $reviewsPending = Review::where('status', 'pending')->count();
        $reviewsRejected = Review::where('status', 'rejected')->count();
        $reviewsTotal = $reviewsApproved + $reviewsPending + $reviewsRejected;

        $featuredTeam = Team::where('is_featured', true)->count();
        $teamTotal = Team::count();

        $publishedStories = SuccessStory::where('status', 'published')->count();
        $storiesTotal = SuccessStory::count();

        $contactDelta = $this->getMonthDelta(ContactSubmission::class);
        $consultationDelta = $this->getMonthDelta(Consultation::class);
        $reservationDelta = $this->getMonthDelta(EventReservation::class);
        $postDelta = $this->getMonthDelta(Post::class);

        $upcomingEvents = Event::query()
            ->whereDate('date', '>=', $now->toDateString())
            ->orderBy('date')
            ->limit(5)
            ->get(['id', 'title', 'date', 'location', 'event_type']);

        $recentActivities = collect()
            ->merge(ContactSubmission::query()->latest()->limit(4)->get(['name', 'email', 'created_at'])->map(function ($item) {
                return [
                    'type' => 'Contact',
                    'icon' => 'fas fa-envelope',
                    'title' => $item->name ?: 'New contact message',
                    'subtitle' => $item->email ?: 'No email',
                    'created_at' => optional($item->created_at)->toDateTimeString(),
                ];
            }))
            ->merge(Consultation::query()->latest()->limit(4)->get(['first_name', 'last_name', 'email', 'created_at'])->map(function ($item) {
                return [
                    'type' => 'Consultation',
                    'icon' => 'fas fa-calendar-check',
                    'title' => trim(($item->first_name ?? '') . ' ' . ($item->last_name ?? '')) ?: 'Consultation booking',
                    'subtitle' => $item->email ?: 'No email',
                    'created_at' => optional($item->created_at)->toDateTimeString(),
                ];
            }))
            ->merge(EventReservation::query()->latest()->limit(4)->get(['full_name', 'email', 'created_at'])->map(function ($item) {
                return [
                    'type' => 'Reservation',
                    'icon' => 'fas fa-ticket-alt',
                    'title' => $item->full_name ?: 'Event reservation',
                    'subtitle' => $item->email ?: 'No email',
                    'created_at' => optional($item->created_at)->toDateTimeString(),
                ];
            }))
            ->sortByDesc('created_at')
            ->take(8)
            ->values();

        $data = [
            'heading' => 'Dashboard',
            'title' => 'View Dashboard',
            'active' => 'dashboard',
            'stats' => [
                'universities' => University::count(),
                'destinations' => Destination::count(),
                'team_members' => Team::count(),
                'posts' => Post::count(),
                'events' => Event::count(),
                'success_stories' => SuccessStory::count(),
                'contact_messages' => ContactSubmission::count(),
                'consultations' => Consultation::count(),
                'event_reservations' => EventReservation::count(),
                'reviews_total' => $reviewsTotal,
                'reviews_approved' => $reviewsApproved,
                'reviews_pending' => $reviewsPending,
                'reviews_rejected' => $reviewsRejected,
                'featured_team' => $featuredTeam,
                'published_stories' => $publishedStories,
                'faqs_total' => $faqsCount,
            ],
            'monthDeltas' => [
                'contacts' => $contactDelta,
                'consultations' => $consultationDelta,
                'reservations' => $reservationDelta,
                'posts' => $postDelta,
            ],
            'qualityMetrics' => [
                'review_approval_rate' => $reviewsTotal > 0 ? round(($reviewsApproved / $reviewsTotal) * 100, 1) : 0,
                'featured_team_rate' => $teamTotal > 0 ? round(($featuredTeam / $teamTotal) * 100, 1) : 0,
                'published_story_rate' => $storiesTotal > 0 ? round(($publishedStories / $storiesTotal) * 100, 1) : 0,
            ],
            'monthLabels' => $monthLabels,
            'monthlyInquiries' => [
                'contacts' => $contactsTrend,
                'consultations' => $consultationTrend,
                'reservations' => $reservationTrend,
            ],
            'contentMix' => [
                'labels' => ['Universities', 'Destinations', 'Team', 'Blogs', 'Events', 'Stories', 'FAQs'],
                'series' => [
                    University::count(),
                    Destination::count(),
                    Team::count(),
                    Post::count(),
                    Event::count(),
                    SuccessStory::count(),
                    $faqsCount,
                ],
            ],
            'reviewStatus' => [
                'labels' => ['Approved', 'Pending', 'Rejected'],
                'series' => [
                    $reviewsApproved,
                    $reviewsPending,
                    $reviewsRejected,
                ],
            ],
            'countriesChart' => [
                'labels' => $universityCountries->pluck('country')->values(),
                'series' => $universityCountries->pluck('total')->values(),
            ],
            'upcomingEvents' => $upcomingEvents,
            'recentActivities' => $recentActivities,
        ];
        return view('admin.dashboard.index', $data);
    }

    private function getMonthlyTrend(string $modelClass): array
    {
        $model = new $modelClass();
        $table = $model->getTable();

        if (!Schema::hasColumn($table, 'created_at')) {
            return array_fill(0, 6, 0);
        }

        $start = Carbon::now()->startOfMonth()->subMonths(5);

        $counts = $modelClass::query()
            ->selectRaw('DATE_FORMAT(created_at, "%Y-%m") as month_key, COUNT(*) as total')
            ->where('created_at', '>=', $start)
            ->groupBy('month_key')
            ->orderBy('month_key')
            ->pluck('total', 'month_key');

        return collect(range(5, 0))
            ->map(function ($offset) use ($counts) {
                $key = Carbon::now()->subMonths($offset)->format('Y-m');
                return (int) ($counts[$key] ?? 0);
            })
            ->push((int) ($counts[Carbon::now()->format('Y-m')] ?? 0))
            ->values()
            ->all();
    }

    private function getMonthDelta(string $modelClass): array
    {
        $model = new $modelClass();
        $table = $model->getTable();

        if (!Schema::hasColumn($table, 'created_at')) {
            return ['current' => 0, 'previous' => 0, 'rate' => 0];
        }

        $now = Carbon::now();
        $currentStart = $now->copy()->startOfMonth();
        $previousStart = $now->copy()->subMonth()->startOfMonth();
        $previousEnd = $now->copy()->subMonth()->endOfMonth();

        $current = $modelClass::query()
            ->whereBetween('created_at', [$currentStart, $now])
            ->count();

        $previous = $modelClass::query()
            ->whereBetween('created_at', [$previousStart, $previousEnd])
            ->count();

        $rate = $previous > 0
            ? round((($current - $previous) / $previous) * 100, 1)
            : ($current > 0 ? 100 : 0);

        return [
            'current' => $current,
            'previous' => $previous,
            'rate' => $rate,
        ];
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
