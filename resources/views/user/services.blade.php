@extends('layouts.user')
@section('content')
    @php
        $videoUrl = $popup->video_url ?? null;
        $embedVideoUrl = null;
        $hasPopupMedia = false;

        if ($videoUrl) {
            if (\Illuminate\Support\Str::contains($videoUrl, ['youtube.com/watch?v=', 'youtu.be/'])) {
                preg_match('/(?:youtube\.com\/watch\?v=|youtu\.be\/)([^&\n?#]+)/', $videoUrl, $matches);
                $embedVideoUrl = isset($matches[1]) ? 'https://www.youtube.com/embed/' . $matches[1] : $videoUrl;
            } elseif (\Illuminate\Support\Str::contains($videoUrl, 'youtube.com/embed/')) {
                $embedVideoUrl = $videoUrl;
            }
        }

        $hasPopupMedia = filled($embedVideoUrl) || filled($popup->video_url ?? null) || filled($popup->image_url ?? null);
    @endphp

    @if ($popup)
        <div id="serviceOfferPopup"
            class="fixed inset-0 z-[95] hidden items-center justify-center bg-[#05162f]/70 px-4 py-8 backdrop-blur-[6px]">
            <div id="serviceOfferPopupCard"
                class="relative w-full max-w-3xl translate-y-8 scale-[0.94] overflow-hidden rounded-[30px] border border-white/40 bg-[linear-gradient(135deg,#ffffff_0%,#f5fbff_55%,#eef8ed_100%)] opacity-0 shadow-[0_30px_90px_rgba(5,22,47,0.28)] transition-all duration-500">
                <div class="absolute inset-0 pointer-events-none">
                    <div class="absolute -top-16 right-10 h-36 w-36 rounded-full bg-[#74BF1A]/15 blur-3xl"></div>
                    <div class="absolute bottom-0 left-0 h-40 w-40 rounded-full bg-[#092962]/10 blur-3xl"></div>
                </div>

                <button type="button" id="closeServiceOfferPopup"
                    class="absolute right-4 top-4 z-20 inline-flex h-9 w-9 items-center justify-center rounded-full border border-white/70 bg-white/90 text-[#092962] shadow-md transition duration-300 hover:rotate-90 hover:scale-105 hover:bg-white">
                    <i class="fa-solid fa-xmark"></i>
                </button>

                <div class="relative {{ $hasPopupMedia ? 'grid grid-cols-1 lg:grid-cols-[0.95fr_1.05fr]' : 'block' }}">
                    <div class="px-5 py-6 md:px-7 md:py-7">
                        @if ($popup->subheading)
                            <span
                                class="inline-flex items-center rounded-full bg-[#092962]/6 px-3.5 py-1 text-[11px] font-bold uppercase tracking-[0.24em] text-[#092962]/70">
                                {{ $popup->subheading }}
                            </span>
                        @endif

                        @if ($popup->heading)
                            <h2 class="mt-3 text-2xl font-extrabold leading-tight text-[#092962] md:text-[2rem]">
                                {{ $popup->heading }}
                            </h2>
                        @endif

                        @if ($popup->description)
                            <p class="mt-3 max-w-xl text-sm leading-6 text-[#4d5f80]">
                                {{ $popup->description }}
                            </p>
                        @endif

                        @if (!empty($popup->points))
                            <div class="mt-5 grid gap-2.5">
                                @foreach ($popup->points as $point)
                                    <div class="flex items-start gap-3 rounded-2xl bg-white/80 px-3.5 py-3 shadow-[0_12px_24px_rgba(9,41,98,0.07)]">
                                        <span
                                            class="mt-0.5 inline-flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-[#74BF1A] text-[10px] text-white">
                                            <i class="fa-solid fa-check"></i>
                                        </span>
                                        <p class="text-sm leading-5 text-[#223556]">{{ $point }}</p>
                                    </div>
                                @endforeach
                            </div>
                        @endif

                        @if ($popup->button_text && $popup->button_link)
                            <div class="mt-6">
                                <a href="{{ $popup->button_link }}" target="_blank"
                                    class="inline-flex items-center gap-2 rounded-full bg-[#092962] px-5 py-3 text-sm font-bold text-white shadow-[0_15px_30px_rgba(9,41,98,0.2)] transition duration-300 hover:-translate-y-0.5 hover:bg-[#74BF1A]">
                                    {{ $popup->button_text }}
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        @endif

                        @if ($popup->facebook_link || $popup->instagram_link || $popup->youtube_link || $popup->whatsapp_link)
                            <div class="mt-6 border-t border-[#d8e3f1] pt-4">
                                <p class="mb-3 text-[11px] font-bold uppercase tracking-[0.24em] text-[#6d7f9f]">Connect With Us</p>
                                <div class="flex flex-wrap gap-3">
                                    @if ($popup->facebook_link)
                                        <a href="{{ $popup->facebook_link }}" target="_blank"
                                            class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-white text-[#092962] shadow-[0_10px_22px_rgba(9,41,98,0.12)] transition duration-300 hover:-translate-y-0.5 hover:bg-[#092962] hover:text-white">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                    @endif
                                    @if ($popup->instagram_link)
                                        <a href="{{ $popup->instagram_link }}" target="_blank"
                                            class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-white text-[#092962] shadow-[0_10px_22px_rgba(9,41,98,0.12)] transition duration-300 hover:-translate-y-0.5 hover:bg-[#092962] hover:text-white">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                    @endif
                                    @if ($popup->youtube_link)
                                        <a href="{{ $popup->youtube_link }}" target="_blank"
                                            class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-white text-[#092962] shadow-[0_10px_22px_rgba(9,41,98,0.12)] transition duration-300 hover:-translate-y-0.5 hover:bg-[#092962] hover:text-white">
                                            <i class="fa-brands fa-youtube"></i>
                                        </a>
                                    @endif
                                    @if ($popup->whatsapp_link)
                                        <a href="{{ $popup->whatsapp_link }}" target="_blank"
                                            class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-white text-[#092962] shadow-[0_10px_22px_rgba(9,41,98,0.12)] transition duration-300 hover:-translate-y-0.5 hover:bg-[#092962] hover:text-white">
                                            <i class="fa-brands fa-whatsapp"></i>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        @endif
                    </div>

                    @if ($hasPopupMedia)
                        <div class="bg-[linear-gradient(180deg,rgba(9,41,98,0.06)_0%,rgba(116,191,26,0.08)_100%)] p-4 md:p-5">
                            @if ($embedVideoUrl)
                                <div class="overflow-hidden rounded-[24px] bg-white shadow-[0_20px_45px_rgba(9,41,98,0.14)]">
                                    <iframe class="aspect-video w-full" src="{{ $embedVideoUrl }}"
                                        title="Service Offer Video" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                </div>
                            @elseif ($popup->video_url)
                                <div class="overflow-hidden rounded-[24px] bg-white shadow-[0_20px_45px_rgba(9,41,98,0.14)]">
                                    <video controls class="aspect-video w-full bg-black">
                                        <source src="{{ $popup->video_url }}">
                                    </video>
                                </div>
                            @elseif ($popup->image_url)
                                <div class="flex min-h-[290px] items-center justify-center overflow-hidden rounded-[24px] bg-white p-3 shadow-[0_20px_45px_rgba(9,41,98,0.14)]">
                                    <img src="{{ $popup->image_url }}" alt="{{ $popup->heading ?: 'Service Offer' }}"
                                        class="max-h-[420px] w-full rounded-[18px] object-contain object-center">
                                </div>
                            @endif
                        </div>
                    @endif
                </div>
            </div>
        </div>
    @endif

    <!-----------------------------------HERO SECTION----------------------------------------------->
    <section
        class="relative bg-[url('/images/hero-bg-services.jpg')] bg-cover bg-top w-full h-screen flex items-center justify-center px-4 sm:px-6 overflow-hidden background-zoom">
        <div class="absolute inset-0 bg-black bg-opacity-20 fade-in" data-delay="0.1" data-duration="1.5"></div>

        <div class="relative bg-white/20 backdrop-blur-md rounded-2xl shadow-lg p-6 sm:p-8 md:p-12 max-w-4xl w-full border-2 border-white text-center text-white mt-8 fade-up"
            data-delay="0.6" data-duration="1.2">

            <div class="space-y-4 stagger-up" data-stagger="0.2" data-delay="1.0" data-duration="1.0">

                <h1 class="text-xl sm:text-2xl md:text-4xl font-bold leading-snug">
                    Your Gateway to Global Education Opportunities
                </h1>

                <p class="text-sm sm:text-base md:text-lg px-2 sm:px-6 pt-2">
                    Unlock world-class learning experiences and explore academic programs across top international
                    universities.
                    We guide you every step of the way — from choosing the right course to achieving your study abroad
                    dreams.
                </p>

            </div>


            <div class="flex justify-center items-center mt-6 mb-6">
                <a href="/contact"
                    class="bg-[#74BF1A] text-white px-4 sm:px-6 py-2 sm:py-3 rounded-lg hover:bg-green-600 transition text-sm sm:text-base scale-in"
                    data-delay="1.8" data-duration="0.8">
                    Contact Us
                </a>
            </div>

            <div class="flex flex-wrap items-center justify-center gap-4 sm:gap-6 text-center stagger-up" data-stagger="0.1"
                data-delay="2.0" data-duration="0.8">

                <p class="text-base sm:text-lg md:text-xl font-semibold w-full sm:w-auto mb-2 sm:mb-0">
                    Contact Us:
                </p>
                <div class="flex gap-4 sm:gap-6">
                    <a href="#" class="hover:text-[#74BF1A] transition">
                        <i class="fa-brands fa-facebook-f text-lg sm:text-xl"></i>
                    </a>
                    <a href="#" class="hover:text-[#74BF1A] transition">
                        <i class="fa-brands fa-linkedin-in text-lg sm:text-xl"></i>
                    </a>
                    <a href="#" class="hover:text-[#74BF1A] transition">
                        <i class="fa-brands fa-instagram text-lg sm:text-xl"></i>
                    </a>
                    <a href="#" class="hover:text-[#74BF1A] transition">
                        <i class="fa-brands fa-youtube text-lg sm:text-xl"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-----------------------------------SCHOLARSHIP ASSISTANCE SECTION----------------------------------------------->
    <section class="py-16 bg-[#F6F6F6] overflow-hidden">
        <div class="px-4 sm:px-6 md:px-12">
            <h2 class="text-xl sm:text-2xl md:text-4xl font-bold mb-4 sm:mb-6 text-center fade-up" data-delay="0.2"
                data-duration="1.0">
                Scholarship <span class="text-[#74BF1A]">Assistance</span>
            </h2>
            <p class="text-sm sm:text-base md:text-lg lg:text-xl text-center mb-8 sm:mb-12 text-gray-600 fade-up"
                data-delay="0.4" data-duration="1.0">
                Guidance to find & apply for scholarships that match your goals
            </p>

            <div class="flex flex-col lg:flex-row items-stretch gap-8 lg:gap-10">

                <div class="w-full lg:w-1/2 flex flex-col slide-left" data-delay="0.7" data-duration="1.2">
                    <div class="overflow-hidden rounded-2xl shadow-lg">
                        <img src="images/scholarship-assistance.jpg" alt="Students"
                            class="w-full h-56 sm:h-72 md:h-[350px] object-cover rounded-2xl transform transition duration-500 hover:scale-105 hover:shadow-2xl" />
                    </div>

                    <div class="mt-4 sm:mt-6 flex flex-col flex-grow stagger-up" data-stagger="0.1" data-delay="1.0"
                        data-duration="0.8">
                        <p
                            class="text-sm sm:text-base md:text-lg text-gray-600 mb-4 sm:mb-6 flex-grow text-justify sm:text-left feature-item">
                            We provide expert guidance to help you discover and apply for scholarships that align with your
                            academic achievements and career goals.
                            From merit-based to need-based funding, our consultants ensure you don’t miss valuable
                            opportunities that can make your study abroad journey more affordable and stress-free.
                        </p>

                        <div class="flex justify-center lg:justify-start feature-item">
                            <a href="/consultation-form"
                                class="bg-[#092962] text-white px-5 sm:px-6 py-2 sm:py-3 rounded-lg hover:bg-green-600 transition text-sm sm:text-base">
                                Book Free Consultation
                            </a>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-1/2 flex slide-right" data-delay="0.9" data-duration="1.2">
                    <div
                        class="border rounded-2xl shadow-lg p-4 sm:p-6 md:p-8 bg-white flex flex-col justify-between w-full">
                        <div>
                            <h1 class="text-xl sm:text-2xl md:text-3xl font-bold mb-4 sm:mb-6 text-[#092962] leading-snug">
                                Explore Scholarships of Your Interest
                            </h1>
                            <form action="" class="space-y-6 sm:space-y-8 md:space-y-12 stagger-up" data-stagger="0.15"
                                data-delay="1.2" data-duration="0.8">

                                <select
                                    class="w-full border border-gray-300 rounded-lg p-2 sm:p-3 focus:ring-2 focus:ring-[#74BF1A] outline-none text-sm sm:text-base feature-item">
                                    <option selected disabled>Select Country</option>
                                    <option value="uk">UK</option>
                                    <option value="usa">USA</option>
                                    <option value="canada">Canada</option>
                                </select>

                                <select
                                    class="w-full border border-gray-300 rounded-lg p-2 sm:p-3 focus:ring-2 focus:ring-[#74BF1A] outline-none text-sm sm:text-base feature-item">
                                    <option selected disabled>Select Degree</option>
                                    <option value="bachelors">Bachelors</option>
                                    <option value="masters">Masters</option>
                                    <option value="phd">PhD</option>
                                </select>

                                <select
                                    class="w-full border border-gray-300 rounded-lg p-2 sm:p-3 focus:ring-2 focus:ring-[#74BF1A] outline-none text-sm sm:text-base feature-item">
                                    <option selected disabled>Funding Type</option>
                                    <option value="full">Full Scholarship</option>
                                    <option value="partial">Partial Funding</option>
                                    <option value="grant">Grant</option>
                                </select>
                            </form>
                        </div>

                        <div class="mt-6 sm:mt-8 scale-in" data-delay="1.8" data-duration="1.0">
                            <a href="/scholarships"
                                class="inline-block bg-[#74BF1A] text-white px-5 sm:px-6 py-2 sm:py-3 rounded-lg hover:bg-green-600 transition w-full md:w-auto text-sm sm:text-base text-center">
                                Explore Scholarships
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-----------------------------------HOW IT WORK SECTION----------------------------------------------->
    <section class="py-16 bg-white overflow-hidden">
        <div class="px-4 sm:px-6 md:px-12">
            <h2 class="text-xl sm:text-2xl md:text-4xl font-bold mb-6 text-center lg:text-left fade-up" data-delay="0.2"
                data-duration="1.0">
                How it <span class="text-[#74BF1A]">Works</span>?
            </h2>

            <div
                class="relative flex flex-col lg:flex-row items-center lg:items-start justify-center lg:justify-between gap-12 sm:gap-16 lg:gap-24 mt-12 sm:mt-16 lg:mt-20 w-full">

                <div class="flex flex-col items-center justify-center text-center bg-[#0C2C67] rounded-lg shadow-lg p-6 w-full sm:w-[260px] h-[230px] relative z-10 fade-up"
                    data-delay="0.6" data-duration="1.0">
                    <img src="images/work1.png" alt="Discover Scholarships" class="w-20 h-20 object-contain mb-4" />
                    <p class="text-green-400 font-medium text-sm sm:text-base">
                        Discover scholarships by filtering with your preferred country, degree program, and funding type.
                    </p>
                </div>

                <img src="images/arrow-up.png" alt="Arrow Up"
                    class="hidden lg:block absolute top-[-80px] left-[16%] w-58 h-auto scale-in" data-delay="1.2"
                    data-duration="0.8" />

                <div class="flex flex-col items-center justify-center text-center bg-[#0C2C67] rounded-lg shadow-lg p-6 w-full sm:w-[260px] h-[230px] relative z-10 fade-up"
                    data-delay="1.0" data-duration="1.0">
                    <img src="images/work2.png" alt="Matched Scholarships" class="w-20 h-20 object-contain mb-4" />
                    <p class="text-green-400 font-medium text-sm sm:text-base">
                        Get matched with the most relevant scholarships tailored to your academic and financial profile.
                    </p>
                </div>

                <img src="images/arrow-down.png" alt="Arrow Down"
                    class="hidden lg:block absolute bottom-[-90px] left-[58%] w-58 h-auto scale-in" data-delay="1.6"
                    data-duration="0.8" />

                <div class="flex flex-col items-center justify-center text-center bg-[#0C2C67] rounded-lg shadow-lg p-6 w-full sm:w-[260px] h-[230px] relative z-10 fade-up"
                    data-delay="1.4" data-duration="1.0">
                    <img src="images/work3.png" alt="Apply Confidently" class="w-20 h-20 object-contain mb-4" />
                    <p class="text-green-400 font-medium text-sm sm:text-base">
                        Apply confidently with expert guidance to maximize your chances of success.
                    </p>
                </div>
            </div>

            <p class="mt-12 sm:mt-16 lg:mt-[150px] text-base sm:text-lg md:text-xl font-semibold text-gray-600 text-center lg:text-left fade-up"
                data-delay="2.0" data-duration="1.0">
                *We have already helped over 500 students secure scholarships worldwide
            </p>
        </div>
    </section>



    <!-----------------------------------TEST PREPARATION SECTION----------------------------------------------->
    <section class="py-16 bg-[#F6F6F6] overflow-hidden">
        <div class="px-6 md:px-12">
            <h2 class="text-2xl md:text-4xl font-bold mb-6 text-center fade-up" data-delay="0.2" data-duration="1.0">
                Test
                <span class="text-[#74BF1A]"> Preparation Services </span>
                (IELTS/PTE)
            </h2>
            <p class="text-lg md:text-xl text-center mb-12 text-gray-600 max-w-3xl mx-auto fade-up" data-delay="0.4"
                data-duration="1.0">
                Achieve your dream score with expert guidance, proven strategies, and access to professional practice
                resources.
            </p>

            <div class="flex flex-col lg:flex-row items-stretch gap-10">

                <div class="w-full lg:w-1/2 flex flex-col slide-left" data-delay="0.7" data-duration="1.2">
                    <div class="overflow-hidden rounded-2xl shadow-lg">
                        <img src="images/test-girl.jpg" alt="Student preparing for IELTS"
                            class="w-full h-[280px] sm:h-[350px] lg:h-[450px] object-cover rounded-2xl transform transition duration-500 hover:scale-105 hover:shadow-2xl" />
                    </div>

                    <div class="mt-6 flex flex-col flex-grow stagger-up" data-stagger="0.1" data-delay="1.0"
                        data-duration="0.8">
                        <p class="text-gray-600 mb-6 flex-grow feature-item">
                            Preparing for IELTS or PTE can be challenging, but with the right guidance, practice materials,
                            and strategies, you can reach your desired score. Our expert trainers provide step-by-step
                            support,
                            ensuring you build strong skills in speaking, writing, reading, and listening.
                        </p>

                        <ul class="space-y-4 mb-6">
                            <li class="flex items-start feature-item">
                                <i class="fas fa-check-circle text-[#74BF1A] text-xl mt-1 mr-3"></i>
                                <div>
                                    <h4 class="font-semibold text-lg text-[#322F35]">
                                        Free Practice Resources
                                    </h4>
                                    <p class="text-gray-600 text-sm">
                                        Access a variety of sample tests, exercises, and mock exams designed to mirror real
                                        test conditions.
                                    </p>
                                </div>
                            </li>
                            <li class="flex items-start feature-item">
                                <i class="fas fa-check-circle text-[#74BF1A] text-xl mt-1 mr-3"></i>
                                <div>
                                    <h4 class="font-semibold text-lg text-[#322F35]">
                                        Personalized Test Strategies
                                    </h4>
                                    <p class="text-gray-600 text-sm">
                                        Learn proven techniques tailored to your strengths and weaknesses to maximize your
                                        score.
                                    </p>
                                </div>
                            </li>
                            <li class="flex items-start feature-item">
                                <i class="fas fa-check-circle text-[#74BF1A] text-xl mt-1 mr-3"></i>
                                <div>
                                    <h4 class="font-semibold text-lg text-[#322F35]">
                                        Tips from Certified Trainers
                                    </h4>
                                    <p class="text-gray-600 text-sm">
                                        Gain expert insights and guidance from trainers with years of experience in
                                        IELTS/PTE preparation.
                                    </p>
                                </div>
                            </li>
                        </ul>

                        <div class="flex justify-center lg:justify-start scale-in" data-delay="1.8" data-duration="0.8">
                            <a href="/consultation-form"
                                class="bg-[#74BF1A] text-white px-6 py-3 rounded-lg hover:bg-green-600 transition">
                                Book Free Consultation
                            </a>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-1/2 flex flex-col justify-between slide-right" data-delay="0.9"
                    data-duration="1.2">
                    <div class="border rounded-2xl shadow-lg p-6 md:p-8 bg-white flex flex-col justify-between w-full">
                        <div>
                            <h1 class="text-2xl md:text-3xl font-bold mb-6 text-[#322F35]">
                                Have Questions? Get in Touch!
                            </h1>
                            <form action="" class="space-y-6">
                                <input
                                    class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-[#74BF1A] outline-none"
                                    placeholder="Name" />

                                <input
                                    class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-[#74BF1A] outline-none"
                                    placeholder="E-mail" />

                                <textarea rows="5"
                                    class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-[#74BF1A] outline-none resize-none"
                                    placeholder="Message"></textarea>
                            </form>
                        </div>

                        <div class="mt-8 flex flex-col md:flex-row md:items-center md:justify-between scale-in"
                            data-delay="1.5" data-duration="0.8">
                            <button type="submit"
                                class="bg-[#74BF1A] text-white px-20 py-3 rounded-lg hover:bg-green-600 transition w-full md:w-auto">
                                Send Inquiry
                            </button>

                            <a href="files/ielts-pte-sample.pdf" target="_blank"
                                class="mt-4 md:mt-0 text-blue-600 underline hover:text-blue-800 text-center md:text-left">
                                IELTS/PTE Sample PDF
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-----------------------------------CAREER COUNSELLING SECTION----------------------------------------------->
    <section class="py-16 overflow-hidden">
        <div class="px-6 md:px-12">
            <h2 class="text-2xl md:text-4xl font-bold mb-6 text-center fade-up" data-delay="0.2" data-duration="1.0">
                Career
                <span class="text-[#74BF1A]"> Counseling & </span>
                Consultation
            </h2>
            <p class="text-lg md:text-xl text-center mb-12 text-gray-600 max-w-3xl mx-auto fade-up" data-delay="0.4"
                data-duration="1.0">
                Helping you choose the right country, university, and program to achieve
                your academic and career goals with confidence.
            </p>

            <div class="flex flex-col lg:flex-row items-stretch gap-10">

                <div class="w-full lg:w-1/2 flex flex-col justify-between slide-left" data-delay="0.7"
                    data-duration="1.2">
                    <div class="border rounded-2xl shadow-lg p-6 md:p-8 bg-gray-50 flex flex-col justify-between w-full">
                        <div>
                            <h1 class="text-2xl md:text-3xl font-bold mb-6 text-[#322F35]">
                                Book Your Counseling Session with Us
                            </h1>
                            <form action="" class="space-y-6">
                                <input
                                    class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-[#74BF1A] outline-none"
                                    placeholder="Full Name" />

                                <input type="email"
                                    class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-[#74BF1A] outline-none"
                                    placeholder="E-mail" />

                                <select
                                    class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-[#74BF1A] outline-none">
                                    <option selected disabled>Select Preferred Country</option>
                                    <option value="uk">United Kingdom</option>
                                    <option value="usa">United States</option>
                                    <option value="canada">Canada</option>
                                    <option value="australia">Australia</option>
                                    <option value="europe">Europe</option>
                                </select>

                                <textarea rows="5"
                                    class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-[#74BF1A] outline-none resize-none"
                                    placeholder="Your Message or Questions"></textarea>
                            </form>
                        </div>

                        <div class="mt-8 flex flex-col md:flex-row md:items-center md:justify-between scale-in"
                            data-delay="1.5" data-duration="0.8">
                            <button type="submit"
                                class="bg-[#74BF1A] text-white px-6 md:px-16 py-3 rounded-lg hover:bg-green-600 transition w-full md:w-auto">
                                Book My Session
                            </button>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-1/2 flex flex-col slide-right" data-delay="0.9" data-duration="1.2">
                    <div class="overflow-hidden rounded-2xl shadow-lg">
                        <img src="images/career-counselling.jpg" alt="Career Counseling"
                            class="w-full h-[280px] sm:h-[350px] lg:h-[450px] object-cover rounded-2xl transform transition duration-500 hover:scale-105 hover:shadow-2xl" />
                    </div>

                    <div class="mt-6 flex flex-col flex-grow stagger-up" data-stagger="0.1" data-delay="1.2"
                        data-duration="0.8">
                        <p class="text-gray-600 mb-6 flex-grow feature-item">
                            Choosing the right career path can be overwhelming. Our professional
                            counselors help you identify your strengths, explore study
                            opportunities abroad, and guide you in selecting universities and
                            programs that align with your goals.
                        </p>

                        <ul class="space-y-4 mb-6">
                            <li class="flex items-start feature-item">
                                <i class="fas fa-check-circle text-[#74BF1A] text-xl mt-1 mr-3"></i>
                                <div>
                                    <h4 class="font-semibold text-lg text-[#322F35]">
                                        Expert Career Guidance
                                    </h4>
                                    <p class="text-gray-600 text-sm">
                                        Get one-on-one support from experienced counselors with global
                                        exposure.
                                    </p>
                                </div>
                            </li>
                            <li class="flex items-start feature-item">
                                <i class="fas fa-check-circle text-[#74BF1A] text-xl mt-1 mr-3"></i>
                                <div>
                                    <h4 class="font-semibold text-lg text-[#322F35]">
                                        University & Program Selection
                                    </h4>
                                    <p class="text-gray-600 text-sm">
                                        Find the best-fit universities and courses tailored to your
                                        future ambitions.
                                    </p>
                                </div>
                            </li>
                            <li class="flex items-start feature-item">
                                <i class="fas fa-check-circle text-[#74BF1A] text-xl mt-1 mr-3"></i>
                                <div>
                                    <h4 class="font-semibold text-lg text-[#322F35]">
                                        Application & Visa Support
                                    </h4>
                                    <p class="text-gray-600 text-sm">
                                        Receive step-by-step guidance through applications and visa
                                        processes.
                                    </p>
                                </div>
                            </li>
                        </ul>

                        <div class="flex justify-center lg:justify-start scale-in" data-delay="2.0" data-duration="0.8">
                            <a href="/consultation-form"
                                class="bg-[#74BF1A] text-white px-6 py-3 rounded-lg hover:bg-green-600 transition">
                                Book Free Consultation
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-----------------------------------APPLICATION & ADMISSION SUPPORT----------------------------------------------->
    <section class="py-16 bg-[#F6F6F6] overflow-hidden">
        <div class="px-6 md:px-12">
            <h2 class="text-2xl md:text-4xl font-bold mb-6 text-center fade-up" data-delay="0.2" data-duration="1.0">
                Application
                <span class="text-[#74BF1A]"> & Admission </span>
                Support
            </h2>
            <p class="text-lg md:text-xl text-center mb-12 text-gray-600 max-w-3xl mx-auto fade-up" data-delay="0.4"
                data-duration="1.0">
                End-to-end assistance with applications, document verification, and
                admission processes to secure your place at top universities.
            </p>

            <div class="flex flex-col lg:flex-row items-stretch gap-10">
                <div class="w-full lg:w-1/2 flex flex-col slide-left" data-delay="0.7" data-duration="1.2">
                    <div class="overflow-hidden rounded-2xl shadow-lg">
                        <img src="images/test-girl.jpg" alt="Students applying for admission"
                            class="w-full h-[280px] sm:h-[350px] lg:h-[450px] object-cover rounded-2xl transform transition duration-500 hover:scale-105 hover:shadow-2xl" />
                    </div>

                    <div class="mt-6 flex flex-col flex-grow stagger-up" data-stagger="0.1" data-delay="1.0"
                        data-duration="0.8">
                        <p class="text-gray-600 mb-6 flex-grow feature-item">
                            Our team ensures your applications are carefully prepared,
                            documents are reviewed for accuracy, and you are fully supported
                            throughout the admission journey. From filling forms to preparing
                            for interviews, we make sure nothing is left behind.
                        </p>

                        <ul class="space-y-4 mb-6">
                            <li class="flex items-start feature-item">
                                <i class="fas fa-check-circle text-green-500 text-xl mt-1 mr-3"></i>
                                <div>
                                    <h4 class="font-semibold text-lg text-[#092962]">
                                        Application Submission Guidance
                                    </h4>
                                    <p class="text-gray-600 text-sm">
                                        Get expert help in filling applications correctly to avoid
                                        errors and delays.
                                    </p>
                                </div>
                            </li>
                            <li class="flex items-start feature-item">
                                <i class="fas fa-check-circle text-green-500 text-xl mt-1 mr-3"></i>
                                <div>
                                    <h4 class="font-semibold text-lg text-[#092962]">
                                        Document Verification Support
                                    </h4>
                                    <p class="text-gray-600 text-sm">
                                        Ensure all your academic and financial documents meet
                                        university and visa requirements.
                                    </p>
                                </div>
                            </li>
                            <li class="flex items-start feature-item">
                                <i class="fas fa-check-circle text-green-500 text-xl mt-1 mr-3"></i>
                                <div>
                                    <h4 class="font-semibold text-lg text-[#092962]">
                                        Interview Preparation Tips
                                    </h4>
                                    <p class="text-gray-600 text-sm">
                                        Receive practical tips and mock interview sessions to boost
                                        your confidence.
                                    </p>
                                </div>
                            </li>
                        </ul>

                        <div class="flex justify-center lg:justify-start scale-in" data-delay="1.8" data-duration="0.8">
                            <a href="/consultation-form"
                                class="bg-[#74BF1A] text-white px-6 py-3 rounded-lg hover:bg-green-600 transition">
                                Book Free Consultation
                            </a>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-1/2 slide-right" data-delay="0.9" data-duration="1.2">
                    <div class="bg-white shadow-lg rounded-2xl p-8">
                        <h3 class="text-2xl font-bold mb-8 text-[#092962]">
                            Process Timeline
                        </h3>

                        <div class="relative stagger-up" data-stagger="0.2" data-delay="1.4" data-duration="0.6">
                            <div class="absolute left-5 top-0 bottom-0 w-1 bg-gray-300"></div>

                            <div class="relative flex items-start mb-12 feature-item">
                                <div
                                    class="flex items-center justify-center w-10 h-10 bg-[#74BF1A] text-white font-bold rounded-full z-10">
                                    1
                                </div>
                                <div class="ml-6">
                                    <h4 class="text-xl font-semibold">Document Collection</h4>
                                    <p class="text-gray-600 text-sm mt-2">
                                        Gather all required academic transcripts, certificates, and
                                        identification documents.
                                    </p>
                                </div>
                            </div>

                            <div class="relative flex items-start mb-12 feature-item">
                                <div
                                    class="flex items-center justify-center w-10 h-10 bg-[#74BF1A] text-white font-bold rounded-full z-10">
                                    2
                                </div>
                                <div class="ml-6">
                                    <h4 class="text-xl font-semibold">Application Submission</h4>
                                    <p class="text-gray-600 text-sm mt-2">
                                        Submit applications to selected universities with complete
                                        accuracy and on time.
                                    </p>
                                </div>
                            </div>

                            <div class="relative flex items-start mb-12 feature-item">
                                <div
                                    class="flex items-center justify-center w-10 h-10 bg-[#74BF1A] text-white font-bold rounded-full z-10">
                                    3
                                </div>
                                <div class="ml-6">
                                    <h4 class="text-xl font-semibold">Interview Prep</h4>
                                    <p class="text-gray-600 text-sm mt-2">
                                        Train for admission or visa interviews with guidance from our
                                        experienced counselors.
                                    </p>
                                </div>
                            </div>

                            <div class="relative flex items-start feature-item">
                                <div
                                    class="flex items-center justify-center w-10 h-10 bg-[#74BF1A] text-white font-bold rounded-full z-10">
                                    4
                                </div>
                                <div class="ml-6">
                                    <h4 class="text-xl font-semibold">Final Admission</h4>
                                    <p class="text-gray-600 text-sm mt-2">
                                        Secure your admission offer and receive continuous support for
                                        the next steps including visa and travel.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-----------------------------------SUPPORT  SUPPORT----------------------------------------------->
    <section class="py-16 overflow-hidden">
        <div class="px-6 md:px-12">
            <h2 class="text-2xl md:text-4xl font-bold mb-6 text-center fade-up" data-delay="0.2" data-duration="1.0">
                Application
                <span class="text-[#74BF1A]"> & Admission </span>
                Support
            </h2>
            <p class="text-lg md:text-xl text-center mb-12 text-gray-600 max-w-2xl mx-auto fade-up" data-delay="0.4"
                data-duration="1.0">
                Get expert guidance at every stage of your application journey — from submission to interview success.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 mt-12 w-full stagger-up" data-stagger="0.2"
                data-delay="0.8" data-duration="0.8">
                <div class="bg-[#092962] rounded-2xl p-6 text-white shadow-lg flex flex-col justify-between feature-item">
                    <div>
                        <h1 class="text-2xl font-semibold mb-4">Application Guidance</h1>
                        <p class="mb-6 text-gray-200">
                            Personalized step-by-step help to submit strong university applications that stand out.
                        </p>
                        <ul class="space-y-4 mb-6">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-[#74BF1A] text-xl mt-1 mr-3"></i>
                                <h4 class="font-semibold text-lg">Form Filling Assistance</h4>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-[#74BF1A] text-xl mt-1 mr-3"></i>
                                <h4 class="font-semibold text-lg">Course & University Selection</h4>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-[#74BF1A] text-xl mt-1 mr-3"></i>
                                <div>
                                    <h4 class="font-semibold text-lg">Deadline Tracking & Alerts
                                    </h4>
                                    <h3 class="text-[#74BF1A] text-xl font-medium mt-4">
                                        Limited Time Offer
                                    </h3>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <a href="#"
                        class="bg-[#74BF1A] text-white px-4 py-2 rounded-lg hover:bg-green-600 transition text-center">
                        Book Free Counselling <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>

                <div class="bg-[#092962] rounded-2xl p-6 text-white shadow-lg flex flex-col justify-between feature-item">
                    <div>
                        <h1 class="text-2xl font-semibold mb-4">Document Support</h1>
                        <p class="mb-6 text-gray-200">
                            Ensure all your academic and financial documents meet university requirements.
                        </p>
                        <ul class="space-y-4 mb-6">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-[#74BF1A] text-xl mt-1 mr-3"></i>
                                <h4 class="font-semibold text-lg">Document Verification</h4>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-[#74BF1A] text-xl mt-1 mr-3"></i>
                                <h4 class="font-semibold text-lg">SOP & LOR Drafting Guidance</h4>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-[#74BF1A] text-xl mt-1 mr-3"></i>
                                <div>
                                    <h4 class="font-semibold text-lg">Financial Proof Preparation
                                    </h4>
                                    <h3 class="text-[#74BF1A] text-xl font-medium mt-4">
                                        Limited Time Offer
                                    </h3>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <a href="#"
                        class="bg-[#74BF1A] text-white px-4 py-2 rounded-lg hover:bg-green-600 transition text-center">
                        Verify Documents <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>

                <div class="bg-[#092962] rounded-2xl p-6 text-white shadow-lg flex flex-col justify-between feature-item">
                    <div>
                        <h1 class="text-2xl font-semibold mb-4">Interview Preparation</h1>
                        <p class="mb-6 text-gray-200">
                            Build confidence and ace your admission interviews with our expert coaching.
                        </p>
                        <ul class="space-y-4 mb-6">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-[#74BF1A] text-xl mt-1 mr-3"></i>
                                <h4 class="font-semibold text-lg">Mock Interview Sessions</h4>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-[#74BF1A] text-xl mt-1 mr-3"></i>
                                <h4 class="font-semibold text-lg">Common Q&A Practice</h4>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-[#74BF1A] text-xl mt-1 mr-3"></i>
                                <div>
                                    <h4 class="font-semibold text-lg">Personality Development Tips</h4>
                                    <h3 class="text-[#74BF1A] text-xl font-medium mt-4">
                                        Limited Time Offer
                                    </h3>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <a href="#"
                        class="bg-[#74BF1A] text-white px-4 py-2 rounded-lg hover:bg-green-600 transition text-center">
                        Start Preparing <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <div class="w-full h-auto py-6 mt-16 bg-[#98D94A] flex justify-center items-center text-center px-4 scale-in"
                data-delay="1.8" data-duration="0.8">
                <h1 class="text-lg md:text-xl font-semibold text-[#092962]">
                    Hurry! These offers are available only for a limited time. Secure your spot today.
                </h1>
            </div>
        </div>
    </section>




    <!----------------------------------- FAQS SECTION ----------------------------------------------->
    <section class="py-16 bg-white overflow-hidden">
        <div class="px-6 md:px-12">
            <h2 class="text-2xl md:text-4xl font-bold text-center mb-10 fade-up" data-delay="0.2" data-duration="1.0">
                Frequently Asked <span class="text-[#74BF1A]">Questions</span>
            </h2>

            <div class="space-y-6 slide-up" data-delay="0.6" data-duration="1.2">
                @forelse ($faqs as $index => $faq)
                    <div
                        class="faq-item border rounded-lg overflow-hidden shadow-[0_4px_12px_rgba(0,0,0,0.1)] transition-all duration-300">
                        <button
                            class="w-full flex items-center justify-between px-4 py-3 text-left font-medium text-gray-800 focus:outline-none faq-toggle">
                            <div class="flex items-center gap-4">
                                <span class="text-[#74BF1A] font-bold text-lg">{{ $index + 1 }}</span>
                                <span>{{ $faq->question }}</span>
                            </div>
                            <i class="fa-solid fa-chevron-right text-[#74BF1A] transition-transform duration-300"></i>
                        </button>
                        <div class="faq-content hidden px-12 pb-4 text-gray-600">
                            {{ $faq->answer }}
                        </div>
                    </div>
                @empty
                    <div class="text-center text-gray-500">No FAQs available right now.</div>
                @endforelse

                @if (false)
                    <div
                        class="faq-item border rounded-lg overflow-hidden shadow-[0_4px_12px_rgba(0,0,0,0.1)] transition-all duration-300">
                        <button
                            class="w-full flex items-center justify-between px-4 py-3 text-left font-medium text-gray-800 focus:outline-none faq-toggle">
                            <div class="flex items-center gap-4">
                                <span class="text-[#74BF1A] font-bold text-lg">1</span>
                                <span>What is the process to study abroad?</span>
                            </div>
                            <i class="fa-solid fa-chevron-right text-[#74BF1A] transition-transform duration-300"></i>
                        </button>
                        <div class="faq-content hidden px-12 pb-4 text-gray-600">
                            The process involves selecting your preferred country, researching
                            universities, preparing academic and financial documents, submitting
                            applications, receiving an admission letter, and finally applying for
                            a student visa.
                        </div>
                    </div>

                    <div
                        class="faq-item border rounded-lg overflow-hidden shadow-[0_4px_12px_rgba(0,0,0,0.1)] transition-all duration-300">
                        <button
                            class="w-full flex items-center justify-between px-4 py-3 text-left font-medium text-gray-800 focus:outline-none faq-toggle">
                            <div class="flex items-center gap-4">
                                <span class="text-[#74BF1A] font-bold text-lg">2</span>
                                <span>What are the requirements for admission?</span>
                            </div>
                            <i class="fa-solid fa-chevron-right text-[#74BF1A] transition-transform duration-300"></i>
                        </button>
                        <div class="faq-content hidden px-12 pb-4 text-gray-600">
                            Admission requirements usually include academic transcripts, English
                            proficiency test scores (IELTS, TOEFL, or equivalent), a statement of
                            purpose, recommendation letters, and a valid passport.
                        </div>
                    </div>

                    <div
                        class="faq-item border rounded-lg overflow-hidden shadow-[0_4px_12px_rgba(0,0,0,0.1)] transition-all duration-300">
                        <button
                            class="w-full flex items-center justify-between px-4 py-3 text-left font-medium text-gray-800 focus:outline-none faq-toggle">
                            <div class="flex items-center gap-4">
                                <span class="text-[#74BF1A] font-bold text-lg">3</span>
                                <span>Do I need IELTS to study abroad?</span>
                            </div>
                            <i class="fa-solid fa-chevron-right text-[#74BF1A] transition-transform duration-300"></i>
                        </button>
                        <div class="faq-content hidden px-12 pb-4 text-gray-600">
                            Many universities require IELTS or TOEFL. However, some institutions
                            accept alternatives like Duolingo English Test or exempt students who
                            have studied in English-medium institutions.
                        </div>
                    </div>

                    <div
                        class="faq-item border rounded-lg overflow-hidden shadow-[0_4px_12px_rgba(0,0,0,0.1)] transition-all duration-300">
                        <button
                            class="w-full flex items-center justify-between px-4 py-3 text-left font-medium text-gray-800 focus:outline-none faq-toggle">
                            <div class="flex items-center gap-4">
                                <span class="text-[#74BF1A] font-bold text-lg">4</span>
                                <span>What is the estimated cost of studying abroad?</span>
                            </div>
                            <i class="fa-solid fa-chevron-right text-[#74BF1A] transition-transform duration-300"></i>
                        </button>
                        <div class="faq-content hidden px-12 pb-4 text-gray-600">
                            The cost depends on the country, program, and lifestyle. On average,
                            tuition fees range from $8,000 to $25,000 per year, while living
                            expenses may cost between $600 and $1,500 per month.
                        </div>
                    </div>

                    <div
                        class="faq-item border rounded-lg overflow-hidden shadow-[0_4px_12px_rgba(0,0,0,0.1)] transition-all duration-300">
                        <button
                            class="w-full flex items-center justify-between px-4 py-3 text-left font-medium text-gray-800 focus:outline-none faq-toggle">
                            <div class="flex items-center gap-4">
                                <span class="text-[#74BF1A] font-bold text-lg">5</span>
                                <span>Can I work while studying abroad?</span>
                            </div>
                            <i class="fa-solid fa-chevron-right text-[#74BF1A] transition-transform duration-300"></i>
                        </button>
                        <div class="faq-content hidden px-12 pb-4 text-gray-600">
                            Most countries allow international students to work part-time (10–20
                            hours per week) during semesters and full-time during breaks, helping
                            to cover living expenses.
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>

    <!-- Accordion Script -->
    <script>
        const serviceOfferPopup = document.getElementById('serviceOfferPopup');
        const serviceOfferPopupCard = document.getElementById('serviceOfferPopupCard');
        const closeServiceOfferPopup = document.getElementById('closeServiceOfferPopup');

        const openServiceOfferPopup = () => {
            if (!serviceOfferPopup || !serviceOfferPopupCard) return;

            serviceOfferPopup.classList.remove('hidden');
            serviceOfferPopup.classList.add('flex');

            requestAnimationFrame(() => {
                serviceOfferPopupCard.classList.remove('opacity-0', 'scale-[0.94]', 'translate-y-8');
                serviceOfferPopupCard.classList.add('opacity-100', 'scale-100', 'translate-y-0');
            });
        };

        const hideServiceOfferPopup = () => {
            if (!serviceOfferPopup || !serviceOfferPopupCard) return;

            serviceOfferPopupCard.classList.remove('opacity-100', 'scale-100', 'translate-y-0');
            serviceOfferPopupCard.classList.add('opacity-0', 'scale-[0.94]', 'translate-y-8');

            setTimeout(() => {
                serviceOfferPopup.classList.add('hidden');
                serviceOfferPopup.classList.remove('flex');
            }, 280);
        };

        @if ($popup)
            setTimeout(() => {
                openServiceOfferPopup();
            }, {{ max(1000, (($popup->delay_seconds ?? 2) * 1000)) }});
        @endif

        if (closeServiceOfferPopup) {
            closeServiceOfferPopup.addEventListener('click', hideServiceOfferPopup);
        }

        if (serviceOfferPopup) {
            serviceOfferPopup.addEventListener('click', (event) => {
                if (event.target === serviceOfferPopup) {
                    hideServiceOfferPopup();
                }
            });
        }

        document.addEventListener('keydown', (event) => {
            if (event.key === 'Escape' && serviceOfferPopup && !serviceOfferPopup.classList.contains('hidden')) {
                hideServiceOfferPopup();
            }
        });

        document.querySelectorAll(".faq-toggle").forEach((btn) => {
            btn.addEventListener("click", () => {
                const item = btn.closest(".faq-item");
                const content = item.querySelector(".faq-content");
                const icon = btn.querySelector("i");

                // Toggle current FAQ
                content.classList.toggle("hidden");
                icon.classList.toggle("rotate-90");

                // Toggle green border when open
                if (!content.classList.contains("hidden")) {
                    item.classList.add("border-b-[4px]", "border-[#74BF1A]",
                        "shadow-[0_6px_20px_rgba(116,191,26,0.3)]");
                } else {
                    item.classList.remove("border-b-[4px]", "border-[#74BF1A]",
                        "shadow-[0_6px_20px_rgba(116,191,26,0.3)]");
                }
            });
        });
    </script>
@endsection
