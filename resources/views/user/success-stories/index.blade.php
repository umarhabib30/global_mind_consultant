@extends('layouts.user')

@section('styles')
    <style>
        .ss-card {
            transition: transform .3s ease, box-shadow .3s ease;
        }

        .ss-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 24px 40px rgba(10, 36, 93, .16);
        }
    </style>
@endsection

@section('content')
    <section class="relative overflow-hidden bg-[#0A245D] text-white py-16 md:py-24">
        <div class="absolute -top-16 right-0 h-48 w-48 rounded-full bg-[#74BF1A]/30 blur-3xl"></div>
        <div class="max-w-7xl mx-auto px-6 md:px-12">
            <p class="uppercase tracking-[0.25em] text-sm text-[#CFF3A2] font-bold">Success Stories</p>
            <h1 class="text-3xl md:text-5xl font-extrabold mt-3">Real Visa Outcomes, Real Client Journeys</h1>
            <p class="text-slate-200 mt-4 max-w-3xl">Explore verified case outcomes from our consultancy across student, work,
                visit and family visa categories.</p>
        </div>
    </section>

    <section class="bg-slate-50 py-10 md:py-14">
        <div class="max-w-7xl mx-auto px-6 md:px-12">
            <form method="GET" class="bg-white rounded-2xl p-5 md:p-6 shadow-sm border border-slate-100">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-7 gap-3">
                    <input type="text" name="search" value="{{ request('search') }}" placeholder="Search title/tag"
                        class="rounded-xl border border-slate-200 px-4 py-3 text-sm">
                    <input type="text" name="country" value="{{ request('country') }}" placeholder="Country"
                        class="rounded-xl border border-slate-200 px-4 py-3 text-sm">
                    <input type="text" name="visa_type" value="{{ request('visa_type') }}" placeholder="Visa Type"
                        class="rounded-xl border border-slate-200 px-4 py-3 text-sm">
                    <input type="text" name="approval_status" value="{{ request('approval_status') }}"
                        placeholder="Approval Status" class="rounded-xl border border-slate-200 px-4 py-3 text-sm">
                    <input type="number" name="processing_time_min" value="{{ request('processing_time_min') }}"
                        placeholder="Min days" class="rounded-xl border border-slate-200 px-4 py-3 text-sm">
                    <input type="number" name="processing_time_max" value="{{ request('processing_time_max') }}"
                        placeholder="Max days" class="rounded-xl border border-slate-200 px-4 py-3 text-sm">
                    <select name="sort" class="rounded-xl border border-slate-200 px-4 py-3 text-sm">
                        <option value="recent" {{ $sort === 'recent' ? 'selected' : '' }}>Most Recent</option>
                        <option value="fastest" {{ $sort === 'fastest' ? 'selected' : '' }}>Fastest Processing</option>
                        <option value="featured" {{ $sort === 'featured' ? 'selected' : '' }}>Featured First</option>
                    </select>
                </div>
                <div class="mt-4 flex gap-3">
                    <button class="bg-[#74BF1A] text-white px-5 py-2.5 rounded-lg font-semibold">Apply</button>
                    <a href="{{ route('success-stories.index') }}"
                        class="px-5 py-2.5 rounded-lg border border-slate-200 text-slate-700">Reset</a>
                </div>
            </form>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
                @forelse ($stories as $index => $story)
                    <article class="ss-card bg-white rounded-2xl overflow-hidden border border-slate-100 shadow-sm"
                        style="animation: fadeInUp .7s ease {{ $index * 0.08 }}s both;">
                        <div class="h-52 bg-slate-200 relative">
                            <img src="{{ $story->cover_image ? asset($story->cover_image) : asset('images/home-01.png') }}"
                                alt="{{ $story->cover_image_alt ?: $story->title }}"
                                class="w-full h-full object-cover {{ $story->cover_image_blur ? 'blur-sm' : '' }}">
                            @if ($story->featured)
                                <span
                                    class="absolute top-3 left-3 text-xs bg-[#0A245D] text-white px-3 py-1 rounded-full">Featured</span>
                            @endif
                        </div>
                        <div class="p-5">
                            <h3 class="text-xl font-bold text-[#0A245D] leading-snug">{{ $story->title ?: 'Untitled Story' }}</h3>
                            <div class="mt-2 text-sm text-slate-500">
                                {{ $story->country ?: 'N/A' }} | {{ $story->visa_type ?: 'N/A' }}
                            </div>
                            <div class="mt-1 text-xs text-slate-400">
                                {{ $story->approval_date ? $story->approval_date->format('d M Y') : 'Date not set' }} |
                                {{ $story->processing_time_text ?: ($story->processing_time_days ? $story->processing_time_days . ' days' : 'Time not set') }}
                            </div>
                            <p class="mt-3 text-slate-600 leading-7">
                                {{ \Illuminate\Support\Str::limit($story->case_summary ?: strip_tags($story->full_story), 135) }}
                            </p>
                            <a href="{{ route('success-stories.show', $story->slug) }}"
                                class="mt-5 inline-flex items-center gap-2 text-[#0A245D] font-semibold hover:text-[#74BF1A]">
                                View Details <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </article>
                @empty
                    <div class="lg:col-span-3 bg-white rounded-2xl p-10 text-center text-slate-500 border border-slate-100">
                        No success stories found for the selected filters.
                    </div>
                @endforelse
            </div>

            <div class="mt-8">
                {{ $stories->links('pagination::tailwind') }}
            </div>
        </div>
    </section>

    <style>
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
@endsection
