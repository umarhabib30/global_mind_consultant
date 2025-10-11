@extends('layouts.user')
@section('content')
   <section
      class="relative bg-[url('/images/single-blog.png')] bg-cover bg-top w-full h-screen flex items-center justify-center"
    ></section>

    <!-----------------------------------Form SECTION----------------------------------------------->
   <section class="py-16 bg-[#F6F6F6]">
  <div class="px-6 md:px-12 grid grid-cols-1 lg:grid-cols-3 gap-10">
    <!-- LEFT SIDE CONTENT (70%) -->
    <div class="lg:col-span-2 space-y-10">
      <!-- Section Heading -->
      <h2 class="text-2xl md:text-4xl font-bold mb-6">
        Peshawar <span class="text-[#74BF1A]">Study Abroad</span> Expo 2025
      </h2>

      <!-- Points -->
      <div class="space-y-4">
        <ul class="space-y-3">
          <!-- Date -->
          <li class="flex items-center gap-3">
            <span
              class="flex items-center justify-center w-8 h-8 rounded-full bg-[#74BF1A] text-white text-sm"
            >
              <i class="fa-regular fa-calendar"></i>
            </span>
            <p class="text-gray-700">5 May 2025 (Sunday)</p>
          </li>

          <!-- Time -->
          <li class="flex items-center gap-3">
            <span
              class="flex items-center justify-center w-8 h-8 rounded-full bg-[#74BF1A] text-white text-sm"
            >
              <i class="fa-regular fa-clock"></i>
            </span>
            <p class="text-gray-700">10:00 AM – 6:00 PM</p>
          </li>

          <!-- Speaker -->
          <li class="flex items-center gap-3">
            <span
              class="flex items-center justify-center w-8 h-8 rounded-full bg-[#74BF1A] text-white text-sm"
            >
              <i class="fa-solid fa-user-tie"></i>
            </span>
            <p class="text-gray-700">Guest Speaker: Mr. Josh Williams</p>
          </li>

          <!-- Location -->
          <li class="flex items-center gap-3">
            <span
              class="flex items-center justify-center w-8 h-8 rounded-full bg-[#74BF1A] text-white text-sm"
            >
              <i class="fa-solid fa-location-dot"></i>
            </span>
            <p class="text-gray-700">PC Hotel, Peshawar</p>
          </li>
        </ul>
      </div>

      <h1 class="text-xl md:text-2xl font-semibold">
        Join the Global Minds Consultant Study Abroad Expo 2025
      </h1>

      <h2 class="text-lg md:text-xl font-bold">
        The Grand Study Abroad Expo 2025 awaits you!
      </h2>

      <p class="text-gray-700 leading-relaxed">
        Meet top university representatives from the UK, USA, Canada, Australia,
        and Europe under one roof. Get on-spot admission assessments, guidance
        on scholarships, visa counseling, and more. Whether you plan to pursue
        your undergraduate, postgraduate, or PhD degree abroad — this is your
        chance to make it happen!
      </p>

      <h2 class="text-lg md:text-xl font-bold">Parameters of Expo:</h2>
      <ul class="space-y-3">
        <li class="flex items-start gap-3">
          <span
            class="flex items-center justify-center w-6 h-6 rounded-full bg-[#74BF1A] text-white text-sm mt-1"
          >
            <i class="fa-solid fa-check"></i>
          </span>
          <p class="text-gray-700">
            Direct interaction with international university delegates.
          </p>
        </li>
        <li class="flex items-start gap-3">
          <span
            class="flex items-center justify-center w-6 h-6 rounded-full bg-[#74BF1A] text-white text-sm mt-1"
          >
            <i class="fa-solid fa-check"></i>
          </span>
          <p class="text-gray-700">
            Free counseling sessions and application guidance.
          </p>
        </li>
        <li class="flex items-start gap-3">
          <span
            class="flex items-center justify-center w-6 h-6 rounded-full bg-[#74BF1A] text-white text-sm mt-1"
          >
            <i class="fa-solid fa-check"></i>
          </span>
          <p class="text-gray-700">
            Information on scholarships and visa procedures.
          </p>
        </li>
      </ul>

      <h2 class="text-lg md:text-xl font-bold">Why should I attend?</h2>
      <ul class="space-y-3">
        <li class="flex items-start gap-3">
          <span
            class="flex items-center justify-center w-6 h-6 rounded-full bg-[#74BF1A] text-white text-sm mt-1"
          >
            <i class="fa-solid fa-check"></i>
          </span>
          <p class="text-gray-700">
            Get expert advice on choosing the right university and program.
          </p>
        </li>
        <li class="flex items-start gap-3">
          <span
            class="flex items-center justify-center w-6 h-6 rounded-full bg-[#74BF1A] text-white text-sm mt-1"
          >
            <i class="fa-solid fa-check"></i>
          </span>
          <p class="text-gray-700">
            Receive personalized support for study visa documentation.
          </p>
        </li>
        <li class="flex items-start gap-3">
          <span
            class="flex items-center justify-center w-6 h-6 rounded-full bg-[#74BF1A] text-white text-sm mt-1"
          >
            <i class="fa-solid fa-check"></i>
          </span>
          <p class="text-gray-700">
            Network with education experts and explore post-study work options.
          </p>
        </li>
      </ul>
    </div>

    <!-- RESERVED FORM -->
    <div class="lg:col-span-1">
      <div class="max-w-2xl mx-auto bg-white rounded-2xl shadow-lg p-8">
        <h3
          class="text-2xl md:text-3xl font-bold text-center mb-8 text-black"
        >
          Reserve Your Seat
        </h3>
        <form action="" class="space-y-6">
          <input
            type="text"
            class="w-full bg-[#F6F6F6] border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-[#74BF1A] outline-none"
            placeholder="Full Name"
          />
          <input
            type="email"
            class="w-full bg-[#F6F6F6] border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-[#74BF1A] outline-none"
            placeholder="E-mail Address"
          />
          <input
            type="tel"
            class="w-full bg-[#F6F6F6] border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-[#74BF1A] outline-none"
            placeholder="Phone Number"
          />
          <input
            type="text"
            class="w-full bg-[#F6F6F6] border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-[#74BF1A] outline-none"
            placeholder="Country Interested In"
          />
          <input
            type="text"
            class="w-full bg-[#F6F6F6] border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-[#74BF1A] outline-none"
            placeholder="Study Level"
          />

        <div class="text-center">
  <button
    type="submit"
    class="px-14 bg-[#74BF1A] text-white font-semibold py-3 rounded-lg hover:bg-green-600 transition"
  >
    Submit
  </button>
</div>

        </form>
      </div>
    </div>
  </div>
</section>

@endsection
