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
        <div id="ieltsOfferPopup"
            class="fixed inset-0 z-[95] hidden items-center justify-center bg-[#04122c]/75 px-4 py-8 backdrop-blur-sm">
            <div id="ieltsOfferPopupCard"
                class="relative w-full max-w-2xl translate-y-6 scale-[0.92] overflow-hidden rounded-[26px] bg-white opacity-0 shadow-[0_24px_65px_rgba(4,18,44,0.24)] transition-all duration-500">
                <button type="button" id="closeIeltsOfferPopup"
                    class="absolute right-3 top-3 z-10 inline-flex h-8 w-8 items-center justify-center rounded-full bg-white/90 text-[#092962] shadow-md transition duration-300 hover:rotate-90 hover:scale-105 hover:bg-white">
                    <i class="fa-solid fa-xmark"></i>
                </button>

                <div class="{{ $hasPopupMedia ? 'grid grid-cols-1 lg:grid-cols-[0.95fr_0.85fr]' : 'block' }}">
                    <div class="relative overflow-hidden bg-[#092962] px-4 py-5 text-white md:px-5">
                        <div class="absolute -left-10 top-8 h-28 w-28 rounded-full bg-[#74BF1A]/10 blur-3xl"></div>
                        <div class="absolute -right-8 bottom-0 h-32 w-32 rounded-full bg-white/10 blur-3xl"></div>

                        <div class="relative">
                            @if ($popup->subheading)
                                <span
                                    class="inline-flex items-center rounded-full bg-white/10 px-3 py-1 text-[10px] font-bold uppercase tracking-[0.22em] text-white/75">
                                    {{ $popup->subheading }}
                                </span>
                            @endif

                            @if ($popup->heading)
                                <h2 class="mt-2.5 text-xl font-extrabold leading-tight md:text-[1.7rem]">
                                    {{ $popup->heading }}
                                </h2>
                            @endif

                            @if ($popup->description)
                                <p class="mt-2.5 max-w-xl text-[13px] leading-5 text-white/80">
                                    {{ $popup->description }}
                                </p>
                            @endif

                            @if (!empty($popup->points))
                                <div class="mt-4 space-y-2">
                                    @foreach ($popup->points as $point)
                                        <div class="flex items-start gap-2.5">
                                            <span
                                                class="mt-0.5 inline-flex h-5 w-5 flex-shrink-0 items-center justify-center rounded-full bg-[#74BF1A] text-[9px] text-white">
                                                <i class="fa-solid fa-check"></i>
                                            </span>
                                            <p class="text-[13px] leading-5 text-white/85">{{ $point }}</p>
                                        </div>
                                    @endforeach
                                </div>
                            @endif

                            @if ($popup->button_text && $popup->button_link)
                                <div class="mt-5">
                                    <a href="{{ $popup->button_link }}" target="_blank"
                                        class="inline-flex items-center gap-2 rounded-xl bg-[#74BF1A] px-4 py-2 text-sm font-bold text-white transition duration-300 hover:-translate-y-0.5 hover:bg-[#5ea113]">
                                        {{ $popup->button_text }}
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </div>
                            @endif

                            @if ($popup->facebook_link || $popup->instagram_link || $popup->youtube_link || $popup->whatsapp_link)
                                <div class="mt-5 border-t border-white/10 pt-3.5">
                                    <p class="mb-3 text-[11px] font-bold uppercase tracking-[0.22em] text-white/55">Follow Us</p>
                                    <div class="flex flex-wrap gap-2.5">
                                        @if ($popup->facebook_link)
                                            <a href="{{ $popup->facebook_link }}" target="_blank"
                                                class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-white/10 text-white transition duration-300 hover:-translate-y-0.5 hover:bg-white hover:text-[#092962]">
                                                <i class="fa-brands fa-facebook-f"></i>
                                            </a>
                                        @endif
                                        @if ($popup->instagram_link)
                                            <a href="{{ $popup->instagram_link }}" target="_blank"
                                                class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-white/10 text-white transition duration-300 hover:-translate-y-0.5 hover:bg-white hover:text-[#092962]">
                                                <i class="fa-brands fa-instagram"></i>
                                            </a>
                                        @endif
                                        @if ($popup->youtube_link)
                                            <a href="{{ $popup->youtube_link }}" target="_blank"
                                                class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-white/10 text-white transition duration-300 hover:-translate-y-0.5 hover:bg-white hover:text-[#092962]">
                                                <i class="fa-brands fa-youtube"></i>
                                            </a>
                                        @endif
                                        @if ($popup->whatsapp_link)
                                            <a href="{{ $popup->whatsapp_link }}" target="_blank"
                                                class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-white/10 text-white transition duration-300 hover:-translate-y-0.5 hover:bg-white hover:text-[#092962]">
                                                <i class="fa-brands fa-whatsapp"></i>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>

                    @if ($hasPopupMedia)
                        <div class="bg-[linear-gradient(180deg,#f8fbff_0%,#eef5ff_100%)] p-3.5 md:p-4">
                            @if ($embedVideoUrl)
                                <div class="overflow-hidden rounded-[20px] bg-white shadow-[0_18px_40px_rgba(9,41,98,0.14)]">
                                    <iframe class="aspect-video w-full" src="{{ $embedVideoUrl }}"
                                        title="IELTS Offer Video" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                </div>
                            @elseif ($popup->video_url)
                                <div class="overflow-hidden rounded-[20px] bg-white shadow-[0_18px_40px_rgba(9,41,98,0.14)]">
                                    <video controls class="aspect-video w-full bg-black">
                                        <source src="{{ $popup->video_url }}">
                                    </video>
                                </div>
                            @elseif ($popup->image_url)
                                <div class="flex min-h-[250px] items-center justify-center overflow-hidden rounded-[20px] bg-white p-2.5 shadow-[0_18px_40px_rgba(9,41,98,0.14)]">
                                    <img src="{{ $popup->image_url }}" alt="{{ $popup->heading ?: 'IELTS Offer' }}"
                                        class="max-h-[340px] w-full rounded-[16px] object-contain object-center">
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
        class="relative bg-[url('/images/ieltsHero.jpg')] bg-cover bg-top bg-no-repeat h-screen flex items-center justify-center px-4">
        <div class="bg-black/30 backdrop-blur-md rounded-2xl shadow-lg p-6 sm:p-8 md:p-12 max-w-4xl w-full border border-white/30 text-center text-white fade-up"
            data-delay="0.3" data-duration="1.5">

            <h1 class="text-xl sm:text-2xl md:text-4xl font-bold mb-4 leading-snug fade-up" data-delay="0.6"
                data-duration="1.2">
                Master the IELTS: Achieve Your <span class="text-[#74BF1A]">Target Band Score</span>
            </h1>

            <p class="text-sm sm:text-base md:text-lg mb-6 text-gray-100 px-2 sm:px-4 fade-up" data-delay="0.8"
                data-duration="1.2">
                Get expert-led training for Academic and General Training. From free mock tests to intensive
                speaking workshops, we provide the strategies you need to succeed.
            </p>

            <div class="flex justify-center fade-up" data-delay="1.0" data-duration="1.2">
                <a href="/ielts-enroll"
                    class="relative overflow-hidden bg-[#74BF1A] text-white px-8 py-3 rounded-lg font-semibold group transition-all duration-300 inline-block">

                    <span class="relative z-10 flex items-center gap-2">
                        Start Prep Now
                    </span>

                    <span
                        class="absolute inset-0 bg-green-600 translate-x-full group-hover:translate-x-0 transition-transform duration-300"></span>
                </a>
            </div>

            <div class="flex flex-wrap items-center justify-center gap-4 sm:gap-6 mt-8 fade-up" data-delay="1.2"
                data-duration="1.2">
                <p class="text-base sm:text-lg md:text-xl font-semibold w-full sm:w-auto">
                    Follow Our IELTS Tips:
                </p>
                <div class="flex justify-center gap-4 sm:gap-6">
                    <a href="#" class="hover:text-[#74BF1A] transition">
                        <i class="fa-brands fa-facebook-f text-lg sm:text-xl"></i>
                    </a>
                    <a href="#" class="hover:text-[#74BF1A] transition">
                        <i class="fa-brands fa-whatsapp text-lg sm:text-xl"></i>
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
    <!-----------------------------------ROMOTION SECTION----------------------------------------------->

    <section class="py-16 bg-white overflow-hidden">
        <div class="container mx-auto px-6 md:px-12">
            <div class="text-center mb-16 fade-up">
                <h2 class="text-3xl md:text-5xl font-bold text-[#092962] mb-4">
                    Ace the IELTS with <span class="text-[#74BF1A] inline-block hover-card">Global Minds</span>
                </h2>
                <p class="text-gray-600 text-lg">Expert guidance for your Band 7+ score</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

                <div class="relative slide-left" data-delay="0.2">
                    <div
                        class="rounded-3xl overflow-hidden shadow-2xl transition-transform duration-500 hover:scale-[1.02]">
                        <img src="/images/test.jpg" alt="IELTS Preparation"
                            class="w-full h-[700px] object-cover min-h-[400px]">
                    </div>
                    <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-[#74BF1A] opacity-10 rounded-full -z-10 pulse">
                    </div>
                </div>

                <div class="stagger-up space-y-8" data-stagger="0.2">
                    <div>
                        <h3 class="text-2xl md:text-3xl font-bold text-[#092962] mb-4 word-split">
                            We are here to help you:
                        </h3>
                        <p class="text-gray-600 leading-relaxed fade-in">
                            Achieving a high band score requires more than just English skills; it requires strategy. Our
                            certified trainers provide personalized roadmaps to help you navigate the complexities of the
                            IELTS exam with confidence.
                        </p>
                    </div>

                    <div class="space-y-6">
                        <div class="flex items-start gap-4 group">
                            <div class="flex-shrink-0 w-8 h-8 bg-[#092962] rounded-full flex items-center justify-center text-white mt-1 bounce-in"
                                data-delay="0.4">
                                <i class="fa-solid fa-check text-sm"></i>
                            </div>
                            <div class="fade-in" data-delay="0.4">
                                <h4 class="text-xl font-bold text-[#092962] group-hover:text-[#74BF1A] transition-colors">
                                    Comprehensive Courses</h4>
                                <p class="text-gray-500 text-sm">Full coverage of both Academic and General Training
                                    modules.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 group">
                            <div class="flex-shrink-0 w-8 h-8 bg-[#092962] rounded-full flex items-center justify-center text-white mt-1 bounce-in"
                                data-delay="0.5">
                                <i class="fa-solid fa-check text-sm"></i>
                            </div>
                            <div class="fade-in" data-delay="0.5">
                                <h4 class="text-xl font-bold text-[#092962] group-hover:text-[#74BF1A] transition-colors">
                                    Test Preparation</h4>
                                <p class="text-gray-500 text-sm">Learn time management and question-specific strategies for
                                    success.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 group">
                            <div class="flex-shrink-0 w-8 h-8 bg-[#092962] rounded-full flex items-center justify-center text-white mt-1 bounce-in"
                                data-delay="0.6">
                                <i class="fa-solid fa-check text-sm"></i>
                            </div>
                            <div class="fade-in" data-delay="0.6">
                                <h4 class="text-xl font-bold text-[#092962] group-hover:text-[#74BF1A] transition-colors">
                                    Mock Tests & Feedback</h4>
                                <p class="text-gray-500 text-sm">Real exam simulations with detailed performance analysis
                                    and feedback.</p>
                            </div>
                        </div>
                    </div>

                    <div class="pt-4">
                        <a href="/consultation-form"
                            class="inline-block bg-[#74BF1A] hover:bg-[#092962] text-white font-bold px-8 py-4 rounded-xl transition-all duration-300 shadow-lg hover:shadow-[#74BF1A]/20 transform hover:-translate-y-1 slide-right"
                            data-delay="0.8">
                            Book a Free Consultation
                        </a>
                    </div>
                </div>

            </div>
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
    <!-----------------------------------IELTS STRATEGY SECTION----------------------------------------------->

    <section class="py-16 overflow-hidden bg-white">
        <div class="px-6 md:px-12">
            <h2 class="text-2xl md:text-4xl font-bold mb-6 text-center fade-up" data-delay="0.2" data-duration="1.0">
                Expert IELTS
                <span class="text-[#74BF1A]"> Strategy & </span>
                Level Assessment
            </h2>
            <p class="text-lg md:text-xl text-center mb-12 text-gray-600 max-w-3xl mx-auto fade-up" data-delay="0.4"
                data-duration="1.0">
                Unsure of your current band level? Book a session with our Master Trainers to identify your weak areas
                and create a roadmap to a Band 7.0 or higher.
            </p>

            <div class="flex flex-col lg:flex-row items-stretch gap-10">

                <div class="w-full lg:w-1/2 flex flex-col justify-between slide-left" data-delay="0.7"
                    data-duration="1.2">
                    <div class="border rounded-2xl shadow-lg p-6 md:p-8 bg-gray-50 flex flex-col justify-between w-full">
                        <div>
                            <h1 class="text-2xl md:text-3xl font-bold mb-6 text-[#322F35]">
                                Request a Free Level Assessment
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
                                    <option selected disabled>Current Preparation Status</option>
                                    <option value="beginner">Beginner (Just Starting)</option>
                                    <option value="intermediate">Intermediate (Attempted before)</option>
                                    <option value="academic">Academic IELTS</option>
                                    <option value="general">General Training IELTS</option>
                                </select>

                                <textarea rows="5"
                                    class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-[#74BF1A] outline-none resize-none"
                                    placeholder="What is your target band score and which module is hardest for you? (e.g. Writing/Speaking)"></textarea>
                            </form>
                        </div>

                        <div class="mt-8 flex flex-col md:flex-row md:items-center md:justify-between scale-in"
                            data-delay="1.5" data-duration="0.8">
                            <button type="submit"
                                class="bg-[#74BF1A] text-white px-6 md:px-16 py-3 rounded-lg hover:bg-green-600 transition w-full md:w-auto font-bold">
                                Book Free Assessment
                            </button>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-1/2 flex flex-col slide-right" data-delay="0.9" data-duration="1.2">
                    <div class="overflow-hidden rounded-2xl shadow-lg">
                        <img src="images/career-counselling.jpg" alt="IELTS Strategy Session"
                            class="w-full h-[280px] sm:h-[350px] lg:h-[450px] object-cover rounded-2xl transform transition duration-500 hover:scale-105" />
                    </div>

                    <div class="mt-6 flex flex-col flex-grow stagger-up" data-stagger="0.1" data-delay="1.2"
                        data-duration="0.8">
                        <p class="text-gray-600 mb-6 flex-grow feature-item">
                            Scoring high in IELTS isn't just about English fluency—it's about understanding the
                            test format and the examiner's criteria. Our counseling sessions focus on practical
                            strategies to jump from a Band 6 to a Band 8.
                        </p>

                        <ul class="space-y-4 mb-6">
                            <li class="flex items-start feature-item">
                                <i class="fas fa-check-circle text-[#74BF1A] text-xl mt-1 mr-3"></i>
                                <div>
                                    <h4 class="font-semibold text-lg text-[#322F35]">
                                        Personalized Band Analysis
                                    </h4>
                                    <p class="text-gray-600 text-sm">
                                        We analyze your current speaking and writing level to give you an honest band
                                        estimate.
                                    </p>
                                </div>
                            </li>
                            <li class="flex items-start feature-item">
                                <i class="fas fa-check-circle text-[#74BF1A] text-xl mt-1 mr-3"></i>
                                <div>
                                    <h4 class="font-semibold text-lg text-[#322F35]">
                                        Module-Specific Strategies
                                    </h4>
                                    <p class="text-gray-600 text-sm">
                                        Master the "True/False/Not Given" in Reading and "Task 2" structures in Writing.
                                    </p>
                                </div>
                            </li>
                            <li class="flex items-start feature-item">
                                <i class="fas fa-check-circle text-[#74BF1A] text-xl mt-1 mr-3"></i>
                                <div>
                                    <h4 class="font-semibold text-lg text-[#322F35]">
                                        Time Management Training
                                    </h4>
                                    <p class="text-gray-600 text-sm">
                                        Learn how to finish the Reading and Writing sections with 10 minutes to spare.
                                    </p>
                                </div>
                            </li>
                        </ul>

                        <div class="flex justify-center lg:justify-start scale-in" data-delay="2.0" data-duration="0.8">
                            <a href="#"
                                class="bg-[#74BF1A] text-white px-6 py-3 rounded-lg hover:bg-green-600 transition font-bold">
                                View Study Batches
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-----------------------------------WHY CHOSE US SECTION----------------------------------------------->


    <section class="py-16 bg-white overflow-hidden">
        <div class="container mx-auto px-6 md:px-12">
            <div class="text-center mb-16 fade-up">
                <h2 class="text-3xl md:text-5xl font-bold text-[#092962] mb-4">
                    Why Choose Us for <span class="text-[#74BF1A] inline-block hover-card">IELTS Preparation</span>
                </h2>
                <p class="text-gray-600 text-lg">Boost your band score with expert-led training and resources</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

                <div class="slide-left" data-duration="1.5">
                    <div
                        class="rounded-3xl overflow-hidden shadow-2xl transition-transform duration-700 hover:scale-[1.03] group">
                        <img src="/images/steps.jpg" alt="IELTS Success"
                            class="w-full h-[700px] object-cover min-h-[450px] transition-transform duration-1000 group-hover:scale-110">
                    </div>
                </div>

                <div class="space-y-8">
                    <div class="fade-in" data-delay="0.3">
                        <h3 class="text-2xl font-bold text-[#092962] mb-4 word-split">We are here to help you:</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Achieving a Band 7.0 or 8.0 requires more than just English knowledge—it requires strategy. Our
                            certified trainers provide the specific techniques needed to satisfy IELTS examiners.
                        </p>
                    </div>

                    <div class="space-y-10 relative">
                        <div class="absolute left-5 top-2 bottom-2 w-px bg-gray-100 hidden md:block">
                            <div class="h-full w-full bg-[#74BF1A] origin-top scale-y-0 transition-transform duration-[2000ms] ease-out"
                                id="timeline-line"></div>
                        </div>

                        <div class="flex items-start gap-6 relative group stagger-up">
                            <div class="flex-shrink-0 w-10 h-10 bg-[#092962] group-hover:bg-[#74BF1A] rounded-full flex items-center justify-center text-white z-10 font-bold transition-colors duration-300 bounce-in"
                                data-delay="0.4">
                                1
                            </div>
                            <div class="fade-in" data-delay="0.5">
                                <h4 class="text-xl font-bold text-[#092962]">Comprehensive Mock Tests</h4>
                                <p class="text-gray-500 text-sm">Experience real exam conditions with full-length Reading,
                                    Writing, Listening, and Speaking simulations.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-6 relative group stagger-up">
                            <div class="flex-shrink-0 w-10 h-10 bg-[#092962] group-hover:bg-[#74BF1A] rounded-full flex items-center justify-center text-white z-10 font-bold transition-colors duration-300 bounce-in"
                                data-delay="0.7">
                                2
                            </div>
                            <div class="fade-in" data-delay="0.8">
                                <h4 class="text-xl font-bold text-[#092962]">Personalized Feedback</h4>
                                <p class="text-gray-500 text-sm">Receive detailed corrections on your Writing Task 1 & 2
                                    essays and one-on-one Speaking evaluations.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-6 relative group stagger-up">
                            <div class="flex-shrink-0 w-10 h-10 bg-[#092962] group-hover:bg-[#74BF1A] rounded-full flex items-center justify-center text-white z-10 font-bold transition-colors duration-300 bounce-in"
                                data-delay="1.0">
                                3
                            </div>
                            <div class="fade-in" data-delay="1.1">
                                <h4 class="text-xl font-bold text-[#092962]">Advanced Test Strategies</h4>
                                <p class="text-gray-500 text-sm">Master time management and question-specific hacks for
                                    "Matching Headings" and "True/False/Not Given."</p>
                            </div>
                        </div>
                    </div>

                    <div class="slide-right pt-4" data-delay="1.2">
                       <a href="/scholarships"
   class="inline-block bg-[#74BF1A] text-white px-5 sm:px-6 py-2 sm:py-3 rounded-lg hover:bg-green-600 transition w-full md:w-auto text-sm sm:text-base text-center">
   Explore Scholarships
</a>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Logic to animate the vertical timeline line on scroll
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    document.getElementById('timeline-line').style.transform = 'scaleY(1)';
                }
            });
        }, {
            threshold: 0.5
        });

        observer.observe(document.querySelector('.space-y-10'));
    </script>

    <!-----------------------------------CARDS SECTION----------------------------------------------->

    <section class="py-16 bg-gray-50 overflow-hidden">
        <div class="container mx-auto px-6 md:px-12">

            <div class="text-center mb-16 reveal-up">
                <h2 class="text-3xl md:text-5xl font-bold text-[#092962] mb-4">Language Courses</h2>
                <p class="text-gray-600">Boost your test scores with expert-led training packages</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 stagger-container">
                @forelse ($courses as $course)
                    <div
                        class="bg-[#74BF1A] rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 reveal-up flex flex-col justify-between group hover:-translate-y-2">
                        <div>
                            <h3 class="text-2xl font-bold text-white mb-4">{{ $course->title }}</h3>
                            <p class="text-white/90 text-sm mb-6 leading-relaxed">{{ $course->short_description }}</p>
                            <ul class="space-y-3 mb-8">
                                @foreach ($course->features ?? [] as $feature)
                                    <li class="flex items-center gap-3 text-white font-medium text-sm">
                                        <i class="fa-solid fa-check-circle"></i> {{ $feature }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <button type="button"
                            class="open-enroll-modal bg-[#092962] text-white text-center py-3 rounded-xl font-bold hover:bg-white hover:text-[#092962] transition-all w-full"
                            data-course-id="{{ $course->id }}" data-course-title="{{ $course->title }}">
                            {{ $course->button_text ?: 'Enroll Now' }}
                        </button>
                    </div>
                @empty
                    <div class="col-span-full text-center text-gray-500">No language courses available right now.</div>
                @endforelse
            </div>
        </div>
    </section>

    @php
        $selectedCourseId = old('ielts_course_id');
        $selectedCourse = $selectedCourseId ? $courses->firstWhere('id', (int) $selectedCourseId) : null;
    @endphp

    @if (session('enrollment_success'))
        <div id="ieltsToast"
            class="fixed top-6 right-6 z-[90] max-w-sm rounded-2xl bg-[#092962] px-5 py-4 text-white shadow-2xl transition-all duration-500">
            <div class="flex items-start gap-3">
                <span class="mt-1 inline-flex h-8 w-8 items-center justify-center rounded-full bg-[#74BF1A] text-sm">
                    <i class="fa-solid fa-check"></i>
                </span>
                <div>
                    <p class="font-bold">Request Received</p>
                    <p class="mt-1 text-sm text-white/80">{{ session('enrollment_success') }}</p>
                </div>
            </div>
        </div>
    @endif

    @if ($errors->any())
        <div id="ieltsToast"
            class="fixed top-6 right-6 z-[90] max-w-sm rounded-2xl bg-[#7f1d1d] px-5 py-4 text-white shadow-2xl transition-all duration-500">
            <div class="flex items-start gap-3">
                <span class="mt-1 inline-flex h-8 w-8 items-center justify-center rounded-full bg-white/15 text-sm">
                    <i class="fa-solid fa-triangle-exclamation"></i>
                </span>
                <div>
                    <p class="font-bold">Please check the form</p>
                    <p class="mt-1 text-sm text-white/80">{{ $errors->first() }}</p>
                </div>
            </div>
        </div>
    @endif

    <div id="ieltsEnrollModal"
        class="fixed inset-0 z-[80] hidden items-center justify-center bg-[#04122c]/70 px-4 py-8 backdrop-blur-sm">
        <div id="ieltsEnrollModalCard"
            class="w-full max-w-xl scale-95 overflow-hidden rounded-[24px] bg-white opacity-0 shadow-[0_24px_70px_rgba(4,18,44,0.28)] transition-all duration-300">
            <div class="relative overflow-hidden bg-[#092962] px-5 py-4 text-white md:px-6">
                <div class="absolute inset-y-0 right-0 w-32 bg-gradient-to-l from-[#74BF1A]/25 to-transparent"></div>
                <div class="relative flex items-start justify-between gap-3">
                    <div>
                        <p class="text-[11px] font-semibold uppercase tracking-[0.22em] text-white/70">Enroll Today</p>
                        <h3 class="mt-1 text-lg font-bold md:text-xl" id="enrollCourseTitle">
                            {{ $selectedCourse->title ?? 'IELTS Course' }}
                        </h3>
                        <p class="mt-1 max-w-md text-xs leading-4 text-white/75">
                            Share your details and our IELTS team will contact you with timings, fee plan, and next steps.
                        </p>
                    </div>
                    <button type="button" id="closeIeltsEnrollModal"
                        class="inline-flex h-8 w-8 items-center justify-center rounded-full border border-white/20 bg-white/10 text-sm text-white transition hover:bg-white/20">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
            </div>

            <div class="bg-[#f8fbff] px-5 py-4 md:px-6">
                <form action="{{ route('ielts.enroll') }}" method="POST" class="space-y-3">
                    @csrf
                    <input type="hidden" name="ielts_course_id" id="enrollCourseId" value="{{ old('ielts_course_id') }}">

                    <div class="grid grid-cols-1 gap-2.5 md:grid-cols-2">
                        <div>
                            <label class="mb-1 block text-sm font-semibold text-[#092962]">Full Name</label>
                            <input type="text" name="full_name" value="{{ old('full_name') }}"
                                class="w-full rounded-xl border border-[#d7e2f1] bg-white px-3.5 py-2 text-sm outline-none transition focus:border-[#74BF1A] focus:ring-2 focus:ring-[#74BF1A]/20"
                                placeholder="Enter your full name" required>
                        </div>
                        <div>
                            <label class="mb-1 block text-sm font-semibold text-[#092962]">Email Address</label>
                            <input type="email" name="email" value="{{ old('email') }}"
                                class="w-full rounded-xl border border-[#d7e2f1] bg-white px-3.5 py-2 text-sm outline-none transition focus:border-[#74BF1A] focus:ring-2 focus:ring-[#74BF1A]/20"
                                placeholder="Enter your email" required>
                        </div>
                        <div>
                            <label class="mb-1 block text-sm font-semibold text-[#092962]">Phone Number</label>
                            <input type="text" name="phone" value="{{ old('phone') }}"
                                class="w-full rounded-xl border border-[#d7e2f1] bg-white px-3.5 py-2 text-sm outline-none transition focus:border-[#74BF1A] focus:ring-2 focus:ring-[#74BF1A]/20"
                                placeholder="Enter your phone number" required>
                        </div>
                        <div>
                            <label class="mb-1 block text-sm font-semibold text-[#092962]">Preferred Time</label>
                            <input type="text" name="preferred_time" value="{{ old('preferred_time') }}"
                                class="w-full rounded-xl border border-[#d7e2f1] bg-white px-3.5 py-2 text-sm outline-none transition focus:border-[#74BF1A] focus:ring-2 focus:ring-[#74BF1A]/20"
                                placeholder="Morning / Evening / Weekend">
                        </div>
                    </div>

                    <div>
                        <label class="mb-1 block text-sm font-semibold text-[#092962]">Study Goal</label>
                        <input type="text" name="study_goal" value="{{ old('study_goal') }}"
                            class="w-full rounded-xl border border-[#d7e2f1] bg-white px-3.5 py-2 text-sm outline-none transition focus:border-[#74BF1A] focus:ring-2 focus:ring-[#74BF1A]/20"
                            placeholder="Band target or preferred exam">
                    </div>

                    <div>
                        <label class="mb-1 block text-sm font-semibold text-[#092962]">Message</label>
                        <textarea name="message" rows="2"
                            class="w-full rounded-xl border border-[#d7e2f1] bg-white px-3.5 py-2 text-sm outline-none transition focus:border-[#74BF1A] focus:ring-2 focus:ring-[#74BF1A]/20"
                            placeholder="Tell us about your current level or what support you need">{{ old('message') }}</textarea>
                    </div>

                    <div class="flex flex-col gap-2.5 border-t border-[#dce6f4] pt-3 sm:flex-row sm:items-center sm:justify-between">
                        <p class="text-xs text-[#51617f] md:text-sm">
                            We usually respond within one working day.
                        </p>
                        <button type="submit"
                            class="inline-flex items-center justify-center rounded-xl bg-[#74BF1A] px-6 py-2 text-sm font-bold text-white transition hover:-translate-y-0.5 hover:bg-[#5ea113]">
                            Submit Enrollment
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!----------------------------------- FAQS SECTION ----------------------------------------------->
    <section class="py-16 bg-white">
        <div class="px-6 md:px-12">
            <h2 class="text-2xl md:text-4xl font-bold text-center mb-10 slide-down" data-delay="0.2" data-duration="1.2">
                Frequently Asked <span class="text-[#74BF1A]">Questions</span>
            </h2>

            <div class="space-y-6 fade-in" data-delay="0.5" data-duration="1.0">
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
            </div>
        </div>
    </section>
    <!-- Accordion Script -->
    <script>
        const ieltsOfferPopup = document.getElementById('ieltsOfferPopup');
        const ieltsOfferPopupCard = document.getElementById('ieltsOfferPopupCard');
        const closeIeltsOfferPopup = document.getElementById('closeIeltsOfferPopup');

        const openIeltsOfferPopup = () => {
            if (!ieltsOfferPopup || !ieltsOfferPopupCard) return;

            ieltsOfferPopup.classList.remove('hidden');
            ieltsOfferPopup.classList.add('flex');

            requestAnimationFrame(() => {
                ieltsOfferPopupCard.classList.remove('opacity-0', 'scale-[0.92]', 'translate-y-6');
                ieltsOfferPopupCard.classList.add('opacity-100', 'scale-100', 'translate-y-0');
            });
        };

        const hideIeltsOfferPopup = () => {
            if (!ieltsOfferPopup || !ieltsOfferPopupCard) return;

            ieltsOfferPopupCard.classList.remove('opacity-100', 'scale-100', 'translate-y-0');
            ieltsOfferPopupCard.classList.add('opacity-0', 'scale-[0.92]', 'translate-y-6');

            setTimeout(() => {
                ieltsOfferPopup.classList.add('hidden');
                ieltsOfferPopup.classList.remove('flex');
            }, 260);
        };

        @if ($popup)
            setTimeout(() => {
                openIeltsOfferPopup();
            }, {{ max(1000, (($popup->delay_seconds ?? 2) * 1000)) }});
        @endif

        if (closeIeltsOfferPopup) {
            closeIeltsOfferPopup.addEventListener('click', hideIeltsOfferPopup);
        }

        if (ieltsOfferPopup) {
            ieltsOfferPopup.addEventListener('click', (event) => {
                if (event.target === ieltsOfferPopup) {
                    hideIeltsOfferPopup();
                }
            });
        }

        const ieltsEnrollModal = document.getElementById('ieltsEnrollModal');
        const ieltsEnrollModalCard = document.getElementById('ieltsEnrollModalCard');
        const closeIeltsEnrollModal = document.getElementById('closeIeltsEnrollModal');
        const enrollCourseIdInput = document.getElementById('enrollCourseId');
        const enrollCourseTitle = document.getElementById('enrollCourseTitle');
        const enrollButtons = document.querySelectorAll('.open-enroll-modal');
        const ieltsToast = document.getElementById('ieltsToast');

        const openEnrollModal = (courseId, courseTitle) => {
            if (enrollCourseIdInput) enrollCourseIdInput.value = courseId || '';
            if (enrollCourseTitle) enrollCourseTitle.textContent = courseTitle || 'IELTS Course';
            if (!ieltsEnrollModal || !ieltsEnrollModalCard) return;

            ieltsEnrollModal.classList.remove('hidden');
            ieltsEnrollModal.classList.add('flex');

            requestAnimationFrame(() => {
                ieltsEnrollModalCard.classList.remove('opacity-0', 'scale-95');
                ieltsEnrollModalCard.classList.add('opacity-100', 'scale-100');
            });
        };

        const closeEnrollModal = () => {
            if (!ieltsEnrollModal || !ieltsEnrollModalCard) return;

            ieltsEnrollModalCard.classList.remove('opacity-100', 'scale-100');
            ieltsEnrollModalCard.classList.add('opacity-0', 'scale-95');

            setTimeout(() => {
                ieltsEnrollModal.classList.add('hidden');
                ieltsEnrollModal.classList.remove('flex');
            }, 220);
        };

        enrollButtons.forEach((button) => {
            button.addEventListener('click', () => {
                openEnrollModal(button.dataset.courseId, button.dataset.courseTitle);
            });
        });

        if (closeIeltsEnrollModal) {
            closeIeltsEnrollModal.addEventListener('click', closeEnrollModal);
        }

        if (ieltsEnrollModal) {
            ieltsEnrollModal.addEventListener('click', (event) => {
                if (event.target === ieltsEnrollModal) {
                    closeEnrollModal();
                }
            });
        }

        document.addEventListener('keydown', (event) => {
            if (event.key === 'Escape' && ieltsEnrollModal && !ieltsEnrollModal.classList.contains('hidden')) {
                closeEnrollModal();
            }
            if (event.key === 'Escape' && ieltsOfferPopup && !ieltsOfferPopup.classList.contains('hidden')) {
                hideIeltsOfferPopup();
            }
        });

        @if ($errors->any() && $selectedCourse)
            openEnrollModal('{{ $selectedCourse->id }}', @json($selectedCourse->title));
        @endif

        if (ieltsToast) {
            setTimeout(() => {
                ieltsToast.classList.add('translate-x-6', 'opacity-0');
                setTimeout(() => ieltsToast.remove(), 500);
            }, 4000);
        }

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


