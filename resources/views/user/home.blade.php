@extends('layouts.user')
@section('content')
    <!-----------------------------------HERO SECTION----------------------------------------------->
   <section
  class="relative bg-[url('/images/home-01.png')] bg-cover bg-top w-full min-h-screen flex items-center justify-center pb-22"
>
  <div class="absolute inset-0 bg-black/30"></div>

  <!-- Content -->
  <div
    class="relative z-10 flex items-center justify-end h-full max-w-7xl mx-auto px-6"
  >
    <div class="w-full md:w-1/2 text-white">
      <h1
        class="text-3xl md:text-5xl font-semibold leading-snug md:leading-tight mb-6 mt-20"
      >
        Your Journey to Global Education Starts Here<br />with Global Minds
      </h1>
      <p class="text-base md:text-lg leading-relaxed mb-8">
        Global Minds Consultants helps you unlock international opportunities
        with expert study abroad guidance. From selecting top universities to
        securing admissions and visas, we make your dream of studying overseas
        simple, smooth, and successful. Let’s build your future together.
      </p>

         <div class=":flex">
    <a href="/consultation-form"
   class="relative overflow-hidden bg-[#74BF1A] text-white px-5 py-2.5 rounded-lg font-semibold group transition-all duration-300 inline-block">

    <span class="relative z-10 flex items-center gap-2">
        Book Free Counselling <i class="fa-solid fa-arrow-right"></i>
    </span>

    <span class="absolute inset-0 bg-green-600 translate-x-full group-hover:translate-x-0 transition-transform duration-300"></span>
</a>

      </div>
    </div>
  </div>
</section>

    <!-----------------------------------SEARCH SECTION----------------------------------------------->

<section class="bg-[#F6F6F6] py-[90px]">
  <div x-data="{ activeTab: 'Courses' }" class="max-w-7xl mx-auto px-4 md:px-12 relative">
    <!-- Tabs -->
    <div class="bg-white rounded-xl shadow-md">
      <div class="flex overflow-x-auto md:overflow-visible border-b">
        @php
          $tabs = ['Courses', 'Universities', 'Scholarships', 'English Courses'];
        @endphp

        @foreach($tabs as $tab)
          <button
            class="flex-shrink-0 w-1/2 sm:w-1/4 text-center py-3 font-medium text-gray-700 hover:text-[#74BF1A] border-b-2 transition-all duration-200"
            x-on:click="activeTab = '{{ $tab }}'"
            :class="activeTab === '{{ $tab }}' ? 'border-[#74BF1A] text-[#74BF1A]' : 'border-transparent'"
          >
            {{ $tab }}
          </button>
        @endforeach
      </div>

      <!-- Tab Content -->
      <div class="p-6">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">

          <!-- Custom Dropdown 1 -->
          <div x-data="{ open: false, selected: 'Select by Course', options: ['Computer Science', 'Business', 'Economics'] }" class="relative">
            <button
              @click="open = !open"
              class="w-full flex justify-between items-center border rounded-md px-4 py-3 bg-white text-gray-700 focus:outline-none focus:ring-2 focus:ring-[#74BF1A]"
            >
              <span x-text="selected"></span>
              <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>

            <ul
              x-show="open"
              @click.away="open = false"
              class="absolute left-0 w-full mt-1 bg-white border rounded-md shadow-lg max-h-56 overflow-auto z-50"
            >
              <template x-for="option in options" :key="option">
                <li
                  @click="selected = option; open = false"
                  class="px-4 py-2 text-gray-700 hover:bg-[#F6F6F6] cursor-pointer"
                  x-text="option"
                ></li>
              </template>
            </ul>
          </div>

          <!-- Custom Dropdown 2 -->
          <div x-data="{ open: false, selected: 'Select Degree', options: ['Bachelor', 'Master', 'PhD'] }" class="relative">
            <button
              @click="open = !open"
              class="w-full flex justify-between items-center border rounded-md px-4 py-3 bg-white text-gray-700 focus:outline-none focus:ring-2 focus:ring-[#74BF1A]"
            >
              <span x-text="selected"></span>
              <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>

            <ul
              x-show="open"
              @click.away="open = false"
              class="absolute left-0 w-full mt-1 bg-white border rounded-md shadow-lg max-h-56 overflow-auto z-50"
            >
              <template x-for="option in options" :key="option">
                <li
                  @click="selected = option; open = false"
                  class="px-4 py-2 text-gray-700 hover:bg-[#F6F6F6] cursor-pointer"
                  x-text="option"
                ></li>
              </template>
            </ul>
          </div>

          <!-- Custom Dropdown 3 -->
          <div x-data="{ open: false, selected: 'Funding Type', options: ['Scholarship', 'Self-funded', 'Partial Funding'] }" class="relative">
            <button
              @click="open = !open"
              class="w-full flex justify-between items-center border rounded-md px-4 py-3 bg-white text-gray-700 focus:outline-none focus:ring-2 focus:ring-[#74BF1A]"
            >
              <span x-text="selected"></span>
              <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>

            <ul
              x-show="open"
              @click.away="open = false"
              class="absolute left-0 w-full mt-1 bg-white border rounded-md shadow-lg max-h-56 overflow-auto z-50"
            >
              <template x-for="option in options" :key="option">
                <li
                  @click="selected = option; open = false"
                  class="px-4 py-2 text-gray-700 hover:bg-[#F6F6F6] cursor-pointer"
                  x-text="option"
                ></li>
              </template>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <!-- Search Button  -->
    <div class="absolute left-1/2 -bottom-6 transform -translate-x-1/2 translate-y-2">
      <button
        class="bg-[#0A245D] text-white px-6 py-3 rounded-md shadow-md hover:bg-blue-900 flex items-center gap-2"
      >
        Search
        <i class="fa fa-search"></i>
      </button>
    </div>
  </div>
</section>




  <!----------------------------------- WHY CHOOSE US SECTION ----------------------------------------------->
<section class="py-16 bg-white">
  <div class="px-12">
    <h2 class="text-2xl md:text-5xl font-bold mb-12">
      Why <span class="text-[#74BF1A]">Global Minds</span> is The Right
      Choice for You?
    </h2>

    <!-- Main Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
      <!-- Left Column  -->
      <div class="lg:col-span-2 grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Card 1 -->
        <div
          class="bg-gray-100 rounded-2xl shadow-md p-6 hover:shadow-lg hover:cursor-pointer transition"
        >
          <div class="text-3xl mb-4 text-[#74BF1A]">
            <i class="fa-solid fa-graduation-cap"></i>
          </div>
          <h3 class="text-3xl font-bold text-gray-900 mb-2">
            <span class="text-[#092962]">2,500+</span> Global University Partners
          </h3>
          <p class="text-gray-600 text-base leading-relaxed">
           Global Minds collaborates with over 2,500 top-ranked universities and colleges worldwide. Whether you dream of studying in the UK, USA, Canada, Australia, or Europe, our strong partnerships open doors to prestigious institutions that match your academic goals and career aspirations. We ensure you have access to the widest range of opportunities to make the best choice for your future.
          </p>
        </div>

        <!-- Card 2 -->
        <div
          class="bg-gray-100 rounded-2xl shadow-md p-6 hover:shadow-lg hover:cursor-pointer transition"
        >
          <div class="text-3xl mb-4 text-[#74BF1A]">
            <i class="fa-solid fa-university"></i>
          </div>
          <h3 class="text-3xl font-bold text-gray-900 mb-2">
            <span class="text-[#092962]">Expert</span> Admission Guidance
          </h3>
          <p class="text-gray-600 text-base leading-relaxed">
            Applying to study abroad can feel overwhelming, but our team of expert counselors makes the process simple and stress-free. From evaluating your academic background to shortlisting the right courses and universities, we guide you at every stage. We help you prepare strong applications, highlight your strengths, and stand out in a competitive admissions process — maximizing your chances of acceptance.
          </p>
        </div>

        <!-- Card 3 -->
        <div
          class="bg-gray-100 rounded-2xl shadow-md p-6 hover:shadow-lg hover:cursor-pointer transition md:col-span-2"
        >
          <div class="text-3xl mb-4 text-[#74BF1A]">
            <i class="fa-solid fa-circle-check"></i>
          </div>
          <h3 class="text-3xl font-bold text-gray-900 mb-2">
            <span class="text-[#092962]">Trusted</span> & Transparent Process
          </h3>
          <p class="text-gray-600 text-base leading-relaxed">
            With a strong track record of successful admissions, we pride
            ourselves on honest advice, personalized support, and clear
            guidance throughout your study abroad journey.
          </p>
        </div>
      </div>

      <!-- Right Column  -->
      <div
        class="bg-[#0A2D5A] text-white rounded-2xl shadow-lg p-6 flex flex-col justify-between hover:scale-105 hover:cursor-pointer transition"
      >
        <div>
          <div class="text-3xl mb-4 text-[#74BF1A]">
            <i class="fa-solid fa-trophy"></i>
          </div>
          <h3 class="text-3xl font-bold mb-2">
            <span class="text-[#74BF1A]">Proven</span> Success Stories
          </h3>
          <p class="text-base leading-relaxed">
            Thousands of students have trusted Global Minds to fulfill their
            dream of studying abroad. With our personalized counseling and
            dedicated support, we ensure your journey is smooth and successful.
          </p>
        </div>

         <div class="hidden md:flex">
         <a href="/services"
   class="relative overflow-hidden bg-[#74BF1A] text-white px-5 py-2.5 rounded-lg font-semibold group transition-all duration-300 inline-block">

    <span class="relative z-10 flex items-center gap-2">
        Apply Now
    </span>

    <span class="absolute inset-0 bg-green-600 translate-x-full group-hover:translate-x-0 transition-transform duration-300"></span>
</a>
      </div>
      </div>
    </div>
  </div>
</section>


    <!-----------------------------------SUPPORT STUDENT SECTION ----------------------------------------------->
<section class="py-16 bg-[#F6F6F6]">
  <div class="px-6 md:px-12">
    <h2 class="text-2xl md:text-5xl font-bold mb-12 text-center">
      How do We <span class="text-[#74BF1A]">Support</span> Our Students?
    </h2>

    <div class="relative overflow-hidden">
      <div id="slider" class="flex transition-transform duration-500 ease-in-out space-x-6">

        <!-- Card  -->
        <div class="min-w-full sm:min-w-[calc(50%-12px)] lg:min-w-[calc(33.3%-16px)]
                    bg-white rounded-2xl shadow-md p-6 hover:shadow-lg transition
                    flex flex-col justify-between h-full md:h-[450px]">
          <div>
            <div class="text-3xl mb-4 text-[#0A2D5A]">
              <i class="fa-solid fa-graduation-cap"></i>
            </div>
            <h3 class="text-3xl font-bold text-gray-900 mb-3">
              Country and University Selection
            </h3>
            <p class="text-gray-600 mb-4">
              We guide you to choose the best-fit country and university based on your goals, budget.
            </p>
            <h4 class="font-semibold text-gray-800 mb-2">What We Offer</h4>
            <ul class="space-y-2 text-gray-600">
              <li><i class="fa-solid fa-check-circle text-[#0A2D5A] mr-2"></i> Guidance on choosing the right country</li>
              <li><i class="fa-solid fa-check-circle text-[#0A2D5A] mr-2"></i> Top university recommendations</li>
              <li><i class="fa-solid fa-check-circle text-[#0A2D5A] mr-2"></i> Personalized counseling sessions</li>
            </ul>
          </div>
         <a href="/services" class="text-[#092962] font-semibold inline-block mt-4 hover:underline">
            Start Preparing Now <i class="fa-solid fa-arrow-right"></i>
          </a>
        </div>

        <!-- Card 2 -->
        <div class="min-w-full sm:min-w-[calc(50%-12px)] lg:min-w-[calc(33.3%-16px)]
                    bg-white rounded-2xl shadow-md p-6 hover:shadow-lg transition
                    flex flex-col justify-between h-full md:h-[450px]">
          <div>
            <div class="text-3xl mb-4 text-[#0A2D5A]">
              <i class="fa-solid fa-hand-holding-dollar"></i>
            </div>
            <h3 class="text-3xl font-bold text-gray-900 mb-3">
              Scholarship Assistance
            </h3>
            <p class="text-gray-600 mb-4">
              Find and secure scholarships abroad to make your dream education affordable and stress-free.
            </p>
            <h4 class="font-semibold text-gray-800 mb-2">What We Offer</h4>
            <ul class="space-y-2 text-gray-600">
              <li><i class="fa-solid fa-check-circle text-[#0A2D5A] mr-2"></i> Scholarship application guidance</li>
              <li><i class="fa-solid fa-check-circle text-[#0A2D5A] mr-2"></i> Document preparation support</li>
              <li><i class="fa-solid fa-check-circle text-[#0A2D5A] mr-2"></i> Access to exclusive funding options</li>
              <li><i class="fa-solid fa-check-circle text-[#0A2D5A] mr-2"></i> Personalized counseling sessions</li>
            </ul>
          </div>
         <a href="/services" class="text-[#092962] font-semibold inline-block mt-4 hover:underline">
            Start Preparing Now <i class="fa-solid fa-arrow-right"></i>
          </a>
        </div>

        <!-- Card 3 -->
        <div class="min-w-full sm:min-w-[calc(50%-12px)] lg:min-w-[calc(33.3%-16px)]
                    bg-white rounded-2xl shadow-md p-6 hover:shadow-lg transition
                    flex flex-col justify-between h-full md:h-[450px]">
          <div>
            <div class="text-3xl mb-4 text-[#0A2D5A]">
              <i class="fa-solid fa-briefcase"></i>
            </div>
            <h3 class="text-3xl font-bold text-gray-900 mb-3">
              Career Guidance
            </h3>
            <p class="text-gray-600 mb-4">
              Get mentorship, workshops, and job placement support to build a strong career path.
            </p>
            <h4 class="font-semibold text-gray-800 mb-2">What We Offer</h4>
            <ul class="space-y-2 text-gray-600">
              <li><i class="fa-solid fa-check-circle text-[#0A2D5A] mr-2"></i> Resume and interview training</li>
              <li><i class="fa-solid fa-check-circle text-[#0A2D5A] mr-2"></i> Networking opportunities</li>
              <li><i class="fa-solid fa-check-circle text-[#0A2D5A] mr-2"></i> Internship and placement assistance</li>
              <li><i class="fa-solid fa-check-circle text-[#0A2D5A] mr-2"></i> Personalized counseling sessions</li>
            </ul>
          </div>
      <a href="/services" class="text-[#092962] font-semibold inline-block mt-4 hover:underline">
            Start Preparing Now <i class="fa-solid fa-arrow-right"></i>
          </a>
        </div>

        <!-- Card 4 -->
        <div class="min-w-full sm:min-w-[calc(50%-12px)] lg:min-w-[calc(33.3%-16px)]
                    bg-white rounded-2xl shadow-md p-6 hover:shadow-lg transition
                    flex flex-col justify-between h-full md:h-[450px]">
          <div>
            <div class="text-3xl mb-4 text-[#0A2D5A]">
              <i class="fa-solid fa-passport"></i>
            </div>
            <h3 class="text-3xl font-bold text-gray-900 mb-3">
              Visa Assistance
            </h3>
            <p class="text-gray-600 mb-4">
              Full support for preparing and submitting your visa application with expert guidance.
            </p>
            <h4 class="font-semibold text-gray-800 mb-2">What We Offer</h4>
            <ul class="space-y-2 text-gray-600">
              <li><i class="fa-solid fa-check-circle text-[#0A2D5A] mr-2"></i> Document verification</li>
              <li><i class="fa-solid fa-check-circle text-[#0A2D5A] mr-2"></i> Mock visa interviews</li>
              <li><i class="fa-solid fa-check-circle text-[#0A2D5A] mr-2"></i> End-to-end visa guidance</li>
              <li><i class="fa-solid fa-check-circle text-[#0A2D5A] mr-2"></i> Personalized counseling sessions</li>
            </ul>
          </div>
          <a href="/services" class="text-[#092962] font-semibold inline-block mt-4 hover:underline">
            Start Preparing Now <i class="fa-solid fa-arrow-right"></i>
          </a>
        </div>
      </div>

      <!-- Arrows -->
      <div class="flex justify-center space-x-4 mt-8">
        <button id="prev" class="w-10 h-10 flex items-center justify-center bg-[#092962] text-white rounded-full hover:bg-[#74BF1A] transition">
          <i class="fa-solid fa-arrow-left"></i>
        </button>
        <button id="next" class="w-10 h-10 flex items-center justify-center bg-[#092962] text-white rounded-full hover:bg-[#74BF1A] transition">
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
<!-------------------------------------------------TABS SECTION--------------------------------------------------->
<section class="py-16" id="partner-universities">
  <div class="px-6 md:px-12 text-center">
    <h2 class="text-3xl md:text-5xl font-bold mb-4 text-[#0A2D5A]">
      Our <span class="text-[#74BF1A]">Partner Universities</span>
    </h2>
    <p class="text-gray-600 max-w-2xl mx-auto mb-12">
      We are proudly associated with globally recognized institutions to help students access the best education opportunities around the world.
    </p>

    <!-- Tabs -->
    <div class="relative flex flex-wrap justify-center gap-8 mb-10 pb-2">
      <button class="tab-btn text-[#0A2D5A] font-semibold pb-2 relative active flex items-center gap-2" data-target="all">
        All
      </button>

      <button class="tab-btn text-[#0A2D5A] font-semibold pb-2 relative flex items-center gap-2" data-target="uk">
        <img src="{{ asset('images/ukFlag.png') }}" alt="UK Flag" class="w-12 h-12 object-cover rounded-sm">
        UK
      </button>

      <button class="tab-btn text-[#0A2D5A] font-semibold pb-2 relative flex items-center gap-2" data-target="germany">
        <img src="{{ asset('images/germanyFlag.png') }}" alt="Germany Flag" class="w-12 h-12 object-cover rounded-sm">
        Germany
      </button>

      <button class="tab-btn text-[#0A2D5A] font-semibold pb-2 relative flex items-center gap-2" data-target="australia">
        <img src="{{ asset('images/australiaFlag.png') }}" alt="Australia Flag" class="w-12 h-12 object-cover rounded-sm">
        Australia
      </button>

      <button class="tab-btn text-[#0A2D5A] font-semibold pb-2 relative flex items-center gap-2" data-target="canada">
        <img src="{{ asset('images/canadaFlag.png') }}" alt="Canada Flag" class="w-12 h-12 object-cover rounded-sm">
        Canada
      </button>

      <!-- Active  -->
      <div id="tab-underline" class="absolute bottom-0 h-[3px] bg-[#74BF1A] transition-all duration-300"></div>
    </div>

  <!-- All Tab -->
<div id="all" class="tab-content grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
  @foreach (range(1,8) as $i)
    <div class="bg-white rounded-2xl shadow-[0_0_25px_rgba(0,0,0,0.15)] p-6 flex flex-col hover:scale-[1.02] transition relative">
      <div class="flex mb-4">
        <img src="{{ asset('images/partner.png') }}" alt="Partner" class="w-6 h-6 mr-2">
        <span class="text-[#74BF1A] font-semibold text-sm">Prime Partner</span>
      </div>
      <div class="flex justify-center mb-4">
        <img src="{{ asset("images/uni.$i.png") }}" alt="University {{ $i }}" class="w-24 h-24 object-contain">
      </div>
      <h3 class="text-2xl font-bold text-[#0A2D5A] text-left mb-2">University {{ $i }}</h3>
      <p class="text-gray-600 text-sm text-left leading-relaxed">
        Globally reputed institution offering excellence in education and research.
      </p>
    </div>
  @endforeach
</div>

<!-- UK Tab -->
<div id="uk" class="tab-content hidden grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
  @foreach (range(1,6) as $i)
    <div class="bg-white rounded-2xl shadow-[0_0_25px_rgba(0,0,0,0.15)] p-6 flex flex-col hover:scale-[1.02] transition relative">
      <div class="flex mb-4">
        <img src="{{ asset('images/partner.png') }}" alt="Partner" class="w-6 h-6 mr-2">
        <span class="text-[#74BF1A] font-semibold text-sm">Prime Partner</span>
      </div>
      <div class="flex justify-center mb-4 relative">

        <img src="{{ asset("images/uni.$i.png") }}" alt="University {{ $i }}" class="w-24 h-24 object-contain mx-auto">
      </div>
      <h3 class="text-2xl font-bold text-[#0A2D5A] text-left mb-2">University {{ $i }}</h3>
      <p class="text-gray-600 text-sm text-left leading-relaxed">
        Leading UK institution recognized for global excellence in research and academics.
      </p>
    </div>
  @endforeach
</div>

<!-- Germany Tab -->
<div id="germany" class="tab-content hidden grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
  @foreach (range(1,6) as $i)
    <div class="bg-white rounded-2xl shadow-[0_0_25px_rgba(0,0,0,0.15)] p-6 flex flex-col hover:scale-[1.02] transition relative">
      <div class="flex mb-4">
        <img src="{{ asset('images/partner.png') }}" alt="Partner" class="w-6 h-6 mr-2">
        <span class="text-[#74BF1A] font-semibold text-sm">Prime Partner</span>
      </div>
      <div class="flex justify-center mb-4 relative">

        <img src="{{ asset("images/uni.$i.png") }}" alt="University {{ $i }}" class="w-24 h-24 object-contain">
      </div>
      <h3 class="text-2xl font-bold text-[#0A2D5A] text-left mb-2">University {{ $i }}</h3>
      <p class="text-gray-600 text-sm text-left leading-relaxed">
        Prestigious German university known for innovation and quality education.
      </p>
    </div>
  @endforeach
</div>

<!-- Australia Tab -->
<div id="australia" class="tab-content hidden grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
  @foreach (range(1,6) as $i)
    <div class="bg-white rounded-2xl shadow-[0_0_25px_rgba(0,0,0,0.15)] p-6 flex flex-col hover:scale-[1.02] transition relative">
      <div class="flex mb-4">
        <img src="{{ asset('images/partner.png') }}" alt="Partner" class="w-6 h-6 mr-2">
        <span class="text-[#74BF1A] font-semibold text-sm">Prime Partner</span>
      </div>
      <div class="flex justify-center mb-4 relative">

        <img src="{{ asset("images/uni.$i.png") }}" alt="University {{ $i }}" class="w-24 h-24 object-contain">
      </div>
      <h3 class="text-2xl font-bold text-[#0A2D5A] text-left mb-2">University {{ $i }}</h3>
      <p class="text-gray-600 text-sm text-left leading-relaxed">
        Top-ranked Australian university fostering innovation and global collaboration.
      </p>
    </div>
  @endforeach
</div>

<!-- Canada Tab -->
<div id="canada" class="tab-content hidden grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
  @foreach (range(1,6) as $i)
    <div class="bg-white rounded-2xl shadow-[0_0_25px_rgba(0,0,0,0.15)] p-6 flex flex-col hover:scale-[1.02] transition relative">
      <div class="flex mb-4">
        <img src="{{ asset('images/partner.png') }}" alt="Partner" class="w-6 h-6 mr-2">
        <span class="text-[#74BF1A] font-semibold text-sm">Prime Partner</span>
      </div>
      <div class="flex justify-center mb-4 relative">

        <img src="{{ asset("images/uni.$i.png") }}" alt="University {{ $i }}" class="w-24 h-24 object-contain">
      </div>
      <h3 class="text-2xl font-bold text-[#0A2D5A] text-left mb-2">University {{ $i }}</h3>
      <p class="text-gray-600 text-sm text-left leading-relaxed">
        Canadian institution with world-class programs and diverse academic excellence.
      </p>
    </div>
  @endforeach
</div>


    <!-- Pagination Dots -->
    <div class="flex justify-center items-center mt-10 gap-3" id="dots-container">
      <span class="dot w-3 h-3 rounded-full bg-[#74BF1A]"></span>
      <span class="dot w-3 h-3 rounded-full bg-gray-300 hover:bg-[#74BF1A] cursor-pointer transition"></span>
      <span class="dot w-3 h-3 rounded-full bg-gray-300 hover:bg-[#74BF1A] cursor-pointer transition"></span>
      <span class="dot w-3 h-3 rounded-full bg-gray-300 hover:bg-[#74BF1A] cursor-pointer transition"></span>
      <span class="dot w-3 h-3 rounded-full bg-gray-300 hover:bg-[#74BF1A] cursor-pointer transition"></span>
    </div>

    <!-- More Universities -->
    <div class="mt-6">
      <a href="#" class="text-[#74BF1A] font-semibold hover:underline hover:text-[#0A2D5A] transition">
        More Universities  <i class="fa-solid fa-arrow-right"></i>
      </a>
    </div>
  </div>
</section>

<!-- Tabs Script -->
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const buttons = document.querySelectorAll(".tab-btn");
    const contents = document.querySelectorAll(".tab-content");
    const underline = document.getElementById("tab-underline");
    const dots = document.querySelectorAll("#dots-container .dot");

    function moveUnderline(activeBtn) {
      const rect = activeBtn.getBoundingClientRect();
      const parentRect = activeBtn.parentElement.getBoundingClientRect();
      underline.style.width = rect.width + "px";
      underline.style.left = rect.left - parentRect.left + "px";
    }

    function updateDots(activeIndex) {
      dots.forEach((dot, index) => {
        dot.classList.toggle("bg-[#74BF1A]", index === activeIndex);
        dot.classList.toggle("bg-gray-300", index !== activeIndex);
      });
    }

    // Default active tab
    let active = document.querySelector(".tab-btn.active");
    moveUnderline(active);
    updateDots(0);

    buttons.forEach((btn, index) => {
      btn.addEventListener("click", () => {
        buttons.forEach((b) => b.classList.remove("active"));
        btn.classList.add("active");
        moveUnderline(btn);
        updateDots(index);

        const target = btn.getAttribute("data-target");
        contents.forEach((content) => {
          content.classList.add("hidden");
          if (content.id === target) content.classList.remove("hidden");
        });
      });
    });

    window.addEventListener("resize", () => {
      const active = document.querySelector(".tab-btn.active");
      moveUnderline(active);
    });
  });
</script>



    <!-----------------------------------JOURNEY SECTION ----------------------------------------------->

<section class=" py-16 bg-[#F6F6F6]">
  <div class="px-12 grid grid-cols-1 md:grid-cols-2 items-center gap-20">
    <!-- Left Side -->
    <div class="flex w-full md:h-[32rem] lg:h-[28rem]">
      <!-- Show only this image on mobile -->
      <img
        src="images/home-02.png"
        alt="home-02"
          class="w-full h-[12rem] object-cover rounded-lg md:rounded-none md:rounded-l-lg md:w-3/5 md:h-[75%] self-center"

      />

      <!-- Hide this image on mobile -->
      <img
        src="images/home-03.png"
        alt="home-03"
        class="hidden md:block w-3/5 h-full object-cover rounded-lg"
      />
    </div>

    <!-- Right Side -->
    <div>
     <h2 class="text-2xl md:text-5xl leading-relaxed font-bold mb-4">
    Your Journey to Study
    <span class="block mt-4"></span>
    Abroad Starts with Us.
</h2>

      <p class="text-gray-600 mb-6 leading-relaxed">
        Studying abroad opens the door to world-class education, new cultures,
        and endless opportunities. Whether you dream of pursuing higher studies
        in leading universities or exploring global career paths, we provide the
        right guidance every step of the way. From choosing the perfect program
        to visa assistance and career counseling, our experts ensure your
        transition is smooth and stress-free.
      </p>
      <p class="text-gray-600 mb-6 leading-relaxed">
        Join thousands of students who have trusted us to achieve their goals
        and start building a brighter future today. Let’s turn your study abroad
        dream into reality.
      </p>
         <div class=":flex">
    <a href="/consultation-form"
   class="relative overflow-hidden bg-[#74BF1A] text-white px-5 py-2.5 rounded-lg font-semibold group transition-all duration-300 inline-block">

    <span class="relative z-10 flex items-center gap-2">
       Book a Consultation Call
    </span>

    <span class="absolute inset-0 bg-green-600 translate-x-full group-hover:translate-x-0 transition-transform duration-300"></span>
</a>

      </div>
    </div>
  </div>
</section>



    <!-----------------------------------DISCOVER TOP FIELDS  SECTION ----------------------------------------------->
    <section class="py-16">
      <div class="px-12">
<div class="text-center max-w-5xl mx-auto mb-12">
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
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
          <!-- Card 1 -->
          <div
            class="bg-white shadow-[0_0_25px_rgba(0,0,0,0.15)] rounded-2xl overflow-hidden hover:shadow-xl transition"
          >
            <img
              src="images/home-05.png"
              alt="Law"
              class="w-full h-58 object-cover rounded-t-2xl"
            />
            <div class="p-6">
              <h2 class="text-2xl font-semibold mb-2">Law</h2>
             <p class="text-gray-600 mb-4">
  Gain world-class education and hands-on experience that prepare you for success.

</p>

              <a href="/services" class="text-[#0A2D5A] font-semibold hover:underline">
                Explore More  <i class="fa-solid fa-arrow-right"></i>
              </a>
            </div>
          </div>

          <!-- Card 2 -->
          <div
            class="bg-white shadow-[0_0_25px_rgba(0,0,0,0.15)] rounded-2xl overflow-hidden hover:shadow-xl transition"
          >
            <img
              src="images/home-06.png"
              alt="Engineering"
              class="w-full h-58 object-cover rounded-t-2xl"
            />
            <div class="p-6">
              <h2 class="text-2xl font-semibold mb-2">Engineering</h2>
              <p class="text-gray-600 mb-4">
                Explore innovative fields like mechanical, civil, and computer
                engineering.
              </p>
                <a href="/services" class="text-[#0A2D5A] font-semibold hover:underline">
                Explore More  <i class="fa-solid fa-arrow-right"></i>
              </a>
            </div>
          </div>

          <!-- Card 3 -->
          <div
            class="bg-white shadow-[0_0_25px_rgba(0,0,0,0.15)] rounded-2xl overflow-hidden hover:shadow-xl transition"
          >
            <img
              src="images/home-07.png"
              alt="Medicine"
              class="w-full h-58 object-cover rounded-t-2xl"
            />
            <div class="p-6">
              <h2 class="text-2xl font-semibold mb-2">Medicine</h2>
              <p class="text-gray-600 mb-4">
                Join top universities for medical studies, research, and
                healthcare training.
              </p>
                <a href="/services" class="text-[#0A2D5A] font-semibold hover:underline">
                Explore More  <i class="fa-solid fa-arrow-right"></i>
              </a>
            </div>
          </div>

          <!-- Card 4 -->
          <div
            class="bg-white shadow-[0_0_25px_rgba(0,0,0,0.15)] rounded-2xl overflow-hidden hover:shadow-xl transition"
          >
            <img
              src="images/home-08.png"
              alt="Business"
              class="w-full h-58 object-cover rounded-t-2xl"
            />
            <div class="p-6">
              <h2 class="text-2xl font-semibold mb-2">Business</h2>
              <p class="text-gray-600 mb-4">
                Study management, finance, and entrepreneurship worldwide.
              </p>
                <a href="/services" class="text-[#0A2D5A] font-semibold hover:underline">
                Explore More  <i class="fa-solid fa-arrow-right"></i>
              </a>
            </div>
          </div>

          <!-- Card 5 -->
          <div
            class="bg-white shadow-[0_0_25px_rgba(0,0,0,0.15)] rounded-2xl overflow-hidden hover:shadow-xl transition"
          >
            <img
              src="images/home-09.png"
              alt="IT"
              class="w-full h-58 object-cover rounded-t-2xl"
            />
            <div class="p-6">
              <h2 class="text-2xl font-semibold mb-2">IT & Computer Science</h2>
              <p class="text-gray-600 mb-4">
                Learn software engineering, AI, and data science globally.
              </p>
                <a href="/services" class="text-[#0A2D5A] font-semibold hover:underline">
                Explore More  <i class="fa-solid fa-arrow-right"></i>
              </a>
            </div>
          </div>

          <!-- Card 6 -->
          <div
            class="bg-white shadow-[0_0_25px_rgba(0,0,0,0.15)] rounded-2xl overflow-hidden hover:shadow-xl transition"
          >
            <img
              src="images/home-10.png"
              alt="Arts"
              class="w-full h-58 object-cover rounded-t-2xl"
            />
            <div class="p-6">
              <h2 class="text-2xl font-semibold mb-2">Arts & Humanities</h2>
              <p class="text-gray-600 mb-4">
                Pursue studies in literature, history, psychology, and social
                sciences.
              </p>
                <a href="/services" class="text-[#0A2D5A] font-semibold hover:underline">
                Explore More  <i class="fa-solid fa-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-----------------------------------PROCESS SECTION ----------------------------------------------->
 <section class="py-16 bg-[#F6F6F6]">
  <div class="px-6 md:px-12">
    <h2 class="text-2xl md:text-4xl font-bold mb-6 text-center">
      Study <span class="text-[#74BF1A]">Abroad</span>
    </h2>
    <p class="text-lg md:text-xl text-center mb-12 text-gray-700 max-w-3xl mx-auto">
      Your complete step-by-step guide to making your study abroad journey smooth and successful.
    </p>

    <!-- Content -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
      <div class="space-y-6">
        @php
          $steps = [
            ['Select Your Program', 'Choose the course that matches your career goals and interests.', 'fa-graduation-cap'],
            ['Choose University & Country', 'Find the best destination and university tailored to your needs.', 'fa-university'],
            ['Prepare Application', 'Get guidance on writing SOPs, resumes, and recommendation letters.', 'fa-file-alt'],
            ['Submit Documents', 'Submit transcripts, test scores, and all required paperwork.', 'fa-pen-nib'],
            ['Receive Offer Letter', 'Get your conditional or unconditional admission letter.', 'fa-envelope-open-text'],
            ['Apply for Scholarships', 'Explore funding opportunities and apply for scholarships.', 'fa-hand-holding-usd'],
            ['Visa Application', 'Complete visa forms, attend interviews, and get approvals.', 'fa-passport'],
            ['Book Flights', 'Plan your travel dates and book affordable tickets.', 'fa-plane-departure'],
            ['Arrive & Start Your Journey', 'Land in your dream country and begin your global education journey.', 'fa-house-flag'],
          ];
        @endphp

        @foreach ($steps as $index => $step)
          <div
            class="bg-white shadow-[0_0_25px_rgba(0,0,0,0.1)] rounded-xl p-5 hover:shadow-lg transition flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4"
          >
            <div class="flex items-center gap-4 w-full">
              <div class="text-[#74BF1A] text-2xl flex-shrink-0">
                <i class="fa-solid {{ $step[2] }}"></i>
              </div>
              <div class="flex-1">
                <div class="flex items-center justify-between sm:hidden mb-1">
                  <span class="bg-[#0A2D5A] text-white px-3 py-0.5 rounded-md text-xs font-medium">
                    Step {{ $index + 1 }}
                  </span>
                </div>
                <h3 class="font-semibold text-base md:text-lg text-[#0A2D5A]">{{ $step[0] }}</h3>
                <p class="text-gray-600 text-sm leading-relaxed">{{ $step[1] }}</p>
              </div>
            </div>
            <span
              class="hidden sm:inline-block bg-[#0A2D5A] text-white px-4 py-1 rounded-lg text-sm font-medium whitespace-nowrap"
            >
              Step {{ $index + 1 }}
            </span>
          </div>
        @endforeach
      </div>

      <!-- Right Side -->
      <div class="text-center lg:text-left">
        <img
          src="images/home-04.png"
          alt="Study Abroad"
          class="mx-auto lg:mx-0 rounded-2xl shadow-lg mb-6 w-full max-w-md lg:max-w-none"
        />
        <p class="text-gray-700 text-lg leading-relaxed">
          At Global Minds, we simplify the entire study abroad process — from choosing the right program to settling in your dream country. Our expert consultants ensure every document, application, and step is handled with precision.
        </p>
        <p class="mt-4 text-gray-700">
          With partnerships across top universities worldwide, we help you access quality education, secure scholarships, and confidently move abroad. Whether it’s the UK, USA, Canada, Australia, or Europe, your future starts here.
        </p>
        <p class="mt-4 text-gray-700">
          Our mission is to make studying abroad stress-free and achievable. We stand by you every step of the way — from your first consultation to your first day on campus.
        </p>
        <div class="hidden md:flex mt-6">
    <div class=":flex">
    <a href="/destination"
   class="relative overflow-hidden bg-[#74BF1A] text-white px-5 py-2.5 rounded-lg font-semibold group transition-all duration-300 inline-block">

    <span class="relative z-10 flex items-center gap-2">
       Start Your Journey
    </span>

    <span class="absolute inset-0 bg-green-600 translate-x-full group-hover:translate-x-0 transition-transform duration-300"></span>
</a>

      </div>
      </div>
      </div>
    </div>
  </div>
</section>

  <!-----------------------------------FORM SECTION----------------------------------------------->
    <section class="py-16 ">
      <div class="px-6 md:px-12">
        <div class="flex flex-col lg:flex-row items-stretch gap-10">
          <!--  Image  -->
          <div class="w-full lg:w-1/2 flex items-center">
            <div
              class="overflow-hidden rounded-2xl shadow-lg w-full h-[800px] my-auto"
            >
              <img
                src="images/home-11.png"
                alt="Students"
                class="w-full h-full object-cover rounded-2xl transform transition duration-500 hover:scale-105 hover:shadow-2xl"
              />
            </div>
          </div>

          <!-- Right Form -->
          <div class="w-full lg:w-1/2 flex flex-col justify-between">
            <div
              class="border rounded-2xl shadow-lg p-6 md:p-8 bg-gray-50 flex flex-col justify-between w-full h-full"
            >
              <div>
                <h1 class="text-3xl font-bold mb-6 text-black">
                  Share Your Details Our Experts Will Contact You
                </h1>

                <form action="" class="space-y-6">
                  <!-- First Name + Last Name -->
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <input
                      class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-[#74BF1A] outline-none"
                      placeholder="First Name"
                    />
                    <input
                      class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-[#74BF1A] outline-none"
                      placeholder="Last Name"
                    />
                  </div>

                  <!--  Email  -->
                  <input
                    class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-[#74BF1A] outline-none"
                    placeholder="E-mail"
                  />

                  <!--  Phone Number + LinkedIn -->
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <input
                      class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-[#74BF1A] outline-none"
                      placeholder="Phone Number"
                    />
                    <input
                      class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-[#74BF1A] outline-none"
                      placeholder="LinkedIn Profile"
                    />
                  </div>

                  <!--  Preferred Study Destination + Nearest Branch Time -->
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <select
                      class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-[#74BF1A] outline-none"
                    >
                      <option selected disabled>
                        Preferred Study Destination
                      </option>
                      <option value="uk">UK</option>
                      <option value="usa">USA</option>
                      <option value="canada">Canada</option>
                    </select>

                    <select
                      class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-[#74BF1A] outline-none"
                    >
                      <option selected disabled>Nearest Branch Time</option>
                      <option value="morning">Morning</option>
                      <option value="afternoon">Afternoon</option>
                      <option value="evening">Evening</option>
                    </select>
                  </div>
                  <!--  Preferred Mode of Counseling + Preferred Study Level -->
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <select
                      class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-[#74BF1A] outline-none"
                    >
                      <option selected disabled>
                        Preferred Mode of Counseling
                      </option>
                      <option value="online">Online</option>
                      <option value="in-person">In-Person</option>
                      <option value="phone">Phone Call</option>
                    </select>

                    <select
                      class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-[#74BF1A] outline-none"
                    >
                      <option selected disabled>Preferred Study Level</option>
                      <option value="undergraduate">Undergraduate</option>
                      <option value="postgraduate">Postgraduate</option>
                      <option value="phd">PhD / Research</option>
                      <option value="diploma">Diploma / Certificate</option>
                    </select>
                  </div>

                  <!--  Message -->
                  <textarea
                    rows="5"
                    class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-[#74BF1A] outline-none resize-none"
                    placeholder="Message"
                  ></textarea>
                </form>
              </div>

              <!-- Button  -->
              <div class="hidden md:flex items-center justify-center">
                <a
                  href="#"
                  class="bg-[#74BF1A] text-white px-6 md:px-32 font-bold py-3 rounded-lg hover:bg-green-600 transition"
                >
                  Submit
                </a>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ---------------Testimonials Section--------------------------------------------- -->
   <section class="py-16 bg-[#F6F6F6]">
  <div class="px-6 md:px-12">
    <!-- Section Heading -->
    <div class="max-w-4xl mx-auto text-center mb-12">
      <p class="text-4xl font-semibold text-[#092962]">Testimonials</p>
      <h1 class="text-3xl md:text-4xl font-semibold text-[#322F35] mt-2">Study Abroad Experiences</h1>
      <h2 class="text-xl md:text-2xl font-semibold text-[#322F35] mt-1">Hear from Our Students</h2>
      <p class="text-xl md:text-lg text-[#79767D] mt-2">
        Discover how our students have transformed their dreams into reality by studying in top universities across the world.
      </p>
    </div>

    <!-- Main grid -->
    <div class="grid grid-cols-1 lg:grid-cols-[1fr_1.5fr] gap-6">
      <!-- LEFT big card -->
      <div class="bg-white rounded-2xl border border-gray-200 p-8 flex flex-col justify-between shadow-lg">
        <div>
          <h3 class="text-2xl md:text-3xl font-semibold text-[#000000]">Canada</h3>
          <p class="text-lg md:text-xl text-[#000000] mt-1 font-semibold">Arts &amp; Humanities</p>

          <div class="text-5xl text-[#092962] mt-6 mb-4 leading-none font-sans">  <i class="fa-solid fa-quote-right"></i>
</div>

          <p class="text-sm md:text-base text-[#000000] leading-relaxed">
            Studying in Canada has been a life-changing journey. The academic standards, cultural diversity, and opportunities for growth exceeded my expectations. I gained confidence, independence, and skills that prepared me for a global career.
          </p>
        </div>

        <!-- Reviewer -->
        <div class="flex items-center gap-4 mt-6">
          <img src="images/man.png" alt="Reviewer" class="w-12 h-12 rounded-full object-cover border border-gray-300" />
          <div>
            <p class="text-sm md:text-base font-semibold text-[#322F35]">Ali Raza</p>
            <p class="text-xs md:text-sm text-[#322F35]">University of Toronto</p>
          </div>
        </div>
      </div>

      <!-- RIGHT column -->
      <div class="space-y-6 flex flex-col">
        <!-- Top right big card -->
        <div class="bg-white rounded-2xl border border-gray-200 p-8 shadow-lg">
          <h3 class="text-2xl md:text-3xl font-semibold text-[#000000]">Australia</h3>
          <p class="text-lg md:text-xl text-[#000000] mt-1 font-semibold">Engineering &amp; Technology</p>

          <div class="text-5xl text-[#092962] mt-6 mb-4 leading-none font-sans">   <i class="fa-solid fa-quote-right"></i>
</div>

          <p class="text-sm md:text-base text-[#000000] leading-relaxed">
            My study abroad experience in Australia opened new horizons. The practical learning environment and supportive faculty helped me develop real-world engineering skills. I also met students from all over the world who became lifelong friends.
          </p>

          <div class="flex items-center gap-4 mt-6">
            <img src="images/man.png" alt="Reviewer" class="w-12 h-12 rounded-full object-cover border border-gray-300" />
            <div>
              <p class="text-sm md:text-base font-semibold text-[#322F35]">Sara Khan</p>
              <p class="text-xs md:text-sm text-[#322F35]">University of Melbourne</p>
            </div>
          </div>
        </div>

        <!-- Bottom two small cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 flex-1">
          <!-- small card 1 -->
          <div class="bg-white rounded-2xl border border-gray-200 p-6 flex flex-col justify-between shadow-lg">
            <div>
              <h4 class="text-2xl md:text-3xl font-semibold text-[#000000]">United Kingdom</h4>
              <p class="text-lg md:text-xl text-[#000000] mt-1 font-semibold">Business &amp; Management</p>

              <div class="text-4xl text-[#092962] mt-4 mb-3 leading-none font-sans">   <i class="fa-solid fa-quote-right"></i>
</div>

              <p class="text-sm md:text-base text-[#000000] leading-relaxed">
                Studying in the UK helped me gain a deeper understanding of international business practices. The multicultural exposure and internship opportunities boosted my confidence and global mindset.
              </p>
            </div>

            <div class="flex items-center gap-3 mt-4">
              <img src="images/man.png" alt="Reviewer" class="w-9 h-9 rounded-full object-cover border border-gray-300" />
              <div>
                <p class="text-sm md:text-base font-semibold text-[#322F35]">Hassan Ahmed</p>
                <p class="text-xs md:text-sm text-[#322F35]">University of London</p>
              </div>
            </div>
          </div>

          <!-- small card 2  -->
          <div class="bg-[#041C47] rounded-2xl p-6 flex flex-col justify-between text-white shadow-lg">
            <div>
              <h4 class="text-lg md:text-xl font-semibold">Germany</h4>
              <p class="text-sm md:text-base mt-1 opacity-90">Science &amp; Research</p>

              <div class="text-4xl text-green-400 mt-4 mb-3 leading-none font-sans">  <i class="fa-solid fa-quote-right"></i>
</div>

              <p class="text-sm md:text-base text-white/90 leading-relaxed">
                My time in Germany was remarkable — a perfect blend of innovation, discipline, and academic excellence. I learned not only from professors but also from the rich culture and advanced research opportunities.
              </p>
            </div>

            <div class="flex items-center gap-3 mt-4">
              <img src="images/man.png" alt="Reviewer" class="w-9 h-9 rounded-full object-cover border border-white/30" />
              <div>
                <p class="text-sm md:text-base font-semibold">Fatima Noor</p>
                <p class="text-xs md:text-sm opacity-80">Technical University of Munich</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- View all -->
    <div class="flex flex-col sm:flex-row justify-between items-center max-w-7xl mx-auto mt-10 text-center sm:text-left">
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
      <a href="#" class="text-sm md:text-base font-bold text-[#092962] mt-4 sm:mt-0 hover:text-[#74BF1A] transition-all">
        View all reviews <i class="fa-solid fa-arrow-right ml-1"></i>
      </a>
    </div>
  </div>
</section>



@endsection
