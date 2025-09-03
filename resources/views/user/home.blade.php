@extends('layouts.user')
@section('content')
    <!-----------------------------------HERO SECTION----------------------------------------------->
    <section
      class="relative bg-[url('/images/hero-bg.jpg')] bg-cover bg-top w-full h-screen flex items-center justify-center"
    >
      <!-- Content -->
      <div
        class="relative z-10 flex items-center justify-end h-full max-w-7xl mx-auto px-6"
      >
        <div class="w-full md:w-1/2 text-white">
      <h1
  class="text-3xl md:text-5xl font-semibold leading-snug md:leading-tight mb-6"
>
  Your Journey to Global<br />Education Starts Here<br />with Global Minds
</h1>
<p class="text-base md:text-lg leading-relaxed mb-8">
  Global Minds Consultants helps you unlock international opportunities with
  expert study abroad guidance. From selecting top universities to securing
  admissions and visas, we make your dream of studying overseas simple,
  smooth, and successful. Let’s build your future together.
</p>

          <a
            href="#"
            class="bg-[#74BF1A] text-white px-6 py-3 rounded-lg hover:bg-green-600 transition inline-block shadow-lg hover:scale-105 transform"
          >
            Book free counselling →
          </a>
        </div>
      </div>
    </section>

  <!----------------------------------- WHY CHOOSE US SECTION ----------------------------------------------->
<section class="py-16 bg-white">
  <div class="px-12">
    <!-- Section Heading -->
    <h2 class="text-2xl md:text-4xl font-bold mb-12">
      Why <span class="text-[#74BF1A]">Global Minds</span> is The Right
      Choice for You?
    </h2>

    <!-- Main Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
      <!-- Left Column (2 stacked cards + 1 wide card) -->
      <div class="lg:col-span-2 grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Card 1 -->
        <div
          class="bg-gray-100 rounded-2xl shadow-md p-6 hover:shadow-lg hover:cursor-pointer transition"
        >
          <div class="text-3xl mb-4 text-[#74BF1A]">
            <i class="fa-solid fa-graduation-cap"></i>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-2">
            <span class="text-[#092962]">2,500+</span> Global University Partners
          </h3>
          <p class="text-gray-600 text-sm leading-relaxed">
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
          <h3 class="text-xl font-bold text-gray-900 mb-2">
            <span class="text-[#092962]">Expert</span> Admission Guidance
          </h3>
          <p class="text-gray-600 text-sm leading-relaxed">
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
          <h3 class="text-xl font-bold text-gray-900 mb-2">
            <span class="text-[#092962]">Trusted</span> & Transparent Process
          </h3>
          <p class="text-gray-600 text-sm leading-relaxed">
            With a strong track record of successful admissions, we pride
            ourselves on honest advice, personalized support, and clear
            guidance throughout your study abroad journey.
          </p>
        </div>
      </div>

      <!-- Right Column (Tall Card) -->
      <div
        class="bg-[#0A2D5A] text-white rounded-2xl shadow-lg p-6 flex flex-col justify-between hover:scale-105 hover:cursor-pointer transition"
      >
        <div>
          <div class="text-3xl mb-4 text-[#74BF1A]">
            <i class="fa-solid fa-trophy"></i>
          </div>
          <h3 class="text-xl font-bold mb-2">
            <span class="text-[#74BF1A]">Proven</span> Success Stories
          </h3>
          <p class="text-sm leading-relaxed">
            Thousands of students have trusted Global Minds to fulfill their
            dream of studying abroad. With our personalized counseling and
            dedicated support, we ensure your journey is smooth and successful.
          </p>
        </div>
        <div class="mt-6">
          <a
            href="#"
            class="bg-[#74BF1A] text-white px-4 py-2 rounded-lg hover:bg-green-600 transition"
          >
            Apply Now
          </a>
        </div>
      </div>
    </div>
  </div>
</section>


    <!-----------------------------------SUPPORT STUDENT SECTION ----------------------------------------------->
   <section class="py-16 bg-[#F6F6F6]">
  <div class="px-6 md:px-12">
    <!-- Section Heading -->
    <h2 class="text-2xl md:text-4xl font-bold mb-12 text-center">
      How do We <span class="text-[#74BF1A]">Support</span> Our Students?
    </h2>

    <!-- Slider Wrapper -->
<div class="relative overflow-hidden">
  <div id="slider" class="flex transition-transform duration-500 ease-in-out space-x-6">
        <!-- Card 1 -->
        <div class="min-w-full sm:min-w-[50%] lg:min-w-[33.3%] bg-white rounded-2xl shadow-md p-6 hover:shadow-lg transition">
          <div class="text-3xl mb-4 text-[#0A2D5A]">
            <i class="fa-solid fa-graduation-cap"></i>
          </div>
          <h3 class="text-xl font-semibold text-gray-900 mb-3">
            Country and University Selection
          </h3>
          <p class="text-gray-600 mb-4">
            We guide you to choose the best-fit country and university based on your goals, budget, and preferences.
          </p>
          <h4 class="font-semibold text-gray-800 mb-2">What We Offer</h4>
          <ul class="space-y-2 text-gray-600">
            <li><i class="fa-solid fa-check-circle text-[#0A2D5A] mr-2"></i> Guidance on choosing the right country</li>
            <li><i class="fa-solid fa-check-circle text-[#0A2D5A] mr-2"></i> Top university recommendations</li>
            <li><i class="fa-solid fa-check-circle text-[#0A2D5A] mr-2"></i> Personalized counseling</li>
          </ul>
          <a href="#" class="text-[#0A2D5A] font-semibold inline-block mt-4 hover:underline">
            Start Preparing Now →
          </a>
        </div>

        <!-- Card 2 -->
        <div class="min-w-full sm:min-w-[50%] lg:min-w-[33.3%] bg-white rounded-2xl shadow-md p-6 hover:shadow-lg transition">
          <div class="text-3xl mb-4 text-[#0A2D5A]">
            <i class="fa-solid fa-hand-holding-dollar"></i>
          </div>
          <h3 class="text-xl font-semibold text-gray-900 mb-3">Scholarship Abroad</h3>
          <p class="text-gray-600 mb-4">
            Find and secure scholarships abroad to make your dream education affordable and stress-free.
          </p>
          <h4 class="font-semibold text-gray-800 mb-2">What We Offer</h4>
          <ul class="space-y-2 text-gray-600">
            <li><i class="fa-solid fa-check-circle text-[#0A2D5A] mr-2"></i> Scholarship application guidance</li>
            <li><i class="fa-solid fa-check-circle text-[#0A2D5A] mr-2"></i> Document preparation support</li>
            <li><i class="fa-solid fa-check-circle text-[#0A2D5A] mr-2"></i> Access to exclusive funding options</li>
          </ul>
          <a href="#" class="text-[#0A2D5A] font-semibold inline-block mt-4 hover:underline">
            Start Preparing Now →
          </a>
        </div>

        <!-- Card 3 -->
        <div class="min-w-full sm:min-w-[50%] lg:min-w-[33.3%] bg-white rounded-2xl shadow-md p-6 hover:shadow-lg transition">
          <div class="text-3xl mb-4 text-[#0A2D5A]">
            <i class="fa-solid fa-briefcase"></i>
          </div>
          <h3 class="text-xl font-semibold text-gray-900 mb-3">Career Guidance</h3>
          <p class="text-gray-600 mb-4">
            Get mentorship, workshops, and job placement support to build a strong career path.
          </p>
          <h4 class="font-semibold text-gray-800 mb-2">What We Offer</h4>
          <ul class="space-y-2 text-gray-600">
            <li><i class="fa-solid fa-check-circle text-[#0A2D5A] mr-2"></i> Resume and interview training</li>
            <li><i class="fa-solid fa-check-circle text-[#0A2D5A] mr-2"></i> Networking opportunities</li>
            <li><i class="fa-solid fa-check-circle text-[#0A2D5A] mr-2"></i> Internship and placement assistance</li>
          </ul>
          <a href="#" class="text-[#0A2D5A] font-semibold inline-block mt-4 hover:underline">
            Start Preparing Now →
          </a>
        </div>

        <!-- Card 4 -->
        <div class="min-w-full sm:min-w-[50%] lg:min-w-[33.3%] bg-white rounded-2xl shadow-md p-6 hover:shadow-lg transition">
          <div class="text-3xl mb-4 text-[#0A2D5A]">
            <i class="fa-solid fa-passport"></i>
          </div>
          <h3 class="text-xl font-semibold text-gray-900 mb-3">Visa Assistance</h3>
          <p class="text-gray-600 mb-4">
            Full support for preparing and submitting your visa application with expert guidance.
          </p>
          <h4 class="font-semibold text-gray-800 mb-2">What We Offer</h4>
          <ul class="space-y-2 text-gray-600">
            <li><i class="fa-solid fa-check-circle text-[#0A2D5A] mr-2"></i> Document verification</li>
            <li><i class="fa-solid fa-check-circle text-[#0A2D5A] mr-2"></i> Mock visa interviews</li>
            <li><i class="fa-solid fa-check-circle text-[#0A2D5A] mr-2"></i> End-to-end visa guidance</li>
          </ul>
          <a href="#" class="text-[#0A2D5A] font-semibold inline-block mt-4 hover:underline">
            Start Preparing Now →
          </a>
        </div>

        <!-- Card 5 -->
        <div class="min-w-full sm:min-w-[50%] lg:min-w-[33.3%] bg-white rounded-2xl shadow-md p-6 hover:shadow-lg transition">
          <div class="text-3xl mb-4 text-[#0A2D5A]">
            <i class="fa-solid fa-house"></i>
          </div>
          <h3 class="text-xl font-semibold text-gray-900 mb-3">Accommodation Support</h3>
          <p class="text-gray-600 mb-4">
            Secure safe and affordable housing abroad with our trusted network of providers.
          </p>
          <h4 class="font-semibold text-gray-800 mb-2">What We Offer</h4>
          <ul class="space-y-2 text-gray-600">
            <li><i class="fa-solid fa-check-circle text-[#0A2D5A] mr-2"></i> Housing recommendations</li>
            <li><i class="fa-solid fa-check-circle text-[#0A2D5A] mr-2"></i> Assistance with bookings</li>
            <li><i class="fa-solid fa-check-circle text-[#0A2D5A] mr-2"></i> Post-arrival support</li>
          </ul>
          <a href="#" class="text-[#0A2D5A] font-semibold inline-block mt-4 hover:underline">
            Start Preparing Now →
          </a>
        </div>
           <!-- Card 5 -->
        <div class="min-w-full sm:min-w-[50%] lg:min-w-[33.3%] bg-white rounded-2xl shadow-md p-6 hover:shadow-lg transition">
          <div class="text-3xl mb-4 text-[#0A2D5A]">
            <i class="fa-solid fa-house"></i>
          </div>
          <h3 class="text-xl font-semibold text-gray-900 mb-3">Accommodation Support</h3>
          <p class="text-gray-600 mb-4">
            Secure safe and affordable housing abroad with our trusted network of providers.
          </p>
          <h4 class="font-semibold text-gray-800 mb-2">What We Offer</h4>
          <ul class="space-y-2 text-gray-600">
            <li><i class="fa-solid fa-check-circle text-[#0A2D5A] mr-2"></i> Housing recommendations</li>
            <li><i class="fa-solid fa-check-circle text-[#0A2D5A] mr-2"></i> Assistance with bookings</li>
            <li><i class="fa-solid fa-check-circle text-[#0A2D5A] mr-2"></i> Post-arrival support</li>
          </ul>
          <a href="#" class="text-[#0A2D5A] font-semibold inline-block mt-4 hover:underline">
            Start Preparing Now →
          </a>
        </div>
           <!-- Card 5 -->
        <div class="min-w-full sm:min-w-[50%] lg:min-w-[33.3%] bg-white rounded-2xl shadow-md p-6 hover:shadow-lg transition">
          <div class="text-3xl mb-4 text-[#0A2D5A]">
            <i class="fa-solid fa-house"></i>
          </div>
          <h3 class="text-xl font-semibold text-gray-900 mb-3">Accommodation Support</h3>
          <p class="text-gray-600 mb-4">
            Secure safe and affordable housing abroad with our trusted network of providers.
          </p>
          <h4 class="font-semibold text-gray-800 mb-2">What We Offer</h4>
          <ul class="space-y-2 text-gray-600">
            <li><i class="fa-solid fa-check-circle text-[#0A2D5A] mr-2"></i> Housing recommendations</li>
            <li><i class="fa-solid fa-check-circle text-[#0A2D5A] mr-2"></i> Assistance with bookings</li>
            <li><i class="fa-solid fa-check-circle text-[#0A2D5A] mr-2"></i> Post-arrival support</li>
          </ul>
          <a href="#" class="text-[#0A2D5A] font-semibold inline-block mt-4 hover:underline">
            Start Preparing Now →
          </a>
        </div>
           <!-- Card 5 -->
        <div class="min-w-full sm:min-w-[50%] lg:min-w-[33.3%] bg-white rounded-2xl shadow-md p-6 hover:shadow-lg transition">
          <div class="text-3xl mb-4 text-[#0A2D5A]">
            <i class="fa-solid fa-house"></i>
          </div>
          <h3 class="text-xl font-semibold text-gray-900 mb-3">Accommodation Support</h3>
          <p class="text-gray-600 mb-4">
            Secure safe and affordable housing abroad with our trusted network of providers.
          </p>
          <h4 class="font-semibold text-gray-800 mb-2">What We Offer</h4>
          <ul class="space-y-2 text-gray-600">
            <li><i class="fa-solid fa-check-circle text-[#0A2D5A] mr-2"></i> Housing recommendations</li>
            <li><i class="fa-solid fa-check-circle text-[#0A2D5A] mr-2"></i> Assistance with bookings</li>
            <li><i class="fa-solid fa-check-circle text-[#0A2D5A] mr-2"></i> Post-arrival support</li>
          </ul>
          <a href="#" class="text-[#0A2D5A] font-semibold inline-block mt-4 hover:underline">
            Start Preparing Now →
          </a>
        </div>
      </div>

        <!-- Arrows Centered Below -->
  <div class="flex justify-center space-x-4 mt-8">
    <button id="prev" class="w-10 h-10 flex items-center justify-center bg-[#0A2D5A] text-white rounded-full hover:bg-[#092962] transition">
      <i class="fa-solid fa-chevron-left"></i>
    </button>
    <button id="next" class="w-10 h-10 flex items-center justify-center bg-[#0A2D5A] text-white rounded-full hover:bg-[#092962] transition">
      <i class="fa-solid fa-chevron-right"></i>
    </button>
  </div>
</div>
    </div>
  </div>
</section>

<script>
  const slider = document.getElementById("slider");
  const next = document.getElementById("next");
  const prev = document.getElementById("prev");

  let scrollAmount = 0;
  const cardWidth = slider.children[0].offsetWidth + 24; // Card + gap

  next.addEventListener("click", () => {
    if (scrollAmount < (slider.children.length - 1) * cardWidth) {
      scrollAmount += cardWidth;
      slider.style.transform = `translateX(-${scrollAmount}px)`;
    }
  });

  prev.addEventListener("click", () => {
    if (scrollAmount > 0) {
      scrollAmount -= cardWidth;
      slider.style.transform = `translateX(-${scrollAmount}px)`;
    }
  });
</script>

    <!-----------------------------------JOURNEY SECTION ----------------------------------------------->

<section class="py-16 bg-[#F6F6F6]">
  <div class="px-12 grid grid-cols-1 md:grid-cols-2 items-center gap-10">
    <!-- Left Side - Images -->
    <div class="flex gap-6">
      <img
        src="images/journey1.png"
        alt="Journey 1"
        class="w-1/2 "
      />
      <img
        src="images/journey2.png"
        alt="Journey 2"
        class="w-1/2  mt-10"
      />
    </div>

    <!-- Right Side - Content -->
    <div>
      <h2 class="text-2xl md:text-3xl font-bold mb-4">
        Your Journey to Study <br /> Abroad Starts with Us.
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
      <button
        class="px-6 py-3 bg-[#74BF1A] text-white rounded-lg font-semibold hover:bg-green-600 transition"
      >
        Book a Consultation Call
      </button>
    </div>
  </div>
</section>


    <!-----------------------------------DISCOVER TOP FIELDS  SECTION ----------------------------------------------->
    <section class="py-16">
      <div class="px-12">
        <!-- Section Heading -->
        <h2 class="text-2xl md:text-4xl font-bold mb-6 text-center">
          Discover <span class="text-[#74BF1A]">Top Fields</span> in Studies?
        </h2>
        <p class="text-lg md:text-xl text-center mb-12">
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam,
          saepe.
        </p>

        <!-- Grid Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
          <!-- Card 1 -->
          <div
            class="bg-white shadow-md rounded-2xl overflow-hidden hover:shadow-xl transition"
          >
            <img
              src="images/fields.jpg"
              alt="Law"
              class="w-full h-48 object-cover rounded-t-2xl"
            />
            <div class="p-6">
              <h2 class="text-xl font-semibold mb-2">Law</h2>
              <p class="text-gray-600 mb-4">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Repellat corporis quod magnam corrupti, inventore perferendis.
              </p>
              <a href="#" class="text-[#0A2D5A] font-semibold hover:underline">
                Explore More →
              </a>
            </div>
          </div>

          <!-- Card 2 -->
          <div
            class="bg-white shadow-md rounded-2xl overflow-hidden hover:shadow-xl transition"
          >
            <img
              src="images/fields.jpg"
              alt="Engineering"
              class="w-full h-48 object-cover rounded-t-2xl"
            />
            <div class="p-6">
              <h2 class="text-xl font-semibold mb-2">Engineering</h2>
              <p class="text-gray-600 mb-4">
                Explore innovative fields like mechanical, civil, and computer
                engineering.
              </p>
              <a href="#" class="text-[#0A2D5A] font-semibold hover:underline">
                Explore More →
              </a>
            </div>
          </div>

          <!-- Card 3 -->
          <div
            class="bg-white shadow-md rounded-2xl overflow-hidden hover:shadow-xl transition"
          >
            <img
              src="images/fields.jpg"
              alt="Medicine"
              class="w-full h-48 object-cover rounded-t-2xl"
            />
            <div class="p-6">
              <h2 class="text-xl font-semibold mb-2">Medicine</h2>
              <p class="text-gray-600 mb-4">
                Join top universities for medical studies, research, and
                healthcare training.
              </p>
              <a href="#" class="text-[#0A2D5A] font-semibold hover:underline">
                Explore More →
              </a>
            </div>
          </div>

          <!-- Card 4 -->
          <div
            class="bg-white shadow-md rounded-2xl overflow-hidden hover:shadow-xl transition"
          >
            <img
              src="images/fields.jpg"
              alt="Business"
              class="w-full h-48 object-cover rounded-t-2xl"
            />
            <div class="p-6">
              <h2 class="text-xl font-semibold mb-2">Business</h2>
              <p class="text-gray-600 mb-4">
                Study management, finance, and entrepreneurship worldwide.
              </p>
              <a href="#" class="text-[#0A2D5A] font-semibold hover:underline">
                Explore More →
              </a>
            </div>
          </div>

          <!-- Card 5 -->
          <div
            class="bg-white shadow-md rounded-2xl overflow-hidden hover:shadow-xl transition"
          >
            <img
              src="images/fields.jpg"
              alt="IT"
              class="w-full h-48 object-cover rounded-t-2xl"
            />
            <div class="p-6">
              <h2 class="text-xl font-semibold mb-2">IT & Computer Science</h2>
              <p class="text-gray-600 mb-4">
                Learn software engineering, AI, and data science globally.
              </p>
              <a href="#" class="text-[#0A2D5A] font-semibold hover:underline">
                Explore More →
              </a>
            </div>
          </div>

          <!-- Card 6 -->
          <div
            class="bg-white shadow-md rounded-2xl overflow-hidden hover:shadow-xl transition"
          >
            <img
              src="images/fields.jpg"
              alt="Arts"
              class="w-full h-48 object-cover rounded-t-2xl"
            />
            <div class="p-6">
              <h2 class="text-xl font-semibold mb-2">Arts & Humanities</h2>
              <p class="text-gray-600 mb-4">
                Pursue studies in literature, history, psychology, and social
                sciences.
              </p>
              <a href="#" class="text-[#0A2D5A] font-semibold hover:underline">
                Explore More →
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-----------------------------------PROCESS SECTION ----------------------------------------------->
 <section class="py-16 bg-[#F6F6F6]">
  <div class="px-12">
    <!-- Section Heading -->
    <h2 class="text-2xl md:text-4xl font-bold mb-6 text-center">
      Study <span class="text-[#74BF1A]">Abroad</span>
    </h2>
    <p class="text-lg md:text-xl text-center mb-12">
      Your complete step-by-step guide to making your study abroad journey smooth and successful.
    </p>

    <!-- Content -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
      <!-- Left Side: Steps -->
      <div class="space-y-6">
        <!-- Step 1 -->
        <div class="flex items-center justify-between bg-white shadow-md rounded-xl p-4 hover:shadow-lg transition">
          <div class="flex items-center gap-4">
            <div class="text-[#74BF1A] text-2xl">
              <i class="fa-solid fa-graduation-cap"></i>
            </div>
            <div>
              <h3 class="font-semibold text-lg">Select Your Program</h3>
              <p class="text-gray-600 text-sm">Choose the course that matches your career goals and interests.</p>
            </div>
          </div>
          <span class="bg-[#0A2D5A] text-white px-4 py-1 rounded-lg text-sm font-medium">Step 1</span>
        </div>

        <!-- Step 2 -->
        <div class="flex items-center justify-between bg-white shadow-md rounded-xl p-4 hover:shadow-lg transition">
          <div class="flex items-center gap-4">
            <div class="text-[#74BF1A] text-2xl">
              <i class="fa-solid fa-university"></i>
            </div>
            <div>
              <h3 class="font-semibold text-lg">Choose University & Country</h3>
              <p class="text-gray-600 text-sm">Find the best destination and university tailored to your needs.</p>
            </div>
          </div>
          <span class="bg-[#0A2D5A] text-white px-4 py-1 rounded-lg text-sm font-medium">Step 2</span>
        </div>

        <!-- Step 3 -->
        <div class="flex items-center justify-between bg-white shadow-md rounded-xl p-4 hover:shadow-lg transition">
          <div class="flex items-center gap-4">
            <div class="text-[#74BF1A] text-2xl">
              <i class="fa-solid fa-file-alt"></i>
            </div>
            <div>
              <h3 class="font-semibold text-lg">Prepare Application</h3>
              <p class="text-gray-600 text-sm">Get guidance on writing SOPs, resumes, and recommendation letters.</p>
            </div>
          </div>
          <span class="bg-[#0A2D5A] text-white px-4 py-1 rounded-lg text-sm font-medium">Step 3</span>
        </div>

        <!-- Step 4 -->
        <div class="flex items-center justify-between bg-white shadow-md rounded-xl p-4 hover:shadow-lg transition">
          <div class="flex items-center gap-4">
            <div class="text-[#74BF1A] text-2xl">
              <i class="fa-solid fa-pen-nib"></i>
            </div>
            <div>
              <h3 class="font-semibold text-lg">Submit Documents</h3>
              <p class="text-gray-600 text-sm">Submit transcripts, test scores, and all required paperwork.</p>
            </div>
          </div>
          <span class="bg-[#0A2D5A] text-white px-4 py-1 rounded-lg text-sm font-medium">Step 4</span>
        </div>

        <!-- Step 5 -->
        <div class="flex items-center justify-between bg-white shadow-md rounded-xl p-4 hover:shadow-lg transition">
          <div class="flex items-center gap-4">
            <div class="text-[#74BF1A] text-2xl">
              <i class="fa-solid fa-envelope-open-text"></i>
            </div>
            <div>
              <h3 class="font-semibold text-lg">Receive Offer Letter</h3>
              <p class="text-gray-600 text-sm">Get your conditional or unconditional admission letter.</p>
            </div>
          </div>
          <span class="bg-[#0A2D5A] text-white px-4 py-1 rounded-lg text-sm font-medium">Step 5</span>
        </div>

        <!-- Step 6 -->
        <div class="flex items-center justify-between bg-white shadow-md rounded-xl p-4 hover:shadow-lg transition">
          <div class="flex items-center gap-4">
            <div class="text-[#74BF1A] text-2xl">
              <i class="fa-solid fa-hand-holding-usd"></i>
            </div>
            <div>
              <h3 class="font-semibold text-lg">Apply for Scholarships</h3>
              <p class="text-gray-600 text-sm">Explore funding opportunities and apply for scholarships.</p>
            </div>
          </div>
          <span class="bg-[#0A2D5A] text-white px-4 py-1 rounded-lg text-sm font-medium">Step 6</span>
        </div>

        <!-- Step 7 -->
        <div class="flex items-center justify-between bg-white shadow-md rounded-xl p-4 hover:shadow-lg transition">
          <div class="flex items-center gap-4">
            <div class="text-[#74BF1A] text-2xl">
              <i class="fa-solid fa-passport"></i>
            </div>
            <div>
              <h3 class="font-semibold text-lg">Visa Application</h3>
              <p class="text-gray-600 text-sm">Complete visa forms, attend interviews, and get approvals.</p>
            </div>
          </div>
          <span class="bg-[#0A2D5A] text-white px-4 py-1 rounded-lg text-sm font-medium">Step 7</span>
        </div>

        <!-- Step 8 -->
        <div class="flex items-center justify-between bg-white shadow-md rounded-xl p-4 hover:shadow-lg transition">
          <div class="flex items-center gap-4">
            <div class="text-[#74BF1A] text-2xl">
              <i class="fa-solid fa-plane-departure"></i>
            </div>
            <div>
              <h3 class="font-semibold text-lg">Book Flights</h3>
              <p class="text-gray-600 text-sm">Plan your travel dates and book affordable tickets.</p>
            </div>
          </div>
          <span class="bg-[#0A2D5A] text-white px-4 py-1 rounded-lg text-sm font-medium">Step 8</span>
        </div>

        <!-- Step 9 -->
        <div class="flex items-center justify-between bg-white shadow-md rounded-xl p-4 hover:shadow-lg transition">
          <div class="flex items-center gap-4">
            <div class="text-[#74BF1A] text-2xl">
              <i class="fa-solid fa-house-flag"></i>
            </div>
            <div>
              <h3 class="font-semibold text-lg">Arrive & Start Your Journey</h3>
              <p class="text-gray-600 text-sm">Land in your dream country and begin your global education journey.</p>
            </div>
          </div>
                   <span class="bg-[#0A2D5A] text-white px-4 py-1 rounded-lg text-sm font-medium">Step 9</span>

        </div>
      </div>

      <!-- Right Side: Image + Text -->
      <div class="text-center lg:text-left">
        <img
          src="images/study.jpg"
          alt="Study Abroad"
          class="mx-auto lg:mx-0 rounded-2xl shadow-lg mb-6"
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
      </div>
    </div>
  </div>
</section>
  <!-----------------------------------FORM SECTION----------------------------------------------->
    <section class="py-16 ">
      <div class="px-6 md:px-12">
        <div class="flex flex-col lg:flex-row items-stretch gap-10">
          <!-- ✅ Image full height -->
          <div class="w-full lg:w-1/2 flex items-center">
            <div
              class="overflow-hidden rounded-2xl shadow-lg w-full h-[800px] my-auto"
            >
              <img
                src="images/services-form.png"
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
                <h1 class="text-3xl font-bold mb-6 text-[#092962]">
                  Share Your Details Our Experts Will Contact You
                </h1>

                <form action="" class="space-y-6">
                  <!-- ✅ First Name + Last Name -->
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

                  <!-- ✅ Email full width -->
                  <input
                    class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-[#74BF1A] outline-none"
                    placeholder="E-mail"
                  />

                  <!-- ✅ Phone Number + LinkedIn -->
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

                  <!-- ✅ Preferred Study Destination + Nearest Branch Time -->
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
                  <!-- ✅ Preferred Mode of Counseling + Preferred Study Level -->
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

                  <!-- ✅ Message -->
                  <textarea
                    rows="5"
                    class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-[#74BF1A] outline-none resize-none"
                    placeholder="Message"
                  ></textarea>
                </form>
              </div>

              <!-- Button stays at bottom -->
              <div class="hidden md:flex items-center justify-center">
                <a
                  href="#"
                  class="bg-[#74BF1A] text-white px-12 py-3 rounded-lg hover:bg-green-600 transition"
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
  <div class="px-12">
            <!-- Section Heading -->
            <div class="max-w-4xl mx-auto text-center mb-12">
                <p class="text-lg font-semibold text-[#092962]">Testimonial</p>
                <h1 class="text-3xl md:text-4xl font-semibold text-[#322F35] mt-2">Study Abroad</h1>
                <h2 class="text-xl md:text-2xl font-semibold text-[#322F35] mt-1">Study Abroad</h2>
                <p class="text-base text-[#79767D] mt-2">Lorem Ipsum is simply dummy text</p>
            </div>

            <!-- Main grid -->
            <div class="grid grid-cols-1 lg:grid-cols-[1fr_1.5fr] gap-6">

                <!-- LEFT big card -->
                <div class="bg-white rounded-2xl border border-gray-200 p-8 flex flex-col justify-between shadow-sm">
                    <div>
                        <h3 class="text-3xl font-semibold text-[#000000]">Canada</h3>
                        <p class="text-1xl text-[#000000] mt-1 font-semibold">Arts &amp; Humanities</p>

                        <div class="text-5xl text-[#092962] mt-6 mb-4 leading-none font-sans">“</div>

                        <p class="text-sm text-[#000000] leading-relaxed">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                        </p>
                    </div>

                    <!-- Reviewer -->
                    <div class="flex items-center gap-4 mt-6">
                        <img src="images/man.png" alt="Reviewer" class="w-12 h-12 rounded-full object-cover border border-gray-300" />
                        <div>
                            <p class="text-sm font-semibold text-[#322F35]">Reviewer name</p>
                            <p class="text-xs text-[#322F35]">University Name</p>
                        </div>
                    </div>
                </div>

                <!-- RIGHT column -->
                <div class="space-y-6 flex flex-col">
                    <!-- Top right big card -->
                    <div class="bg-white rounded-2xl border border-gray-200 p-8 shadow-sm">
                        <h3 class="text-3xl font-semibold text-[#000000]">Canada</h3>
                        <p class="text-1xl text-[#000000] mt-1 font-semibold">Arts &amp; Humanities</p>

                        <div class="text-5xl text-[#092962] mt-6 mb-4 leading-none font-sans">“</div>

                        <p class="text-sm text-[#000000] leading-relaxed">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>

                        <div class="flex items-center gap-4 mt-6">
                            <img src="images/man.png" alt="Reviewer" class="w-12 h-12 rounded-full object-cover border border-gray-300" />
                            <div>
                                <p class="text-lg font-semibold text-[#322F35]">Reviewer name</p>
                                <p class="text-xs text-[#322F35]">University Name</p>
                            </div>
                        </div>
                    </div>

                    <!-- Bottom two small cards -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 flex-1">
                        <!-- small card 1 -->
                        <div class="bg-white rounded-2xl border border-gray-200 p-6 flex flex-col justify-between shadow-sm">
                            <div>
                                <h4 class="text-3xl font-semibold text-[#000000]">Canada</h4>
                                <p class="text-xl text-[#000000] mt-1 font-semibold">Arts &amp; Humanities</p>

                                <div class="text-4xl text-[#092962] mt-4 mb-3 leading-none font-sans">“</div>

                                <p class="text-sm text-[#000000] leading-relaxed">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </p>
                            </div>

                            <div class="flex items-center gap-3 mt-4">
                                <img src="images/man.png" alt="Reviewer" class="w-9 h-9 rounded-full object-cover border border-gray-300" />
                                <div>
                                    <p class="text-sm font-semibold text-[#322F35]">Reviewer name</p>
                                    <p class="text-xs text-[#322F35]">University Name</p>
                                </div>
                            </div>
                        </div>

                        <!-- small card 2 (dark) -->
                        <div class="bg-[#041C47] rounded-2xl p-6 flex flex-col justify-between text-white shadow-sm">
                            <div>
                                <h4 class="text-base font-semibold">Canada</h4>
                                <p class="text-sm mt-1 opacity-90">Arts &amp; Humanities</p>

                                <div class="text-4xl text-green-400 mt-4 mb-3 leading-none font-sans">“</div>

                                <p class="text-sm text-white/90 leading-relaxed">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </p>
                            </div>

                            <div class="flex items-center gap-3 mt-4">
                                <img src="images/man.png" alt="Reviewer" class="w-9 h-9 rounded-full object-cover border border-white/30" />
                                <div>
                                    <p class="text-sm font-semibold">Reviewer name</p>
                                    <p class="text-xs opacity-80">University Name</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- View all -->
            <div class="flex flex-col sm:flex-row justify-between items-center max-w-7xl mx-auto mt-10">
                <div class="flex items-center space-x-4 text-gray-600">
                    <p class="text-sm">1500 Satisfied Clients</p>
                    <div class="flex items-center text-yellow-500">
                        <i class="fas fa-star text-xs"></i>
                        <i class="fas fa-star text-xs"></i>
                        <i class="fas fa-star text-xs"></i>
                        <i class="fas fa-star text-xs"></i>
                        <i class="fas fa-star-half-alt text-xs"></i>
                        <span class="text-sm text-gray-800 ml-2">4.9</span>
                    </div>
                    <p class="text-xs text-gray-500">Based on 1.5K+ reviews</p>
                </div>
                <a href="#" class="text-sm font-semibold text-[#092962] mt-4 sm:mt-0">View all reviews →</a>
            </div>

        </div>
    </section>


@endsection
