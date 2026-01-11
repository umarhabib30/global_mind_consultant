@extends('layouts.user')
@section('content')
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

                <div
                    class="bg-[#74BF1A] rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 reveal-up flex flex-col justify-between group hover:-translate-y-2">
                    <div>
                        <h3 class="text-2xl font-bold text-white mb-4">IELTS Preparation</h3>
                        <p class="text-white/90 text-sm mb-6 leading-relaxed">Master Academic and General Training modules
                            with certified experts.</p>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center gap-3 text-white font-medium text-sm"><i
                                    class="fa-solid fa-check-circle"></i> Speaking Simulation</li>
                            <li class="flex items-center gap-3 text-white font-medium text-sm"><i
                                    class="fa-solid fa-check-circle"></i> Writing Evaluations</li>
                            <li class="flex items-center gap-3 text-white font-medium text-sm"><i
                                    class="fa-solid fa-check-circle"></i> Band 8.0+ Strategies</li>
                            <li class="flex items-center gap-3 text-white font-medium text-sm"><i
                                    class="fa-solid fa-check-circle"></i> Full Mock Exams</li>
                        </ul>
                    </div>
                    <a href="#"
                        class="bg-[#092962] text-white text-center py-3 rounded-xl font-bold hover:bg-white hover:text-[#092962] transition-all w-full">Enroll
                        Now</a>
                </div>

                <div
                    class="bg-[#74BF1A] rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 reveal-up flex flex-col justify-between group hover:-translate-y-2">
                    <div>
                        <h3 class="text-2xl font-bold text-white mb-4">TOEFL iBT</h3>
                        <p class="text-white/90 text-sm mb-6 leading-relaxed">Specialized training for the computer-based
                            test environment.</p>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center gap-3 text-white font-medium text-sm"><i
                                    class="fa-solid fa-check-circle"></i> Integrated Writing</li>
                            <li class="flex items-center gap-3 text-white font-medium text-sm"><i
                                    class="fa-solid fa-check-circle"></i> Note-taking Skills</li>
                            <li class="flex items-center gap-3 text-white font-medium text-sm"><i
                                    class="fa-solid fa-check-circle"></i> Audio Lab Access</li>
                            <li class="flex items-center gap-3 text-white font-medium text-sm"><i
                                    class="fa-solid fa-check-circle"></i> Score Analysis</li>
                        </ul>
                    </div>
                    <a href="#"
                        class="bg-[#092962] text-white text-center py-3 rounded-xl font-bold hover:bg-white hover:text-[#092962] transition-all w-full">Enroll
                        Now</a>
                </div>

                <div
                    class="bg-[#74BF1A] rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 reveal-up flex flex-col justify-between group hover:-translate-y-2">
                    <div>
                        <h3 class="text-2xl font-bold text-white mb-4">PTE Academic</h3>
                        <p class="text-white/90 text-sm mb-6 leading-relaxed">Fast-track your visa with AI-scoring based
                            Pearson training.</p>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center gap-3 text-white font-medium text-sm"><i
                                    class="fa-solid fa-check-circle"></i> AI Mock Tests</li>
                            <li class="flex items-center gap-3 text-white font-medium text-sm"><i
                                    class="fa-solid fa-check-circle"></i> Repeat Sentence Lab</li>
                            <li class="flex items-center gap-3 text-white font-medium text-sm"><i
                                    class="fa-solid fa-check-circle"></i> Rapid Result Prep</li>
                            <li class="flex items-center gap-3 text-white font-medium text-sm"><i
                                    class="fa-solid fa-check-circle"></i> Exam Lab Drills</li>
                        </ul>
                    </div>
                    <a href="#"
                        class="bg-[#092962] text-white text-center py-3 rounded-xl font-bold hover:bg-white hover:text-[#092962] transition-all w-full">Enroll
                        Now</a>
                </div>

                <div
                    class="bg-[#74BF1A] rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 reveal-up flex flex-col justify-between group hover:-translate-y-2">
                    <div>
                        <h3 class="text-2xl font-bold text-white mb-4">GRE Training</h3>
                        <p class="text-white/90 text-sm mb-6 leading-relaxed">Quantitative and Verbal reasoning for Grad
                            school admissions.</p>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center gap-3 text-white font-medium text-sm"><i
                                    class="fa-solid fa-check-circle"></i> Math Concept Drills</li>
                            <li class="flex items-center gap-3 text-white font-medium text-sm"><i
                                    class="fa-solid fa-check-circle"></i> Analytical Writing</li>
                            <li class="flex items-center gap-3 text-white font-medium text-sm"><i
                                    class="fa-solid fa-check-circle"></i> Vocab Flashcards</li>
                            <li class="flex items-center gap-3 text-white font-medium text-sm"><i
                                    class="fa-solid fa-check-circle"></i> Full Mock Series</li>
                        </ul>
                    </div>
                    <a href="#"
                        class="bg-[#092962] text-white text-center py-3 rounded-xl font-bold hover:bg-white hover:text-[#092962] transition-all w-full">Enroll
                        Now</a>
                </div>

                <div
                    class="bg-[#74BF1A] rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 reveal-up flex flex-col justify-between group hover:-translate-y-2">
                    <div>
                        <h3 class="text-2xl font-bold text-white mb-4">GMAT Prep</h3>
                        <p class="text-white/90 text-sm mb-6 leading-relaxed">Target top-tier Business Schools with expert
                            GMAT coaching.</p>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center gap-3 text-white font-medium text-sm"><i
                                    class="fa-solid fa-check-circle"></i> Data Insights</li>
                            <li class="flex items-center gap-3 text-white font-medium text-sm"><i
                                    class="fa-solid fa-check-circle"></i> Critical Reasoning</li>
                            <li class="flex items-center gap-3 text-white font-medium text-sm"><i
                                    class="fa-solid fa-check-circle"></i> Problem Solving</li>
                            <li class="flex items-center gap-3 text-white font-medium text-sm"><i
                                    class="fa-solid fa-check-circle"></i> Score Improvement</li>
                        </ul>
                    </div>
                    <a href="#"
                        class="bg-[#092962] text-white text-center py-3 rounded-xl font-bold hover:bg-white hover:text-[#092962] transition-all w-full">Enroll
                        Now</a>
                </div>

                <div
                    class="bg-[#74BF1A] rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 reveal-up flex flex-col justify-between group hover:-translate-y-2">
                    <div>
                        <h3 class="text-2xl font-bold text-white mb-4">Spoken English</h3>
                        <p class="text-white/90 text-sm mb-6 leading-relaxed">Improve your fluency and confidence for
                            global communication.</p>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center gap-3 text-white font-medium text-sm"><i
                                    class="fa-solid fa-check-circle"></i> Public Speaking</li>
                            <li class="flex items-center gap-3 text-white font-medium text-sm"><i
                                    class="fa-solid fa-check-circle"></i> Accent Neutralization</li>
                            <li class="flex items-center gap-3 text-white font-medium text-sm"><i
                                    class="fa-solid fa-check-circle"></i> Group Discussions</li>
                            <li class="flex items-center gap-3 text-white font-medium text-sm"><i
                                    class="fa-solid fa-check-circle"></i> Real-life Scenarios</li>
                        </ul>
                    </div>
                    <a href="#"
                        class="bg-[#092962] text-white text-center py-3 rounded-xl font-bold hover:bg-white hover:text-[#092962] transition-all w-full">Enroll
                        Now</a>
                </div>

            </div>
        </div>
    </section>

    <!----------------------------------- FAQS SECTION ----------------------------------------------->
    <<section class="py-16 bg-white">
        <div class="px-6 md:px-12">
            <h2 class="text-2xl md:text-4xl font-bold text-center mb-10 slide-down" data-delay="0.2" data-duration="1.2">
                Frequently Asked <span class="text-[#74BF1A]">Questions</span>
            </h2>

            <div class="space-y-6 fade-in" data-delay="0.5" data-duration="1.0">

                <div
                    class="faq-item border rounded-lg overflow-hidden shadow-[0_4px_12px_rgba(0,0,0,0.1)] transition-all duration-300">
                    <button
                        class="w-full flex items-center justify-between px-4 py-3 text-left font-medium text-gray-800 focus:outline-none faq-toggle">
                        <div class="flex items-center gap-4">
                            <span class="text-[#74BF1A] font-bold text-lg">1</span>
                            <span>What is the main purpose of Global Mind Consultants?</span>
                        </div>
                        <i class="fa-solid fa-chevron-right text-[#74BF1A] transition-transform duration-300"></i>
                    </button>
                    <div class="faq-content hidden px-12 pb-4 text-gray-600">
                        Global Mind Consultants is dedicated to guiding students and professionals
                        towards global education and career opportunities by providing expert
                        counseling, admission support, and scholarship assistance.
                    </div>
                </div>

                <div
                    class="faq-item border rounded-lg overflow-hidden shadow-[0_4px_12px_rgba(0,0,0,0.1)] transition-all duration-300">
                    <button
                        class="w-full flex items-center justify-between px-4 py-3 text-left font-medium text-gray-800 focus:outline-none faq-toggle">
                        <div class="flex items-center gap-4">
                            <span class="text-[#74BF1A] font-bold text-lg">2</span>
                            <span>How long has Global Mind Consultants been operating?</span>
                        </div>
                        <i class="fa-solid fa-chevron-right text-[#74BF1A] transition-transform duration-300"></i>
                    </button>
                    <div class="faq-content hidden px-12 pb-4 text-gray-600">
                        We have been serving students for several years, building strong partnerships
                        with international universities and ensuring successful admissions for
                        thousands of students across the globe.
                    </div>
                </div>

                <div
                    class="faq-item border rounded-lg overflow-hidden shadow-[0_4px_12px_rgba(0,0,0,0.1)] transition-all duration-300">
                    <button
                        class="w-full flex items-center justify-between px-4 py-3 text-left font-medium text-gray-800 focus:outline-none faq-toggle">
                        <div class="flex items-center gap-4">
                            <span class="text-[#74BF1A] font-bold text-lg">3</span>
                            <span>What services does Global Mind Consultants provide?</span>
                        </div>
                        <i class="fa-solid fa-chevron-right text-[#74BF1A] transition-transform duration-300"></i>
                    </button>
                    <div class="faq-content hidden px-12 pb-4 text-gray-600">
                        We offer career counseling, admission guidance, scholarship assistance,
                        visa support, document preparation, and pre-departure orientation to
                        make your study abroad journey seamless.
                    </div>
                </div>

                <div
                    class="faq-item border rounded-lg overflow-hidden shadow-[0_4px_12px_rgba(0,0,0,0.1)] transition-all duration-300">
                    <button
                        class="w-full flex items-center justify-between px-4 py-3 text-left font-medium text-gray-800 focus:outline-none faq-toggle">
                        <div class="flex items-center gap-4">
                            <span class="text-[#74BF1A] font-bold text-lg">4</span>
                            <span>What makes Global Mind Consultants different?</span>
                        </div>
                        <i class="fa-solid fa-chevron-right text-[#74BF1A] transition-transform duration-300"></i>
                    </button>
                    <div class="faq-content hidden px-12 pb-4 text-gray-600">
                        Our personalized counseling approach, experienced team, transparent
                        process, and long-standing relationships with top universities make us
                        a trusted name in international education consulting.
                    </div>
                </div>

                <div
                    class="faq-item border rounded-lg overflow-hidden shadow-[0_4px_12px_rgba(0,0,0,0.1)] transition-all duration-300">
                    <button
                        class="w-full flex items-center justify-between px-4 py-3 text-left font-medium text-gray-800 focus:outline-none faq-toggle">
                        <div class="flex items-center gap-4">
                            <span class="text-[#74BF1A] font-bold text-lg">5</span>
                            <span>How can I get in touch with your team?</span>
                        </div>
                        <i class="fa-solid fa-chevron-right text-[#74BF1A] transition-transform duration-300"></i>
                    </button>
                    <div class="faq-content hidden px-12 pb-4 text-gray-600">
                        You can reach out via our website contact form, email, or visit our
                        nearest office. Our counselors are always ready to assist you with
                        your queries and guide you through every step.
                    </div>
                </div>
            </div>
        </div>
        </section>
        <!-- Accordion Script -->
        <script>
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
