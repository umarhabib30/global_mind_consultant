@extends('layouts.user')

@section('styles')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700;800&family=Space+Grotesk:wght@500;700&display=swap"
        rel="stylesheet">
    <style>
        .rv-page {
            font-family: "Manrope", sans-serif;
        }

        .rv-title {
            font-family: "Space Grotesk", sans-serif;
        }

        .rv-card {
            animation: rvFadeUp .65s ease both;
        }

        .rv-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 35px rgba(10, 36, 93, .13);
        }

        .rv-skeleton {
            background: linear-gradient(90deg, #e5e7eb 25%, #f3f4f6 37%, #e5e7eb 63%);
            background-size: 400% 100%;
            animation: rvShimmer 1.4s ease infinite;
        }

        @keyframes rvFadeUp {
            from {
                opacity: 0;
                transform: translateY(18px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes rvShimmer {
            0% {
                background-position: 100% 0;
            }

            100% {
                background-position: 0 0;
            }
        }
    </style>
@endsection

@section('content')
    <div class="rv-page bg-slate-50 min-h-screen py-10 md:py-16">
        <div class="mx-auto max-w-7xl px-5 md:px-8">
            @if (session('success'))
                <div class="mb-6 rounded-2xl border border-green-100 bg-green-50 px-5 py-4 text-green-700">
                    {{ session('success') }}
                </div>
            @endif

            <section class="relative overflow-hidden rounded-3xl bg-gradient-to-r from-[#0A245D] to-[#123a86] p-7 md:p-10 text-white">
                <div class="absolute -right-20 -top-16 h-44 w-44 rounded-full bg-white/10"></div>
                <p class="text-sm uppercase tracking-[0.25em] text-[#D9FFB1] font-bold">Community Voices</p>
                <h1 class="rv-title mt-3 text-3xl md:text-5xl font-bold">What Students Say About Us</h1>
                <p class="mt-4 max-w-3xl text-slate-200">Real feedback from students we guided toward their international education goals.</p>
            </section>

            <section class="mt-8 rounded-3xl bg-white shadow-[0_15px_40px_rgba(10,36,93,0.08)] p-6 md:p-8">
                <h2 class="rv-title text-2xl md:text-3xl font-bold text-[#0A245D]">Write a Review</h2>
                <p class="mt-2 text-slate-500">Your review goes live after admin approval.</p>

                <form method="POST" action="{{ route('reviews.store') }}" enctype="multipart/form-data" class="mt-6"
                    x-data="{
                        rating: {{ old('rating', 0) ?: 0 }},
                        loading: false,
                        errors: {},
                        validate() {
                            this.errors = {};
                            if (!$refs.name.value.trim()) this.errors.name = 'Full name is required.';
                            if (!$refs.email.value.trim()) this.errors.email = 'Email is required.';
                            if (!this.rating) this.errors.rating = 'Rating is required.';
                            if (!$refs.message.value.trim()) this.errors.message = 'Review message is required.';
                            return Object.keys(this.errors).length === 0;
                        },
                        submitForm(e) {
                            if (!this.validate()) {
                                e.preventDefault();
                                return;
                            }
                            this.loading = true;
                        }
                    }"
                    @submit="submitForm($event)">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-1">Full Name *</label>
                            <input x-ref="name" type="text" name="name" value="{{ old('name') }}"
                                class="w-full rounded-xl border border-slate-200 px-4 py-3 outline-none focus:border-[#74BF1A]">
                            <p class="mt-1 text-sm text-red-600" x-text="errors.name"></p>
                            @error('name')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-1">Email *</label>
                            <input x-ref="email" type="email" name="email" value="{{ old('email') }}"
                                class="w-full rounded-xl border border-slate-200 px-4 py-3 outline-none focus:border-[#74BF1A]">
                            <p class="mt-1 text-sm text-red-600" x-text="errors.email"></p>
                            @error('email')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Rating *</label>
                            <div class="flex items-center gap-2">
                                @for ($i = 1; $i <= 5; $i++)
                                    <button type="button" @click="rating = {{ $i }}" class="text-2xl transition"
                                        :class="rating >= {{ $i }} ? 'text-amber-400' : 'text-slate-300'">★</button>
                                @endfor
                                <span class="ml-2 text-sm text-slate-500" x-text="rating ? rating + '/5' : 'Select rating'"></span>
                            </div>
                            <input type="hidden" name="rating" :value="rating">
                            <p class="mt-1 text-sm text-red-600" x-text="errors.rating"></p>
                            @error('rating')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-1">Review Title</label>
                            <input type="text" name="title" value="{{ old('title') }}"
                                class="w-full rounded-xl border border-slate-200 px-4 py-3 outline-none focus:border-[#74BF1A]">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-1">Company / Role or Location</label>
                            <input type="text" name="company_role" value="{{ old('company_role') }}"
                                class="w-full rounded-xl border border-slate-200 px-4 py-3 outline-none focus:border-[#74BF1A]">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-1">Profile Image (optional)</label>
                            <input type="file" name="image" accept=".jpg,.jpeg,.png,.webp"
                                class="w-full rounded-xl border border-slate-200 px-4 py-3 outline-none file:mr-3 file:border-0 file:bg-slate-100 file:px-3 file:py-2 file:rounded-lg">
                            @error('image')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-sm font-semibold text-slate-700 mb-1">Review Message *</label>
                            <textarea x-ref="message" name="message" rows="5"
                                class="w-full rounded-xl border border-slate-200 px-4 py-3 outline-none focus:border-[#74BF1A]">{{ old('message') }}</textarea>
                            <p class="mt-1 text-sm text-red-600" x-text="errors.message"></p>
                            @error('message')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <button type="submit"
                        class="mt-6 inline-flex items-center rounded-xl bg-[#74BF1A] px-7 py-3 font-bold text-white transition hover:bg-[#659f18] disabled:opacity-70"
                        :disabled="loading">
                        <span x-show="!loading">Submit Review</span>
                        <span x-show="loading">Submitting...</span>
                    </button>
                </form>
            </section>

            <section class="mt-9" x-data="{ loading: true }" x-init="setTimeout(() => loading = false, 650)">
                <div class="mb-5 flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                    <h2 class="rv-title text-2xl md:text-3xl font-bold text-[#0A245D]">All Reviews</h2>
                    <form method="GET" action="{{ route('reviews.index') }}">
                        <select name="sort" onchange="this.form.submit()"
                            class="rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm">
                            <option value="newest" {{ $sort === 'newest' ? 'selected' : '' }}>Newest First</option>
                            <option value="highest_rating" {{ $sort === 'highest_rating' ? 'selected' : '' }}>Highest Rating</option>
                            <option value="oldest" {{ $sort === 'oldest' ? 'selected' : '' }}>Oldest First</option>
                        </select>
                    </form>
                </div>

                <template x-if="loading">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @for ($i = 0; $i < 6; $i++)
                            <div class="rounded-2xl border border-slate-100 bg-white p-5">
                                <div class="rv-skeleton h-4 w-20 rounded mb-4"></div>
                                <div class="rv-skeleton h-4 w-full rounded mb-2"></div>
                                <div class="rv-skeleton h-4 w-5/6 rounded mb-5"></div>
                                <div class="flex items-center gap-3">
                                    <div class="rv-skeleton h-10 w-10 rounded-full"></div>
                                    <div class="w-full">
                                        <div class="rv-skeleton h-3 w-1/2 rounded mb-2"></div>
                                        <div class="rv-skeleton h-3 w-1/3 rounded"></div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </template>

                <div x-show="!loading" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @forelse ($reviews as $index => $review)
                        <article class="rv-card rounded-2xl border border-slate-100 bg-white p-6 shadow-sm transition-all duration-300"
                            style="animation-delay: {{ $index * 0.08 }}s;">
                            <div class="flex items-center justify-between">
                                <div class="text-amber-400">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <i class="fa{{ $i <= $review->rating ? 's' : 'r' }} fa-star"></i>
                                    @endfor
                                </div>
                                <span class="text-xs text-slate-400">{{ optional($review->created_at)->format('d M Y') }}</span>
                            </div>
                            <h3 class="mt-4 font-bold text-slate-800">{{ $review->title ?: 'Student Review' }}</h3>
                            <p class="mt-2 text-slate-600 leading-7">{{ \Illuminate\Support\Str::limit($review->message, 170) }}</p>
                            <div class="mt-5 flex items-center gap-3 border-t border-slate-100 pt-4">
                                @if ($review->image_url)
                                    <img src="{{ asset($review->image_url) }}" alt="{{ $review->name }}"
                                        class="h-11 w-11 rounded-full object-cover">
                                @else
                                    <div class="h-11 w-11 rounded-full bg-[#0A245D] text-white flex items-center justify-center font-bold">
                                        {{ \Illuminate\Support\Str::upper(\Illuminate\Support\Str::substr($review->name, 0, 1)) }}
                                    </div>
                                @endif
                                <div>
                                    <p class="font-semibold text-slate-800">{{ $review->name }}</p>
                                    @if ($review->company_role)
                                        <p class="text-xs text-slate-500">{{ $review->company_role }}</p>
                                    @endif
                                </div>
                            </div>
                        </article>
                    @empty
                        <div class="md:col-span-2 lg:col-span-3 rounded-2xl border border-slate-100 bg-white p-8 text-center text-slate-500">
                            No approved reviews yet.
                        </div>
                    @endforelse
                </div>

                <div class="mt-8">
                    {{ $reviews->links('pagination::tailwind') }}
                </div>
            </section>
        </div>
    </div>
@endsection
