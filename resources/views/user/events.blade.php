@extends('layouts.user')
@section('content')
    <!-----------------------------------HERO SECTION----------------------------------------------->
    <section
        class="relative bg-[url('/images/hero-event.png')] bg-cover bg-top bg-no-repeat min-h-[80vh] sm:h-screen flex items-center justify-center px-4">
        <div class="bg-black/30 backdrop-blur-md rounded-2xl shadow-lg p-6 sm:p-8 md:p-12 max-w-4xl w-full border border-white/30 text-center text-white fade-up"
            data-delay="0.3" data-duration="1.5">
            <h1 class="text-xl sm:text-2xl md:text-4xl font-bold mb-4 leading-snug fade-up" data-delay="0.6"
                data-duration="1.2">
                Upcoming Events & Webinars
            </h1>
            <p class="text-sm sm:text-base md:text-lg mb-6 text-gray-100 px-2 sm:px-4 fade-up" data-delay="0.8"
                data-duration="1.2">
                Join our live sessions to stay updated on scholarships, admissions, and test preparation from global
                experts.
            </p>

            <div class=":flex fade-up" data-delay="1.0" data-duration="1.2">
                <a href="/single-event"
                    class="relative overflow-hidden bg-[#74BF1A] text-white px-5 py-2.5 rounded-lg font-semibold group transition-all duration-300 inline-block">

                    <span class="relative z-10 flex items-center gap-2">
                        Join Now
                    </span>

                    <span
                        class="absolute inset-0 bg-green-600 translate-x-full group-hover:translate-x-0 transition-transform duration-300"></span>
                </a>
            </div>

            <div class="flex flex-wrap items-center justify-center gap-4 sm:gap-6 mt-4 fade-up" data-delay="1.2"
                data-duration="1.2">
                <p class="text-base sm:text-lg md:text-xl font-semibold w-full sm:w-auto">
                    Contact Us:
                </p>
                <div class="flex justify-center gap-4 sm:gap-6">
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


    <!-----------------------------------UPCOMING EVENT SECTION----------------------------------------------->
    <section class="py-16 bg-[#F6F6F6]">
        <div class="px-6 md:px-12">
            <h2 class="text-2xl md:text-4xl font-bold mb-6 text-center slide-down" data-delay="0.2" data-duration="1.2">
                Our <span class="text-[#74BF1A]">Upcoming</span> Events
            </h2>
            <p class="text-base sm:text-lg md:text-xl text-center mb-12 text-gray-600 fade-up" data-delay="0.4"
                data-duration="1.2">
                Stay informed and inspired! Join our upcoming seminars, university meetups, and study abroad orientation
                sessions.
            </p>

            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3 stagger-up" data-stagger="0.2" data-delay="0.6"
                data-duration="1.0">

                <div class="bg-[#092962] rounded-2xl shadow-lg overflow-hidden">
                    <img src="images/single-blog.png" alt="UK Education Fair" class="w-full h-60 object-cover p-4" />
                    <div class="p-6 text-white">
                        <h3 class="font-bold text-xl mb-3">UK Education Fair 2025</h3>
                        <p class="text-sm mb-4 text-gray-200">
                            Meet top-ranked UK universities, explore scholarships, and get on-the-spot admission guidance
                            from our experienced consultants.
                        </p>

                        <ul class="space-y-3 text-sm">
                            <li class="flex items-center gap-2">
                                <i class="fa-regular fa-calendar text-[#74BF1A]"></i>
                                <span>05 May, 2025</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <i class="fa-regular fa-clock text-[#74BF1A]"></i>
                                <span>10:00 AM</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <i class="fa-solid fa-user-tie text-[#74BF1A]"></i>
                                <span>Mr. David Miller</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <i class="fa-solid fa-location-dot text-[#74BF1A]"></i>
                                <span>Global Mind Office, Lahore</span>
                            </li>
                        </ul>

                        <a href="/single-event"
                            class="mt-6 bg-[#74BF1A] text-white font-semibold py-2 px-8 rounded-lg hover:bg-green-500 transition w-full sm:w-auto inline-block">
                            Register Now
                        </a>
                    </div>
                </div>

                <div class="bg-[#092962] rounded-2xl shadow-lg overflow-hidden">
                    <img src="images/single-blog.png" alt="Australia Study Visa Seminar"
                        class="w-full h-60 object-cover p-4" />
                    <div class="p-6 text-white">
                        <h3 class="font-bold text-xl mb-3">Australia Study Visa Seminar</h3>
                        <p class="text-sm mb-4 text-gray-200">
                            Learn about Australia’s admission process, visa updates, and scholarship opportunities for 2025
                            intake.Register as soon as possible.
                        </p>

                        <ul class="space-y-3 text-sm">
                            <li class="flex items-center gap-2">
                                <i class="fa-regular fa-calendar text-[#74BF1A]"></i>
                                <span>20 May, 2025</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <i class="fa-regular fa-clock text-[#74BF1A]"></i>
                                <span>02:00 PM</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <i class="fa-solid fa-user-tie text-[#74BF1A]"></i>
                                <span>Ms. Sarah Johnson</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <i class="fa-solid fa-location-dot text-[#74BF1A]"></i>
                                <span>Global Mind Office, Karachi</span>
                            </li>
                        </ul>

                        <a href="/single-event"
                            class="mt-6 bg-[#74BF1A] text-white font-semibold py-2 px-8 rounded-lg hover:bg-green-500 transition w-full sm:w-auto inline-block">
                            Register Now
                        </a>
                    </div>
                </div>

                <div class="bg-[#092962] rounded-2xl shadow-lg overflow-hidden">
                    <img src="images/single-blog.png" alt="Canada Admissions Workshop"
                        class="w-full h-60 object-cover p-4" />
                    <div class="p-6 text-white">
                        <h3 class="font-bold text-xl mb-3">Canada Admissions Workshop</h3>
                        <p class="text-sm mb-4 text-gray-200">
                            Get step-by-step assistance for applying to Canadian universities, writing SOPs, and
                            understanding the visa process.
                        </p>

                        <ul class="space-y-3 text-sm">
                            <li class="flex items-center gap-2">
                                <i class="fa-regular fa-calendar text-[#74BF1A]"></i>
                                <span>10 June, 2025</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <i class="fa-regular fa-clock text-[#74BF1A]"></i>
                                <span>11:30 AM</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <i class="fa-solid fa-user-tie text-[#74BF1A]"></i>
                                <span>Mr. Ahsan Raza</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <i class="fa-solid fa-location-dot text-[#74BF1A]"></i>
                                <span>Global Mind Office, Islamabad</span>
                            </li>
                        </ul>

                        <a href="/single-event"
                            class="mt-6 bg-[#74BF1A] text-white font-semibold py-2 px-8 rounded-lg hover:bg-green-500 transition w-full sm:w-auto inline-block">
                            Register Now
                        </a>
                    </div>
                </div>
            </div>

            <div class="text-center mt-10 fade-up" data-delay="1.2" data-duration="1.2">
                <a href="#" class="text-[#092962] text-lg md:text-xl font-semibold hover:text-[#74BF1A] transition">
                    View More
                </a>
            </div>
        </div>
    </section>

    <!--TABS SECTION----------------------------------------------->

    <section class="py-16">
        <div class="px-6 md:px-12">
            <h2 class="text-2xl md:text-4xl font-bold mb-6 text-center slide-down" data-delay="0.2" data-duration="1.2">
                Our <span class="text-[#74BF1A]">Upcoming</span> Events
            </h2>
            <p class="text-base sm:text-lg md:text-xl text-center mb-12 text-gray-600 fade-up" data-delay="0.4"
                data-duration="1.2">
                Boost your test scores with expert resources and helpful workshops.
            </p>

            <div class="flex justify-center mb-10 space-x-4 fade-up" data-delay="0.6" data-duration="1.2">
                <button
                    class="tab-btn bg-[#092962] text-white px-6 py-2 rounded-lg font-semibold hover:bg-[#74BF1A] transition active"
                    data-tab="all">
                    All Events
                </button>
                <button
                    class="tab-btn bg-[#092962] text-white px-6 py-2 rounded-lg font-semibold hover:bg-[#74BF1A] transition"
                    data-tab="past">
                    Past Events
                </button>
                <button
                    class="tab-btn bg-[#092962] text-white px-6 py-2 rounded-lg font-semibold hover:bg-[#74BF1A] transition"
                    data-tab="webinars">
                    Webinars
                </button>
            </div>

            <div id="eventCards" class="grid gap-8 md:grid-cols-2 lg:grid-cols-3 fade-in" data-delay="1.0"
                data-duration="1.5">
            </div>

            <div class="text-center mt-10 fade-up" data-delay="1.4" data-duration="1.2">
                <a href="#" class="text-[#092962] text-lg md:text-xl font-semibold hover:text-[#74BF1A] transition">
                    View More
                </a>
            </div>
        </div>
    </section>

    <!-- JS -->
    <script>
        const eventData = {
            all: [{
                    title: "IELTS Preparation Workshop",
                    date: "15 May, 2025",
                    time: "10:00 AM",
                    speaker: "Mr. John Smith",
                    location: "London Campus",
                    img: "images/single-blog.png",
                },
                {
                    title: "Scholarship Guidance Session",
                    date: "25 May, 2025",
                    time: "12:00 PM",
                    speaker: "Dr. Sarah Lee",
                    location: "Online Zoom",
                    img: "images/single-blog.png",
                },
                {
                    title: "Career Counseling Seminar",
                    date: "30 May, 2025",
                    time: "02:00 PM",
                    speaker: "Mr. Josh",
                    location: "Global Mind Auditorium",
                    img: "images/single-blog.png",
                },
            ],
            past: [{
                    title: "Study Abroad Fair 2024",
                    date: "10 Dec, 2024",
                    time: "11:00 AM",
                    speaker: "Dr. Emily Carter",
                    location: "New York Campus",
                    img: "images/single-blog.png",
                },
                {
                    title: "Mock Test Marathon",
                    date: "05 Nov, 2024",
                    time: "09:00 AM",
                    speaker: "Mr. Alan Brown",
                    location: "Global Mind Office",
                    img: "images/single-blog.png",
                },
                {
                    title: "Visa Application Session",
                    date: "20 Oct, 2024",
                    time: "04:00 PM",
                    speaker: "Ms. Chloe Adams",
                    location: "Virtual",
                    img: "images/single-blog.png",
                },
            ],
            webinars: [{
                    title: "UK Study Visa Guidelines",
                    date: "10 Jun, 2025",
                    time: "03:00 PM",
                    speaker: "Mr. Jacob",
                    location: "Zoom Meeting",
                    img: "images/single-blog.png",
                },
                {
                    title: "How to Win Scholarships Abroad",
                    date: "15 Jun, 2025",
                    time: "05:00 PM",
                    speaker: "Ms. Anna George",
                    location: "Online",
                    img: "images/single-blog.png",
                },
                {
                    title: "IELTS Masterclass",
                    date: "25 Jun, 2025",
                    time: "07:00 PM",
                    speaker: "Mr. Josh",
                    location: "Virtual Event",
                    img: "images/single-blog.png",
                },
            ],
        };

        const eventCardsContainer = document.getElementById("eventCards");
        const tabButtons = document.querySelectorAll(".tab-btn");

        function renderCards(category) {
            const cards = eventData[category]
                .map(
                    (event) => `
        <div class="bg-[#092962] rounded-2xl shadow-lg overflow-hidden">
          <img src="${event.img}" alt="${event.title}" class="w-full h-60 object-cover p-4" />
          <div class="p-6 text-white">
            <h3 class="font-bold text-xl mb-3">${event.title}</h3>
            <p class="text-sm mb-4 text-gray-200">
              Join our event on "${event.title}" to enhance your skills and knowledge for a successful future.
            </p>
            <ul class="space-y-3 text-sm">
              <li class="flex items-center gap-2">
                <i class="fa-regular fa-calendar text-[#74BF1A]"></i>
                <span>${event.date}</span>
              </li>
              <li class="flex items-center gap-2">
                <i class="fa-regular fa-clock text-[#74BF1A]"></i>
                <span>${event.time}</span>
              </li>
              <li class="flex items-center gap-2">
                <i class="fa-solid fa-user-tie text-[#74BF1A]"></i>
                <span>${event.speaker}</span>
              </li>
              <li class="flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-[#74BF1A]"></i>
                <span>${event.location}</span>
              </li>
            </ul>
            <a href="/single-event"
   class="mt-6 bg-[#74BF1A] text-white font-semibold py-2 px-8 rounded-lg hover:bg-green-500 transition w-full sm:w-auto inline-block">
    Register Now
</a>

          </div>
        </div>`
                )
                .join("");

            eventCardsContainer.innerHTML = cards;
        }

        renderCards("all");

        // Tab switching
        tabButtons.forEach((btn) => {
            btn.addEventListener("click", () => {
                document.querySelector(".tab-btn.active").classList.remove("active", "bg-[#74BF1A]");
                btn.classList.add("active", "bg-[#74BF1A]");
                renderCards(btn.dataset.tab);
            });
        });
    </script>


    <!-----------------------------------CTA SECTION----------------------------------------------->

    <section class="py-16 bg-[#F6F6F6]">
        <div class="px-6 md:px-12">
            <div class="max-w-6xl mx-auto text-center bg-[#74BF1A] rounded-2xl p-6 sm:p-10 md:p-16 scale-up"
                data-delay="0.3" data-duration="1.2">

                <h1 class="text-2xl md:text-3xl font-bold mb-4 text-[#092962] fade-up" data-delay="0.6"
                    data-duration="1.0">
                    Limited Seats Available for the IELTS Crash Course Webinar – Register Now!
                </h1>

                <p class="text-white mb-8 fade-up" data-delay="0.8" data-duration="1.0">
                    Join our intensive IELTS Crash Course Webinar designed to help you boost your band score in record time.
                    Learn expert strategies, get practice tips, and gain confidence from certified instructors guiding you
                    through each module of the IELTS test.
                </p>

                <div class="fade-up" data-delay="1.0" data-duration="1.0">
                    <button
                        class="bg-[#092962] text-white px-12 py-3 rounded-lg font-semibold hover:bg-green-600 transition">
                        Register Now
                    </button>
                </div>
            </div>
        </div>
    </section>
@endsection
