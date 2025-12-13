@extends('layouts.user')
@section('content')
    <!-----------------------------------HERO SECTION----------------------------------------------- -->
    <section
        class="relative bg-[url('/images/blog-hero.png')] bg-cover bg-center w-full h-[75vh] md:h-screen flex items-center overflow-hidden">
        <div class="absolute inset-0 bg-black bg-opacity-50 fade-in" data-delay="0.1" data-duration="1.5"></div>

        <div class="relative z-10 text-left px-6 sm:px-12 md:px-20 max-w-3xl ml-auto">
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-white mb-4 leading-tight slide-right"
                data-delay="0.6" data-duration="1.2">
                Explore the Latest Insights on Scholarships & Admissions
            </h2>

            <p class="text-sm sm:text-base md:text-lg text-gray-200 mb-8 leading-relaxed slide-right" data-delay="0.8"
                data-duration="1.2">
                Stay ahead with expert articles, study abroad guides, and scholarship
                updates to help you achieve your academic dreams with confidence.
            </p>

            <div class=":flex slide-right" data-delay="1.0" data-duration="1.2">
                <a href="/consultation-form"
                    class="relative overflow-hidden bg-[#74BF1A] text-white px-5 py-4 rounded-lg font-semibold group transition-all duration-300 inline-block">

                    <span class="relative z-10 flex items-center gap-2">
                        Discover More <i class="fa-solid fa-arrow-right"></i>
                    </span>

                    <span
                        class="absolute inset-0 bg-green-600 translate-x-full group-hover:translate-x-0 transition-transform duration-300"></span>
                </a>
            </div>
        </div>
    </section>

    <!-----------------------------------SEARCH  SECTION----------------------------------------------->

    <section class="py-10">
        <div class="flex items-center justify-center max-w-xl mx-auto slide-down" data-delay="0.2" data-duration="1.2">
            <div class="flex w-full bg-gray-50 rounded-full shadow-md overflow-hidden">
                <input type="text" placeholder="Search Blog Here ..."
                    class="flex-grow px-5 py-3 bg-transparent text-gray-700 placeholder-gray-400 focus:outline-none rounded-full" />

            </div>
            <button
                class="bg-[#0d47a1] text-white p-4 flex items-center justify-center rounded-full hover:bg-blue-900 transition m-1">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </section>

    <!-----------------------------------BLOGS SECTION----------------------------------------------->

    <section class="py-16">
        <div class="px-6 md:px-12">
            <h2 class="text-2xl md:text-4xl font-bold mb-6 text-center slide-down" data-delay="0.2" data-duration="1.2">
                Our <span class="text-[#74BF1A]">Latest</span> Blogs
            </h2>
            <p class="text-lg md:text-xl text-center mb-12 text-gray-600 fade-up" data-delay="0.4" data-duration="1.2">
                Boost your test scores with expert resources
            </p>

            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3 stagger-up" data-stagger="0.2" data-delay="0.6"
                data-duration="1.0">
                <div class="bg-[#74BF1A] rounded-2xl shadow-lg overflow-hidden">
                    <img src="images/single-blog.png" alt="Blog" class="w-full h-62 object-cover p-4 rounded-3xl" />
                    <div class="p-6 text-white">
                        <div class="flex items-center justify-between mb-3">
                            <span
                                class="flex items-center gap-2 bg-white text-[#74BF1A] text-xs font-semibold px-2 py-1 rounded-full">
                                <i class="fa-solid fa-tag"></i> Scholarships
                            </span>
                            <i class="fa-regular fa-heart text-white text-lg hover:text-red-500 transition"></i>
                        </div>

                        <h3 class="font-bold text-[#322F35] text-xl mb-3">
                            Top 5 Scholarships for Pakistani Students in 2025
                        </h3>

                        <p class="text-lg mb-4">
                            Learn about fully funded scholarships available for Pakistani
                            students in top-ranked universities around the world.
                        </p>

                        <ul class="space-y-3 text-sm">
                            <li class="flex items-center gap-2">
                                <i class="fa-regular fa-calendar text-[#092962] text-3xl"></i>
                                05 May, 2025
                            </li>

                            <li class="flex items-center gap-2">
                                <i class="fa-solid fa-user-tie text-[#092962] text-3xl"></i>
                                Mr. Josh
                            </li>
                        </ul>

                        <a href="/single-blog"
                            class="mt-6 py-3 px-8 bg-[#092962] text-white font-semibold rounded-lg hover:bg-green-500 transition inline-block">
                            Read More
                        </a>
                    </div>
                </div>

                <div class="bg-[#74BF1A] rounded-2xl shadow-lg overflow-hidden">
                    <img src="images/single-blog.png" alt="Blog" class="w-full h-62 object-cover p-4 rounded-3xl" />
                    <div class="p-6 text-white">
                        <div class="flex items-center justify-between mb-3">
                            <span
                                class="flex items-center gap-2 bg-white text-[#74BF1A] text-xs font-semibold px-2 py-1 rounded-full">
                                <i class="fa-solid fa-graduation-cap"></i> Admissions
                            </span>
                            <i class="fa-regular fa-heart text-white text-lg hover:text-red-500 transition"></i>
                        </div>

                        <h3 class="font-bold text-[#322F35] text-xl mb-3">
                            How to Choose the Right Country for Higher Studies
                        </h3>

                        <p class="text-lg mb-4">
                            Discover which countries offer the best opportunities and cultural
                            experiences for international students.
                        </p>

                        <ul class="space-y-3 text-sm">
                            <li class="flex items-center gap-2">
                                <i class="fa-regular fa-calendar text-[#092962] text-3xl"></i>
                                06 June, 2025
                            </li>

                            <li class="flex items-center gap-2">
                                <i class="fa-solid fa-user-tie text-[#092962] text-3xl"></i>
                                Ms. Sarah
                            </li>
                        </ul>
                        <a href="/single-blog"
                            class="mt-6 py-3 px-8 bg-[#092962] text-white font-semibold rounded-lg hover:bg-green-500 transition inline-block">
                            Read More
                        </a>

                    </div>
                </div>

                <div class="bg-[#74BF1A] rounded-2xl shadow-lg overflow-hidden">
                    <img src="images/single-blog.png" alt="Blog" class="w-full h-62 object-cover p-4 rounded-3xl" />
                    <div class="p-6 text-white">
                        <div class="flex items-center justify-between mb-3">
                            <span
                                class="flex items-center gap-2 bg-white text-[#74BF1A] text-xs font-semibold px-2 py-1 rounded-full">
                                <i class="fa-solid fa-plane-departure"></i> Visa Tips
                            </span>
                            <i class="fa-regular fa-heart text-white text-lg hover:text-red-500 transition"></i>
                        </div>

                        <h3 class="font-bold text-[#322F35] text-xl mb-3">
                            Tips to Prepare for Your Student Visa Interview
                        </h3>

                        <p class="text-lg mb-4">
                            Get expert advice on what to say, how to behave, and the documents
                            to carry for your student visa interview.
                        </p>

                        <ul class="space-y-3 text-sm">
                            <li class="flex items-center gap-2">
                                <i class="fa-regular fa-calendar text-[#092962] text-3xl"></i>
                                10 July, 2025
                            </li>

                            <li class="flex items-center gap-2">
                                <i class="fa-solid fa-user-tie text-[#092962] text-3xl"></i>
                                Dr. Amir
                            </li>
                        </ul>

                        <a href="/single-blog"
                            class="mt-6 py-3 px-8 bg-[#092962] text-white font-semibold rounded-lg hover:bg-green-500 transition inline-block">
                            Read More
                        </a>
                    </div>
                </div>
            </div>

            <div class="text-center mt-10 fade-up" data-delay="1.2" data-duration="1.2">
                <a href="#" class="text-[#092962] text-xl font-semibold hover:text-[#74BF1A] transition">
                    View More
                </a>
            </div>
        </div>
    </section>


    <!-----------------------------------TABS BLOG SECTION----------------------------------------------->
    <section class="py-16 bg-[#F6F6F6]">
        <div class="px-6 md:px-12">
            <h2 class="text-2xl md:text-4xl font-bold mb-6 text-center slide-down" data-delay="0.2" data-duration="1.2">
                Our <span class="text-[#74BF1A]">Events & Blogs</span>
            </h2>
            <p class="text-base sm:text-lg md:text-xl text-center mb-12 text-gray-600 fade-up" data-delay="0.4"
                data-duration="1.2">
                Boost your knowledge and skills with expert resources, workshops, and guidance.
            </p>

            <div class="flex flex-wrap justify-center mb-10 gap-4 fade-up" data-delay="0.6" data-duration="1.2">
                <button
                    class="tab-btn px-6 py-2 rounded-lg font-semibold text-white bg-[#092962] hover:bg-[#74BF1A] transition active"
                    data-tab="all">All</button>
                <button
                    class="tab-btn px-6 py-2 rounded-lg font-semibold text-white bg-[#092962] hover:bg-[#74BF1A] transition"
                    data-tab="scholarships">Scholarships</button>
                <button
                    class="tab-btn px-6 py-2 rounded-lg font-semibold text-white bg-[#092962] hover:bg-[#74BF1A] transition"
                    data-tab="ielts">IELTS/PTE</button>
                <button
                    class="tab-btn px-6 py-2 rounded-lg font-semibold text-white bg-[#092962] hover:bg-[#74BF1A] transition"
                    data-tab="career">Career Counseling</button>
                <button
                    class="tab-btn px-6 py-2 rounded-lg font-semibold text-white bg-[#092962] hover:bg-[#74BF1A] transition"
                    data-tab="studyabroad">Study Abroad</button>
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

    <script>
        const eventData = {
            all: [{
                    title: "Top 5 Scholarships for Pakistani Students",
                    category: "Scholarships",
                    date: "05 May, 2025",
                    author: "Mr. Josh",
                    img: "images/single-blog.png",
                },
                {
                    title: "IELTS/PTE Preparation Tips",
                    category: "IELTS/PTE",
                    date: "12 May, 2025",
                    author: "Ms. Sarah",
                    img: "images/single-blog.png",
                },
                {
                    title: "Career Counseling for Fresh Graduates",
                    category: "Career Counseling",
                    date: "20 May, 2025",
                    author: "Dr. Amir",
                    img: "images/single-blog.png",
                },
                {
                    title: "Study Abroad: Choosing the Right Country",
                    category: "Study Abroad",
                    date: "25 May, 2025",
                    author: "Dr. Emily",
                    img: "images/single-blog.png",
                },
                {
                    title: "Scholarship Application Strategies",
                    category: "Scholarships",
                    date: "30 May, 2025",
                    author: "Ms. Anna",
                    img: "images/single-blog.png",
                },
                {
                    title: "IELTS Masterclass Webinar",
                    category: "IELTS/PTE",
                    date: "05 June, 2025",
                    author: "Mr. Jacob",
                    img: "images/single-blog.png",
                },
            ],
            scholarships: [],
            ielts: [],
            career: [],
            studyabroad: [],
        };

        // Populate category-specific arrays
        ["scholarships", "ielts", "career", "studyabroad"].forEach(cat => {
            eventData[cat] = eventData.all.filter(e => {
                if (cat === "ielts") return e.category === "IELTS/PTE";
                return e.category === cat.replace(/([A-Z])/g, ' $1').trim();
            });
        });

        const eventCardsContainer = document.getElementById("eventCards");
        const tabButtons = document.querySelectorAll(".tab-btn");

        function renderCards(category) {
            const cards = eventData[category]
                .map(event => `
      <div class="bg-[#74BF1A] rounded-2xl shadow-lg overflow-hidden flex flex-col">
        <img src="${event.img}" alt="${event.title}" class="w-full h-62 object-cover p-4 rounded-3xl" />

        <div class="p-6 text-white flex flex-col flex-grow">
          <div class="flex items-center justify-between mb-3">
            <span class="flex items-center gap-2 bg-white text-[#74BF1A] text-xs font-semibold px-2 py-1 rounded-full">
              <i class="fa-solid fa-tag"></i> ${event.category}
            </span>
            <i class="fa-regular fa-heart text-white text-lg hover:text-red-500 transition"></i>
          </div>

          <h3 class="font-bold text-[#322F35] text-xl mb-3">${event.title}</h3>
          <p class="text-lg mb-4">
            Learn and enhance your skills with expert guidance and resources.
          </p>

          <ul class="space-y-3 text-sm mb-6">
            <li class="flex items-center gap-2">
              <i class="fa-regular fa-calendar text-[#092962] text-3xl"></i> ${event.date}
            </li>
            <li class="flex items-center gap-2">
              <i class="fa-solid fa-user-tie text-[#092962] text-3xl"></i> ${event.author}
            </li>
          </ul>

          <!-- FIXED BOTTOM BUTTON -->
         <a href="/single-blog"
  class="mt-auto w-fit py-3 px-8 bg-[#092962] text-white font-semibold rounded-lg hover:bg-green-500 transition inline-block">
  Read More
</a>

        </div>
      </div>
    `).join("");

            eventCardsContainer.innerHTML = cards;
        }


        // Default: All
        renderCards("all");

        // Tab click
        tabButtons.forEach(btn => {
            btn.addEventListener("click", () => {
                document.querySelector(".tab-btn.active").classList.remove("active", "bg-[#74BF1A]");
                btn.classList.add("active", "bg-[#74BF1A]");
                renderCards(btn.dataset.tab);
            });
        });
    </script>

    <!-----------------------------------HIGHLIGHT  SECTION----------------------------------------------->
    <section class="relative bg-[#F6F6F6] py-16 overflow-hidden">
        <div class="px-6 md:px-12 flex flex-col md:flex-row items-start md:items-center justify-between mb-8 gap-4 fade-up"
            data-delay="0.2" data-duration="1.2">
            <h1 class="text-3xl md:text-4xl font-bold text-[#092962]">Highlight of Week</h1>
            <button class="py-2 px-6 bg-[#74BF1A] text-white rounded-lg hover:bg-[#5aa012] transition">
                View More
            </button>
        </div>

        <div class="relative px-6 md:px-12 py-16">
            <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('images/blogBg.jpg');"></div>

            <div class="absolute inset-0 bg-black bg-opacity-30 fade-in" data-delay="0.5" data-duration="1.5"></div>

            <div
                class="relative z-10 flex flex-col lg:flex-row gap-8 lg:gap-12 items-center lg:items-center justify-center">

                <div class="bg-white lg:w-2/5 rounded-2xl shadow-lg overflow-hidden flex-shrink-0 slide-left"
                    data-delay="0.8" data-duration="1.2">
                    <img src="images/single-blog.png" alt="Scholarship Blog"
                        class="w-full h-48 md:h-56 object-cover p-4 rounded-3xl" />
                    <div class="p-6 text-white">
                        <div class="flex items-center justify-between mb-3">
                            <span
                                class="flex items-center gap-2 bg-white text-[#062254] text-xs font-semibold px-2 py-1 rounded-full">
                                <i class="fa-solid fa-tag"></i> Scholarships
                            </span>
                            <i class="fa-regular fa-heart text-[#062254] text-lg hover:text-red-500 transition"></i>
                        </div>

                        <h3 class="font-bold text-[#322F35] text-lg md:text-xl mb-2">
                            Top 5 Scholarships for Pakistani Students in 2025
                        </h3>

                        <p class="text-sm md:text-base mb-3 text-black">
                            Explore fully funded scholarship opportunities for Pakistani students in prestigious
                            universities worldwide. Enhance your education without financial worries and achieve your
                            academic goals.
                        </p>

                        <ul class="space-y-2 text-black text-sm">
                            <li class="flex items-center gap-2">
                                <i class="fa-regular fa-calendar text-[#092962] text-lg"></i>
                                05 May, 2025
                            </li>
                            <li class="flex items-center gap-2">
                                <i class="fa-solid fa-user-tie text-[#092962] text-lg"></i>
                                Mr. Josh
                            </li>
                        </ul>

                        <button
                            class="mt-4 py-2 md:py-3 px-6 md:px-8 bg-[#092962] text-white font-semibold rounded-lg hover:bg-green-500 transition">
                            Read More
                        </button>
                    </div>
                </div>

                <div class="lg:w-3/5 bg-white bg-opacity-20 backdrop-blur-md border border-white/30 rounded-2xl p-6 md:p-10 text-white flex flex-col justify-center items-center text-center slide-right"
                    data-delay="1.0" data-duration="1.2">
                    <div class="max-w-xl">
                        <h2 class="text-2xl md:text-3xl font-bold mb-4">
                            Fully Funded Scholarships for Pakistani Students
                        </h2>
                        <p class="text-sm md:text-base text-left leading-relaxed">
                            Each year, numerous scholarships become available for Pakistani students to study abroad. These
                            scholarships cover tuition fees, accommodation, travel, and even monthly stipends. Students can
                            apply based on academic excellence, leadership qualities, or specific fields of study. Early
                            preparation and understanding eligibility criteria increase the chance of receiving these
                            life-changing opportunities.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
