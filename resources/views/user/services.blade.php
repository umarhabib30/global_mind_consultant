@extends('layouts.user')
@section('content')
    <!-----------------------------------HERO SECTION----------------------------------------------->
    <section
  class="relative bg-[url('/images/hero-bg-services.jpg')] bg-cover bg-top w-full h-screen flex items-center justify-center px-4 sm:px-6 "
>
  <!-- Glass Effect Content -->
  <div
    class="bg-white/20 backdrop-blur-md rounded-2xl shadow-lg p-6  sm:p-8 md:p-12 max-w-4xl w-full border-2 border-white text-center text-white mt-8"
  >
  <h1 class="text-xl sm:text-2xl md:text-4xl font-bold mb-4 leading-snug">
  Your Gateway to Global Education Opportunities
</h1>
<p class="text-sm sm:text-base md:text-lg mb-6 px-2 sm:px-6">
  Unlock world-class learning experiences and explore academic programs across top international universities.
  We guide you every step of the way — from choosing the right course to achieving your study abroad dreams.
</p>


    <!-- Button -->
    <div class="flex justify-center items-center mt-6 mb-6">
      <a
        href="#"
        class="bg-[#74BF1A] text-white px-4 sm:px-6 py-2 sm:py-3 rounded-lg hover:bg-green-600 transition text-sm sm:text-base"
      >
        Contact Us
      </a>
    </div>

    <!-- Social Icons -->
    <div class="flex flex-wrap items-center justify-center gap-4 sm:gap-6 text-center">
      <p class="text-base sm:text-lg md:text-xl font-semibold w-full sm:w-auto mb-2 sm:mb-0">
        Contact Us:
      </p>
      <div class="flex gap-4 sm:gap-6">
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

    <!-----------------------------------SCHOLARSHIP ASSISTANCE SECTION----------------------------------------------->
  <section class="py-16 bg-[#F6F6F6]">
  <div class="px-4 sm:px-6 md:px-12">
    <!-- Section Heading -->
    <h2 class="text-xl sm:text-2xl md:text-4xl font-bold mb-4 sm:mb-6 text-center">
      Scholarship <span class="text-[#74BF1A]">Assistance</span>
    </h2>
    <p class="text-sm sm:text-base md:text-lg lg:text-xl text-center mb-8 sm:mb-12 text-gray-600">
      Guidance to find & apply for scholarships that match your goals
    </p>

    <div class="flex flex-col lg:flex-row items-stretch gap-8 lg:gap-10">
      <!-- Left Image & Text -->
      <div class="w-full lg:w-1/2 flex flex-col">
        <div class="overflow-hidden rounded-2xl shadow-lg">
          <img
            src="images/scholarship-assistance.jpg"
            alt="Students"
            class="w-full h-56 sm:h-72 md:h-[350px] object-cover rounded-2xl transform transition duration-500 hover:scale-105 hover:shadow-2xl"
          />
        </div>
        <div class="mt-4 sm:mt-6 flex flex-col flex-grow">
         <p class="text-sm sm:text-base md:text-lg text-gray-600 mb-4 sm:mb-6 flex-grow text-justify sm:text-left">
  We provide expert guidance to help you discover and apply for scholarships that align with your academic achievements and career goals.
  From merit-based to need-based funding, our consultants ensure you don’t miss valuable opportunities that can make your study abroad journey more affordable and stress-free.
</p>

          <div class="flex justify-center lg:justify-start">
            <a
              href="#"
              class="bg-[#092962] text-white px-5 sm:px-6 py-2 sm:py-3 rounded-lg hover:bg-green-600 transition text-sm sm:text-base"
            >
              Book Free Consultation
            </a>
          </div>
        </div>
      </div>

      <!-- Right Form -->
      <div class="w-full lg:w-1/2 flex">
        <div
          class="border rounded-2xl shadow-lg p-4 sm:p-6 md:p-8 bg-gray-50 flex flex-col justify-between w-full"
        >
          <div>
            <h1 class="text-xl sm:text-2xl md:text-3xl font-bold mb-4 sm:mb-6 text-[#092962] leading-snug">
              Explore Scholarships of Your Interest
            </h1>
            <form action="" class="space-y-6 sm:space-y-8 md:space-y-12">
              <select
                class="w-full border border-gray-300 rounded-lg p-2 sm:p-3 focus:ring-2 focus:ring-[#74BF1A] outline-none text-sm sm:text-base"
              >
                <option selected disabled>Select Country</option>
                <option value="uk">UK</option>
                <option value="usa">USA</option>
                <option value="canada">Canada</option>
              </select>

              <select
                class="w-full border border-gray-300 rounded-lg p-2 sm:p-3 focus:ring-2 focus:ring-[#74BF1A] outline-none text-sm sm:text-base"
              >
                <option selected disabled>Select Degree</option>
                <option value="bachelors">Bachelors</option>
                <option value="masters">Masters</option>
                <option value="phd">PhD</option>
              </select>

              <select
                class="w-full border border-gray-300 rounded-lg p-2 sm:p-3 focus:ring-2 focus:ring-[#74BF1A] outline-none text-sm sm:text-base"
              >
                <option selected disabled>Funding Type</option>
                <option value="full">Full Scholarship</option>
                <option value="partial">Partial Funding</option>
                <option value="grant">Grant</option>
              </select>
            </form>
          </div>

          <!-- Button  -->
          <div class="mt-6 sm:mt-8">
            <button
              type="submit"
              class="bg-[#74BF1A] text-white px-5 sm:px-6 py-2 sm:py-3 rounded-lg hover:bg-green-600 transition w-full md:w-auto text-sm sm:text-base"
            >
              Explore Scholarships
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


    <!-----------------------------------HOW IT WORK SECTION----------------------------------------------->
<section class="py-16 bg-white">
  <div class="px-4 sm:px-6 md:px-12">
    <!-- Section Heading -->
    <h2 class="text-xl sm:text-2xl md:text-4xl font-bold mb-6 text-center lg:text-left">
      How it <span class="text-[#74BF1A]">Works</span>?
    </h2>

    <!-- Steps Wrapper -->
    <div
      class="relative flex flex-col lg:flex-row items-center lg:items-start justify-center lg:justify-between gap-12 sm:gap-16 lg:gap-24 mt-12 sm:mt-16 lg:mt-20 w-full"
    >
      <!-- Step 1 -->
      <div
        class="flex flex-col items-center justify-center text-center bg-[#0C2C67] rounded-lg shadow-lg p-6 w-full sm:w-[260px] h-[230px] relative z-10"
      >
        <img
          src="images/work1.png"
          alt="Discover Scholarships"
          class="w-20 h-20 object-contain mb-4"
        />
        <p class="text-green-400 font-medium text-sm sm:text-base">
          Discover scholarships by filtering with your preferred country, degree program, and funding type.
        </p>
      </div>

      <!-- Arrow (TOP) -->
      <img
        src="images/arrow-up.png"
        alt="Arrow Up"
        class="hidden lg:block absolute top-[-80px] left-[16%] w-58 h-auto"
      />

      <!-- Step 2 -->
      <div
        class="flex flex-col items-center justify-center text-center bg-[#0C2C67] rounded-lg shadow-lg p-6 w-full sm:w-[260px] h-[230px] relative z-10"
      >
        <img
          src="images/work2.png"
          alt="Matched Scholarships"
          class="w-20 h-20 object-contain mb-4"
        />
        <p class="text-green-400 font-medium text-sm sm:text-base">
          Get matched with the most relevant scholarships tailored to your academic and financial profile.
        </p>
      </div>

      <!-- Arrow (BOTTOM) -->
      <img
        src="images/arrow-down.png"
        alt="Arrow Down"
        class="hidden lg:block absolute bottom-[-90px] left-[58%] w-58 h-auto"
      />

      <!-- Step 3 -->
      <div
        class="flex flex-col items-center justify-center text-center bg-[#0C2C67] rounded-lg shadow-lg p-6 w-full sm:w-[260px] h-[230px] relative z-10"
      >
        <img
          src="images/work3.png"
          alt="Apply Confidently"
          class="w-20 h-20 object-contain mb-4"
        />
        <p class="text-green-400 font-medium text-sm sm:text-base">
          Apply confidently with expert guidance to maximize your chances of success.
        </p>
      </div>
    </div>

    <!-- Footer Note -->
    <p class="mt-12 sm:mt-16 lg:mt-[150px] text-base sm:text-lg md:text-xl font-semibold text-gray-600 text-center lg:text-left">
      *We have already helped over 500 students secure scholarships worldwide
    </p>
  </div>
</section>



    <!-----------------------------------TEST PREPARATION SECTION----------------------------------------------->
   <section class="py-16 bg-[#F6F6F6]">
  <div class="px-6 md:px-12">
    <!-- Section Heading -->
    <h2 class="text-2xl md:text-4xl font-bold mb-6 text-center">
      Test
      <span class="text-[#74BF1A]"> Preparation Services </span>
      (IELTS/PTE)
    </h2>
    <p class="text-lg md:text-xl text-center mb-12 text-gray-600 max-w-3xl mx-auto">
      Achieve your dream score with expert guidance, proven strategies, and access to professional practice resources.
    </p>

    <div class="flex flex-col lg:flex-row items-stretch gap-10">
      <!-- Left Image & Text -->
      <div class="w-full lg:w-1/2 flex flex-col">
        <div class="overflow-hidden rounded-2xl shadow-lg">
          <img
            src="images/test-girl.jpg"
            alt="Student preparing for IELTS"
            class="w-full h-[280px] sm:h-[350px] lg:h-[450px] object-cover rounded-2xl transform transition duration-500 hover:scale-105 hover:shadow-2xl"
          />
        </div>
        <div class="mt-6 flex flex-col flex-grow">
          <p class="text-gray-600 mb-6 flex-grow">
            Preparing for IELTS or PTE can be challenging, but with the right guidance, practice materials, and
            strategies, you can reach your desired score. Our expert trainers provide step-by-step support, ensuring
            you build strong skills in speaking, writing, reading, and listening.
          </p>

          <!--  Bullet Points -->
          <ul class="space-y-4 mb-6">
            <li class="flex items-start">
              <i class="fas fa-check-circle text-[#74BF1A] text-xl mt-1 mr-3"></i>
              <div>
                <h4 class="font-semibold text-lg text-[#322F35]">
                  Free Practice Resources
                </h4>
                <p class="text-gray-600 text-sm">
                  Access a variety of sample tests, exercises, and mock exams designed to mirror real test conditions.
                </p>
              </div>
            </li>
            <li class="flex items-start">
              <i class="fas fa-check-circle text-[#74BF1A] text-xl mt-1 mr-3"></i>
              <div>
                <h4 class="font-semibold text-lg text-[#322F35]">
                  Personalized Test Strategies
                </h4>
                <p class="text-gray-600 text-sm">
                  Learn proven techniques tailored to your strengths and weaknesses to maximize your score.
                </p>
              </div>
            </li>
            <li class="flex items-start">
              <i class="fas fa-check-circle text-[#74BF1A] text-xl mt-1 mr-3"></i>
              <div>
                <h4 class="font-semibold text-lg text-[#322F35]">
                  Tips from Certified Trainers
                </h4>
                <p class="text-gray-600 text-sm">
                  Gain expert insights and guidance from trainers with years of experience in IELTS/PTE preparation.
                </p>
              </div>
            </li>
          </ul>

          <!--  Button -->
          <div class="flex justify-center lg:justify-start">
            <a
              href="#"
              class="bg-[#74BF1A] text-white px-6 py-3 rounded-lg hover:bg-green-600 transition"
            >
              Book Free Consultation
            </a>
          </div>
        </div>
      </div>

      <!-- Right Form -->
      <div class="w-full lg:w-1/2 flex flex-col justify-between">
        <div
          class="border rounded-2xl shadow-lg p-6 md:p-8 bg-gray-50 flex flex-col justify-between w-full"
        >
          <div>
            <h1 class="text-2xl md:text-3xl font-bold mb-6 text-[#322F35]">
              Have Questions? Get in Touch!
            </h1>
            <form action="" class="space-y-6">
              <input
                class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-[#74BF1A] outline-none"
                placeholder="Name"
              />

              <input
                class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-[#74BF1A] outline-none"
                placeholder="E-mail"
              />

              <textarea
                rows="5"
                class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-[#74BF1A] outline-none resize-none"
                placeholder="Message"
              ></textarea>
            </form>
          </div>

          <!-- Button stays  -->
          <div
            class="mt-8 flex flex-col md:flex-row md:items-center md:justify-between"
          >
            <button
              type="submit"
              class="bg-[#74BF1A] text-white px-20 py-3 rounded-lg hover:bg-green-600 transition w-full md:w-auto"
            >
              Send Inquiry
            </button>

            <!--  PDF Link -->
            <a
              href="files/ielts-pte-sample.pdf"
              target="_blank"
              class="mt-4 md:mt-0 text-blue-600 underline hover:text-blue-800 text-center md:text-left"
            >
              IELTS/PTE Sample PDF
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


    <!-----------------------------------CAREER COUNSELLING SECTION----------------------------------------------->
  <section class="py-16">
  <div class="px-6 md:px-12">
    <!-- Section Heading -->
    <h2 class="text-2xl md:text-4xl font-bold mb-6 text-center">
      Career
      <span class="text-[#74BF1A]"> Counseling & </span>
      Consultation
    </h2>
    <p class="text-lg md:text-xl text-center mb-12 text-gray-600 max-w-3xl mx-auto">
      Helping you choose the right country, university, and program to achieve
      your academic and career goals with confidence.
    </p>

    <div class="flex flex-col lg:flex-row items-stretch gap-10">
      <!-- Left Form -->
      <div class="w-full lg:w-1/2 flex flex-col justify-between">
        <div
          class="border rounded-2xl shadow-lg p-6 md:p-8 bg-gray-50 flex flex-col justify-between w-full"
        >
          <div>
            <h1 class="text-2xl md:text-3xl font-bold mb-6 text-[#322F35]">
              Book Your Counseling Session with Us
            </h1>
            <form action="" class="space-y-6">
              <input
                class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-[#74BF1A] outline-none"
                placeholder="Full Name"
              />

              <input
                type="email"
                class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-[#74BF1A] outline-none"
                placeholder="E-mail"
              />

              <select
                class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-[#74BF1A] outline-none"
              >
                <option selected disabled>Select Preferred Country</option>
                <option value="uk">United Kingdom</option>
                <option value="usa">United States</option>
                <option value="canada">Canada</option>
                <option value="australia">Australia</option>
                <option value="europe">Europe</option>
              </select>

              <!--  Textarea -->
              <textarea
                rows="5"
                class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-[#74BF1A] outline-none resize-none"
                placeholder="Your Message or Questions"
              ></textarea>
            </form>
          </div>

          <!-- Button  -->
          <div
            class="mt-8 flex flex-col md:flex-row md:items-center md:justify-between"
          >
            <button
              type="submit"
              class="bg-[#74BF1A] text-white px-6 md:px-16 py-3 rounded-lg hover:bg-green-600 transition w-full md:w-auto"
            >
              Book My Session
            </button>
          </div>
        </div>
      </div>

      <!-- Right Image + Text -->
      <div class="w-full lg:w-1/2 flex flex-col">
        <div class="overflow-hidden rounded-2xl shadow-lg">
          <img
            src="images/career-counselling.jpg"
            alt="Career Counseling"
            class="w-full h-[280px] sm:h-[350px] lg:h-[450px] object-cover rounded-2xl transform transition duration-500 hover:scale-105 hover:shadow-2xl"
          />
        </div>
        <div class="mt-6 flex flex-col flex-grow">
          <p class="text-gray-600 mb-6 flex-grow">
            Choosing the right career path can be overwhelming. Our professional
            counselors help you identify your strengths, explore study
            opportunities abroad, and guide you in selecting universities and
            programs that align with your goals.
          </p>

          <!-- Bullet Points -->
          <ul class="space-y-4 mb-6">
            <li class="flex items-start">
              <i
                class="fas fa-check-circle text-[#74BF1A] text-xl mt-1 mr-3"
              ></i>
              <div>
                <h4 class="font-semibold text-lg text-[#322F35]">
                  Expert Career Guidance
                </h4>
                <p class="text-gray-600 text-sm">
                  Get one-on-one support from experienced counselors with global
                  exposure.
                </p>
              </div>
            </li>
            <li class="flex items-start">
              <i
                class="fas fa-check-circle text-[#74BF1A] text-xl mt-1 mr-3"
              ></i>
              <div>
                <h4 class="font-semibold text-lg text-[#322F35]">
                  University & Program Selection
                </h4>
                <p class="text-gray-600 text-sm">
                  Find the best-fit universities and courses tailored to your
                  future ambitions.
                </p>
              </div>
            </li>
            <li class="flex items-start">
              <i
                class="fas fa-check-circle text-[#74BF1A] text-xl mt-1 mr-3"
              ></i>
              <div>
                <h4 class="font-semibold text-lg text-[#322F35]">
                  Application & Visa Support
                </h4>
                <p class="text-gray-600 text-sm">
                  Receive step-by-step guidance through applications and visa
                  processes.
                </p>
              </div>
            </li>
          </ul>

          <!-- Button -->
          <div class="flex justify-center lg:justify-start">
            <a
              href="#"
              class="bg-[#74BF1A] text-white px-6 py-3 rounded-lg hover:bg-green-600 transition"
            >
              Book Free Consultation
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


    <!-----------------------------------APPLICATION & ADMISSION SUPPORT----------------------------------------------->
 <section class="py-16 bg-[#F6F6F6]">
  <div class="px-6 md:px-12">
    <!-- Section Heading -->
    <h2 class="text-2xl md:text-4xl font-bold mb-6 text-center">
      Application
      <span class="text-[#74BF1A]"> & Admission </span>
      Support
    </h2>
    <p class="text-lg md:text-xl text-center mb-12 text-gray-600 max-w-3xl mx-auto">
      End-to-end assistance with applications, document verification, and
      admission processes to secure your place at top universities.
    </p>

    <div class="flex flex-col lg:flex-row items-stretch gap-10">
      <!-- Left Image & Text -->
      <div class="w-full lg:w-1/2 flex flex-col">
        <div class="overflow-hidden rounded-2xl shadow-lg">
          <img
            src="images/test-girl.jpg"
            alt="Students applying for admission"
            class="w-full h-[280px] sm:h-[350px] lg:h-[450px] object-cover rounded-2xl transform transition duration-500 hover:scale-105 hover:shadow-2xl"
          />
        </div>
        <div class="mt-6 flex flex-col flex-grow">
          <p class="text-gray-600 mb-6 flex-grow">
            Our team ensures your applications are carefully prepared,
            documents are reviewed for accuracy, and you are fully supported
            throughout the admission journey. From filling forms to preparing
            for interviews, we make sure nothing is left behind.
          </p>

          <!-- ✅ Bullet Points -->
          <ul class="space-y-4 mb-6">
            <li class="flex items-start">
              <i
                class="fas fa-check-circle text-green-500 text-xl mt-1 mr-3"
              ></i>
              <div>
                <h4 class="font-semibold text-lg text-[#092962]">
                  Application Submission Guidance
                </h4>
                <p class="text-gray-600 text-sm">
                  Get expert help in filling applications correctly to avoid
                  errors and delays.
                </p>
              </div>
            </li>
            <li class="flex items-start">
              <i
                class="fas fa-check-circle text-green-500 text-xl mt-1 mr-3"
              ></i>
              <div>
                <h4 class="font-semibold text-lg text-[#092962]">
                  Document Verification Support
                </h4>
                <p class="text-gray-600 text-sm">
                  Ensure all your academic and financial documents meet
                  university and visa requirements.
                </p>
              </div>
            </li>
            <li class="flex items-start">
              <i
                class="fas fa-check-circle text-green-500 text-xl mt-1 mr-3"
              ></i>
              <div>
                <h4 class="font-semibold text-lg text-[#092962]">
                  Interview Preparation Tips
                </h4>
                <p class="text-gray-600 text-sm">
                  Receive practical tips and mock interview sessions to boost
                  your confidence.
                </p>
              </div>
            </li>
          </ul>

          <!-- ✅ Button -->
          <div class="flex justify-center lg:justify-start">
            <a
              href="#"
              class="bg-[#74BF1A] text-white px-6 py-3 rounded-lg hover:bg-green-600 transition"
            >
              Book Free Consultation
            </a>
          </div>
        </div>
      </div>

      <!-- ✅ Right Timeline -->
      <div class="w-full lg:w-1/2">
        <div class="bg-white shadow-lg rounded-2xl p-8">
          <h3 class="text-2xl font-bold mb-8 text-[#092962]">
            Process Timeline
          </h3>

          <!-- Timeline wrapper -->
          <div class="relative">
            <!-- Vertical line -->
            <div class="absolute left-5 top-0 bottom-0 w-1 bg-gray-300"></div>

            <!-- Step 1 -->
            <div class="relative flex items-start mb-12">
              <div
                class="flex items-center justify-center w-10 h-10 bg-[#74BF1A] text-white font-bold rounded-full z-10"
              >
                1
              </div>
              <div class="ml-6">
                <h4 class="text-xl font-semibold">Document Collection</h4>
                <p class="text-gray-600 text-sm mt-2">
                  Gather all required academic transcripts, certificates, and
                  identification documents.
                </p>
              </div>
            </div>

            <!-- Step 2 -->
            <div class="relative flex items-start mb-12">
              <div
                class="flex items-center justify-center w-10 h-10 bg-[#74BF1A] text-white font-bold rounded-full z-10"
              >
                2
              </div>
              <div class="ml-6">
                <h4 class="text-xl font-semibold">Application Submission</h4>
                <p class="text-gray-600 text-sm mt-2">
                  Submit applications to selected universities with complete
                  accuracy and on time.
                </p>
              </div>
            </div>

            <!-- Step 3 -->
            <div class="relative flex items-start mb-12">
              <div
                class="flex items-center justify-center w-10 h-10 bg-[#74BF1A] text-white font-bold rounded-full z-10"
              >
                3
              </div>
              <div class="ml-6">
                <h4 class="text-xl font-semibold">Interview Prep</h4>
                <p class="text-gray-600 text-sm mt-2">
                  Train for admission or visa interviews with guidance from our
                  experienced counselors.
                </p>
              </div>
            </div>

            <!-- Step 4 -->
            <div class="relative flex items-start">
              <div
                class="flex items-center justify-center w-10 h-10 bg-[#74BF1A] text-white font-bold rounded-full z-10"
              >
                4
              </div>
              <div class="ml-6">
                <h4 class="text-xl font-semibold">Final Admission</h4>
                <p class="text-gray-600 text-sm mt-2">
                  Secure your admission offer and receive continuous support for
                  the next steps including visa and travel.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    <!-----------------------------------SUPPORT  SUPPORT----------------------------------------------->
   <section class="py-16">
  <div class="px-6 md:px-12">
    <!-- Section Heading -->
    <h2 class="text-2xl md:text-4xl font-bold mb-6 text-center">
      Application
      <span class="text-[#74BF1A]"> & Admission </span>
      Support
    </h2>
    <p class="text-lg md:text-xl text-center mb-12 text-gray-600 max-w-2xl mx-auto">
      Get expert guidance at every stage of your application journey — from submission to interview success.
    </p>

    <!-- Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 mt-12 w-full">
      <!-- Card 1 -->
      <div class="bg-[#092962] rounded-2xl p-6 text-white shadow-lg flex flex-col justify-between">
        <div>
          <h1 class="text-2xl font-semibold mb-4">Application Guidance</h1>
          <p class="mb-6 text-gray-200">
            Personalized step-by-step help to submit strong university applications that stand out.
          </p>
          <ul class="space-y-4 mb-6">
            <li class="flex items-start">
              <i class="fas fa-check-circle text-[#74BF1A] text-xl mt-1 mr-3"></i>
              <h4 class="font-semibold text-lg">Form Filling Assistance</h4>
            </li>
            <li class="flex items-start">
              <i class="fas fa-check-circle text-[#74BF1A] text-xl mt-1 mr-3"></i>
              <h4 class="font-semibold text-lg">Course & University Selection</h4>
            </li>
            <li class="flex items-start">
              <i class="fas fa-check-circle text-[#74BF1A] text-xl mt-1 mr-3"></i>
               <div>
                <h4 class="font-semibold text-lg">Deadline Tracking & Alerts
</h4>
                <h3 class="text-[#74BF1A] text-xl font-medium mt-4">
                  Limited Time Offer
                </h3>
              </div>
            </li>
          </ul>
        </div>
        <a
          href="#"
          class="bg-[#74BF1A] text-white px-4 py-2 rounded-lg hover:bg-green-600 transition text-center"
        >
          Book Free Counselling <i class="fa-solid fa-arrow-right"></i>
        </a>
      </div>

      <!-- Card 2 -->
      <div class="bg-[#092962] rounded-2xl p-6 text-white shadow-lg flex flex-col justify-between">
        <div>
          <h1 class="text-2xl font-semibold mb-4">Document Support</h1>
          <p class="mb-6 text-gray-200">
            Ensure all your academic and financial documents meet university requirements.
          </p>
          <ul class="space-y-4 mb-6">
            <li class="flex items-start">
              <i class="fas fa-check-circle text-[#74BF1A] text-xl mt-1 mr-3"></i>
              <h4 class="font-semibold text-lg">Document Verification</h4>
            </li>
            <li class="flex items-start">
              <i class="fas fa-check-circle text-[#74BF1A] text-xl mt-1 mr-3"></i>
              <h4 class="font-semibold text-lg">SOP & LOR Drafting Guidance</h4>
            </li>
            <li class="flex items-start">
              <i class="fas fa-check-circle text-[#74BF1A] text-xl mt-1 mr-3"></i>
              <div>
                <h4 class="font-semibold text-lg">Financial Proof Preparation
</h4>
                <h3 class="text-[#74BF1A] text-xl font-medium mt-4">
                  Limited Time Offer
                </h3>
              </div>
            </li>
          </ul>
        </div>
        <a
          href="#"
          class="bg-[#74BF1A] text-white px-4 py-2 rounded-lg hover:bg-green-600 transition text-center"
        >
          Verify Documents <i class="fa-solid fa-arrow-right"></i>
        </a>
      </div>

      <!-- Card 3 -->
      <div class="bg-[#092962] rounded-2xl p-6 text-white shadow-lg flex flex-col justify-between">
        <div>
          <h1 class="text-2xl font-semibold mb-4">Interview Preparation</h1>
          <p class="mb-6 text-gray-200">
            Build confidence and ace your admission interviews with our expert coaching.
          </p>
          <ul class="space-y-4 mb-6">
            <li class="flex items-start">
              <i class="fas fa-check-circle text-[#74BF1A] text-xl mt-1 mr-3"></i>
              <h4 class="font-semibold text-lg">Mock Interview Sessions</h4>
            </li>
            <li class="flex items-start">
              <i class="fas fa-check-circle text-[#74BF1A] text-xl mt-1 mr-3"></i>
              <h4 class="font-semibold text-lg">Common Q&A Practice</h4>
            </li>
            <li class="flex items-start">
              <i class="fas fa-check-circle text-[#74BF1A] text-xl mt-1 mr-3"></i>
              <div>
                <h4 class="font-semibold text-lg">Personality Development Tips</h4>
                <h3 class="text-[#74BF1A] text-xl font-medium mt-4">
                  Limited Time Offer
                </h3>
              </div>
            </li>
          </ul>
        </div>
        <a
          href="#"
          class="bg-[#74BF1A] text-white px-4 py-2 rounded-lg hover:bg-green-600 transition text-center"
        >
          Start Preparing <i class="fa-solid fa-arrow-right"></i>
        </a>
      </div>
    </div>

    <!-- Bottom Banner -->
    <div class="w-full h-auto py-6 mt-16 bg-[#98D94A] flex justify-center items-center text-center px-4">
      <h1 class="text-lg md:text-xl font-semibold text-[#092962]">
        Hurry! These offers are available only for a limited time. Secure your spot today.
      </h1>
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

          <!-- small card 2 (dark) -->
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
      <a href="#" class="text-sm md:text-base font-semibold text-[#092962] mt-4 sm:mt-0 hover:text-[#74BF1A] transition-all">
        View all reviews <i class="fa-solid fa-arrow-right ml-1"></i>
      </a>
    </div>
  </div>
</section>


    <!----------------------------------- FAQS SECTION ----------------------------------------------->
<section class="py-16 bg-white">
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
            <span>What is the process to study abroad?</span>
          </div>
          <i
            class="fa-solid fa-chevron-right text-[#74BF1A] transition-transform duration-300"
          ></i>
        </button>
        <div class="faq-content hidden px-12 pb-4 text-gray-600">
          The process involves selecting your preferred country, researching
          universities, preparing academic and financial documents, submitting
          applications, receiving an admission letter, and finally applying for
          a student visa.
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
            <span>What are the requirements for admission?</span>
          </div>
          <i
            class="fa-solid fa-chevron-right text-[#74BF1A] transition-transform duration-300"
          ></i>
        </button>
        <div class="faq-content hidden px-12 pb-4 text-gray-600">
          Admission requirements usually include academic transcripts, English
          proficiency test scores (IELTS, TOEFL, or equivalent), a statement of
          purpose, recommendation letters, and a valid passport.
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
            <span>Do I need IELTS to study abroad?</span>
          </div>
          <i
            class="fa-solid fa-chevron-right text-[#74BF1A] transition-transform duration-300"
          ></i>
        </button>
        <div class="faq-content hidden px-12 pb-4 text-gray-600">
          Many universities require IELTS or TOEFL. However, some institutions
          accept alternatives like Duolingo English Test or exempt students who
          have studied in English-medium institutions.
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
            <span>What is the estimated cost of studying abroad?</span>
          </div>
          <i
            class="fa-solid fa-chevron-right text-[#74BF1A] transition-transform duration-300"
          ></i>
        </button>
        <div class="faq-content hidden px-12 pb-4 text-gray-600">
          The cost depends on the country, program, and lifestyle. On average,
          tuition fees range from $8,000 to $25,000 per year, while living
          expenses may cost between $600 and $1,500 per month.
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
            <span>Can I work while studying abroad?</span>
          </div>
          <i
            class="fa-solid fa-chevron-right text-[#74BF1A] transition-transform duration-300"
          ></i>
        </button>
        <div class="faq-content hidden px-12 pb-4 text-gray-600">
          Most countries allow international students to work part-time (10–20
          hours per week) during semesters and full-time during breaks, helping
          to cover living expenses.
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



    <!-----------------------------------FORM SECTION----------------------------------------------->
   <section class="py-12 md:py-16 bg-[#F6F6F6]">
  <div class="px-4 sm:px-6 md:px-12 ">
    <div class="flex flex-col lg:flex-row items-stretch gap-8 lg:gap-10">
      <!-- Left Image -->
      <div class="w-full lg:w-1/2 flex items-center">
        <div class="overflow-hidden rounded-2xl shadow-lg w-full h-[350px] sm:h-[450px] md:h-[600px] lg:h-[750px] xl:h-[800px]">
          <img
            src="images/services-form.png"
            alt="Students"
            class="w-full h-full object-cover rounded-2xl transform transition duration-500 hover:scale-105 hover:shadow-2xl"
          />
        </div>
      </div>

      <!--  Right Form -->
      <div class="w-full lg:w-1/2 flex flex-col justify-between">
        <div class="border rounded-2xl shadow-lg p-5 sm:p-6 md:p-8 bg-white flex flex-col justify-between w-full h-full">
          <div>
            <h1 class="text-2xl md:text-3xl font-bold mb-6 text-black leading-snug">
              Share Your Details & Our Experts Will Contact You
            </h1>

            <form action="" class="space-y-5">
              <!-- First Name + Last Name -->
              <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <input
                  type="text"
                  class="w-full border border-gray-300 rounded-lg p-3 text-sm sm:text-base focus:ring-2 focus:ring-[#74BF1A] outline-none"
                  placeholder="First Name"
                />
                <input
                  type="text"
                  class="w-full border border-gray-300 rounded-lg p-3 text-sm sm:text-base focus:ring-2 focus:ring-[#74BF1A] outline-none"
                  placeholder="Last Name"
                />
              </div>

              <!-- Email -->
              <input
                type="email"
                class="w-full border border-gray-300 rounded-lg p-3 text-sm sm:text-base focus:ring-2 focus:ring-[#74BF1A] outline-none"
                placeholder="E-mail"
              />

              <!-- Phone + LinkedIn -->
              <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <input
                  type="tel"
                  class="w-full border border-gray-300 rounded-lg p-3 text-sm sm:text-base focus:ring-2 focus:ring-[#74BF1A] outline-none"
                  placeholder="Phone Number"
                />
                <input
                  type="url"
                  class="w-full border border-gray-300 rounded-lg p-3 text-sm sm:text-base focus:ring-2 focus:ring-[#74BF1A] outline-none"
                  placeholder="LinkedIn Profile"
                />
              </div>

              <!-- Study Destination + Branch Time -->
              <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <select
                  class="w-full border border-gray-300 rounded-lg p-3 text-sm sm:text-base focus:ring-2 focus:ring-[#74BF1A] outline-none"
                >
                  <option selected disabled>Preferred Study Destination</option>
                  <option value="uk">UK</option>
                  <option value="usa">USA</option>
                  <option value="canada">Canada</option>
                </select>

                <select
                  class="w-full border border-gray-300 rounded-lg p-3 text-sm sm:text-base focus:ring-2 focus:ring-[#74BF1A] outline-none"
                >
                  <option selected disabled>Nearest Branch Time</option>
                  <option value="morning">Morning</option>
                  <option value="afternoon">Afternoon</option>
                  <option value="evening">Evening</option>
                </select>
              </div>

              <!-- Counseling Mode + Study Level -->
              <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <select
                  class="w-full border border-gray-300 rounded-lg p-3 text-sm sm:text-base focus:ring-2 focus:ring-[#74BF1A] outline-none"
                >
                  <option selected disabled>Preferred Mode of Counseling</option>
                  <option value="online">Online</option>
                  <option value="in-person">In-Person</option>
                  <option value="phone">Phone Call</option>
                </select>

                <select
                  class="w-full border border-gray-300 rounded-lg p-3 text-sm sm:text-base focus:ring-2 focus:ring-[#74BF1A] outline-none"
                >
                  <option selected disabled>Preferred Study Level</option>
                  <option value="undergraduate">Undergraduate</option>
                  <option value="postgraduate">Postgraduate</option>
                  <option value="phd">PhD / Research</option>
                  <option value="diploma">Diploma / Certificate</option>
                </select>
              </div>

              <!-- Message -->
              <textarea
                rows="4"
                class="w-full border border-gray-300 rounded-lg p-3 text-sm sm:text-base focus:ring-2 focus:ring-[#74BF1A] outline-none resize-none"
                placeholder="Message"
              ></textarea>
            </form>
          </div>

          <!-- Submit Button -->
          <div class="mt-6 flex items-center justify-center">
            <button
              type="submit"
              class="bg-[#74BF1A] text-white px-6 md:px-16 py-3 rounded-lg w-full sm:w-auto font-medium text-sm sm:text-base hover:bg-green-600 transition"
            >
              Submit
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


@endsection

