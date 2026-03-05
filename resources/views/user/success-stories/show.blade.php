@extends('layouts.user')

@section('content')
    <section class="relative overflow-hidden bg-[#0A245D] text-white py-16 md:py-24">
        <div class="max-w-7xl mx-auto px-6 md:px-12">
            <p class="uppercase tracking-[0.2em] text-sm text-[#CFF3A2] font-bold">Success Story</p>
            <h1 class="text-3xl md:text-5xl font-extrabold mt-3 max-w-4xl">{{ $story->title ?: 'Untitled Story' }}</h1>
            <p class="text-slate-200 mt-3 max-w-3xl">
                {{ $story->case_summary ?: 'A verified visa case handled by our consultancy team.' }}
            </p>
        </div>
    </section>

    <section class="py-12 bg-slate-50">
        <div class="max-w-7xl mx-auto px-6 md:px-12 grid grid-cols-1 lg:grid-cols-3 gap-8">
            <article class="lg:col-span-2 bg-white rounded-2xl p-6 md:p-8 shadow-sm border border-slate-100">
                @if ($story->cover_image)
                    <img src="{{ asset($story->cover_image) }}" alt="{{ $story->cover_image_alt ?: $story->title }}"
                        class="w-full h-[340px] object-cover rounded-2xl {{ $story->cover_image_blur ? 'blur-sm' : '' }}">
                @endif

                <div class="prose prose-slate max-w-none mt-6">
                    {!! $story->full_story ?: nl2br(e($story->case_summary)) !!}
                </div>

                @if ($story->visa_approval_image)
                    <div class="mt-8">
                        <h3 class="text-xl font-bold text-[#0A245D] mb-3">Visa Approval Proof</h3>
                        <img src="{{ asset($story->visa_approval_image) }}"
                            alt="{{ $story->visa_approval_image_alt ?: 'Visa Approval Image' }}"
                            class="w-full md:w-[420px] rounded-xl border border-slate-200 {{ $story->visa_approval_image_blur ? 'blur-sm' : '' }}">
                    </div>
                @endif

                @if (!empty($story->gallery_images))
                    <div class="mt-8">
                        <h3 class="text-xl font-bold text-[#0A245D] mb-3">Gallery</h3>
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-3">
                            @foreach ($story->gallery_images as $index => $image)
                                @php
                                    $meta = $story->gallery_meta[$index] ?? null;
                                @endphp
                                <img src="{{ asset($image) }}" alt="{{ $meta['alt'] ?? 'Success Story Gallery Image' }}"
                                    class="w-full h-28 object-cover rounded-lg border border-slate-100 {{ !empty($meta['blur']) ? 'blur-sm' : '' }}">
                            @endforeach
                        </div>
                    </div>
                @endif
            </article>

            <aside class="space-y-6">
                <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100">
                    <h3 class="text-lg font-bold text-[#0A245D] mb-4">Key Facts</h3>
                    <ul class="space-y-3 text-sm">
                        <li><strong>Country:</strong> {{ $story->country ?: '-' }}</li>
                        <li><strong>Visa Type:</strong> {{ $story->visa_type ?: '-' }}</li>
                        <li><strong>Status:</strong> {{ $story->approval_status ?: '-' }}</li>
                        <li><strong>Approval Date:</strong>
                            {{ $story->approval_date ? $story->approval_date->format('d M Y') : '-' }}</li>
                        <li><strong>Processing Time:</strong>
                            {{ $story->processing_time_text ?: ($story->processing_time_days ? $story->processing_time_days . ' days' : '-') }}
                        </li>
                        @if ($story->documents_verified)
                            <li class="text-green-700 font-semibold"><i class="fa-solid fa-badge-check"></i> Documents
                                Verified</li>
                        @endif
                    </ul>
                </div>

                @if ($story->testimonial_quote)
                    <div class="bg-[#0A245D] text-white rounded-2xl p-6 shadow-sm">
                        <p class="text-sm uppercase tracking-[0.2em] text-[#CFF3A2]">Client Quote</p>
                        <p class="mt-3 leading-7">"{{ $story->testimonial_quote }}"</p>
                    </div>
                @endif

                <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100">
                    <h3 class="text-lg font-bold text-[#0A245D] mb-4">Need Similar Results?</h3>
                    <div class="space-y-3">
                        <a href="{{ route('consultation') }}"
                            class="w-full inline-flex items-center justify-center bg-[#74BF1A] text-white px-4 py-3 rounded-lg font-semibold hover:bg-green-600">
                            Book Consultation
                        </a>
                        <a href="https://wa.me/923171115091" target="_blank"
                            class="w-full inline-flex items-center justify-center border border-slate-200 px-4 py-3 rounded-lg font-semibold text-slate-700">
                            WhatsApp
                        </a>
                        <a href="tel:+923171115091"
                            class="w-full inline-flex items-center justify-center border border-slate-200 px-4 py-3 rounded-lg font-semibold text-slate-700">
                            Call Now
                        </a>
                    </div>
                </div>
            </aside>
        </div>

        @if ($relatedStories->count())
            <div class="max-w-7xl mx-auto px-6 md:px-12 mt-8">
                <h3 class="text-2xl font-bold text-[#0A245D] mb-4">Related Stories</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                    @foreach ($relatedStories as $related)
                        <a href="{{ route('success-stories.show', $related->slug) }}"
                            class="bg-white rounded-xl border border-slate-100 p-4 shadow-sm hover:shadow-md transition">
                            <p class="font-semibold text-[#0A245D]">{{ $related->title }}</p>
                            <p class="text-sm text-slate-500 mt-1">{{ $related->country }} | {{ $related->visa_type }}</p>
                        </a>
                    @endforeach
                </div>
            </div>
        @endif
    </section>
@endsection
