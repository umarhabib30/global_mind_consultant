@extends('layouts.user')
@section('content')
    @if (!$team)
        <section class="pt-36 pb-20 bg-[#F6F6F6]">
            <div class="px-6 md:px-12 text-center">
                <h1 class="text-3xl font-bold text-[#0A245D] mb-3">Profile Not Available</h1>
                <p class="text-gray-600">No active consultant profile is available right now.</p>
            </div>
        </section>
    @else
        <section class="py-16 pt-36 bg-[#F6F6F6] fade-in overflow-hidden">
            <div class="px-6 md:px-12">
                <div class="relative h-48 md:h-72 w-full overflow-hidden rounded-t-3xl">
                    <img src="{{ $team->banner ? asset($team->banner) : asset('images/course-filter.png') }}"
                        alt="{{ $team->name }}" class="w-full h-full object-cover object-center transition duration-700 hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-black/10 to-transparent"></div>
                </div>

                <div class="px-6 pb-6 bg-white rounded-b-3xl shadow-sm border border-t-0 border-gray-100">
                    <div class="relative flex flex-col lg:flex-row lg:items-end lg:justify-between">
                        <div class="flex flex-col">
                            <div class="relative -mt-16 mb-4 bounce-in" data-delay="0.4">
                                <img src="{{ $team->profile_pic ? asset($team->profile_pic) : asset('images/single-person.jpg') }}"
                                    alt="{{ $team->name }}"
                                    class="w-32 h-32 rounded-full border-4 border-white object-cover shadow-xl bg-white">
                            </div>
                            <h1 class="text-2xl md:text-3xl font-bold text-gray-800 slide-left" data-delay="0.5">
                                {{ $team->name }}</h1>
                            <p class="text-gray-600 font-medium text-lg slide-left" data-delay="0.6">
                                {{ $team->role ?: 'Consultant' }}</p>
                            @if ($team->tagline)
                                <p class="text-[#74BF1A] font-semibold mt-1 slide-left" data-delay="0.7">{{ $team->tagline }}</p>
                            @endif
                        </div>

                        <div class="mt-6 lg:mt-0 flex flex-wrap gap-3">
                            @if ($team->email)
                                <button id="contactBtn"
                                    class="bg-[#76c323] hover:bg-[#65a81e] text-white font-semibold py-2 px-8 rounded-lg transition duration-200 shadow-md">
                                    Contact
                                </button>
                            @endif
                            @if ($team->linkedin)
                                <a href="{{ $team->linkedin }}" target="_blank"
                                    class="bg-[#0A245D] hover:bg-[#16366f] text-white font-semibold py-2 px-6 rounded-lg transition duration-200 shadow-md">
                                    LinkedIn
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div id="contactModal"
            class="fixed inset-0 z-[100] hidden items-center justify-center bg-black/50 backdrop-blur-sm opacity-0 transition-opacity duration-300">
            <div id="modalContent"
                class="bg-white w-full max-w-md mx-4 p-8 rounded-3xl shadow-2xl transform scale-95 transition-transform duration-300 relative">
                <button id="closeModal" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 transition-colors">
                    <i class="fa-solid fa-xmark text-2xl"></i>
                </button>
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Get in Touch</h2>
                <p class="text-gray-500 mb-6 text-sm">Contact {{ $team->name }} directly using the details below.</p>
                <div class="space-y-3 text-sm text-gray-700">
                    @if ($team->email)
                        <p><strong>Email:</strong> {{ $team->email }}</p>
                    @endif
                    @if ($team->phone)
                        <p><strong>Phone:</strong> {{ $team->phone }}</p>
                    @endif
                    @if ($team->whatsapp)
                        <p><strong>WhatsApp:</strong> {{ $team->whatsapp }}</p>
                    @endif
                    @if ($team->location)
                        <p><strong>Location:</strong> {{ $team->location }}</p>
                    @endif
                    @if ($team->address)
                        <p><strong>Address:</strong> {{ $team->address }}</p>
                    @endif
                </div>
                @if ($team->contact_note)
                    <p class="text-xs text-gray-500 mt-5">{{ $team->contact_note }}</p>
                @endif
            </div>
        </div>

        <section class="bg-[#F6F6F6] pb-16 px-6 md:px-12 overflow-hidden">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="md:col-span-2 bg-white p-8 rounded-2xl border border-gray-100 shadow-sm slide-left" data-delay="0.2">
                    <h2 class="text-xl font-bold text-gray-800 mb-4">About</h2>
                    <p class="text-gray-600 leading-relaxed mb-8">
                        {{ $team->bio ?: 'No bio has been added yet.' }}
                    </p>

                    @if ($team->portfolio_summary)
                        <h3 class="text-lg font-bold text-gray-800 mb-4">Portfolio Summary</h3>
                        <p class="text-gray-600 leading-relaxed mb-8">{{ $team->portfolio_summary }}</p>
                    @endif

                    <h3 class="text-lg font-bold text-gray-800 mb-4">Skills</h3>
                    <div class="flex flex-wrap gap-3">
                        @forelse ($team->skills ?? [] as $skill)
                            <span
                                class="px-4 py-2 bg-white border border-gray-200 rounded-full text-sm text-gray-600 hover:border-[#74BF1A] hover:text-[#74BF1A] transition cursor-pointer">{{ $skill }}</span>
                        @empty
                            <span class="text-gray-500">No skills listed.</span>
                        @endforelse
                    </div>
                </div>

                <div class="bg-white p-8 rounded-2xl border border-gray-100 shadow-sm slide-right" data-delay="0.2">
                    <h2 class="text-xl font-bold text-gray-800 mb-6">Profile Snapshot</h2>
                    <div class="space-y-4">
                        <div class="p-4 rounded-xl bg-[#F6F6F6]">
                            <p class="text-xs text-gray-500 uppercase">Experience</p>
                            <p class="text-2xl font-bold text-[#0A245D]">{{ $team->years_experience ?? 0 }}+</p>
                        </div>
                        <div class="p-4 rounded-xl bg-[#F6F6F6]">
                            <p class="text-xs text-gray-500 uppercase">Clients Helped</p>
                            <p class="text-2xl font-bold text-[#0A245D]">{{ $team->clients_helped ?? 0 }}</p>
                        </div>
                        <div class="p-4 rounded-xl bg-[#F6F6F6]">
                            <p class="text-xs text-gray-500 uppercase">Sessions</p>
                            <p class="text-2xl font-bold text-[#0A245D]">{{ $team->sessions_completed ?? 0 }}</p>
                        </div>
                    </div>

                    @if (!empty($team->languages))
                        <h3 class="text-lg font-bold text-gray-800 mt-8 mb-3">Languages</h3>
                        <div class="flex flex-wrap gap-2">
                            @foreach ($team->languages as $language)
                                <span class="px-3 py-1 rounded-full bg-[#ecf8d9] text-[#3f6f0f] text-sm">{{ $language }}</span>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </section>

        <section class="bg-[#F6F6F6] pb-16 px-6 md:px-12 overflow-hidden">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <div class="bg-white p-8 rounded-2xl border border-gray-100 shadow-sm fade-up" data-delay="0.2">
                    <h2 class="text-2xl font-bold text-gray-800 mb-8">Work Experience</h2>
                    <div class="space-y-8">
                        @php
                            $experiences = $team->experiences ?? [];
                            if (empty($experiences) && $team->designation) {
                                $experiences = [
                                    [
                                        'title' => $team->designation,
                                        'company' => $team->company_name,
                                        'start_year' => $team->work_start_year,
                                        'end_year' => $team->work_end_year ?: 'Present',
                                        'description' => '',
                                    ],
                                ];
                            }
                        @endphp
                        @forelse ($experiences as $item)
                            <div class="relative pl-6 border-l-2 border-blue-100">
                                <h3 class="text-[#1a3a5f] font-bold text-xl">{{ $item['title'] ?? '' }}</h3>
                                <p class="text-gray-600 font-medium">{{ $item['company'] ?? '' }}</p>
                                <span class="text-xs uppercase tracking-wider text-blue-500 font-bold">
                                    {{ $item['start_year'] ?? '' }} - {{ $item['end_year'] ?? '' }}
                                </span>
                                @if (!empty($item['description']))
                                    <p class="text-gray-500 text-sm mt-3 leading-relaxed">{{ $item['description'] }}</p>
                                @endif
                            </div>
                        @empty
                            <p class="text-gray-500">No experience added.</p>
                        @endforelse
                    </div>
                </div>

                <div class="bg-white p-8 rounded-2xl border border-gray-100 shadow-sm fade-up" data-delay="0.3">
                    <h2 class="text-2xl font-bold text-gray-800 mb-8">Education</h2>
                    <div class="space-y-8">
                        @php
                            $educations = $team->educations ?? [];
                            if (empty($educations) && $team->degree_name) {
                                $educations = [
                                    [
                                        'degree' => $team->degree_name,
                                        'institution' => $team->university_name,
                                        'start_year' => '',
                                        'end_year' => $team->education_year,
                                        'description' => '',
                                    ],
                                ];
                            }
                        @endphp
                        @forelse ($educations as $item)
                            <div class="relative pl-6 border-l-2 border-green-100">
                                <h3 class="text-[#1a3a5f] font-bold text-xl">{{ $item['degree'] ?? '' }}</h3>
                                <p class="text-gray-600 font-medium">{{ $item['institution'] ?? '' }}</p>
                                <span class="text-xs uppercase tracking-wider text-green-500 font-bold">
                                    {{ $item['start_year'] ?? '' }}{{ !empty($item['start_year']) && !empty($item['end_year']) ? ' - ' : '' }}{{ $item['end_year'] ?? '' }}
                                </span>
                                @if (!empty($item['description']))
                                    <p class="text-gray-500 text-sm mt-3 leading-relaxed">{{ $item['description'] }}</p>
                                @endif
                            </div>
                        @empty
                            <p class="text-gray-500">No education added.</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-[#F6F6F6] pb-20 px-6 md:px-12 overflow-hidden">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-2xl border border-gray-100 shadow-sm fade-in" data-delay="0.1">
                    <h2 class="text-xl font-bold text-gray-800 mb-6">Certifications</h2>
                    <div class="space-y-5">
                        @forelse ($team->certifications ?? [] as $item)
                            <div>
                                <h3 class="font-semibold text-[#1a3a5f]">{{ $item['name'] ?? '' }}</h3>
                                <p class="text-sm text-gray-600">
                                    {{ $item['issuer'] ?? '' }} @if (!empty($item['year'])) ({{ $item['year'] }}) @endif
                                </p>
                                @if (!empty($item['description']))
                                    <p class="text-sm text-gray-500 mt-1">{{ $item['description'] }}</p>
                                @endif
                            </div>
                        @empty
                            <p class="text-gray-500">No certifications added.</p>
                        @endforelse
                    </div>
                </div>

                <div class="bg-white p-8 rounded-2xl border border-gray-100 shadow-sm fade-in" data-delay="0.2">
                    <h2 class="text-xl font-bold text-gray-800 mb-6">Awards</h2>
                    <div class="space-y-5">
                        @forelse ($team->awards ?? [] as $item)
                            <div>
                                <h3 class="font-semibold text-[#1a3a5f]">{{ $item['title'] ?? '' }}</h3>
                                <p class="text-sm text-gray-600">
                                    {{ $item['issuer'] ?? '' }} @if (!empty($item['year'])) ({{ $item['year'] }}) @endif
                                </p>
                                @if (!empty($item['description']))
                                    <p class="text-sm text-gray-500 mt-1">{{ $item['description'] }}</p>
                                @endif
                            </div>
                        @empty
                            <p class="text-gray-500">No awards added.</p>
                        @endforelse
                    </div>
                </div>

                <div class="bg-white p-8 rounded-2xl border border-gray-100 shadow-sm fade-in" data-delay="0.3">
                    <h2 class="text-xl font-bold text-gray-800 mb-6">Projects</h2>
                    <div class="space-y-5">
                        @forelse ($team->projects ?? [] as $item)
                            <div>
                                <h3 class="font-semibold text-[#1a3a5f]">{{ $item['title'] ?? '' }}</h3>
                                @if (!empty($item['link']))
                                    <a href="{{ $item['link'] }}" target="_blank"
                                        class="text-sm text-[#0A245D] hover:text-[#74BF1A] transition">View Project</a>
                                @endif
                                @if (!empty($item['description']))
                                    <p class="text-sm text-gray-500 mt-1">{{ $item['description'] }}</p>
                                @endif
                            </div>
                        @empty
                            <p class="text-gray-500">No projects added.</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </section>

        <script>
            document.addEventListener("DOMContentLoaded", () => {
                const contactBtn = document.getElementById('contactBtn');
                const contactModal = document.getElementById('contactModal');
                const closeModal = document.getElementById('closeModal');
                const modalContent = document.getElementById('modalContent');

                if (!contactBtn || !contactModal || !closeModal || !modalContent) return;

                const openForm = () => {
                    contactModal.classList.remove('hidden');
                    contactModal.classList.add('flex');
                    requestAnimationFrame(() => {
                        contactModal.classList.remove('opacity-0');
                        modalContent.classList.remove('scale-95');
                        modalContent.classList.add('scale-100');
                    });
                    document.body.style.overflow = 'hidden';
                };

                const closeForm = () => {
                    contactModal.classList.add('opacity-0');
                    modalContent.classList.add('scale-95');
                    setTimeout(() => {
                        contactModal.classList.add('hidden');
                        contactModal.classList.remove('flex');
                        modalContent.classList.remove('scale-100');
                        document.body.style.overflow = '';
                    }, 250);
                };

                contactBtn.addEventListener('click', openForm);
                closeModal.addEventListener('click', closeForm);
                window.addEventListener('click', (e) => {
                    if (e.target === contactModal) closeForm();
                });
            });
        </script>
    @endif
@endsection

