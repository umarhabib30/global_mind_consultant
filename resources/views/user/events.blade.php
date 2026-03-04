@extends('layouts.user')
@section('content')
    <section class="relative bg-[url('/images/hero-event.png')] bg-cover bg-top bg-no-repeat min-h-[80vh] sm:h-screen flex items-center justify-center px-4">
        <div class="bg-black/30 backdrop-blur-md rounded-2xl shadow-lg p-6 sm:p-8 md:p-12 max-w-4xl w-full border border-white/30 text-center text-white fade-up"
            data-delay="0.3" data-duration="1.5">
            <h1 class="text-xl sm:text-2xl md:text-4xl font-bold mb-4 leading-snug fade-up" data-delay="0.6" data-duration="1.2">
                Upcoming Events & Webinars
            </h1>
            <p class="text-sm sm:text-base md:text-lg mb-6 text-gray-100 px-2 sm:px-4 fade-up" data-delay="0.8" data-duration="1.2">
                Join our live sessions to stay updated on scholarships, admissions, and test preparation from global experts.
            </p>
            <div class=":flex fade-up" data-delay="1.0" data-duration="1.2">
                @if ($upcomingEvents->isNotEmpty())
                    <a href="{{ route('single-event.show', $upcomingEvents->first()->id) }}"
                        class="relative overflow-hidden bg-[#74BF1A] text-white px-5 py-2.5 rounded-lg font-semibold group transition-all duration-300 inline-block">
                        <span class="relative z-10 flex items-center gap-2">Join Now</span>
                        <span class="absolute inset-0 bg-green-600 translate-x-full group-hover:translate-x-0 transition-transform duration-300"></span>
                    </a>
                @endif
            </div>
        </div>
    </section>

    <section class="py-16 bg-[#F6F6F6]">
        <div class="px-6 md:px-12">
            <h2 class="text-2xl md:text-4xl font-bold mb-6 text-center slide-down" data-delay="0.2" data-duration="1.2">
                Our <span class="text-[#74BF1A]">Upcoming</span> Events
            </h2>
            <p class="text-base sm:text-lg md:text-xl text-center mb-12 text-gray-600 fade-up" data-delay="0.4" data-duration="1.2">
                Stay informed and inspired. Join our upcoming seminars, university meetups, and orientation sessions.
            </p>

            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3 stagger-up" data-stagger="0.2" data-delay="0.6" data-duration="1.0">
                @forelse ($upcomingEvents as $event)
                    <div class="bg-[#092962] rounded-2xl shadow-lg overflow-hidden">
                        <img src="{{ $event->picture ? asset($event->picture) : asset('images/single-blog.png') }}" alt="{{ $event->title }}" class="w-full h-60 object-cover p-4" />
                        <div class="p-6 text-white">
                            <h3 class="font-bold text-xl mb-3">{{ $event->title }}</h3>
                            <p class="text-sm mb-4 text-gray-200">{{ $event->short_description ?: 'Join this event for complete expert guidance.' }}</p>
                            <ul class="space-y-3 text-sm">
                                <li class="flex items-center gap-2"><i class="fa-regular fa-calendar text-[#74BF1A]"></i><span>{{ optional($event->date)->format('d M, Y') }}</span></li>
                                <li class="flex items-center gap-2"><i class="fa-regular fa-clock text-[#74BF1A]"></i><span>{{ $event->start_time ? date('h:i A', strtotime($event->start_time)) : 'TBA' }}</span></li>
                                <li class="flex items-center gap-2"><i class="fa-solid fa-user-tie text-[#74BF1A]"></i><span>{{ $event->speaker ?: 'TBA' }}</span></li>
                                <li class="flex items-center gap-2"><i class="fa-solid fa-location-dot text-[#74BF1A]"></i><span>{{ $event->location ?: 'Online' }}</span></li>
                            </ul>
                            <a href="{{ route('single-event.show', $event->id) }}" class="mt-6 bg-[#74BF1A] text-white font-semibold py-2 px-8 rounded-lg hover:bg-green-500 transition w-full sm:w-auto inline-block">Register Now</a>
                        </div>
                    </div>
                @empty
                    <div class="md:col-span-2 lg:col-span-3 text-center text-gray-600">No upcoming events found.</div>
                @endforelse
            </div>
        </div>
    </section>

    <section class="py-16">
        <div class="px-6 md:px-12">
            <h2 class="text-2xl md:text-4xl font-bold mb-6 text-center slide-down" data-delay="0.2" data-duration="1.2">Events Archive</h2>
            <p class="text-base sm:text-lg md:text-xl text-center mb-12 text-gray-600 fade-up" data-delay="0.4" data-duration="1.2">Explore all events, past events, and webinars.</p>

            <div class="flex justify-center mb-10 space-x-4 fade-up" data-delay="0.6" data-duration="1.2">
                <button class="tab-btn bg-[#092962] text-white px-6 py-2 rounded-lg font-semibold hover:bg-[#74BF1A] transition active" data-tab="all">All Events</button>
                <button class="tab-btn bg-[#092962] text-white px-6 py-2 rounded-lg font-semibold hover:bg-[#74BF1A] transition" data-tab="past">Past Events</button>
                <button class="tab-btn bg-[#092962] text-white px-6 py-2 rounded-lg font-semibold hover:bg-[#74BF1A] transition" data-tab="webinars">Webinars</button>
            </div>

            <div id="eventCards" class="grid gap-8 md:grid-cols-2 lg:grid-cols-3 fade-in" data-delay="1.0" data-duration="1.5"></div>
        </div>
    </section>

    @php
        $formatEvents = function ($items) {
            return $items->map(function ($event) {
                return [
                    'id' => $event->id,
                    'title' => $event->title,
                    'date' => optional($event->date)->format('d M, Y'),
                    'time' => $event->start_time ? date('h:i A', strtotime($event->start_time)) : 'TBA',
                    'speaker' => $event->speaker ?: 'TBA',
                    'location' => $event->location ?: 'Online',
                    'img' => $event->picture ? asset($event->picture) : asset('images/single-blog.png'),
                    'description' => $event->short_description ?: 'Join this event for complete expert guidance.',
                ];
            })->values();
        };
    @endphp

    <script>
        const eventData = {
            all: @json($formatEvents($events)),
            past: @json($formatEvents($pastEvents)),
            webinars: @json($formatEvents($webinars)),
        };

        const eventCardsContainer = document.getElementById('eventCards');
        const tabButtons = document.querySelectorAll('.tab-btn');
        const singleEventBaseUrl = "{{ url('/single-event') }}";

        function renderCards(category) {
            const cardsList = eventData[category] || [];
            if (!cardsList.length) {
                eventCardsContainer.innerHTML = '<div class="md:col-span-2 lg:col-span-3 text-center text-gray-600">No events found for this tab.</div>';
                return;
            }

            eventCardsContainer.innerHTML = cardsList.map((event) => `
                <div class="bg-[#092962] rounded-2xl shadow-lg overflow-hidden">
                    <img src="${event.img}" alt="${event.title}" class="w-full h-60 object-cover p-4" />
                    <div class="p-6 text-white">
                        <h3 class="font-bold text-xl mb-3">${event.title}</h3>
                        <p class="text-sm mb-4 text-gray-200">${event.description}</p>
                        <ul class="space-y-3 text-sm">
                            <li class="flex items-center gap-2"><i class="fa-regular fa-calendar text-[#74BF1A]"></i><span>${event.date}</span></li>
                            <li class="flex items-center gap-2"><i class="fa-regular fa-clock text-[#74BF1A]"></i><span>${event.time}</span></li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-user-tie text-[#74BF1A]"></i><span>${event.speaker}</span></li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-location-dot text-[#74BF1A]"></i><span>${event.location}</span></li>
                        </ul>
                        <a href="${singleEventBaseUrl}/${event.id}" class="mt-6 bg-[#74BF1A] text-white font-semibold py-2 px-8 rounded-lg hover:bg-green-500 transition w-full sm:w-auto inline-block">Register Now</a>
                    </div>
                </div>
            `).join('');
        }

        renderCards('all');

        tabButtons.forEach((btn) => {
            btn.addEventListener('click', () => {
                document.querySelector('.tab-btn.active').classList.remove('active', 'bg-[#74BF1A]');
                btn.classList.add('active', 'bg-[#74BF1A]');
                renderCards(btn.dataset.tab);
            });
        });
    </script>

    <section class="py-16 bg-[#F6F6F6]">
        <div class="px-6 md:px-12">
            <div class="max-w-6xl mx-auto text-center bg-[#74BF1A] rounded-2xl p-6 sm:p-10 md:p-16 scale-up" data-delay="0.3" data-duration="1.2">
                @if ($latestEvent)
                    <h1 class="text-2xl md:text-3xl font-bold mb-4 text-[#092962] fade-up" data-delay="0.6" data-duration="1.0">
                        {{ $latestEvent->title }}
                    </h1>
                    <p class="text-white mb-3 fade-up" data-delay="0.8" data-duration="1.0">
                        {{ $latestEvent->short_description ?: 'Limited seats available. Reserve your spot now.' }}
                    </p>
                    <p class="text-white mb-8 fade-up" data-delay="0.9" data-duration="1.0">
                        {{ optional($latestEvent->date)->format('d M, Y') }}
                        @if ($latestEvent->start_time)
                            | {{ date('h:i A', strtotime($latestEvent->start_time)) }}
                        @endif
                        @if ($latestEvent->speaker)
                            | Speaker: {{ $latestEvent->speaker }}
                        @endif
                    </p>
                    <a href="{{ route('single-event.show', $latestEvent->id) }}"
                        class="inline-block bg-[#092962] text-white px-10 py-3 rounded-lg font-semibold hover:bg-[#0f3b8a] transition">
                        Register Now
                    </a>
                @else
                    <h1 class="text-2xl md:text-3xl font-bold mb-4 text-[#092962] fade-up" data-delay="0.6" data-duration="1.0">
                        New Event Coming Soon
                    </h1>
                    <p class="text-white mb-8 fade-up" data-delay="0.8" data-duration="1.0">
                        Stay tuned for upcoming events and webinars.
                    </p>
                @endif
            </div>
        </div>
    </section>
@endsection
