@extends('layouts.user')
@section('content')
    <!-----------------------------------HERO SECTION----------------------------------------------->
    <section
        class="relative bg-[url('/images/hero-bg-destination.jpg')] bg-cover bg-center w-full h-screen flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 bg-black bg-opacity-50 fade-in" data-delay="0.2" data-duration="1.8"></div>

        <div class="relative z-10 max-w-5xl text-center text-white p-6">

            <p class="text-lg md:text-xl font-medium text-[#74BF1A] mb-3 fade-up" data-delay="0.8" data-duration="1.0">
                Your Gateway to Global Education
            </p>

            <h1 class="text-4xl sm:text-6xl md:text-7xl font-extrabold leading-tight mb-6 slide-down" data-delay="1.1"
                data-duration="1.5">
                Explore <span class="text-[#74BF1A]">Top Study Destinations</span> Worldwide
            </h1>

            <p class="text-base md:text-xl text-gray-200 mb-8 fade-up" data-delay="1.5" data-duration="1.2">
                Find comprehensive guides, essential visa information, and personalized advice for studying in the UK, USA,
                Canada, and Australia.
            </p>

            <a href="#"
                class="inline-block py-3 px-8 text-lg font-semibold bg-[#74BF1A] text-white rounded-lg hover:bg-[#5aa012] transition scale-in"
                data-delay="1.8" data-duration="1.0">
                Start Your Journey
            </a>

        </div>
    </section>
    <!-----------------------------------DESTINATIONS CARD SECTION----------------------------------------------->
    <section class="py-16 bg-[#F6F6F6] overflow-hidden">
        <div class="px-6 md:px-12">
            <p class="text-lg md:text-3xl text-center mb-4 text-[#74BF1A] font-bold fade-up" data-delay="0.2"
                data-duration="1.0">
                Study Abroad
            </p>
            <h2 class="text-2xl md:text-4xl font-bold mb-10 text-center fade-up" data-delay="0.4" data-duration="1.0">
                Explore Comprehensive Information on Top Study Destinations Around the
                Globe
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 justify-items-center stagger-up"
                data-stagger="0.1" data-delay="0.6" data-duration="1.0">

                <div
                    class="relative w-full max-w-[391px] h-[500px] rounded-2xl overflow-hidden group cursor-pointer shadow-lg hover:shadow-2xl transition-shadow duration-300">
                    <div
                        class="absolute inset-0 bg-[url('/images/usa.jpg')] bg-cover bg-center transition-transform duration-500 group-hover:scale-110">
                    </div>
                    <div class="absolute inset-0 bg-black/40 transition-all duration-500 group-hover:bg-black/60"></div>

                    <div
                        class="absolute inset-x-0 bottom-0 p-6 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-500 ease-out">
                        <h1 class="text-2xl md:text-3xl font-bold mb-2">
                            USA
                        </h1>
                        <p class="text-sm text-gray-200">
                            Experience world-class innovation and flexible degree paths at leading US universities.
                        </p>
                    </div>
                </div>

                <div
                    class="relative w-full max-w-[391px] h-[500px] rounded-2xl overflow-hidden group cursor-pointer shadow-lg hover:shadow-2xl transition-shadow duration-300">
                    <div
                        class="absolute inset-0 bg-[url('/images/uk.png')] bg-cover bg-center transition-transform duration-500 group-hover:scale-110">
                    </div>
                    <div class="absolute inset-0 bg-black/40 transition-all duration-500 group-hover:bg-black/60"></div>

                    <div
                        class="absolute inset-x-0 bottom-0 p-6 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-500 ease-out">
                        <h1 class="text-2xl md:text-3xl font-bold mb-2">
                            UK
                        </h1>
                        <p class="text-sm text-gray-200">
                            Access prestigious, historic universities and shorter, specialized master's programs.
                        </p>
                    </div>
                </div>

                <div
                    class="relative w-full max-w-[391px] h-[500px] rounded-2xl overflow-hidden group cursor-pointer shadow-lg hover:shadow-2xl transition-shadow duration-300">
                    <div
                        class="absolute inset-0 bg-[url('/images/france.jpg')] bg-cover bg-center transition-transform duration-500 group-hover:scale-110">
                    </div>
                    <div class="absolute inset-0 bg-black/40 transition-all duration-500 group-hover:bg-black/60"></div>

                    <div
                        class="absolute inset-x-0 bottom-0 p-6 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-500 ease-out">
                        <h1 class="text-2xl md:text-3xl font-bold mb-2">
                            France
                        </h1>
                        <p class="text-sm text-gray-200">
                            Dive into culture, excellent research, and affordable tuition fees in beautiful cities.
                        </p>
                    </div>
                </div>

                <div
                    class="relative w-full max-w-[391px] h-[500px] rounded-2xl overflow-hidden group cursor-pointer shadow-lg hover:shadow-2xl transition-shadow duration-300">
                    <div
                        class="absolute inset-0 bg-[url('/images/germany.jpg')] bg-cover bg-center transition-transform duration-500 group-hover:scale-110">
                    </div>
                    <div class="absolute inset-0 bg-black/40 transition-all duration-500 group-hover:bg-black/60"></div>

                    <div
                        class="absolute inset-x-0 bottom-0 p-6 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-500 ease-out">
                        <h1 class="text-2xl md:text-3xl font-bold mb-2">
                            Germany
                        </h1>
                        <p class="text-sm text-gray-200">
                            Benefit from free or low-cost public education and a strong job market for engineers.
                        </p>
                    </div>
                </div>

                <div
                    class="relative w-full max-w-[391px] h-[500px] rounded-2xl overflow-hidden group cursor-pointer shadow-lg hover:shadow-2xl transition-shadow duration-300">
                    <div
                        class="absolute inset-0 bg-[url('/images/italy.jpg')] bg-cover bg-center transition-transform duration-500 group-hover:scale-110">
                    </div>
                    <div class="absolute inset-0 bg-black/40 transition-all duration-500 group-hover:bg-black/60"></div>

                    <div
                        class="absolute inset-x-0 bottom-0 p-6 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-500 ease-out">
                        <h1 class="text-2xl md:text-3xl font-bold mb-2">
                            Italy
                        </h1>
                        <p class="text-sm text-gray-200">
                            Study at ancient universities with high academic standards, particularly in the arts.
                        </p>
                    </div>
                </div>

                <div
                    class="relative w-full max-w-[391px] h-[500px] rounded-2xl overflow-hidden group cursor-pointer shadow-lg hover:shadow-2xl transition-shadow duration-300">
                    <div
                        class="absolute inset-0 bg-[url('/images/uae.jpg')] bg-cover bg-center transition-transform duration-500 group-hover:scale-110">
                    </div>
                    <div class="absolute inset-0 bg-black/40 transition-all duration-500 group-hover:bg-black/60"></div>

                    <div
                        class="absolute inset-x-0 bottom-0 p-6 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-500 ease-out">
                        <h1 class="text-2xl md:text-3xl font-bold mb-2">
                            UAE
                        </h1>
                        <p class="text-sm text-gray-200">
                            Attend international branch campuses in a rapidly growing economic hub in the Middle East.
                        </p>
                    </div>
                </div>

                <div
                    class="relative w-full max-w-[391px] h-[500px] rounded-2xl overflow-hidden group cursor-pointer shadow-lg hover:shadow-2xl transition-shadow duration-300">
                    <div
                        class="absolute inset-0 bg-[url('/images/sweden.jpg')] bg-cover bg-center transition-transform duration-500 group-hover:scale-110">
                    </div>
                    <div class="absolute inset-0 bg-black/40 transition-all duration-500 group-hover:bg-black/60"></div>

                    <div
                        class="absolute inset-x-0 bottom-0 p-6 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-500 ease-out">
                        <h1 class="text-2xl md:text-3xl font-bold mb-2">
                            Sweden
                        </h1>
                        <p class="text-sm text-gray-200">
                            Focus on sustainability and innovation with degrees taught fully in English.
                        </p>
                    </div>
                </div>

                <div
                    class="relative w-full max-w-[391px] h-[500px] rounded-2xl overflow-hidden group cursor-pointer shadow-lg hover:shadow-2xl transition-shadow duration-300">
                    <div
                        class="absolute inset-0 bg-[url('/images/finland.jpg')] bg-cover bg-center transition-transform duration-500 group-hover:scale-110">
                    </div>
                    <div class="absolute inset-0 bg-black/40 transition-all duration-500 group-hover:bg-black/60"></div>

                    <div
                        class="absolute inset-x-0 bottom-0 p-6 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-500 ease-out">
                        <h1 class="text-2xl md:text-3xl font-bold mb-2">
                            Finland
                        </h1>
                        <p class="text-sm text-gray-200">
                            Benefit from a world-renowned education system focusing on equity and creativity.
                        </p>
                    </div>
                </div>

                <div
                    class="relative w-full max-w-[391px] h-[500px] rounded-2xl overflow-hidden group cursor-pointer shadow-lg hover:shadow-2xl transition-shadow duration-300">
                    <div
                        class="absolute inset-0 bg-[url('/images/turkey.jpg')] bg-cover bg-center transition-transform duration-500 group-hover:scale-110">
                    </div>
                    <div class="absolute inset-0 bg-black/40 transition-all duration-500 group-hover:bg-black/60"></div>

                    <div
                        class="absolute inset-x-0 bottom-0 p-6 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-500 ease-out">
                        <h1 class="text-2xl md:text-3xl font-bold mb-2">
                            Turkey
                        </h1>
                        <p class="text-sm text-gray-200">
                            Study at a crossroads of civilizations with a mix of Eastern and Western culture.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-----------------------------------HELPING SECTION----------------------------------------------->
    <section class="py-16 bg-white overflow-hidden">
        <div class="px-6 md:px-12">
            <div class="flex flex-col lg:flex-row items-center gap-10">

                <div class="w-full lg:w-1/2">

                    <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-4 leading-snug slide-left" data-delay="0.3"
                        data-duration="1.2">
                        Helping You Choose a Top Study Destination
                    </h1>

                    <p class="text-gray-600 mb-8 text-sm sm:text-base md:text-lg leading-relaxed slide-left"
                        data-delay="0.6" data-duration="1.2">
                        Discover the best countries and universities that match your goals,
                        lifestyle, and academic interests. Our expert guidance helps you make
                        the right decision — from selecting your dream destination to securing
                        your admission successfully.
                    </p>

                    <div class="space-y-6 stagger-up" data-stagger="0.2" data-delay="1.0" data-duration="1.0">

                        <div class="feature-item">
                            <div class="flex items-center mb-2">
                                <i class="fa-solid fa-check-circle text-[#74BF1A] mr-2 text-xl"></i>
                                <h2 class="text-base sm:text-lg font-semibold">
                                    Personalized Guidance
                                </h2>
                            </div>
                            <p class="text-gray-600 ml-7 text-sm sm:text-base leading-relaxed">
                                Get one-on-one counseling sessions to choose the right country,
                                course, and university according to your profile.
                            </p>
                        </div>

                        <div class="feature-item">
                            <div class="flex items-center mb-2">
                                <i class="fa-solid fa-check-circle text-[#74BF1A] mr-2 text-xl"></i>
                                <h2 class="text-base sm:text-lg font-semibold">
                                    Scholarship Assistance
                                </h2>
                            </div>
                            <p class="text-gray-600 ml-7 text-sm sm:text-base leading-relaxed">
                                Learn about scholarship opportunities and eligibility to make your
                                education abroad more affordable.
                            </p>
                        </div>

                        <div class="feature-item">
                            <div class="flex items-center mb-2">
                                <i class="fa-solid fa-check-circle text-[#74BF1A] mr-2 text-xl"></i>
                                <h2 class="text-base sm:text-lg font-semibold">
                                    Application Support
                                </h2>
                            </div>
                            <p class="text-gray-600 ml-7 text-sm sm:text-base leading-relaxed">
                                From university shortlisting to documentation and visa guidance,
                                we’re with you at every step of the process.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-1/2">
                    <div class="overflow-hidden rounded-2xl shadow-lg slide-right" data-delay="0.8" data-duration="1.2">
                        <img src="images/student.jpg" alt="Students studying abroad"
                            class="w-full h-auto object-cover rounded-2xl transform transition duration-500 hover:scale-105 hover:shadow-2xl" />
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-----------------------------------PROVIDE SECTION----------------------------------------------->
    <section class="py-16 bg-[#F6F6F6] overflow-hidden">
        <div class="px-6 md:px-12">
            <div class="flex flex-col lg:flex-row items-center gap-10">

                <div class="w-full lg:w-1/2">
                    <div class="overflow-hidden rounded-2xl shadow-lg slide-left" data-delay="0.5" data-duration="1.2">
                        <img src="images/students.jpg" alt="Students Abroad"
                            class="w-full h-auto object-cover rounded-2xl transform transition duration-500 hover:scale-105 hover:shadow-2xl" />
                    </div>
                </div>

                <div class="w-full lg:w-1/2">

                    <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-4 leading-snug fade-up" data-delay="0.3"
                        data-duration="1.0">
                        What We Provide for Study Abroad Destination Services
                    </h1>

                    <p class="text-gray-600 mb-8 text-sm sm:text-base md:text-lg leading-relaxed fade-up" data-delay="0.5"
                        data-duration="1.0">
                        We offer complete guidance and support to help students achieve their dream
                        of studying abroad. From career counseling to admission and visa assistance,
                        our team ensures a smooth journey towards your international education goals.
                    </p>

                    <div class="space-y-6 stagger-right" data-stagger="0.15" data-delay="0.8" data-duration="0.9">

                        <div class="feature-item">
                            <div class="flex items-center mb-2">
                                <i class="fa-solid fa-check-circle text-[#74BF1A] mr-2 text-xl"></i>
                                <h2 class="text-base sm:text-lg font-semibold">
                                    Expert Counseling Sessions
                                </h2>
                            </div>
                            <p class="text-gray-600 ml-7 text-sm sm:text-base leading-relaxed">
                                Get professional guidance from experienced counselors to choose the best
                                country, university, and program for your future.
                            </p>
                        </div>

                        <div class="feature-item">
                            <div class="flex items-center mb-2">
                                <i class="fa-solid fa-check-circle text-[#74BF1A] mr-2 text-xl"></i>
                                <h2 class="text-base sm:text-lg font-semibold">
                                    Application & Admission Support
                                </h2>
                            </div>
                            <p class="text-gray-600 ml-7 text-sm sm:text-base leading-relaxed">
                                We help you prepare and submit all required documents,
                                ensuring your application stands out and meets university requirements.
                            </p>
                        </div>

                        <div class="feature-item">
                            <div class="flex items-center mb-2">
                                <i class="fa-solid fa-check-circle text-[#74BF1A] mr-2 text-xl"></i>
                                <h2 class="text-base sm:text-lg font-semibold">
                                    Visa & Pre-Departure Assistance
                                </h2>
                            </div>
                            <p class="text-gray-600 ml-7 text-sm sm:text-base leading-relaxed">
                                Our team provides end-to-end support for visa applications,
                                interviews, and pre-departure guidance to ensure a seamless transition abroad.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-----------------------------------CASE STUDY SECTION----------------------------------------------->
    <section class="py-16 bg-white overflow-hidden">
        <div class="px-6 md:px-12">
            <div class="flex flex-col lg:flex-row items-center gap-10">

                <div class="w-full lg:w-1/2">

                    <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-4 leading-snug slide-left" data-delay="0.3"
                        data-duration="1.2">
                        Key Factors to Consider While Choosing to Study Abroad
                    </h1>

                    <p class="text-gray-600 mb-8 text-sm sm:text-base md:text-lg leading-relaxed slide-left"
                        data-delay="0.5" data-duration="1.2">
                        Selecting the right study destination requires thoughtful planning.
                        From education quality to living expenses and cultural exposure,
                        understanding these key factors helps you make an an informed and confident decision
                        about your future abroad.
                    </p>

                    <div class="space-y-6 stagger-up" data-stagger="0.15" data-delay="0.8" data-duration="1.0">

                        <div class="feature-item">
                            <div class="flex items-center mb-2">
                                <i class="fa-solid fa-check-circle text-[#74BF1A] mr-2 text-xl"></i>
                                <h2 class="text-base sm:text-lg font-semibold">
                                    Academic Excellence
                                </h2>
                            </div>
                            <p class="text-gray-600 ml-7 text-sm sm:text-base leading-relaxed">
                                Research the global ranking, reputation, and specialization of universities
                                to ensure the program aligns with your academic and career goals.
                            </p>
                        </div>

                        <div class="feature-item">
                            <div class="flex items-center mb-2">
                                <i class="fa-solid fa-check-circle text-[#74BF1A] mr-2 text-xl"></i>
                                <h2 class="text-base sm:text-lg font-semibold">
                                    Cost of Living & Tuition Fees
                                </h2>
                            </div>
                            <p class="text-gray-600 ml-7 text-sm sm:text-base leading-relaxed">
                                Compare tuition costs, accommodation, and daily expenses to choose
                                a destination that fits your financial plan without compromising on quality.
                            </p>
                        </div>

                        <div class="feature-item">
                            <div class="flex items-center mb-2">
                                <i class="fa-solid fa-check-circle text-[#74BF1A] mr-2 text-xl"></i>
                                <h2 class="text-base sm:text-lg font-semibold">
                                    Work & Immigration Opportunities
                                </h2>
                            </div>
                            <p class="text-gray-600 ml-7 text-sm sm:text-base leading-relaxed">
                                Explore part-time work options, post-study work permits, and immigration pathways
                                to maximize your international exposure and career prospects.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-1/2">
                    <div class="overflow-hidden rounded-2xl shadow-lg slide-right" data-delay="0.8" data-duration="1.2">
                        <img src="images/girl.jpg" alt="Student studying abroad"
                            class="w-full h-auto object-cover rounded-2xl transform transition duration-500 hover:scale-105 hover:shadow-2xl" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-----------------------------------CTA SECTION----------------------------------------------->
    <section class="py-16 bg-[#F6F6F6] overflow-hidden">
        <div class="px-6 md:px-12 text-center">

            <p class="text-xl md:text-4xl mb-6 font-bold fade-up" data-delay="0.2" data-duration="1.0">
                For further help, <span class="text-[#74BF1A]">book a call</span> now!
            </p>

            <a href="#"
                class="inline-block bg-[#74BF1A] text-white px-6 py-3 rounded-lg hover:bg-green-600 transition scale-in"
                data-delay="0.6" data-duration="0.8">
                Talk to an Expert
            </a>
        </div>
    </section>

    <!----------------------------------- FAQS SECTION ----------------------------------------------->
    <section class="py-16 bg-white">
        <div class="px-6 md:px-12 ">
            <h2 class="text-2xl md:text-4xl font-bold text-center mb-10 slide-down" data-delay="0.2" data-duration="1.2">
                Destination <span class="text-[#74BF1A]">FAQs</span>
            </h2>

            <div class="space-y-4 fade-in" data-delay="0.5" data-duration="1.0">
                <div
                    class="faq-item border border-gray-200 rounded-xl overflow-hidden shadow-[0_4px_12px_rgba(0,0,0,0.06)] transition-all duration-300">
                    <button
                        class="w-full flex items-center justify-between px-5 py-4 text-left font-semibold text-gray-800 focus:outline-none faq-toggle">
                        <span>How do I choose the best country for my study goals?</span>
                        <i class="fa-solid fa-chevron-right text-[#74BF1A] transition-transform duration-300"></i>
                    </button>
                    <div class="faq-content hidden px-5 pb-5 text-gray-600 leading-relaxed">
                        Compare your academic interests, budget, preferred climate, language, and future work options. We
                        help you shortlist destinations like the USA, UK, France, Germany, Italy, UAE, Sweden, Finland,
                        and Turkey based on your profile.
                    </div>
                </div>

                <div
                    class="faq-item border border-gray-200 rounded-xl overflow-hidden shadow-[0_4px_12px_rgba(0,0,0,0.06)] transition-all duration-300">
                    <button
                        class="w-full flex items-center justify-between px-5 py-4 text-left font-semibold text-gray-800 focus:outline-none faq-toggle">
                        <span>Which destination is more affordable for tuition and living costs?</span>
                        <i class="fa-solid fa-chevron-right text-[#74BF1A] transition-transform duration-300"></i>
                    </button>
                    <div class="faq-content hidden px-5 pb-5 text-gray-600 leading-relaxed">
                        Costs vary by city and university. In general, Germany, France, Turkey, and Italy can be more
                        budget-friendly than some USA or UK options. We provide a personalized cost estimate before you
                        apply.
                    </div>
                </div>

                <div
                    class="faq-item border border-gray-200 rounded-xl overflow-hidden shadow-[0_4px_12px_rgba(0,0,0,0.06)] transition-all duration-300">
                    <button
                        class="w-full flex items-center justify-between px-5 py-4 text-left font-semibold text-gray-800 focus:outline-none faq-toggle">
                        <span>Can I get scholarships for these destinations?</span>
                        <i class="fa-solid fa-chevron-right text-[#74BF1A] transition-transform duration-300"></i>
                    </button>
                    <div class="faq-content hidden px-5 pb-5 text-gray-600 leading-relaxed">
                        Yes. Scholarship availability depends on your academic record, English score, and chosen program.
                        We guide you on merit-based, need-based, and university-specific scholarships in each destination.
                    </div>
                </div>

                <div
                    class="faq-item border border-gray-200 rounded-xl overflow-hidden shadow-[0_4px_12px_rgba(0,0,0,0.06)] transition-all duration-300">
                    <button
                        class="w-full flex items-center justify-between px-5 py-4 text-left font-semibold text-gray-800 focus:outline-none faq-toggle">
                        <span>Do you support the visa process after admission?</span>
                        <i class="fa-solid fa-chevron-right text-[#74BF1A] transition-transform duration-300"></i>
                    </button>
                    <div class="faq-content hidden px-5 pb-5 text-gray-600 leading-relaxed">
                        Yes, we support complete visa documentation, file review, interview preparation, and pre-departure
                        guidance so your move is smooth and well planned.
                    </div>
                </div>

                <div
                    class="faq-item border border-gray-200 rounded-xl overflow-hidden shadow-[0_4px_12px_rgba(0,0,0,0.06)] transition-all duration-300">
                    <button
                        class="w-full flex items-center justify-between px-5 py-4 text-left font-semibold text-gray-800 focus:outline-none faq-toggle">
                        <span>How early should I start my study abroad application?</span>
                        <i class="fa-solid fa-chevron-right text-[#74BF1A] transition-transform duration-300"></i>
                    </button>
                    <div class="faq-content hidden px-5 pb-5 text-gray-600 leading-relaxed">
                        Start at least 6 to 12 months before your intended intake. This gives enough time for university
                        shortlisting, document preparation, language tests, admission, visa processing, and accommodation.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.querySelectorAll(".faq-toggle").forEach((btn) => {
            btn.addEventListener("click", () => {
                const item = btn.closest(".faq-item");
                const content = item.querySelector(".faq-content");
                const icon = btn.querySelector("i");
                const isOpen = !content.classList.contains("hidden");

                document.querySelectorAll(".faq-item").forEach((el) => {
                    el.querySelector(".faq-content").classList.add("hidden");
                    el.querySelector(".faq-toggle i").classList.remove("rotate-90");
                    el.classList.remove("border-[#74BF1A]",
                        "shadow-[0_8px_24px_rgba(116,191,26,0.22)]");
                });

                if (!isOpen) {
                    content.classList.remove("hidden");
                    icon.classList.add("rotate-90");
                    item.classList.add("border-[#74BF1A]", "shadow-[0_8px_24px_rgba(116,191,26,0.22)]");
                }
            });
        });
    </script>
@endsection
