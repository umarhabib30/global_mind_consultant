@extends('layouts.user')
@section('content')
    <!-----------------------------------FORM SECTION----------------------------------------------->

<section
    class="relative w-full h-[80vh] bg-center bg-cover"
    style="background-image: url('{{ asset('images/blogBg.jpg') }}');"
>
    <!-- Overlay -->
    <div class="absolute inset-0 bg-black/50"></div>

    <!-- Text Content -->
    <div class="relative z-10 flex items-center justify-center h-full text-center px-6">
        <h2 class="text-3xl md:text-6xl font-bold text-white">
            Explore Thousands of Programs across <br> the World
        </h2>
    </div>



</section>

    <!-----------------------------------ART SECTION----------------------------------------------->

<section class="py-16 bg-[#F6F6F6]">
  <div class="px-6 md:px-12 grid grid-cols-1 lg:grid-cols-10 items-center gap-10">

    <!-- LEFT SIDE (70%) -->
    <div class="lg:col-span-7 space-y-5">
      <h2 class="text-3xl md:text-4xl font-bold text-[#092962]">
        Art & Humanities
      </h2>
      <p class="text-gray-700 text-lg leading-relaxed">
        Explore diverse programs in Art & Humanities that inspire creativity,
        critical thinking, and a deep understanding of human culture.
        Develop your artistic skills and broaden your perspective of the world
        through global learning opportunities.
      </p>
      <button
        class="bg-[#092962] text-white px-6 py-2 rounded-lg hover:bg-[#0b3a8b] transition-all duration-300">
        Read More
      </button>
    </div>

    <!-- RIGHT SIDE (30%) -->
    <div class="lg:col-span-3 flex justify-center">
      <img
        src="{{ asset('images/art.jpg') }}"
        alt="Art & Humanities"
        class="rounded-xl shadow-lg w-full lg:w-[90%] object-cover"
      />
    </div>

  </div>
</section>



@endsection
