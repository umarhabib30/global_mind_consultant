@extends('layouts.user')
@section('content')
    <!-----------------------------------HERO SECTION----------------------------------------------->


    <section class="py-16 pt-36 bg-[#F6F6F6] fade-in overflow-hidden">
        <div class="px-6 md:px-12 ">

            <div class="relative h-48 md:h-64 w-full overflow-hidden rounded-t-3xl ">
                <img src="/images/course-filter.png" alt="Profile Banner" class="w-full h-full object-cover object-center">
                <div class="absolute inset-0 bg-black/10"></div>
            </div>

            <div class="px-6 pb-6 bg-white rounded-b-3xl shadow-sm border border-t-0 border-gray-100">
                <div class="relative flex flex-col md:flex-row md:items-end md:justify-between">

                    <div class="flex flex-col">
                        <div class="relative -mt-16 mb-4 bounce-in" data-delay="0.6">
                            <img src="/images/single-person.jpg" alt="Profile Picture"
                                class="w-32 h-32 rounded-full border-4 border-white object-cover shadow-lg bg-white">
                        </div>

                        <div>
                            <h1 class="text-2xl font-bold text-gray-800 hero-title">Muhammad Umar Bin Kamal</h1>
                            <p class="text-gray-600 font-medium hero-text">Career Counselor</p>
                        </div>
                    </div>

                    <div class="mt-6 md:mt-0 hero-btn">
                        <button id="contactBtn"
                            class="bg-[#76c323] hover:bg-[#65a81e] text-white font-semibold py-2 px-8 rounded-lg transition duration-200 shadow-md">
                            Contact
                        </button>
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
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>

            <h2 class="text-2xl font-bold text-gray-800 mb-2">Get in Touch</h2>
            <p class="text-gray-500 mb-6 text-sm">Fill out the form below and I'll get back to you shortly.</p>

            <form action="#" class="space-y-4">
                <div>
                    <label class="block text-xs font-bold uppercase text-gray-400 mb-1 ml-1">Full Name</label>
                    <input type="text" placeholder="John Doe"
                        class="w-full px-4 py-3 rounded-xl border border-gray-100 bg-gray-50 focus:ring-2 focus:ring-[#76c323] focus:outline-none transition-all">
                </div>
                <div>
                    <label class="block text-xs font-bold uppercase text-gray-400 mb-1 ml-1">Email Address</label>
                    <input type="email" placeholder="john@example.com"
                        class="w-full px-4 py-3 rounded-xl border border-gray-100 bg-gray-50 focus:ring-2 focus:ring-[#76c323] focus:outline-none transition-all">
                </div>
                <div>
                    <label class="block text-xs font-bold uppercase text-gray-400 mb-1 ml-1">Message</label>
                    <textarea rows="4" placeholder="How can I help you?"
                        class="w-full px-4 py-3 rounded-xl border border-gray-100 bg-gray-50 focus:ring-2 focus:ring-[#76c323] focus:outline-none transition-all resize-none"></textarea>
                </div>
                <button type="submit"
                    class="w-full bg-[#76c323] hover:bg-[#65a81e] text-white font-bold py-3 rounded-xl shadow-lg transition-all transform active:scale-95">
                    Send Message
                </button>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const contactBtn = document.getElementById('contactBtn');
            const contactModal = document.getElementById('contactModal');
            const closeModal = document.getElementById('closeModal');
            const modalContent = document.getElementById('modalContent');

            const openForm = () => {
                // Remove 'hidden' and use 'flex' for layout
                contactModal.classList.remove('hidden');
                contactModal.classList.add('flex');

                // Animate overlay
                gsap.to(contactModal, {
                    opacity: 1,
                    duration: 0.3
                });
                // Animate content box
                gsap.to(modalContent, {
                    scale: 1,
                    opacity: 1,
                    duration: 0.4,
                    ease: "back.out(1.7)"
                });

                document.body.style.overflow = 'hidden'; // Stop page scrolling
            };

            const closeForm = () => {
                gsap.to(modalContent, {
                    scale: 0.9,
                    opacity: 0,
                    duration: 0.2
                });
                gsap.to(contactModal, {
                    opacity: 0,
                    duration: 0.2,
                    onComplete: () => {
                        contactModal.classList.add('hidden');
                        contactModal.classList.remove('flex');
                        document.body.style.overflow = ''; // Resume page scrolling
                    }
                });
            };

            // Event Listeners
            contactBtn.addEventListener('click', openForm);
            closeModal.addEventListener('click', closeForm);

            // Close if clicking on the blurred background
            window.addEventListener('click', (e) => {
                if (e.target === contactModal) {
                    closeForm();
                }
            });
        });
    </script>

    <!-----------------------------------BIO SECTION----------------------------------------------->

    <section class="bg-[#F6F6F6] pb-16 px-6 md:px-12 overflow-hidden">
        <div class=" grid grid-cols-1 md:grid-cols-3 gap-6">

            <div class="md:col-span-2 bg-white p-8 rounded-2xl border border-gray-100 shadow-sm slide-left"
                data-duration="1.2">
                <h2 class="text-xl font-bold text-gray-800 mb-4 word-split">Short bio:</h2>
                <p class="text-gray-500 leading-relaxed mb-8 fade-in" data-delay="0.3">
                    Dedicated Career Counselor with over 8 years of experience helping individuals navigate professional
                    transitions and educational pathways. I specialize in identifying core strengths, aligning personal
                    values with career goals, and providing actionable strategies for long-term professional growth. My
                    mission is to empower clients to find fulfillment in their work through data-driven insights and
                    personalized coaching.
                </p>

                <h3 class="text-lg font-bold text-gray-800 mb-4 word-split">Skills</h3>
                <div class="flex flex-wrap gap-3 stagger-grid">
                    <span
                        class="px-4 py-2 bg-white border border-gray-200 rounded-full text-sm text-gray-600 hover-card cursor-pointer">Vocational
                        Assessment</span>
                    <span
                        class="px-4 py-2 bg-white border border-gray-200 rounded-full text-sm text-gray-600 hover-card cursor-pointer">Resume
                        Strategy</span>
                    <span
                        class="px-4 py-2 bg-white border border-gray-200 rounded-full text-sm text-gray-600 hover-card cursor-pointer">Interview
                        Coaching</span>
                    <span
                        class="px-4 py-2 bg-white border border-gray-200 rounded-full text-sm text-gray-600 hover-card cursor-pointer">LinkedIn
                        Optimization</span>
                    <span
                        class="px-4 py-2 bg-white border border-gray-200 rounded-full text-sm text-gray-600 hover-card cursor-pointer">Career
                        Mapping</span>
                    <span
                        class="px-4 py-2 bg-white border border-gray-200 rounded-full text-sm text-gray-600 hover-card cursor-pointer">Conflict
                        Resolution</span>
                </div>
            </div>

            <div class="bg-white p-8 rounded-2xl border border-gray-100 shadow-sm slide-right" data-duration="1.2"
                data-delay="0.2">
                <h2 class="text-xl font-bold text-gray-800 mb-6">Other ways to connect:</h2>

                <div class="space-y-6 mb-8 stagger-up" data-stagger="0.1">
                    <div class="flex items-center gap-4 group cursor-pointer">
                        <div class="text-blue-600 bounce-in" data-delay="0.4">
                            <svg class="w-6 h-6 transition-transform group-hover:scale-110" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                            </svg>
                        </div>
                        <span
                            class="text-gray-600 font-medium group-hover:text-blue-600 transition-colors">linkedin.com/in/careerpro</span>
                    </div>

                    <div class="flex items-center gap-4 group cursor-pointer">
                        <div class="text-blue-500 bounce-in" data-delay="0.5">
                            <svg class="w-6 h-6 transition-transform group-hover:scale-110" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.469h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                        </div>
                        <span
                            class="text-gray-600 font-medium group-hover:text-blue-500 transition-colors">facebook.com/careercoaching</span>
                    </div>

                    <div class="flex items-center gap-4 group cursor-pointer">
                        <div class="text-red-500 bounce-in" data-delay="0.6">
                            <svg class="w-6 h-6 transition-transform group-hover:scale-110" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M24 5.457v13.909c0 .904-.732 1.636-1.636 1.636h-3.819V11.73L12 16.64l-6.545-4.91v9.273H1.636A1.636 1.636 0 0 1 0 19.366V5.457c0-2.023 2.309-3.178 3.927-1.964L12 9.573l8.073-6.08c1.618-1.214 3.927-.059 3.927 1.964z" />
                            </svg>
                        </div>
                        <span
                            class="text-gray-600 font-medium group-hover:text-red-500 transition-colors">contact@careercounselor.com</span>
                    </div>
                </div>

                <p class="text-xs text-gray-400 leading-relaxed fade-up" data-delay="0.8">
                    Available for private consultations, corporate workshops, and keynote speaking engagements across
                    Pakistan and virtually worldwide.
                </p>
            </div>

        </div>
    </section>
    <!-----------------------------------EDUCATION SECTION----------------------------------------------->

    <section class="bg-[#F6F6F6] pb-16 px-6 md:px-12 overflow-hidden">
        <div class="">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

                <div class="lg:col-span-2 bg-white p-8 md:p-10 rounded-3xl border border-gray-100 shadow-sm slide-left"
                    data-duration="1.2">
                    <h2 class="text-2xl font-bold text-gray-800 mb-8 word-split">Work Experience</h2>

                    <div class="space-y-12 stagger-up" data-stagger="0.2">

                        <div class="relative pl-6 border-l-2 border-blue-50">
                            <div class="flex flex-col md:flex-row md:justify-between md:items-start gap-1">
                                <div>
                                    <h3 class="text-[#1a3a5f] font-bold text-xl">Senior Career Strategist</h3>
                                    <p class="text-gray-600 font-medium">Global Pathways Consulting</p>
                                </div>
                                <span
                                    class="text-gray-500 font-medium text-sm md:text-base bg-gray-50 px-3 py-1 rounded-full">2020
                                    - Present</span>
                            </div>
                            <p class="text-gray-500 text-sm md:text-base mt-4 leading-relaxed fade-in">
                                Lead counselor for high-level executive transitions, providing bespoke career mapping and
                                brand positioning. I have successfully guided over 500+ clients through industry shifts by
                                utilizing advanced psychometric assessments.
                            </p>
                        </div>

                        <div class="relative pl-6 border-l-2 border-blue-50">
                            <div class="flex flex-col md:flex-row md:justify-between md:items-start gap-1">
                                <div>
                                    <h3 class="text-[#1a3a5f] font-bold text-xl">Vocational Guidance Counselor</h3>
                                    <p class="text-gray-600 font-medium">Bright Horizons Education</p>
                                </div>
                                <span
                                    class="text-gray-500 font-medium text-sm md:text-base bg-gray-50 px-3 py-1 rounded-full">2016
                                    - 2020</span>
                            </div>
                            <p class="text-gray-500 text-sm md:text-base mt-4 leading-relaxed fade-in">
                                Specialized in student placement and early-career development. Developed and implemented a
                                campus-wide mentorship program that connected undergraduates with industry professionals.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-8 md:p-10 rounded-3xl border border-gray-100 shadow-sm slide-right"
                    data-duration="1.2" data-delay="0.2">
                    <h2 class="text-2xl font-bold text-gray-800 mb-8 word-split">Education</h2>

                    <div class="space-y-10 ">
                        <div class="hover-card p-4 -m-4 rounded-2xl transition-all cursor-pointer">
                            <h3 class="text-[#1a3a5f] font-bold text-xl">M.S. in Counseling Psychology</h3>
                            <p class="text-gray-600 font-medium mt-1">University of Punjab</p>
                            <p class="text-blue-500 font-bold text-xs mt-1 uppercase tracking-wider">2014 - 2016</p>
                            <p class="text-gray-500 text-sm mt-4 leading-relaxed">
                                Focused on organizational behavior and vocational psychology.
                            </p>
                        </div>

                        <div class="hover-card p-4 -m-4 rounded-2xl transition-all cursor-pointer">
                            <h3 class="text-[#1a3a5f] font-bold text-xl">Certified Career Coach (CPCC)</h3>
                            <p class="text-gray-600 font-medium mt-1 text-sm">International Coaching Federation</p>
                            <p class="text-blue-500 font-bold text-xs mt-1 uppercase tracking-wider">2017</p>
                            <p class="text-gray-500 text-sm mt-4 leading-relaxed">
                                Advanced certification focusing on executive coaching and professional branding.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    </div>
    </section>
@endsection
