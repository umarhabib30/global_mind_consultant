@extends('layouts.user')
@section('content')
    <section class="relative bg-[url('/images/single-blog.png')] bg-cover bg-center w-full h-screen flex items-center justify-center">
        <div class="absolute inset-0 bg-black bg-opacity-60 fade-in" data-delay="0.2" data-duration="1.5"></div>
        <div class="relative z-10 max-w-4xl text-center text-white p-6">
            <h1 class="text-4xl md:text-6xl font-extrabold leading-tight mb-4 slide-down" data-delay="0.8" data-duration="1.2">
                {{ $event->title }}
            </h1>
            <p class="text-lg md:text-xl text-gray-300 fade-up" data-delay="1.0" data-duration="1.2">
                {{ $event->short_description ?: 'Limited seats available' }}
            </p>
        </div>
    </section>

    <section class="py-16 bg-[#F6F6F6]">
        <div class="px-6 md:px-12 grid grid-cols-1 lg:grid-cols-3 gap-10 overflow-hidden">
            <div class="lg:col-span-2 space-y-10">
                <h2 class="text-2xl md:text-4xl font-bold mb-6 fade-up" data-delay="0.3" data-duration="1.0">
                    {{ $event->title }}
                </h2>

                <div class="space-y-4 fade-up" data-delay="0.6" data-duration="1.0">
                    <ul class="space-y-3 stagger-up" data-stagger="0.08" data-delay="0.7" data-duration="0.8">
                        <li class="flex items-center gap-3">
                            <span class="flex items-center justify-center w-8 h-8 rounded-full bg-[#74BF1A] text-white text-sm"><i class="fa-regular fa-calendar"></i></span>
                            <p class="text-gray-700">{{ optional($event->date)->format('d M Y (l)') }}</p>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="flex items-center justify-center w-8 h-8 rounded-full bg-[#74BF1A] text-white text-sm"><i class="fa-regular fa-clock"></i></span>
                            <p class="text-gray-700">
                                {{ $event->start_time ? date('h:i A', strtotime($event->start_time)) : 'TBA' }}
                                -
                                {{ $event->end_time ? date('h:i A', strtotime($event->end_time)) : 'TBA' }}
                            </p>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="flex items-center justify-center w-8 h-8 rounded-full bg-[#74BF1A] text-white text-sm"><i class="fa-solid fa-user-tie"></i></span>
                            <p class="text-gray-700">Guest Speaker: {{ $event->speaker ?: 'TBA' }}</p>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="flex items-center justify-center w-8 h-8 rounded-full bg-[#74BF1A] text-white text-sm"><i class="fa-solid fa-location-dot"></i></span>
                            <p class="text-gray-700">{{ $event->location ?: 'Online' }}</p>
                        </li>
                    </ul>
                </div>

                @if ($event->long_description)
                    <p class="text-gray-700 leading-relaxed fade-up" data-delay="1.4" data-duration="1.0">
                        {!! nl2br(e($event->long_description)) !!}
                    </p>
                @endif

                @if (!empty($event->parameters))
                    <h2 class="text-lg md:text-xl font-bold fade-up" data-delay="1" data-duration="1.0">Parameters of Event:</h2>
                    <ul class="space-y-3 stagger-up" data-stagger="0.1" data-delay="1.6" data-duration="0.8">
                        @foreach ($event->parameters as $parameter)
                            <li class="flex items-start gap-3">
                                <span class="flex items-center justify-center w-6 h-6 rounded-full bg-[#74BF1A] text-white text-sm mt-1"><i class="fa-solid fa-check"></i></span>
                                <p class="text-gray-700">{{ $parameter }}</p>
                            </li>
                        @endforeach
                    </ul>
                @endif

                @if (!empty($event->why_attend))
                    <h2 class="text-lg md:text-xl font-bold fade-up" data-delay="1.0" data-duration="1.0">Why should I attend?</h2>
                    <ul class="space-y-3 stagger-up" data-stagger="0.1" data-delay="2.1" data-duration="0.8">
                        @foreach ($event->why_attend as $point)
                            <li class="flex items-start gap-3">
                                <span class="flex items-center justify-center w-6 h-6 rounded-full bg-[#74BF1A] text-white text-sm mt-1"><i class="fa-solid fa-check"></i></span>
                                <p class="text-gray-700">{{ $point }}</p>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>

            <div class="lg:col-span-1">
                <div class="max-w-2xl mx-auto bg-white rounded-2xl shadow-lg p-8 slide-right" data-delay="2.5" data-duration="1.2">
                    <h3 class="text-2xl md:text-3xl font-bold text-center mb-8 text-black fade-up" data-delay="2.7" data-duration="1.0">
                        Reserve Your Seat
                    </h3>

                    @if (session('success'))
                        <div class="mb-4 rounded-lg bg-green-100 text-green-800 p-3 text-sm">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="mb-4 rounded-lg bg-red-100 text-red-800 p-3 text-sm">
                            <ul class="list-disc pl-5">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('single-event.reserve', $event->id) }}" method="POST"
                        class="space-y-6 stagger-up" data-stagger="0.08" data-delay="2.8" data-duration="0.8">
                        @csrf
                        <input type="text" name="full_name" value="{{ old('full_name') }}"
                            class="w-full bg-[#F6F6F6] border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-[#74BF1A] outline-none"
                            placeholder="Full Name" required />
                        <input type="email" name="email" value="{{ old('email') }}"
                            class="w-full bg-[#F6F6F6] border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-[#74BF1A] outline-none"
                            placeholder="E-mail Address" required />
                        <input type="tel" name="phone" value="{{ old('phone') }}"
                            class="w-full bg-[#F6F6F6] border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-[#74BF1A] outline-none"
                            placeholder="Phone Number" required />
                        <input type="text" name="country_interested" value="{{ old('country_interested') }}"
                            class="w-full bg-[#F6F6F6] border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-[#74BF1A] outline-none"
                            placeholder="Country Interested In" required />
                        <input type="text" name="study_level" value="{{ old('study_level') }}"
                            class="w-full bg-[#F6F6F6] border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-[#74BF1A] outline-none"
                            placeholder="Study Level" required />

                        <div class="text-center">
                            <button type="submit" class="px-14 bg-[#74BF1A] text-white font-semibold py-3 rounded-lg hover:bg-green-600 transition">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
