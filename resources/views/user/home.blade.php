@extends('layouts.user')
@section('content')
    <!------------------------------ Offer Popup ------------------------------>
    @if ($popup)
        <div x-data="{
            showPopup: false,
            init() {
                setTimeout(() => this.showPopup = true, 2000);
            }
        }" x-show="showPopup"
            class="fixed inset-0 z-[9999] flex items-center justify-center px-4 overflow-hidden" x-cloak>

            <div x-show="showPopup" x-transition:enter="transition ease-out duration-500" @click="showPopup = false"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0" class="absolute inset-0 bg-black/60 backdrop-blur-sm"></div>

            <div x-show="showPopup" x-transition:enter="transition ease-out duration-500 delay-100"
                x-transition:enter-start="opacity-0 translate-y-12 scale-90"
                x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 translate-y-0 scale-100"
                x-transition:leave-end="opacity-0 translate-y-12 scale-90"
                class="relative w-full max-w-lg rounded-[2rem] bg-white p-8 shadow-[0_20px_50px_rgba(0,0,0,0.3)] md:p-10 overflow-hidden">

                <div class="absolute -top-10 -right-10 w-32 h-32 bg-[#74BF1A]/10 rounded-full blur-3xl"></div>

                <button @click="showPopup = false"
                    class="absolute right-5 top-5 rounded-full p-2 text-gray-400 transition-all hover:bg-gray-100 hover:text-gray-900 hover:rotate-90"
                    aria-label="Close offer popup">
                    <i class="fa-solid fa-xmark text-xl"></i>
                </button>

                <div class="relative">
                    <span
                        class="inline-flex items-center gap-1.5 mb-4 rounded-full bg-[#74BF1A]/10 px-4 py-1.5 text-xs font-bold uppercase tracking-wider text-[#74BF1A]">
                        <span class="relative flex h-2 w-2">
                            <span
                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#74BF1A] opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-[#74BF1A]"></span>
                        </span>
                        Limited Time Offer
                    </span>

                    <h2 class="text-2xl font-extrabold text-[#0A245D] md:text-3xl leading-tight">
                        {{ $popup->title }}
                    </h2>

                    @if ($popup->description)
                        <p class="mt-4 text-base leading-relaxed text-gray-500">
                            {{ $popup->description }}
                        </p>
                    @endif

                    @if ($popup->button_text)
                        <a href="{{ $popup->button_link ?: '#' }}"
                            class="group mt-8 flex w-full items-center justify-center gap-3 rounded-xl bg-[#74BF1A] px-6 py-4 text-center font-bold text-white shadow-lg shadow-[#74BF1A]/30 transition-all hover:scale-[1.02] active:scale-95">
                            {{ $popup->button_text }}
                            <i class="fa-solid fa-arrow-right transition-transform group-hover:translate-x-1"></i>
                        </a>
                    @endif

                    <div class="mt-8 pt-6 border-t border-gray-100">
                        <p class="mb-4 text-xs font-bold uppercase tracking-widest text-gray-400 text-center">Join Our
                            Community
                        </p>
                        <div class="flex justify-center gap-4">
                            <a href="#"
                                class="h-10 w-10 flex items-center justify-center rounded-full bg-red-50 text-red-600 hover:bg-red-600 hover:text-white transition-all"><i
                                    class="fa-brands fa-youtube"></i></a>
                            <a href="#"
                                class="h-10 w-10 flex items-center justify-center rounded-full bg-pink-50 text-pink-600 hover:bg-pink-600 hover:text-white transition-all"><i
                                    class="fa-brands fa-instagram"></i></a>
                            <a href="#"
                                class="h-10 w-10 flex items-center justify-center rounded-full bg-blue-50 text-blue-600 hover:bg-blue-600 hover:text-white transition-all"><i
                                    class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"
                                class="h-10 w-10 flex items-center justify-center rounded-full bg-green-50 text-green-600 hover:bg-green-600 hover:text-white transition-all"><i
                                    class="fa-brands fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    <!-----------------------------------HERO SECTION----------------------------------------------->
    @php
        $dynamicSlides = $heroSlides
            ->values()
            ->map(function ($slide, $index) {
                return [
                    'title' => $slide->title,
                    'highlight' => $slide->highlight_text,
                    'desc' => $slide->description,
                    'img' => $slide->background_image ? asset($slide->background_image) : asset('images/home-01.png'),
                    'accent' => $index % 2 === 0 ? 'border-[#74BF1A]' : 'border-blue-500',
                    'button_text' => $slide->button_text,
                    'button_link' => $slide->button_link,
                ];
            })
            ->all();

        if (empty($dynamicSlides)) {
            $dynamicSlides[] = [
                'title' => 'Your Journey to Global Education',
                'highlight' => 'Starts Here',
                'desc' =>
                    'Global Minds Consultants helps you unlock international opportunities with expert study abroad guidance.',
                'img' => asset('images/home-01.png'),
                'accent' => 'border-[#74BF1A]',
                'button_text' => 'Book Free Counselling',
                'button_link' => '/consultation-form',
            ];
        }
    @endphp

    <section x-data="{
        active: 0,
        autoPlayInterval: null,
        slides: {{ Js::from($dynamicSlides) }},
        next() { this.active = (this.active + 1) % this.slides.length },
        prev() { this.active = (this.active - 1 + this.slides.length) % this.slides.length },
        init() {
            if (this.slides.length > 1) {
                this.autoPlayInterval = setInterval(() => { this.next() }, 8000);
            }
        }
    }" class="relative w-full h-screen overflow-hidden bg-gray-950">

        <template x-for="(slide, index) in slides" :key="index">
            <div x-show="active === index" x-transition:enter="transition duration-1000 ease-in-out"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                x-transition:leave="transition duration-1000 ease-in-out" x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0" class="absolute inset-0">

                <div class="absolute inset-0 z-0">
                    <div class="absolute inset-0 bg-cover bg-center transition-transform duration-[8000ms] ease-linear scale-110"
                        :class="active === index ? 'scale-100' : 'scale-110'"
                        :style="'background-image: url(' + slide.img + ')'">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-r from-black/90 via-black/40 to-transparent"></div>
                </div>

                <div class="relative z-10 h-full max-w-7xl mx-auto px-6 flex items-center">
                    <div class="w-full md:w-2/3 lg:w-1/2 space-y-6">

                        <div x-show="active === index" x-transition:enter="transition delay-300 duration-700 transform"
                            x-transition:enter-start="opacity-0 -translate-y-4"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            class="inline-block px-4 py-1 rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-[#74BF1A] text-sm font-bold tracking-widest uppercase">
                            Global Minds Consultants
                        </div>

                        <h1 class="text-white text-4xl md:text-6xl font-bold ">
                            <span x-show="active === index"
                                x-transition:enter="transition delay-500 duration-1000 blur-md opacity-0 scale-95"
                                x-transition:enter-end="blur-0 opacity-100 scale-100" class="block"
                                x-text="slide.title"></span>
                            <template x-if="slide.highlight">
                                <span x-show="active === index"
                                    x-transition:enter="transition delay-700 duration-1000 blur-md opacity-0 scale-95"
                                    x-transition:enter-end="blur-0 opacity-100 scale-100" class="text-[#74BF1A]"
                                    x-text="slide.highlight"></span>
                            </template>
                        </h1>

                        <p x-show="active === index" x-transition:enter="transition delay-900 duration-700 transform"
                            x-transition:enter-start="opacity-0 translate-x-10"
                            x-transition:enter-end="opacity-100 translate-x-0"
                            class="text-gray-300 text-lg md:text-xl border-l-4 pl-6" :class="slide.accent"
                            x-text="slide.desc || ''">
                        </p>

                        <div x-show="active === index" x-transition:enter="transition delay-1000 duration-500"
                            x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
                            class="pt-4">
                            <a :href="slide.button_link || '#'"
                                class="relative inline-flex items-center gap-3 px-8 py-4 bg-[#74BF1A] text-white rounded-xl font-bold group transition-all hover:shadow-[0_0_30px_-5px_rgba(116,191,26,0.6)]">
                                <span class="relative z-10 flex items-center gap-2">
                                    <span x-text="slide.button_text || 'Book Free Counselling'"></span> <i
                                        class="fa-solid fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                                </span>

                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </template>

        <div class="absolute bottom-12 right-12 z-20 flex gap-4">
            <button @click="prev()"
                class="w-12 h-12 flex items-center justify-center rounded-xl border border-white/20 bg-white/5 backdrop-blur-md text-white hover:bg-[#74BF1A] hover:border-[#74BF1A] transition-all duration-300">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>
            <button @click="next()"
                class="w-12 h-12 flex items-center justify-center rounded-xl border border-white/20 bg-white/5 backdrop-blur-md text-white hover:bg-[#74BF1A] hover:border-[#74BF1A] transition-all duration-300">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>
        </div>

        <div class="absolute bottom-12 left-1/2 -translate-x-1/2 z-20 flex gap-3">
            <template x-for="(slide, index) in slides" :key="index">
                <button @click="active = index" class="h-1.5 rounded-full transition-all duration-500"
                    :class="active === index ? 'w-12 bg-[#74BF1A]' : 'w-4 bg-white/30'"></button>
            </template>
        </div>
    </section>
    <!-----------------------------------SEARCH SECTION----------------------------------------------->

    <section class="bg-[#F6F6F6] py-[90px] slide-up" data-delay="0.7" data-duration="1.5">
        <div x-data="{ activeTab: 'Courses' }" class="max-w-7xl mx-auto px-4 md:px-12 relative">
            <!-- Tabs -->
            <div class="bg-white rounded-xl shadow-md">
                <div class="flex overflow-x-auto md:overflow-visible border-b">
                    @php
                        $tabs = ['Courses', 'Universities', 'Scholarships', 'English Courses'];
                    @endphp

                    @foreach ($tabs as $tab)
                        <button
                            class="flex-shrink-0 w-1/2 sm:w-1/4 text-center py-3 font-medium text-gray-700 hover:text-[#74BF1A] border-b-2 transition-all duration-200"
                            x-on:click="activeTab = '{{ $tab }}'"
                            :class="activeTab === '{{ $tab }}' ? 'border-[#74BF1A] text-[#74BF1A]' :
                                'border-transparent'">
                            {{ $tab }}
                        </button>
                    @endforeach
                </div>

                <!-- Tab Content -->
                <div class="p-6">
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">

                        <!-- Custom Dropdown 1 -->
                        <div x-data="{ open: false, selected: 'Select by Course', options: ['Computer Science', 'Business', 'Economics'] }" class="relative">
                            <button @click="open = !open"
                                class="w-full flex justify-between items-center border rounded-md px-4 py-3 bg-white text-gray-700 focus:outline-none focus:ring-2 focus:ring-[#74BF1A]">
                                <span x-text="selected"></span>
                                <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>

                            <ul x-show="open" @click.away="open = false"
                                class="absolute left-0 w-full mt-1 bg-white border rounded-md shadow-lg max-h-56 overflow-auto z-50">
                                <template x-for="option in options" :key="option">
                                    <li @click="selected = option; open = false"
                                        class="px-4 py-2 text-gray-700 hover:bg-[#F6F6F6] cursor-pointer" x-text="option">
                                    </li>
                                </template>
                            </ul>
                        </div>

                        <!-- Custom Dropdown 2 -->
                        <div x-data="{ open: false, selected: 'Select Degree', options: ['Bachelor', 'Master', 'PhD'] }" class="relative">
                            <button @click="open = !open"
                                class="w-full flex justify-between items-center border rounded-md px-4 py-3 bg-white text-gray-700 focus:outline-none focus:ring-2 focus:ring-[#74BF1A]">
                                <span x-text="selected"></span>
                                <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>

                            <ul x-show="open" @click.away="open = false"
                                class="absolute left-0 w-full mt-1 bg-white border rounded-md shadow-lg max-h-56 overflow-auto z-50">
                                <template x-for="option in options" :key="option">
                                    <li @click="selected = option; open = false"
                                        class="px-4 py-2 text-gray-700 hover:bg-[#F6F6F6] cursor-pointer" x-text="option">
                                    </li>
                                </template>
                            </ul>
                        </div>

                        <!-- Custom Dropdown 3 -->
                        <div x-data="{ open: false, selected: 'Funding Type', options: ['Scholarship', 'Self-funded', 'Partial Funding'] }" class="relative">
                            <button @click="open = !open"
                                class="w-full flex justify-between items-center border rounded-md px-4 py-3 bg-white text-gray-700 focus:outline-none focus:ring-2 focus:ring-[#74BF1A]">
                                <span x-text="selected"></span>
                                <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>

                            <ul x-show="open" @click.away="open = false"
                                class="absolute left-0 w-full mt-1 bg-white border rounded-md shadow-lg max-h-56 overflow-auto z-50">
                                <template x-for="option in options" :key="option">
                                    <li @click="selected = option; open = false"
                                        class="px-4 py-2 text-gray-700 hover:bg-[#F6F6F6] cursor-pointer" x-text="option">
                                    </li>
                                </template>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Search Button  -->
            <div class="absolute left-1/2 -bottom-6 transform -translate-x-1/2 translate-y-2">
                <button
                    class="bg-[#0A245D] text-white px-6 py-3 rounded-md shadow-md hover:bg-blue-900 flex items-center gap-2">
                    Search
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
    </section>




    <!----------------------------------- WHY CHOOSE US SECTION ----------------------------------------------->
    <section class="py-16 bg-white overflow-hidden">
        <div class="px-6 md:px-12">
            <!-- Heading + Paragraph -->
            <h2 class="reveal-up text-2xl md:text-5xl font-bold mb-6 opacity-0" data-delay="0.1">
                Why <span class="text-[#74BF1A]">Students Trust</span> Global Minds Consultants?
            </h2>

            <p class="reveal-up text-gray-600 text-base md:text-lg max-w-4xl mb-12 opacity-0" data-delay="0.2">
                Choosing the right consultancy is an important step in your study abroad journey. At Global Minds
                Consultants, we
                guide students with honest advice, clear information, and practical support at every stage.
            </p>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Left 2 cols -->
                <div class="lg:col-span-2 grid grid-cols-1 md:grid-cols-2 gap-8 stagger-container">
                    <!-- Box 1 -->
                    <div
                        class="reveal-up hover-card bg-gray-100 rounded-2xl shadow-md p-8 transition-all duration-500 group cursor-pointer relative opacity-0">
                        <div
                            class="text-4xl mb-4 text-[#74BF1A] transition-transform duration-500 group-hover:scale-110 group-hover:-rotate-6">
                            <i class="fa-solid fa-graduation-cap"></i>
                        </div>

                        <h3 class="text-2xl font-bold text-gray-900 mb-3">
                            <span class="text-[#092962] counter" data-target="2500">0</span>+ International University
                            Partners
                        </h3>

                        <p class="text-gray-600 text-sm leading-relaxed">
                            We work with a wide network of recognized universities and colleges across Europe, the UK, and
                            other popular
                            study destinations. This allows us to help students choose programs that match their academic
                            background,
                            budget, and future goals.
                        </p>

                        <div class="mt-6 h-1 w-0 bg-[#74BF1A] transition-all duration-700 group-hover:w-full"></div>
                    </div>

                    <!-- Box 2 -->
                    <div
                        class="reveal-up hover-card bg-gray-100 rounded-2xl shadow-md p-8 transition-all duration-500 group cursor-pointer relative opacity-0">
                        <div class="text-4xl mb-4 text-[#74BF1A] transition-transform duration-500 group-hover:rotate-12">
                            <i class="fa-solid fa-university"></i>
                        </div>

                        <h3 class="text-2xl font-bold text-gray-900 mb-3">
                            <span class="text-[#092962]">Experienced</span> Study Abroad Advisors
                        </h3>

                        <p class="text-gray-600 text-sm leading-relaxed">
                            Our team guides students through every step of the admission process. From selecting the right
                            course and
                            university to preparing documents and applications, we make sure students move forward with
                            confidence.
                        </p>

                        <div class="mt-6 h-1 w-0 bg-[#74BF1A] transition-all duration-700 group-hover:w-full"></div>
                    </div>

                    <!-- Bottom Section (wide card) -->
                    <div
                        class="reveal-up hover-card bg-gray-50 border border-gray-100 rounded-2xl shadow-md p-8 transition-all duration-500 group md:col-span-2 cursor-pointer relative opacity-0">
                        <div class="flex flex-col md:flex-row items-start gap-6">
                            <div class="text-4xl text-[#74BF1A] group-hover:scale-110 transition-transform duration-500">
                                <i class="fa-solid fa-circle-check"></i>
                            </div>

                            <div class="flex-1 w-full">
                                <h3 class="text-2xl font-bold text-gray-900 mb-2">
                                    <span class="text-[#092962]">Clear</span> & Transparent Process
                                </h3>

                                <p class="text-gray-600 text-sm mb-6">
                                    We believe students should always know what is happening at every stage of their
                                    application. Our team
                                    keeps the process clear and straightforward, from the first consultation to the final
                                    visa stage.
                                </p>

                                <div class="w-full">
                                    <div class="flex justify-between mb-2">
                                        <span class="text-xs font-bold text-[#092962] uppercase tracking-wider">
                                            Student Satisfaction
                                        </span>
                                        <span class="text-xs font-bold text-[#74BF1A]">98%</span>
                                    </div>

                                    <div class="h-2 bg-gray-200 rounded-full overflow-hidden">
                                        <div
                                            class="progress-fill h-full bg-gradient-to-r from-[#74BF1A] to-[#092962] w-0 transition-all duration-1000 ease-out">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Blue Card -->
                <div
                    class="reveal-up hover-card bg-gradient-to-br from-[#0A2D5A] to-[#092962] text-white rounded-2xl shadow-xl p-8 flex flex-col justify-between group relative overflow-hidden opacity-0">
                    <div
                        class="absolute -top-10 -right-10 w-32 h-32 bg-[#74BF1A] opacity-10 rounded-full blur-2xl group-hover:opacity-20 transition-opacity">
                    </div>

                    <div class="relative z-10">
                        <div class="text-4xl mb-6 text-[#74BF1A] float-anim">
                            <i class="fa-solid fa-trophy"></i>
                        </div>

                        <h3 class="text-3xl font-bold mb-4">
                            <span class="text-[#74BF1A]">A Proven</span> Record of Student Success
                        </h3>

                        <p class="text-gray-300 text-sm leading-relaxed mb-8">
                            Many students from different cities in Pakistan have trusted Global Minds Consultants for their
                            study abroad
                            plans. With proper guidance and careful application preparation, we help students take the right
                            steps
                            toward their international education.
                        </p>

                        <div class="grid grid-cols-2 gap-4 mb-8">
                            <div class="text-center p-4 bg-white/5 rounded-xl border border-white/10">
                                <div class="text-3xl font-bold text-[#74BF1A] counter" data-target="500">0</div>
                                <div class="text-[10px] uppercase tracking-widest text-gray-400">Students Placed</div>
                            </div>

                            <div class="text-center p-4 bg-white/5 rounded-xl border border-white/10">
                                <div class="text-3xl font-bold text-[#74BF1A] counter" data-target="98">0</div>
                                <div class="text-[10px] uppercase tracking-widest text-gray-400">Student Satisfaction</div>
                            </div>
                        </div>

                        <a href="/services"
                            class="inline-flex items-center gap-3 bg-[#74BF1A] hover:bg-white hover:text-[#092962] text-white px-8 py-4 rounded-xl font-bold transition-all duration-300 transform hover:-translate-y-1 w-full justify-center shadow-lg">
                            Apply Now
                            <i class="fa-solid fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        /* 1. Base State for Reveal */
        .reveal-up {
            transform: translateY(30px);
            transition: all 0.8s cubic-bezier(0.22, 1, 0.36, 1);
        }

        .reveal-up.active {
            opacity: 1 !important;
            transform: translateY(0);
        }

        /* 2. Enhanced Hover Effects */
        .hover-card {
            will-change: transform, box-shadow;
        }

        .hover-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15);
        }

        /* 3. Smooth Floating Animation */
        .float-anim {
            animation: float 4s ease-in-out infinite;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-12px);
            }
        }

        /* 4. Progress Bar logic - will be triggered by JS */
        .active .progress-fill {
            width: 98% !important;
            /* Matches the data */
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Intersection Observer Options
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        const element = entry.target;

                        // Handle Staggering for child cards
                        if (element.classList.contains('stagger-container')) {
                            const cards = element.querySelectorAll('.reveal-up');
                            cards.forEach((card, index) => {
                                setTimeout(() => {
                                    card.classList.add('active');
                                }, index * 150); // 150ms delay between cards
                            });
                        } else {
                            element.classList.add('active');
                        }

                        // If this element contains counters, start them
                        const counters = element.querySelectorAll('.counter');
                        counters.forEach(counter => animateCounter(counter));

                        // Stop observing after animation triggers
                        observer.unobserve(element);
                    }
                });
            }, observerOptions);

            // Elements to observe
            document.querySelectorAll('.reveal-up, .stagger-container').forEach(el => {
                observer.observe(el);
            });

            // Smooth Counter Function
            function animateCounter(el) {
                const target = +el.getAttribute('data-target');
                const duration = 2000; // 2 seconds
                const stepTime = 20;
                const totalSteps = duration / stepTime;
                const increment = target / totalSteps;
                let current = 0;

                const timer = setInterval(() => {
                    current += increment;
                    if (current >= target) {
                        el.innerText = target.toLocaleString();
                        clearInterval(timer);
                    } else {
                        el.innerText = Math.floor(current).toLocaleString();
                    }
                }, stepTime);
            }
        });
    </script>
    <!-----------------------------------SUPPORT STUDENT SECTION ----------------------------------------------->
    <section class="py-16 bg-[#F6F6F6]">
        <div class="px-6 md:px-12">

            <!-- Heading -->
            <h2 class="slide-down text-2xl md:text-5xl font-bold text-center mb-4" data-delay="0.7" data-duration="1.5">
                How We <span class="text-[#74BF1A]">Support</span> Our Students
            </h2>

            <!-- Short line -->
            <p class="text-center text-gray-600 max-w-3xl mx-auto mb-12">
                From the first consultation to the final visa stage, our team supports students at every step of the
                study abroad process.
            </p>

            <div class="relative overflow-hidden">
                <div id="slider" class="flex transition-transform duration-500 ease-in-out space-x-6 slide-up">

                    <!-- CARD 1 Scholarship -->
                    <div
                        class="min-w-full sm:min-w-[calc(50%-12px)] lg:min-w-[calc(33.3%-16px)] bg-white rounded-2xl shadow-md p-6 hover:shadow-xl transition flex flex-col justify-between md:h-[480px]">

                        <div>
                            <div class="text-3xl mb-4 text-[#0A2D5A]">
                                <i class="fa-solid fa-hand-holding-dollar"></i>
                            </div>

                            <h3 class="text-2xl font-bold mb-3">Scholarship Assistance</h3>

                            <p class="text-gray-600 mb-4">
                                Studying abroad can be expensive, but many universities offer scholarships and funding
                                opportunities. Our team helps students identify suitable scholarships and prepare strong
                                applications to improve their chances.
                            </p>

                            <h4 class="font-semibold mb-2">What We Offer</h4>

                            <ul class="space-y-2 text-gray-600">
                                <li><i class="fa-solid fa-check text-[#0A2D5A] mr-2"></i>Guidance on available scholarships
                                </li>
                                <li><i class="fa-solid fa-check text-[#0A2D5A] mr-2"></i>Support with scholarship
                                    applications</li>
                                <li><i class="fa-solid fa-check text-[#0A2D5A] mr-2"></i>Help with required documents</li>
                                <li><i class="fa-solid fa-check text-[#0A2D5A] mr-2"></i>One-to-one counseling for funding
                                    options</li>
                            </ul>
                        </div>

                        <a href="/services" class="text-[#092962] font-semibold mt-6 hover:underline">
                            Start Preparing Now <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>


                    <!-- CARD 2 Career -->
                    <div
                        class="min-w-full sm:min-w-[calc(50%-12px)] lg:min-w-[calc(33.3%-16px)] bg-white rounded-2xl shadow-md p-6 hover:shadow-xl transition flex flex-col justify-between md:h-[480px]">

                        <div>
                            <div class="text-3xl mb-4 text-[#0A2D5A]">
                                <i class="fa-solid fa-briefcase"></i>
                            </div>

                            <h3 class="text-2xl font-bold mb-3">Career Guidance</h3>

                            <p class="text-gray-600 mb-4">
                                Choosing the right program is an important decision. Our advisors help students select
                                courses that match their academic background, career plans, and future opportunities.
                            </p>

                            <h4 class="font-semibold mb-2">What We Offer</h4>

                            <ul class="space-y-2 text-gray-600">
                                <li><i class="fa-solid fa-check text-[#0A2D5A] mr-2"></i>Advice on suitable study programs
                                </li>
                                <li><i class="fa-solid fa-check text-[#0A2D5A] mr-2"></i>Resume and profile preparation
                                </li>
                                <li><i class="fa-solid fa-check text-[#0A2D5A] mr-2"></i>Career pathway guidance</li>
                                <li><i class="fa-solid fa-check text-[#0A2D5A] mr-2"></i>Personal counseling sessions</li>
                            </ul>
                        </div>

                        <a href="/services" class="text-[#092962] font-semibold mt-6 hover:underline">
                            Start Preparing Now <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>


                    <!-- CARD 3 Visa -->
                    <div
                        class="min-w-full sm:min-w-[calc(50%-12px)] lg:min-w-[calc(33.3%-16px)] bg-white rounded-2xl shadow-md p-6 hover:shadow-xl transition flex flex-col justify-between md:h-[480px]">

                        <div>
                            <div class="text-3xl mb-4 text-[#0A2D5A]">
                                <i class="fa-solid fa-passport"></i>
                            </div>

                            <h3 class="text-2xl font-bold mb-3">Visa Assistance</h3>

                            <p class="text-gray-600 mb-4">
                                Visa preparation can feel complicated for many students. Our team provides step-by-step
                                support to make sure applications are properly prepared and submitted.
                            </p>

                            <h4 class="font-semibold mb-2">What We Offer</h4>

                            <ul class="space-y-2 text-gray-600">
                                <li><i class="fa-solid fa-check text-[#0A2D5A] mr-2"></i>Document review and verification
                                </li>
                                <li><i class="fa-solid fa-check text-[#0A2D5A] mr-2"></i>Visa application guidance</li>
                                <li><i class="fa-solid fa-check text-[#0A2D5A] mr-2"></i>Interview preparation (if
                                    required)</li>
                                <li><i class="fa-solid fa-check text-[#0A2D5A] mr-2"></i>Complete support until visa
                                    submission</li>
                            </ul>
                        </div>

                        <a href="/services" class="text-[#092962] font-semibold mt-6 hover:underline">
                            Start Preparing Now <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>


                    <!-- CARD 4 Country -->
                    <div
                        class="min-w-full sm:min-w-[calc(50%-12px)] lg:min-w-[calc(33.3%-16px)] bg-white rounded-2xl shadow-md p-6 hover:shadow-xl transition flex flex-col justify-between md:h-[480px]">

                        <div>
                            <div class="text-3xl mb-4 text-[#0A2D5A]">
                                <i class="fa-solid fa-graduation-cap"></i>
                            </div>

                            <h3 class="text-2xl font-bold mb-3">Country & University Selection</h3>

                            <p class="text-gray-600 mb-4">
                                Selecting the right country and university is one of the most important steps in the
                                process. We help students compare options and choose institutions that match their goals
                                and budget.
                            </p>

                            <h4 class="font-semibold mb-2">What We Offer</h4>

                            <ul class="space-y-2 text-gray-600">
                                <li><i class="fa-solid fa-check text-[#0A2D5A] mr-2"></i>Guidance on choosing the right
                                    country</li>
                                <li><i class="fa-solid fa-check text-[#0A2D5A] mr-2"></i>Recommendations for suitable
                                    universities</li>
                                <li><i class="fa-solid fa-check text-[#0A2D5A] mr-2"></i>Course and intake planning</li>
                                <li><i class="fa-solid fa-check text-[#0A2D5A] mr-2"></i>One-to-one counseling sessions
                                </li>
                            </ul>
                        </div>

                        <a href="/services" class="text-[#092962] font-semibold mt-6 hover:underline">
                            Start Preparing Now <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>

                </div>

                <!-- Slider arrows -->
                <div class="flex justify-center space-x-4 mt-8">
                    <button id="prev"
                        class="w-10 h-10 flex items-center justify-center bg-[#092962] text-white rounded-full hover:bg-[#74BF1A] transition">
                        <i class="fa-solid fa-arrow-left"></i>
                    </button>

                    <button id="next"
                        class="w-10 h-10 flex items-center justify-center bg-[#092962] text-white rounded-full hover:bg-[#74BF1A] transition">
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>

            </div>
        </div>

    </section>



    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slider = document.getElementById("slider");
            const next = document.getElementById("next");
            const prev = document.getElementById("prev");

            let currentSlide = 0;
            const totalSlides = slider.children.length;

            function getVisibleSlides() {
                if (window.innerWidth >= 1024) return 3;
                if (window.innerWidth >= 640) return 2;
                return 1;
            }

            // Update slider position
            function updateSlider() {
                const visibleSlides = getVisibleSlides();
                const maxSlide = Math.max(0, totalSlides - visibleSlides);

                currentSlide = Math.min(currentSlide, maxSlide);

                const containerWidth = slider.parentElement.offsetWidth;

                const cardWidth = slider.children[0].offsetWidth;
                const gap = 24;

                const scrollAmount = currentSlide * (cardWidth + gap);

                slider.style.transform = `translateX(-${scrollAmount}px)`;

                // Disable buttons when at the edges
                prev.disabled = currentSlide === 0;
                next.disabled = currentSlide === maxSlide;

                if (prev.disabled) {
                    prev.classList.add('opacity-50', 'cursor-not-allowed');
                } else {
                    prev.classList.remove('opacity-50', 'cursor-not-allowed');
                }

                if (next.disabled) {
                    next.classList.add('opacity-50', 'cursor-not-allowed');
                } else {
                    next.classList.remove('opacity-50', 'cursor-not-allowed');
                }
            }

            next.addEventListener("click", () => {
                const visibleSlides = getVisibleSlides();
                const maxSlide = Math.max(0, totalSlides - visibleSlides);

                if (currentSlide < maxSlide) {
                    currentSlide++;
                    updateSlider();
                }
            });

            prev.addEventListener("click", () => {
                if (currentSlide > 0) {
                    currentSlide--;
                    updateSlider();
                }
            });

            let resizeTimeout;
            window.addEventListener('resize', function() {
                clearTimeout(resizeTimeout);
                resizeTimeout = setTimeout(updateSlider, 250);
            });

            updateSlider();
        });
    </script>
    <!-------------------------------------------------PARTNER UNIVERSITIES SECTION--------------------------------------------------->
    <section class="py-16 bg-gradient-to-b from-white to-[#F8FBF3]" id="partner-universities">
        @php
            $countryTabs = $universities
                ->pluck('country')
                ->filter(fn($country) => !empty(trim((string) $country)))
                ->map(fn($country) => trim((string) $country))
                ->unique()
                ->sort()
                ->values();

            $universityCards = $universities
                ->map(function ($university) {
                    return [
                        'name' => $university->name,
                        'country' => trim((string) ($university->country ?? '')),
                        'description' => \Illuminate\Support\Str::limit(
                            $university->description ?:
                            'Explore globally recognized programs with strong academic outcomes.',
                            130,
                        ),
                        'image' => $university->image ? asset($university->image) : asset('images/uni.1.png'),
                        'button_text' => $university->button_text ?: 'View Programs',
                        'button_link' => $university->button_link ?: route('universities'),
                    ];
                })
                ->values();
        @endphp

        <div class="px-6 md:px-12">
            <div class="text-center max-w-3xl mx-auto">
                <h2 class="md:slide-left text-3xl md:text-5xl font-bold mb-4 text-[#0A2D5A]" data-delay="0.3"
                    data-duration="1.2">
                    Our <span class="text-[#74BF1A]">Partner Universities</span>
                </h2>
                <p class="md:slide-right text-gray-600 mb-12 text-sm md:text-base" data-delay="0.5" data-duration="1.2">
                    We collaborate with trusted institutions worldwide so you can access quality education with confidence.
                </p>
            </div>

            @if ($universities->isNotEmpty())
                <div x-data="{
                    activeCountry: 'all',
                    visibleCount: 8,
                    countries: {{ Js::from($countryTabs) }},
                    universities: {{ Js::from($universityCards) }},
                    get filteredUniversities() {
                        if (this.activeCountry === 'all') return this.universities;
                        return this.universities.filter((uni) => uni.country === this.activeCountry);
                    },
                    get visibleUniversities() {
                        return this.filteredUniversities.slice(0, this.visibleCount);
                    },
                    get hasMore() {
                        return this.visibleCount < this.filteredUniversities.length;
                    },
                    get canShowLess() {
                        return this.filteredUniversities.length > 8 && !this.hasMore;
                    },
                    setCountry(country) {
                        this.activeCountry = country;
                        this.visibleCount = 8;
                    },
                    loadMore() {
                        this.visibleCount = Math.min(this.visibleCount + 8, this.filteredUniversities.length);
                    },
                    showLess() {
                        this.visibleCount = 8;
                        document.getElementById('partner-universities')?.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    }
                }">
                    <div class="flex flex-wrap justify-center gap-3 mb-10">
                        <button @click="setCountry('all')"
                            :class="activeCountry === 'all' ? 'bg-[#0A2D5A] text-white border-[#0A2D5A]' :
                                'bg-white text-[#0A2D5A] border-gray-200'"
                            class="px-5 py-2.5 rounded-full border font-semibold text-sm md:text-base transition">
                            All
                        </button>

                        <template x-for="country in countries" :key="country">
                            <button @click="setCountry(country)"
                                :class="activeCountry === country ? 'bg-[#74BF1A] text-white border-[#74BF1A]' :
                                    'bg-white text-[#0A2D5A] border-gray-200'"
                                class="px-5 py-2.5 rounded-full border font-semibold text-sm md:text-base transition">
                                <span x-text="country"></span>
                            </button>
                        </template>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-6 md:gap-8">
                        <template x-for="(university, index) in visibleUniversities" :key="university.name + '-' + index">
                            <article x-transition
                                class="group slide-up bg-white rounded-2xl border border-gray-100 shadow-[0_10px_28px_rgba(0,0,0,0.08)] p-6 flex flex-col hover:-translate-y-1.5 hover:shadow-[0_20px_45px_rgba(10,36,93,0.14)] transition-all duration-300">
                                <div class="flex items-center justify-between mb-5">
                                    <span
                                        class="inline-flex items-center rounded-full bg-[#74BF1A]/10 text-[#74BF1A] px-3 py-1 text-xs font-bold uppercase tracking-wider">
                                        Prime Partner
                                    </span>
                                    <span class="text-[11px] font-semibold text-gray-500 uppercase">
                                        <span x-text="university.country || 'Other'"></span>
                                    </span>
                                </div>

                                <div
                                    class="h-34 rounded-xl bg-[#F6F9FF] border border-gray-100 flex items-center justify-center mb-5 p-4">
                                    <img :src="university.image" :alt="university.name"
                                        class="max-h-full max-w-full object-contain">
                                </div>

                                <h3 class="text-xl font-bold text-[#0A2D5A] text-left mb-2">
                                    <span x-text="university.name"></span>
                                </h3>
                                <p class="text-gray-600 text-sm text-left leading-relaxed">
                                    <span x-text="university.description"></span>
                                </p>

                                <div class="mt-6 pt-5 border-t border-gray-100">
                                    <a :href="university.button_link"
                                        class="inline-flex items-center gap-2 text-[#0A2D5A] font-semibold group-hover:text-[#74BF1A] transition">
                                        <span x-text="university.button_text"></span>
                                        <i class="fa-solid fa-arrow-right text-xs"></i>
                                    </a>
                                </div>
                            </article>
                        </template>
                    </div>

                    <div class="mt-10 text-center" x-show="hasMore || canShowLess">
                        <button x-show="hasMore" @click="loadMore()"
                            class="inline-flex items-center gap-2 rounded-lg border border-[#74BF1A] text-[#74BF1A] px-6 py-3 font-semibold hover:bg-[#74BF1A] hover:text-white transition">
                            More Universities <i class="fa-solid fa-arrow-right"></i>
                        </button>

                        <button x-show="canShowLess" @click="showLess()"
                            class="inline-flex items-center gap-2 rounded-lg bg-[#0A2D5A] text-white px-6 py-3 font-semibold hover:bg-[#081d4b] transition">
                            Show Less <i class="fa-solid fa-arrow-up"></i>
                        </button>
                    </div>
                </div>
            @else
                <div
                    class="max-w-2xl mx-auto text-center rounded-2xl border border-dashed border-[#74BF1A]/40 bg-white p-10 shadow-sm">
                    <h3 class="text-2xl font-bold text-[#0A2D5A] mb-2">Universities will appear here</h3>
                    <p class="text-gray-600 mb-6">Add universities from admin panel to show them in this section.</p>
                    <a href="{{ route('contact') }}"
                        class="inline-flex items-center gap-2 rounded-lg bg-[#74BF1A] text-white px-6 py-3 font-semibold hover:bg-green-600 transition">
                        Contact Us <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            @endif

        </div>
    </section>



    <!-----------------------------------JOURNEY SECTION ----------------------------------------------->

    <section class="py-16 bg-[#F6F6F6] overflow-hidden">
        <div class="px-6 md:px-12">
            <div class="grid grid-cols-1 lg:grid-cols-2 items-center gap-10 lg:gap-16">
                <!-- Left Side (Images) -->
                <div class="w-full slide-left" data-delay="0.6" data-duration="1.7">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- Image 1 (Always visible) -->
                        <img src="images/home-02.png" alt="home-02"
                            class="w-full h-[220px] sm:h-[280px] md:h-[360px] object-cover rounded-2xl shadow-md" />

                        <!-- Image 2 (Hidden on mobile) -->
                        <img src="images/home-03.png" alt="home-03"
                            class="hidden md:block w-full h-[360px] object-cover rounded-2xl shadow-md" />
                    </div>
                </div>

                <!-- Right Side (Content) -->
                <div class="slide-right" data-delay="0.6" data-duration="1.7">
                    <h2 class="text-2xl sm:text-3xl md:text-5xl font-bold leading-tight text-[#092962]">
                        Start Your Study Abroad Journey with
                        <span class="text-[#74BF1A]">Global Minds Consultants</span>
                    </h2>

                    <p class="text-gray-600 mt-5 leading-relaxed text-sm sm:text-base md:text-lg">
                        Studying abroad is a big decision, and the right guidance can make the process much easier. At
                        Global Minds Consultants, we help students plan every step carefully — from selecting the right
                        country and university to preparing applications and visa documents.
                    </p>

                    <p class="text-gray-600 mt-4 leading-relaxed text-sm sm:text-base md:text-lg">
                        Our advisors work closely with students to understand their goals, academic background, and budget.
                        With proper guidance and reliable support, we help students move forward with confidence and make
                        the right choices for their future.
                    </p>

                    <p class="text-gray-600 mt-4 leading-relaxed text-sm sm:text-base md:text-lg">
                        If you are planning to study abroad, our team is here to guide you and answer your questions.
                        Let’s discuss your options and help you take the next step toward your international education.
                    </p>

                    <!-- Button -->
                    <div class="mt-8">
                        <a href="/consultation-form"
                            class="inline-flex items-center justify-center gap-2 w-full sm:w-auto px-6 py-3 rounded-xl font-semibold
                   bg-[#74BF1A] text-white shadow-lg transition-all duration-300
                   hover:bg-white hover:text-[#092962] hover:-translate-y-0.5 hover:shadow-xl border border-transparent hover:border-[#092962]">
                            Book a Free Consultation
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-----------------------------------DISCOVER TOP FIELDS  SECTION ----------------------------------------------->
    <section class="py-16">
        <div class="px-12">
            <div class="text-center max-w-5xl mx-auto mb-12 slide-down" data-delay="0.6" data-duration="1.5">
                <h2 class="text-2xl md:text-4xl font-bold mb-6">
                    Discover <span class="text-[#74BF1A]">Top Fields</span> in Studies
                </h2>
                <p class="text-lg md:text-xl text-gray-600">
                    Explore the most in-demand academic fields that open doors to global opportunities.
                    From engineering and business to health sciences and technology, choose the path
                    that shapes your future.
                </p>
            </div>


            <!-- Grid Cards -->
            @if ($topFields->isNotEmpty())
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 slide-up" data-delay="0.9"
                    data-duration="1.8">
                    @foreach ($topFields as $field)
                        <article
                            class="bg-white shadow-[0_0_25px_rgba(0,0,0,0.15)] rounded-2xl overflow-hidden hover:shadow-[0_0_55px_rgba(0,0,0,0.25)] transition cursor-pointer">
                            <img src="{{ $field->image ? asset($field->image) : asset('images/home-05.png') }}"
                                alt="{{ $field->title }}" class="w-full h-58 object-cover rounded-t-2xl" />
                            <div class="p-6">
                                <h2 class="text-2xl font-semibold mb-2">{{ $field->title }}</h2>
                                <p class="text-gray-600 mb-4">
                                    {{ \Illuminate\Support\Str::limit($field->short_description ?: 'Explore global opportunities in this field with expert guidance.', 130) }}
                                </p>
                                <a href="{{ route('top-field.show', $field->id) }}"
                                    class="text-[#0A2D5A] font-semibold hover:underline">
                                    {{ $field->button_text ?: 'Discover More' }}
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </article>
                    @endforeach
                </div>
            @else
                <div
                    class="max-w-2xl mx-auto text-center rounded-2xl border border-dashed border-[#74BF1A]/40 bg-white p-10 shadow-sm">
                    <h3 class="text-2xl font-bold text-[#0A2D5A] mb-2">Top fields will appear here</h3>
                    <p class="text-gray-600 mb-6">Add top fields from admin panel to show them on homepage.</p>
                    <a href="{{ route('contact') }}"
                        class="inline-flex items-center gap-2 rounded-lg bg-[#74BF1A] text-white px-6 py-3 font-semibold hover:bg-green-600 transition">
                        Contact Us <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            @endif
        </div>
    </section>

    <!-----------------------------------PROCESS SECTION ----------------------------------------------->
    <section class="py-16 bg-[#F6F6F6] overflow-hidden">
        <div class="px-6 md:px-12">
            <!-- Heading -->
            <div class="slide-down" data-delay="0.6" data-duration="1.7">
                <h2 class="text-2xl md:text-4xl font-bold mb-4 text-center text-[#0A2D5A]">
                    Study Abroad <span class="text-[#74BF1A]">Steps</span>
                </h2>

                <p class="text-base md:text-lg text-center mb-12 text-gray-700 max-w-3xl mx-auto">
                    A clear step-by-step process to make your study abroad journey simple and well organized.
                </p>
            </div>

            <!-- Content -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
                <!-- Left Side Steps -->
                <div class="space-y-6 slide-left" data-delay="0.8" data-duration="1.9">
                    @php
                        $steps = [
                            [
                                'Profile Evaluation',
                                'We review your academic background, interests, and future goals to understand the best study options for you.',
                                'fa-user-check',
                            ],
                            [
                                'Country & University Selection',
                                'Our advisors help you choose suitable countries, universities, and programs based on your profile and budget.',
                                'fa-globe',
                            ],
                            [
                                'Application Preparation',
                                'We assist in preparing your documents and submitting complete applications to the selected universities.',
                                'fa-file-circle-check',
                            ],
                            [
                                'Offer Letter',
                                'Once your application is approved, you will receive an offer letter from the university.',
                                'fa-envelope-open-text',
                            ],
                            [
                                'Visa Application',
                                'Our team guides you through the student visa process, including document preparation and interview guidance if required.',
                                'fa-passport',
                            ],
                            [
                                'Departure & Study Abroad Journey',
                                'After visa approval, we assist you with final preparations so you can start your studies abroad with confidence.',
                                'fa-plane-departure',
                            ],
                        ];
                    @endphp

                    @foreach ($steps as $index => $step)
                        <div
                            class="bg-white shadow-[0_0_25px_rgba(0,0,0,0.08)] rounded-2xl p-5 hover:shadow-lg transition flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                            <div class="flex items-start sm:items-center gap-4 w-full">
                                <div class="text-[#74BF1A] text-2xl flex-shrink-0 mt-1 sm:mt-0">
                                    <i class="fa-solid {{ $step[2] }}"></i>
                                </div>

                                <div class="flex-1">
                                    <!-- Step badge on mobile -->
                                    <div class="flex items-center justify-between sm:hidden mb-1">
                                        <span class="bg-[#0A2D5A] text-white px-3 py-0.5 rounded-md text-xs font-medium">
                                            Step {{ $index + 1 }}
                                        </span>
                                    </div>

                                    <h3 class="font-semibold text-base md:text-lg text-[#0A2D5A]">
                                        {{ $step[0] }}
                                    </h3>

                                    <p class="text-gray-600 text-sm leading-relaxed">
                                        {{ $step[1] }}
                                    </p>
                                </div>
                            </div>

                            <!-- Step badge on desktop -->
                            <span
                                class="hidden sm:inline-block bg-[#0A2D5A] text-white px-4 py-1 rounded-lg text-sm font-medium whitespace-nowrap">
                                Step {{ $index + 1 }}
                            </span>
                        </div>
                    @endforeach
                </div>

                <!-- Right Side -->
                <div class="text-center lg:text-left slide-right" data-delay="1" data-duration="2">
                    <img src="images/home-04.png" alt="Study Abroad"
                        class="mx-auto lg:mx-0 rounded-2xl shadow-lg mb-6 w-full max-w-md lg:max-w-none" />

                    <p class="text-gray-700 text-base md:text-lg leading-relaxed">
                        At Global Minds Consultants, we keep the entire study abroad process clear and organized. From the
                        first
                        evaluation to your final departure, our advisors guide you with practical support at every stage.
                    </p>

                    <p class="mt-4 text-gray-700 text-sm md:text-base">
                        We help you choose the right country and university, prepare strong applications, and manage the
                        visa process
                        with confidence. Our goal is to make your journey simple, stress-free, and successful.
                    </p>

                    <p class="mt-4 text-gray-700 text-sm md:text-base">
                        If you’re planning to study abroad, our team is ready to guide you and answer your questions — step
                        by step.
                    </p>

                    <div class="mt-6 flex justify-center lg:justify-start">
                        <a href="/contact"
                            class="relative overflow-hidden bg-[#74BF1A] text-white px-6 py-3 rounded-xl font-semibold group transition-all duration-300 inline-flex items-center gap-2">
                            <span class="relative z-10 flex items-center gap-2">
                                Start Your Journey
                                <i class="fa-solid fa-arrow-right"></i>
                            </span>

                            <span
                                class="absolute inset-0 bg-green-600 translate-x-full group-hover:translate-x-0 transition-transform duration-300"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ---------------Testimonials Section--------------------------------------------- -->
    <section class="py-16  overflow-hidden">
        <div class="px-6 md:px-12">
            <div class="max-w-4xl mx-auto text-center mb-12">
                <p class="text-4xl font-semibold text-[#092962] fade-up" data-delay="0.2" data-duration="0.8">
                    Testimonials
                </p>
                <h1 class="text-3xl md:text-4xl font-semibold text-[#322F35] mt-2 fade-up" data-delay="0.4"
                    data-duration="0.8">
                    Study Abroad Experiences
                </h1>
                <h2 class="text-xl md:text-2xl font-semibold text-[#322F35] mt-1 fade-up" data-delay="0.6"
                    data-duration="0.8">
                    Hear from Our Students
                </h2>
                <p class="text-xl md:text-lg text-[#79767D] mt-2 fade-up" data-delay="0.8" data-duration="0.8">
                    Discover how our students have transformed their dreams into reality by studying in top universities
                    across the world.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-[1fr_1.5fr] gap-6">
                <div class="bg-[#F6F6F6] rounded-2xl border border-gray-200 p-8 flex flex-col justify-between shadow-lg fade-up"
                    data-delay="1.2" data-duration="1.0">
                    <div>
                        <h3 class="text-2xl md:text-3xl font-semibold text-[#000000]">Canada</h3>
                        <p class="text-lg md:text-xl text-[#000000] mt-1 font-semibold">Arts &amp; Humanities</p>

                        <div class="text-5xl text-[#092962] mt-6 mb-4 leading-none font-sans"> <i
                                class="fa-solid fa-quote-right"></i>
                        </div>

                        <p class="text-sm md:text-base text-[#000000] leading-relaxed">
                            Studying in Canada has been a life-changing journey. The academic standards, cultural diversity,
                            and opportunities for growth exceeded my expectations. I gained confidence, independence, and
                            skills that prepared me for a global career.
                        </p>
                    </div>

                    <div class="flex items-center gap-4 mt-6">
                        <img src="images/man.png" alt="Reviewer"
                            class="w-12 h-12 rounded-full object-cover border border-gray-300" />
                        <div>
                            <p class="text-sm md:text-base font-semibold text-[#322F35]">Ali Raza</p>
                            <p class="text-xs md:text-sm text-[#322F35]">University of Toronto</p>
                        </div>
                    </div>
                </div>

                <div class="space-y-6 flex flex-col">

                    <div class="bg-[#F6F6F6] rounded-2xl border border-gray-200 p-8 shadow-lg fade-up" data-delay="1.4"
                        data-duration="1.0">
                        <h3 class="text-2xl md:text-3xl font-semibold text-[#000000]">Australia</h3>
                        <p class="text-lg md:text-xl text-[#000000] mt-1 font-semibold">Engineering &amp; Technology</p>

                        <div class="text-5xl text-[#092962] mt-6 mb-4 leading-none font-sans"> <i
                                class="fa-solid fa-quote-right"></i>
                        </div>

                        <p class="text-sm md:text-base text-[#000000] leading-relaxed">
                            My study abroad experience in Australia opened new horizons. The practical learning environment
                            and supportive faculty helped me develop real-world engineering skills. I also met students from
                            all over the world who became lifelong friends.
                        </p>

                        <div class="flex items-center gap-4 mt-6">
                            <img src="images/man.png" alt="Reviewer"
                                class="w-12 h-12 rounded-full object-cover border border-gray-300" />
                            <div>
                                <p class="text-sm md:text-base font-semibold text-[#322F35]">Sara Khan</p>
                                <p class="text-xs md:text-sm text-[#322F35]">University of Melbourne</p>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 flex-1 fade-up" data-delay="1.6"
                        data-duration="1.0">
                        <div
                            class="bg-[#F6F6F6] rounded-2xl border border-gray-200 p-6 flex flex-col justify-between shadow-lg">
                            <div>
                                <h4 class="text-2xl md:text-3xl font-semibold text-[#000000]">United Kingdom</h4>
                                <p class="text-lg md:text-xl text-[#000000] mt-1 font-semibold">Business &amp; Management
                                </p>

                                <div class="text-4xl text-[#092962] mt-4 mb-3 leading-none font-sans"> <i
                                        class="fa-solid fa-quote-right"></i>
                                </div>

                                <p class="text-sm md:text-base text-[#000000] leading-relaxed">
                                    Studying in the UK helped me gain a deeper understanding of international business
                                    practices. The multicultural exposure and internship opportunities boosted my confidence
                                    and global mindset.
                                </p>
                            </div>

                            <div class="flex items-center gap-3 mt-4">
                                <img src="images/man.png" alt="Reviewer"
                                    class="w-9 h-9 rounded-full object-cover border border-gray-300" />
                                <div>
                                    <p class="text-sm md:text-base font-semibold text-[#322F35]">Hassan Ahmed</p>
                                    <p class="text-xs md:text-sm text-[#322F35]">University of London</p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-[#041C47] rounded-2xl p-6 flex flex-col justify-between text-white shadow-lg">
                            <div>
                                <h4 class="text-lg md:text-xl font-semibold">Germany</h4>
                                <p class="text-sm md:text-base mt-1 opacity-90">Science &amp; Research</p>

                                <div class="text-4xl text-green-400 mt-4 mb-3 leading-none font-sans"> <i
                                        class="fa-solid fa-quote-right"></i>
                                </div>

                                <p class="text-sm md:text-base text-white/90 leading-relaxed">
                                    My time in Germany was remarkable — a perfect blend of innovation, discipline, and
                                    academic excellence. I learned not only from professors but also from the rich culture
                                    and advanced research opportunities.
                                </p>
                            </div>

                            <div class="flex items-center gap-3 mt-4">
                                <img src="images/man.png" alt="Reviewer"
                                    class="w-9 h-9 rounded-full object-cover border border-white/30" />
                                <div>
                                    <p class="text-sm md:text-base font-semibold">Fatima Noor</p>
                                    <p class="text-xs md:text-sm opacity-80">Technical University of Munich</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row justify-between items-center max-w-7xl mx-auto mt-10 text-center sm:text-left fade-up"
                data-delay="1.8" data-duration="1.0">
                <div class="flex flex-col sm:flex-row items-center sm:space-x-4 text-gray-600">
                    <p class="text-sm md:text-base">1500+ Satisfied Students</p>
                    <div class="flex items-center text-yellow-500 mt-2 sm:mt-0">
                        <i class="fas fa-star text-xs md:text-sm"></i>
                        <i class="fas fa-star text-xs md:text-sm"></i>
                        <i class="fas fa-star text-xs md:text-sm"></i>
                        <i class="fas fa-star text-xs md:text-sm"></i>
                        <i class="fas fa-star-half-alt text-xs md:text-sm"></i>
                        <span class="text-sm md:text-base text-gray-800 ml-2">4.9</span>
                    </div>
                    <p class="text-xs md:text-sm text-gray-500 mt-2 sm:mt-0">Based on 1.5K+ reviews</p>
                </div>
                <a href="#"
                    class="text-sm md:text-base font-semibold text-[#092962] mt-4 sm:mt-0 hover:text-[#74BF1A] transition-all">
                    View all reviews <i class="fa-solid fa-arrow-right ml-1"></i>
                </a>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const popup = document.getElementById('homeOfferPopup');
            const popupCard = document.getElementById('homeOfferPopupCard');
            const closeBtn = document.getElementById('closeHomeOfferPopup');
            if (!popup) return;

            const openPopup = () => {
                popup.classList.remove('hidden');
                popup.classList.add('flex');

                requestAnimationFrame(() => {
                    popup.classList.remove('opacity-0');
                    popup.classList.add('opacity-100');
                    if (popupCard) {
                        popupCard.classList.remove('opacity-0', 'translate-y-4', 'scale-95');
                        popupCard.classList.add('opacity-100', 'translate-y-0', 'scale-100');
                    }
                });
            };

            const closePopup = () => {
                popup.classList.remove('opacity-100');
                popup.classList.add('opacity-0');
                if (popupCard) {
                    popupCard.classList.remove('opacity-100', 'translate-y-0', 'scale-100');
                    popupCard.classList.add('opacity-0', 'translate-y-4', 'scale-95');
                }

                setTimeout(() => {
                    popup.classList.add('hidden');
                    popup.classList.remove('flex');
                }, 500);
            };

            setTimeout(openPopup, 1000);

            if (closeBtn) {
                closeBtn.addEventListener('click', function() {
                    closePopup();
                });
            }

            popup.addEventListener('click', function(e) {
                if (e.target === popup) {
                    closePopup();
                }
            });
        });
    </script>
@endsection
