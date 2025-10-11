@extends('layouts.user')
@section('content')


  <!-----------------------------------HERO SECTION----------------------------------------------->
    <section
      class="relative bg-[url('/images/hero-bg-destination.jpg')] bg-cover bg-center w-full h-screen"
    ></section>
        <!-----------------------------------DESTINATIONS CARD SECTION----------------------------------------------->
    <section class="py-16 bg-[#F6F6F6]">
      <div class="px-6 md:px-12">
        <!-- Section Heading -->
        <p class="text-lg md:text-3xl text-center mb-4 text-[#74BF1A] font-bold">
          Study Abroad
        </p>
        <h2 class="text-2xl md:text-4xl font-bold mb-10 text-center">
          Explore Comprehensive Information on Top Study Destinations Around the
          Globe
        </h2>

        <!-- Cards Grid -->
        <div
          class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 justify-items-center"
        >
          <!-- Card -->
          <div
            class="relative w-full max-w-[391px] h-[500px] rounded-2xl overflow-hidden group cursor-pointer"
          >
            <div
              class="absolute inset-0 bg-[url('/images/usa.jpg')] bg-cover bg-center transition-transform duration-500 group-hover:scale-110"
            ></div>
            <div
              class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-500"
            ></div>
            <h1
              class="absolute bottom-6 left-1/2 -translate-x-1/2 text-white text-2xl md:text-3xl font-bold text-center"
            >
              USA
            </h1>
          </div>

          <!-- Card 2-->

          <div
            class="relative w-full max-w-[391px] h-[500px] rounded-2xl overflow-hidden group cursor-pointer"
          >
            <div
              class="absolute inset-0 bg-[url('/images/uk.png')] bg-cover bg-center transition-transform duration-500 group-hover:scale-110"
            ></div>
            <div
              class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-500"
            ></div>
            <h1
              class="absolute bottom-6 left-1/2 -translate-x-1/2 text-white text-2xl md:text-3xl font-bold text-center"
            >
              UK
            </h1>
          </div>

          <!-- Card 3-->
          <div
            class="relative w-full max-w-[391px] h-[500px] rounded-2xl overflow-hidden group cursor-pointer"
          >
            <div
              class="absolute inset-0 bg-[url('/images/france.jpg')] bg-cover bg-center transition-transform duration-500 group-hover:scale-110"
            ></div>
            <div
              class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-500"
            ></div>
            <h1
              class="absolute bottom-6 left-1/2 -translate-x-1/2 text-white text-2xl md:text-3xl font-bold text-center"
            >
              France
            </h1>
          </div>
          <!-- Card 4-->
          <div
            class="relative w-full max-w-[391px] h-[500px] rounded-2xl overflow-hidden group cursor-pointer"
          >
            <div
              class="absolute inset-0 bg-[url('/images/germany.jpg')] bg-cover bg-center transition-transform duration-500 group-hover:scale-110"
            ></div>
            <div
              class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-500"
            ></div>
            <h1
              class="absolute bottom-6 left-1/2 -translate-x-1/2 text-white text-2xl md:text-3xl font-bold text-center"
            >
              Germany
            </h1>
          </div>
          <!-- Card 5-->
          <div
            class="relative w-full max-w-[391px] h-[500px] rounded-2xl overflow-hidden group cursor-pointer"
          >
            <div
              class="absolute inset-0 bg-[url('/images/italy.jpg')] bg-cover bg-center transition-transform duration-500 group-hover:scale-110"
            ></div>
            <div
              class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-500"
            ></div>
            <h1
              class="absolute bottom-6 left-1/2 -translate-x-1/2 text-white text-2xl md:text-3xl font-bold text-center"
            >
              Italy
            </h1>
          </div>
          <!-- Card 6-->
          <div
            class="relative w-full max-w-[391px] h-[500px] rounded-2xl overflow-hidden group cursor-pointer"
          >
            <div
              class="absolute inset-0 bg-[url('/images/uae.jpg')] bg-cover bg-center transition-transform duration-500 group-hover:scale-110"
            ></div>
            <div
              class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-500"
            ></div>
            <h1
              class="absolute bottom-6 left-1/2 -translate-x-1/2 text-white text-2xl md:text-3xl font-bold text-center"
            >
              UAE
            </h1>
          </div>
          <!-- Card 7-->
          <div
            class="relative w-full max-w-[391px] h-[500px] rounded-2xl overflow-hidden group cursor-pointer"
          >
            <div
              class="absolute inset-0 bg-[url('/images/sweden.jpg')] bg-cover bg-center transition-transform duration-500 group-hover:scale-110"
            ></div>
            <div
              class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-500"
            ></div>
            <h1
              class="absolute bottom-6 left-1/2 -translate-x-1/2 text-white text-2xl md:text-3xl font-bold text-center"
            >
              Sweden
            </h1>
          </div>
          <!-- Card 8-->
          <div
            class="relative w-full max-w-[391px] h-[500px] rounded-2xl overflow-hidden group cursor-pointer"
          >
            <div
              class="absolute inset-0 bg-[url('/images/finland.jpg')] bg-cover bg-center transition-transform duration-500 group-hover:scale-110"
            ></div>
            <div
              class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-500"
            ></div>
            <h1
              class="absolute bottom-6 left-1/2 -translate-x-1/2 text-white text-2xl md:text-3xl font-bold text-center"
            >
              Finland
            </h1>
          </div>
          <!-- Card 9-->
          <div
            class="relative w-full max-w-[391px] h-[500px] rounded-2xl overflow-hidden group cursor-pointer"
          >
            <div
              class="absolute inset-0 bg-[url('/images/turkey.jpg')] bg-cover bg-center transition-transform duration-500 group-hover:scale-110"
            ></div>
            <div
              class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-500"
            ></div>
            <h1
              class="absolute bottom-6 left-1/2 -translate-x-1/2 text-white text-2xl md:text-3xl font-bold text-center"
            >
              Turkey
            </h1>
          </div>
        </div>
      </div>
    </section>

    <!-----------------------------------HELPING SECTION----------------------------------------------->
    <section class="py-16 bg-white">
  <div class="px-6 md:px-12">
    <div class="flex flex-col lg:flex-row items-center gap-10">
      <!-- Left Content -->
      <div class="w-full lg:w-1/2">
        <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-4 leading-snug">
          Helping You Choose a Top Study Destination
        </h1>
        <p class="text-gray-600 mb-8 text-sm sm:text-base md:text-lg leading-relaxed">
          Discover the best countries and universities that match your goals,
          lifestyle, and academic interests. Our expert guidance helps you make
          the right decision — from selecting your dream destination to securing
          your admission successfully.
        </p>

        <!-- Item 1 -->
        <div class="mb-6">
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

        <!-- Item 2 -->
        <div class="mb-6">
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

        <!-- Item 3 -->
        <div>
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

      <!-- Right Image with Hover -->
      <div class="w-full lg:w-1/2">
        <div class="overflow-hidden rounded-2xl shadow-lg">
          <img
            src="images/student.jpg"
            alt="Students studying abroad"
            class="w-full h-auto object-cover rounded-2xl transform transition duration-500 hover:scale-105 hover:shadow-2xl"
          />
        </div>
      </div>
    </div>
  </div>
</section>


    <!-----------------------------------PROVIDE SECTION----------------------------------------------->
  <section class="py-16 bg-[#F6F6F6]">
  <div class="px-6 md:px-12">
    <div class="flex flex-col lg:flex-row items-center gap-10">
      <!-- Left Image -->
      <div class="w-full lg:w-1/2">
        <div class="overflow-hidden rounded-2xl shadow-lg">
          <img
            src="images/students.jpg"
            alt="Students Abroad"
            class="w-full h-auto object-cover rounded-2xl transform transition duration-500 hover:scale-105 hover:shadow-2xl"
          />
        </div>
      </div>

      <!-- Right Content -->
      <div class="w-full lg:w-1/2">
        <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-4 leading-snug">
          What We Provide for Study Abroad Destination Services
        </h1>
        <p class="text-gray-600 mb-8 text-sm sm:text-base md:text-lg leading-relaxed">
          We offer complete guidance and support to help students achieve their dream
          of studying abroad. From career counseling to admission and visa assistance,
          our team ensures a smooth journey towards your international education goals.
        </p>

        <!-- Item 1 -->
        <div class="mb-6">
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

        <!-- Item 2 -->
        <div class="mb-6">
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

        <!-- Item 3 -->
        <div>
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
</section>


    <!-----------------------------------CASE STUDY SECTION----------------------------------------------->
   <section class="py-16 bg-white">
  <div class="px-6 md:px-12">
    <div class="flex flex-col lg:flex-row items-center gap-10">
      <!-- Left Content -->
      <div class="w-full lg:w-1/2">
        <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-4 leading-snug">
          Key Factors to Consider While Choosing to Study Abroad
        </h1>
        <p class="text-gray-600 mb-8 text-sm sm:text-base md:text-lg leading-relaxed">
          Selecting the right study destination requires thoughtful planning.
          From education quality to living expenses and cultural exposure,
          understanding these key factors helps you make an informed and confident decision
          about your future abroad.
        </p>

        <!-- Tick Item 1 -->
        <div class="mb-6">
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

        <!-- Tick Item 2 -->
        <div class="mb-6">
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

        <!-- Tick Item 3 -->
        <div>
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

      <!-- Right Image with Hover -->
      <div class="w-full lg:w-1/2">
        <div class="overflow-hidden rounded-2xl shadow-lg">
          <img
            src="images/girl.jpg"
            alt="Student studying abroad"
            class="w-full h-auto object-cover rounded-2xl transform transition duration-500 hover:scale-105 hover:shadow-2xl"
          />
        </div>
      </div>
    </div>
  </div>
</section>

    <!-----------------------------------CTA SECTION----------------------------------------------->
    <section class="py-16 bg-[#F6F6F6]">
      <div class="px-6 md:px-12 text-center">
        <p class="text-xl md:text-4xl mb-6 font-bold">
          For further help, <span class="text-[#74BF1A]">book a call</span> now!
        </p>
        <a
          href="#"
          class="inline-block bg-[#74BF1A] text-white px-6 py-3 rounded-lg hover:bg-green-600 transition"
        >
          Talk to an Expert
        </a>
      </div>
    </section>

<!----------------------------------- FAQS SECTION ----------------------------------------------->
<section class="py-16  bg-[#F6F6F6]">
  <div class="px-6 md:px-12">
    <!-- Section Heading -->
    <h2 class="text-2xl md:text-4xl font-bold text-center mb-10">
      Frequently Asked <span class="text-[#74BF1A]">Questions</span>
    </h2>

    <div class="space-y-6">
      <!-- FAQ Item -->
      <div
        class="faq-item border rounded-lg overflow-hidden shadow-[0_4px_12px_rgba(0,0,0,0.1)] transition-all duration-300"
      >
        <button
          class="w-full flex items-center justify-between px-4 py-3 text-left font-medium text-gray-800 focus:outline-none faq-toggle"
        >
          <div class="flex items-center gap-4">
            <span class="text-[#74BF1A] font-bold text-lg">1</span>
            <span>Which country is best for my study destination?</span>
          </div>
          <i
            class="fa-solid fa-chevron-right text-[#74BF1A] transition-transform duration-300"
          ></i>
        </button>
        <div class="faq-content hidden px-12 pb-4 text-gray-600">
          The best country depends on your field of study, budget, and career goals.
          Popular destinations include the UK for research, Canada for PR opportunities,
          Australia for diverse courses, and Germany for affordable education.
        </div>
      </div>

      <!-- FAQ Item -->
      <div
        class="faq-item border rounded-lg overflow-hidden shadow-[0_4px_12px_rgba(0,0,0,0.1)] transition-all duration-300"
      >
        <button
          class="w-full flex items-center justify-between px-4 py-3 text-left font-medium text-gray-800 focus:outline-none faq-toggle"
        >
          <div class="flex items-center gap-4">
            <span class="text-[#74BF1A] font-bold text-lg">2</span>
            <span>How do I choose the right study destination?</span>
          </div>
          <i
            class="fa-solid fa-chevron-right text-[#74BF1A] transition-transform duration-300"
          ></i>
        </button>
        <div class="faq-content hidden px-12 pb-4 text-gray-600">
          Consider factors like course availability, education quality, cost of living,
          visa policies, job prospects, and cultural environment before deciding on a destination.
        </div>
      </div>

      <!-- FAQ Item -->
      <div
        class="faq-item border rounded-lg overflow-hidden shadow-[0_4px_12px_rgba(0,0,0,0.1)] transition-all duration-300"
      >
        <button
          class="w-full flex items-center justify-between px-4 py-3 text-left font-medium text-gray-800 focus:outline-none faq-toggle"
        >
          <div class="flex items-center gap-4">
            <span class="text-[#74BF1A] font-bold text-lg">3</span>
            <span>Which destinations offer post-study work opportunities?</span>
          </div>
          <i
            class="fa-solid fa-chevron-right text-[#74BF1A] transition-transform duration-300"
          ></i>
        </button>
        <div class="faq-content hidden px-12 pb-4 text-gray-600">
          Countries like Canada, Australia, the UK, and New Zealand offer generous
          post-study work visas, allowing students to gain international experience after graduation.
        </div>
      </div>

      <!-- FAQ Item -->
      <div
        class="faq-item border rounded-lg overflow-hidden shadow-[0_4px_12px_rgba(0,0,0,0.1)] transition-all duration-300"
      >
        <button
          class="w-full flex items-center justify-between px-4 py-3 text-left font-medium text-gray-800 focus:outline-none faq-toggle"
        >
          <div class="flex items-center gap-4">
            <span class="text-[#74BF1A] font-bold text-lg">4</span>
            <span>Which countries are most affordable for international students?</span>
          </div>
          <i
            class="fa-solid fa-chevron-right text-[#74BF1A] transition-transform duration-300"
          ></i>
        </button>
        <div class="faq-content hidden px-12 pb-4 text-gray-600">
          Germany, France, Italy, and Malaysia are known for low tuition fees and affordable
          living costs, making them excellent options for budget-conscious students.
        </div>
      </div>

      <!-- FAQ Item -->
      <div
        class="faq-item border rounded-lg overflow-hidden shadow-[0_4px_12px_rgba(0,0,0,0.1)] transition-all duration-300"
      >
        <button
          class="w-full flex items-center justify-between px-4 py-3 text-left font-medium text-gray-800 focus:outline-none faq-toggle"
        >
          <div class="flex items-center gap-4">
            <span class="text-[#74BF1A] font-bold text-lg">5</span>
            <span>Can I switch destinations after starting my studies?</span>
          </div>
          <i
            class="fa-solid fa-chevron-right text-[#74BF1A] transition-transform duration-300"
          ></i>
        </button>
        <div class="faq-content hidden px-12 pb-4 text-gray-600">
          In most cases, it’s possible but depends on visa regulations and credit transfer policies.
          Consulting with your academic advisor and destination consultant is recommended before making changes.
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
        item.classList.add("border-b-[4px]", "border-[#74BF1A]", "shadow-[0_6px_20px_rgba(116,191,26,0.3)]");
      } else {
        item.classList.remove("border-b-[4px]", "border-[#74BF1A]", "shadow-[0_6px_20px_rgba(116,191,26,0.3)]");
      }
    });
  });
</script>


@endsection
