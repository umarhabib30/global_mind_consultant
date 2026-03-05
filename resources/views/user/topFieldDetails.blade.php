@extends('layouts.user')

@section('styles')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&family=Playfair+Display:wght@600;700&display=swap"
        rel="stylesheet">
    <style>
        .tf-sans {
            font-family: "Manrope", sans-serif;
        }

        .tf-serif {
            font-family: "Playfair Display", serif;
        }

        .tf-fade-up {
            opacity: 0;
            transform: translateY(24px);
            animation: tfFadeUp 0.8s ease forwards;
        }

        .tf-fade-up-delay {
            opacity: 0;
            transform: translateY(24px);
            animation: tfFadeUp 0.8s ease 0.2s forwards;
        }

        .tf-float {
            animation: tfFloat 6s ease-in-out infinite;
        }

        .tf-prose p {
            margin-bottom: 1rem;
            line-height: 1.9;
            color: #334155;
        }

        .tf-prose h2,
        .tf-prose h3,
        .tf-prose h4 {
            margin-top: 1.75rem;
            margin-bottom: 0.75rem;
            color: #0a245d;
            font-weight: 700;
        }

        .tf-prose ul,
        .tf-prose ol {
            margin-bottom: 1rem;
            padding-left: 1.25rem;
            color: #334155;
        }

        @keyframes tfFadeUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes tfFloat {
            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-12px);
            }
        }
    </style>
@endsection

@section('content')
    <section class="tf-sans relative overflow-hidden bg-[#061b46]">
        <div class="absolute -top-24 -left-24 h-72 w-72 rounded-full bg-[#74BF1A]/30 blur-3xl tf-float"></div>
        <div class="absolute bottom-0 right-0 h-80 w-80 rounded-full bg-cyan-400/20 blur-3xl tf-float"></div>

        <div class="absolute inset-0 bg-cover bg-center opacity-25"
            style="background-image: url('{{ $field->image ? asset($field->image) : asset('images/home-05.png') }}');"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-[#061b46]/90 via-[#0a245d]/80 to-[#061b46]/60"></div>

        <div class="relative mx-auto max-w-7xl px-6 py-20 md:py-28 lg:py-32">
            <p
                class="tf-fade-up inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 px-4 py-2 text-xs font-bold uppercase tracking-[0.2em] text-[#D9FFB1]">
                <span class="h-2 w-2 rounded-full bg-[#74BF1A]"></span> Top Field Details
            </p>

            <h1 class="tf-serif tf-fade-up-delay mt-5 max-w-4xl text-4xl font-bold leading-tight text-white md:text-6xl">
                {{ $field->title }}
            </h1>

            @if ($field->short_description)
                <p class="tf-fade-up-delay mt-6 max-w-3xl text-base leading-8 text-slate-200 md:text-lg">
                    {{ $field->short_description }}
                </p>
            @endif
        </div>
    </section>

    <section class="tf-sans bg-slate-50 py-14 md:py-20">
        <div class="mx-auto grid max-w-7xl grid-cols-1 gap-8 px-6 lg:grid-cols-3">
            <article class="lg:col-span-2 rounded-3xl bg-white p-6 shadow-[0_20px_60px_rgba(9,20,55,0.08)] md:p-10">
                <div class="mb-8 flex items-center justify-between border-b border-slate-100 pb-5">
                    <h2 class="tf-serif text-2xl font-bold text-[#0A245D] md:text-4xl">Field Overview</h2>
                    <span class="rounded-full bg-[#74BF1A]/10 px-4 py-1 text-xs font-bold uppercase text-[#5e9e15]">Expert
                        Insight</span>
                </div>

                <div class="tf-prose max-w-none text-base md:text-lg">
                    @if ($field->long_description)
                        {!! $field->long_description !!}
                    @else
                        {!! nl2br(e($field->short_description ?: 'Details will be updated soon.')) !!}
                    @endif
                </div>
            </article>

            <aside class="space-y-6">
                <div class="rounded-3xl bg-[#0A245D] p-6 text-white shadow-[0_15px_40px_rgba(10,36,93,0.35)]">
                    <p class="text-xs uppercase tracking-[0.2em] text-slate-300">Ready to Apply?</p>
                    <h3 class="mt-3 text-2xl font-extrabold leading-tight">Take your next step with confidence.</h3>
                    <p class="mt-3 text-sm leading-7 text-slate-200">Get guidance from our team and start your application
                        journey now.</p>

                    <a href="{{ $field->button_link ?: route('consultation') }}"
                        class="mt-6 inline-flex w-full items-center justify-center gap-2 rounded-xl bg-[#74BF1A] px-5 py-3 text-sm font-bold uppercase tracking-wide text-white transition hover:-translate-y-0.5 hover:bg-[#67ac16]">
                        {{ $field->button_text ?: 'Book Consultation' }}
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>

                <div class="rounded-3xl bg-white p-6 shadow-[0_12px_30px_rgba(9,20,55,0.08)]">
                    <h4 class="text-lg font-extrabold text-[#0A245D]">More Fields</h4>
                    <div class="mt-4 space-y-3">
                        @forelse ($relatedFields as $related)
                            <a href="{{ route('top-field.show', $related->id) }}"
                                class="group block rounded-2xl border border-slate-100 p-4 transition hover:-translate-y-1 hover:border-[#74BF1A]/40 hover:shadow-md">
                                <p class="font-bold text-[#0A245D] group-hover:text-[#5e9e15]">{{ $related->title }}</p>
                                <p class="mt-2 text-sm leading-6 text-slate-500">
                                    {{ \Illuminate\Support\Str::limit($related->short_description ?: 'Explore this field in detail.', 82) }}
                                </p>
                            </a>
                        @empty
                            <p class="rounded-xl bg-slate-50 p-4 text-sm text-slate-500">No related fields available right
                                now.</p>
                        @endforelse
                    </div>
                </div>
            </aside>
        </div>
    </section>
@endsection
