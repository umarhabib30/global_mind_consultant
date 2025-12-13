@extends('layouts.user')
@section('content')
    <!-----------------------------------HERO SECTION----------------------------------------------->


    <style>
        @media (max-width: 1023px) {
            .vertical-text {
                position: relative !important;
                left: 0 !important;
                top: 0 !important;
                transform: none !important;
                writing-mode: horizontal-tb;
                margin-bottom: 1.5rem;
                text-align: center;
            }
        }
    </style>

    <section class="py-[10%] bg-[#F6F6F6]   ">
        <div class="px-4 sm:px-6 md:px-8 lg:px-36">
            <div class="flex flex-col lg:flex-row items-center gap-8">
                <div class="w-full lg:w-1/2 relative flex flex-col items-center lg:items-start slide-left" data-delay="0.4"
                    data-duration="1.5">

                    <span
                        class="vertical-text absolute -left-10 lg:-left-14 xl:-left-52 top-1/2 -translate-y-1/2 -rotate-90 text-xl sm:text-2xl md:text-8xl font-bold text-black tracking-wide fade-in"
                        data-delay="0.7" data-duration="1.0">
                        About
                    </span>

                    <h2 class="text-4xl sm:text-5xl md:text-8xl font-bold leading-tight text-center lg:text-left space-y-2 md:space-y-3 stagger-up"
                        data-stagger="0.1" data-delay="0.9" data-duration="1.2">
                        <span class="text-[#74BF1A] block">Global</span>
                        <span class=" text-[#062254]">Mind</span>
                        <span class=" text-[#062254]">Consultant</span>
                    </h2>
                </div>

                <div class="w-full lg:w-1/2 slide-right" data-delay="0.4" data-duration="1.5">
                    <div class="space-y-4 md:space-y-5 lg:space-y-6 stagger-up" data-stagger="0.2" data-delay="1.0"
                        data-duration="1.2">

                        <p class="text-gray-700 leading-relaxed text-base sm:text-lg md:text-xl">
                            At <strong>Global Mind Consultant</strong>, we believe in empowering
                            individuals to achieve global opportunities through trusted guidance
                            and expert consultancy. Our mission is to simplify the process of
                            studying, working, and settling abroad by providing transparent,
                            professional, and reliable support to every client.
                        </p>

                        <p class="text-gray-700 leading-relaxed text-base sm:text-lg md:text-xl">
                            With years of experience in educational and immigration consultancy,
                            we have successfully helped countless students and professionals
                            reach their dreams across the UK, USA, Canada, and Europe. Our
                            dedicated team ensures that every applicant receives personalized
                            attention, accurate information, and step-by-step assistance from
                            documentation to final approval.
                        </p>

                        <button
                            class="px-10 py-3 bg-[#092962] text-white rounded-lg shadow hover:bg-[#74BF1A] transition text-base md:text-lg">
                            Contact Us
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-----------------------------------VISION SECTION----------------------------------------------->
    <section class="py-16">
        <div class="px-6 md:px-12">
            <div class="flex flex-col lg:flex-row items-center gap-10">
                <div class="w-full lg:w-1/2 slide-right" data-delay="0.2" data-duration="1.4">
                    <div class="overflow-hidden ">
                        <img src="images/AboutUs1.png" alt="Students"
                            class="w-full object-cover cursor-pointer rounded-2xl transform transition duration-500 hover:scale-105 hover:shadow-2xl" />
                    </div>
                </div>

                <div class="w-full lg:w-1/2">
                    <h2 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold mb-6 leading-tight slide-left"
                        data-delay="0.4" data-duration="1.4">
                        Our <br />
                        <span class="text-[#74BF1A]">Vision</span>
                    </h2>

                    <p class="text-gray-600 mb-8 text-base sm:text-lg md:text-xl fade-up" data-delay="0.7"
                        data-duration="1.3">
                        At <strong>Global Mind Consultant</strong>, our vision is to become a
                        globally trusted name in education and immigration consultancy by
                        empowering students and professionals to achieve their international
                        goals with confidence. We envision a world where talent knows no
                        boundaries — where individuals can study, work, and grow beyond
                        borders through proper guidance and support.
                    </p>

                    <p class="text-gray-600 mb-8 text-base sm:text-lg md:text-xl fade-up" data-delay="1.0"
                        data-duration="1.3">
                        We aim to bridge the gap between ambition and opportunity by offering
                        transparent, ethical, and professional consultancy services. Through
                        innovation, integrity, and commitment, Global Mind Consultant strives
                        to inspire success stories that redefine the global future of
                        education and migration.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-----------------------------------CARDS SECTION----------------------------------------------->
    <section class="py-16 bg-[#F6F6F6]">
        <div class="px-6 md:px-12">
            <h2 class="text-2xl md:text-4xl font-bold mb-6 text-center slide-down" data-delay="0.2" data-duration="1.2">
                Scholarship <span class="text-[#74BF1A]">Assistance</span>
            </h2>
            <p class="text-lg md:text-xl text-center mb-12 text-gray-600 fade-up" data-delay="0.5" data-duration="1.2">
                Helping students access global scholarship opportunities and fulfill their dreams of higher education.
            </p>

            <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3 slide-up ">

                <div
                    class="rounded-2xl overflow-hidden shadow-lg bg-white flex flex-col h-[470px] relative
                        cursor-pointer transition duration-300 ease-in-out hover:shadow-2xl hover:-translate-y-1">
                    <div class="bg-[#C7F28C] flex justify-center items-end flex-[0.6]">
                        <img src="images/team.png" alt="Scholarship Advisor"
                            class="object-cover h-full w-full rounded-t-2xl" />
                    </div>
                    <div class="bg-[#092962] text-white text-center p-6 flex-[0.4] flex flex-col justify-between">
                        <div>
                            <h3 class="font-bold text-2xl">Muhammad Nouman Afzal</h3>
                            <p class="text-[#74BF1A] text-xl">Scholarship Coordinator</p>
                            <p class="text-sm mt-2">
                                Expert in guiding students toward international scholarships and preparing strong
                                applications.
                            </p>
                        </div>
                        <div class="flex justify-center gap-4 ">
                            <a href="#" class="hover:text-[#74BF1A]"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="#" class="hover:text-[#74BF1A]"><i class="fa-brands fa-facebook"></i></a>
                        </div>
                    </div>

                    <div
                        class="absolute inset-0 bg-[#092962]/60 flex flex-col items-center justify-center
                            text-white opacity-0 hover:opacity-100 transition-opacity duration-300">
                        <p class="text-xl font-semibold mb-4 text-center px-4">See full bio and services offered by Nouman.
                        </p>
                        <a href="#"
                            class="bg-[#74BF1A] text-white py-2 px-6 rounded-full font-bold hover:bg-white hover:text-[#74BF1A] transition">
                            Read More <i class="fa-solid fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <div
                    class="rounded-2xl overflow-hidden shadow-lg bg-white flex flex-col h-[470px] relative
                        cursor-pointer transition duration-300 ease-in-out hover:shadow-2xl hover:-translate-y-1">
                    <div class="bg-[#C7F28C] flex justify-center items-end flex-[0.6]">
                        <img src="images/team.png" alt="Financial Aid Expert"
                            class="object-cover h-full w-full rounded-t-2xl" />
                    </div>
                    <div class="bg-[#092962] text-white text-center p-6 flex-[0.4] flex flex-col justify-between">
                        <div>
                            <h3 class="font-bold text-2xl">Ayesha Khan</h3>
                            <p class="text-[#74BF1A] text-xl">Financial Aid Advisor</p>
                            <p class="text-sm mt-2">
                                Assists students in identifying need-based aid programs and preparing effective financial
                                documentation.
                            </p>
                        </div>
                        <div class="flex justify-center gap-4 mt-4">
                            <a href="#" class="hover:text-[#74BF1A]"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="#" class="hover:text-[#74BF1A]"><i class="fa-brands fa-facebook"></i></a>
                        </div>
                    </div>

                    <div
                        class="absolute inset-0 bg-[#092962]/90 flex flex-col items-center justify-center
                            text-white opacity-0 hover:opacity-100 transition-opacity duration-300">
                        <p class="text-xl font-semibold mb-4 text-center px-4">See full bio and services offered by Ayesha.
                        </p>
                        <a href="#"
                            class="bg-[#74BF1A] text-white py-2 px-6 rounded-full font-bold hover:bg-white hover:text-[#74BF1A] transition">
                            Read More <i class="fa-solid fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <div
                    class="rounded-2xl overflow-hidden shadow-lg bg-white flex flex-col h-[470px] relative
                        cursor-pointer transition duration-300 ease-in-out hover:shadow-2xl hover:-translate-y-1">
                    <div class="bg-[#C7F28C] flex justify-center items-end flex-[0.6]">
                        <img src="images/team.png" alt="Documentation Expert"
                            class="object-cover h-full w-full rounded-t-2xl" />
                    </div>
                    <div class="bg-[#092962] text-white text-center p-6 flex-[0.4] flex flex-col justify-between">
                        <div>
                            <h3 class="font-bold text-2xl">Hassan Raza</h3>
                            <p class="text-[#74BF1A] text-xl">Application Consultant</p>
                            <p class="text-sm mt-2">
                                Specializes in reviewing scholarship applications and ensuring every detail meets
                                international standards.
                            </p>
                        </div>
                        <div class="flex justify-center gap-4 mt-4">
                            <a href="#" class="hover:text-[#74BF1A]"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="#" class="hover:text-[#74BF1A]"><i class="fa-brands fa-facebook"></i></a>
                        </div>
                    </div>

                    <div
                        class="absolute inset-0 bg-[#092962]/90 flex flex-col items-center justify-center
                            text-white opacity-0 hover:opacity-100 transition-opacity duration-300">
                        <p class="text-xl font-semibold mb-4 text-center px-4">See full bio and services offered by Hassan.
                        </p>
                        <a href="#"
                            class="bg-[#74BF1A] text-white py-2 px-6 rounded-full font-bold hover:bg-white hover:text-[#74BF1A] transition">
                            Read More <i class="fa-solid fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <div
                    class="rounded-2xl overflow-hidden shadow-lg bg-white flex flex-col h-[470px] relative
                        cursor-pointer transition duration-300 ease-in-out hover:shadow-2xl hover:-translate-y-1">
                    <div class="bg-[#C7F28C] flex justify-center items-end flex-[0.6]">
                        <img src="images/team.png" alt="Career Counselor"
                            class="object-cover h-full w-full rounded-t-2xl" />
                    </div>
                    <div class="bg-[#092962] text-white text-center p-6 flex-[0.4] flex flex-col justify-between">
                        <div>
                            <h3 class="font-bold text-2xl">Sara Ahmed</h3>
                            <p class="text-[#74BF1A] text-xl">Career Counselor</p>
                            <p class="text-sm mt-2">
                                Helps students align scholarship options with their academic goals and future career paths.
                            </p>
                        </div>
                        <div class="flex justify-center gap-4 mt-4">
                            <a href="#" class="hover:text-[#74BF1A]"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="#" class="hover:text-[#74BF1A]"><i class="fa-brands fa-facebook"></i></a>
                        </div>
                    </div>

                    <div
                        class="absolute inset-0 bg-[#092962]/90 flex flex-col items-center justify-center
                            text-white opacity-0 hover:opacity-100 transition-opacity duration-300">
                        <p class="text-xl font-semibold mb-4 text-center px-4">See full bio and services offered by Sara.
                        </p>
                        <a href="#"
                            class="bg-[#74BF1A] text-white py-2 px-6 rounded-full font-bold hover:bg-white hover:text-[#74BF1A] transition">
                            Read More <i class="fa-solid fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <div
                    class="rounded-2xl overflow-hidden shadow-lg bg-white flex flex-col h-[470px] relative
                        cursor-pointer transition duration-300 ease-in-out hover:shadow-2xl hover:-translate-y-1">
                    <div class="bg-[#C7F28C] flex justify-center items-end flex-[0.6]">
                        <img src="images/team.png" alt="Essay Specialist"
                            class="object-cover h-full w-full rounded-t-2xl" />
                    </div>
                    <div class="bg-[#092962] text-white text-center p-6 flex-[0.4] flex flex-col justify-between">
                        <div>
                            <h3 class="font-bold text-2xl">Ali Zain</h3>
                            <p class="text-[#74BF1A] text-xl">Essay Specialist</p>
                            <p class="text-sm mt-2">
                                Guides students in writing compelling personal statements that stand out to scholarship
                                committees.
                            </p>
                        </div>
                        <div class="flex justify-center gap-4 mt-4">
                            <a href="#" class="hover:text-[#74BF1A]"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="#" class="hover:text-[#74BF1A]"><i class="fa-brands fa-facebook"></i></a>
                        </div>
                    </div>

                    <div
                        class="absolute inset-0 bg-[#092962]/90 flex flex-col items-center justify-center
                            text-white opacity-0 hover:opacity-100 transition-opacity duration-300">
                        <p class="text-xl font-semibold mb-4 text-center px-4">See full bio and services offered by Ali.
                        </p>
                        <a href="#"
                            class="bg-[#74BF1A] text-white py-2 px-6 rounded-full font-bold hover:bg-white hover:text-[#74BF1A] transition">
                            Read More <i class="fa-solid fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <div
                    class="rounded-2xl overflow-hidden shadow-lg bg-white flex flex-col h-[470px] relative
                        cursor-pointer transition duration-300 ease-in-out hover:shadow-2xl hover:-translate-y-1">
                    <div class="bg-[#C7F28C] flex justify-center items-end flex-[0.6]">
                        <img src="images/team.png" alt="Scholarship Mentor"
                            class="object-cover h-full w-full rounded-t-2xl" />
                    </div>
                    <div class="bg-[#092962] text-white text-center p-6 flex-[0.4] flex flex-col justify-between">
                        <div>
                            <h3 class="font-bold text-2xl">Fatima Noor</h3>
                            <p class="text-[#74BF1A] text-xl">Mentorship Lead</p>
                            <p class="text-sm mt-2">
                                Provides personalized mentorship throughout the scholarship journey, from application to
                                admission.
                            </p>
                        </div>
                        <div class="flex justify-center gap-4 mt-4">
                            <a href="#" class="hover:text-[#74BF1A]"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="#" class="hover:text-[#74BF1A]"><i class="fa-brands fa-facebook"></i></a>
                        </div>
                    </div>

                    <div
                        class="absolute inset-0 bg-[#092962]/90 flex flex-col items-center justify-center
                            text-white opacity-0 hover:opacity-100 transition-opacity duration-300">
                        <p class="text-xl font-semibold mb-4 text-center px-4">See full bio and services offered by Fatima.
                        </p>
                        <a href="#"
                            class="bg-[#74BF1A] text-white py-2 px-6 rounded-full font-bold hover:bg-white hover:text-[#74BF1A] transition">
                            Read More <i class="fa-solid fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!----------------------------------- WHY CHOOSE SECTION ----------------------------------------------->

    <section class="py-16 bg-[#F6F6F6]">
        <div class="px-6 md:px-12 overflow-hidden">
            <h2 class="text-2xl md:text-4xl font-bold mb-6 text-center slide-down" data-delay="0.2" data-duration="1.2">
                Why <span class="text-[#74BF1A]">Choose</span> Us
            </h2>
            <p class="text-lg md:text-xl text-center mb-12 text-gray-600 fade-up" data-delay="0.4" data-duration="1.2">
                We are dedicated to providing quality education, career guidance, and
                global opportunities for students to achieve excellence.
            </p>

            <div class="flex flex-col lg:flex-row items-center gap-10">
                <div class="w-full lg:w-1/2 slide-left" data-delay="0.6" data-duration="1.5">
                    <div class="overflow-hidden rounded-2xl shadow-xl">
                        <img src="images/AboutUs3.png" alt="Students"
                            class="w-full h-[500px] sm:h-[600px] lg:h-[750px] xl:h-[800px] object-cover rounded-2xl transform transition duration-500 hover:scale-105 hover:shadow-2xl" />
                    </div>
                </div>

                <div class="w-full lg:w-1/2 slide-right" data-delay="0.6" data-duration="1.5">
                    <div class="flex flex-col gap-6 stagger-up" data-stagger="0.1" data-delay="0.9" data-duration="1.2">

                        <div>
                            <div class="flex items-start gap-3 mb-1">
                                <div
                                    class="min-w-10 h-10 flex items-center justify-center bg-[#74BF1A] text-white rounded-full flex-shrink-0">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-semibold">Quality Education</h3>
                                    <p class="text-gray-600 text-sm mt-1">
                                        We provide high-quality education using modern and
                                        internationally recognized teaching methods.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="flex items-start gap-3 mb-1">
                                <div
                                    class="min-w-10 h-10 flex items-center justify-center bg-[#74BF1A] text-white rounded-full flex-shrink-0">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-semibold">Expert Faculty</h3>
                                    <p class="text-gray-600 text-sm mt-1">
                                        Learn from highly qualified educators and experienced industry
                                        professionals.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="flex items-start gap-3 mb-1">
                                <div
                                    class="min-w-10 h-10 flex items-center justify-center bg-[#74BF1A] text-white rounded-full flex-shrink-0">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-semibold">Modern Facilities</h3>
                                    <p class="text-gray-600 text-sm mt-1">
                                        Our campuses are equipped with advanced technology and
                                        innovative learning spaces.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="flex items-start gap-3 mb-1">
                                <div
                                    class="min-w-10 h-10 flex items-center justify-center bg-[#74BF1A] text-white rounded-full flex-shrink-0">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-semibold">Global Recognition</h3>
                                    <p class="text-gray-600 text-sm mt-1">
                                        Our qualifications are recognized worldwide, giving students a
                                        global edge.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="flex items-start gap-3 mb-1">
                                <div
                                    class="min-w-10 h-10 flex items-center justify-center bg-[#74BF1A] text-white rounded-full flex-shrink-0">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-semibold">Affordable Fees</h3>
                                    <p class="text-gray-600 text-sm mt-1">
                                        We make quality education accessible with flexible and
                                        affordable fee structures.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="flex items-start gap-3 mb-1">
                                <div
                                    class="min-w-10 h-10 flex items-center justify-center bg-[#74BF1A] text-white rounded-full flex-shrink-0">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-semibold">Practical Learning</h3>
                                    <p class="text-gray-600 text-sm mt-1">
                                        We emphasize hands-on experience through real-world projects
                                        and training.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="flex items-start gap-3 mb-1">
                                <div
                                    class="min-w-10 h-10 flex items-center justify-center bg-[#74BF1A] text-white rounded-full flex-shrink-0">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-semibold">Career Support</h3>
                                    <p class="text-gray-600 text-sm mt-1">
                                        Our dedicated counselors help students build successful
                                        careers after graduation.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="flex items-start gap-3 mb-1">
                                <div
                                    class="min-w-10 h-10 flex items-center justify-center bg-[#74BF1A] text-white rounded-full flex-shrink-0">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-semibold">Community Growth</h3>
                                    <p class="text-gray-600 text-sm mt-1">
                                        We focus on leadership, social responsibility, and personal
                                        development for all students.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
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
