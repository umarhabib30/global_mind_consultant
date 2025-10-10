<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Globals Minds Consultants || Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    />
    @yield('styles')

  </head>
  <body>
    <!-----------------------------------NAVBAR----------------------------------------------- -->
<nav class="bg-white fixed w-full p-2 left-0 z-50 shadow-md">
  <div class="px-4 sm:px-6 lg:px-8 mx-auto">
    <div class="flex justify-between items-center h-16">
      <!-- Logo -->
      <div class="flex-shrink-0">
        <img src="images/logo.png" alt="Logo" class="h-[70px] w-auto sm:h-[90px] md:h-[110px] lg:h-[130px]" />
      </div>

      <!-- Desktop Menu -->
      <div class="hidden md:flex space-x-8 items-center font-semibold">
        <a href="#" class="text-[#48464C] hover:text-[#74BF1A] transition">About Us</a>
        <a href="#" class="text-[#48464C] hover:text-[#74BF1A] transition">Events</a>
        <a href="#" class="text-[#48464C] hover:text-[#74BF1A] transition">Blog</a>

        <!-- Services Dropdown -->
        <div class="relative group">
          <button class="text-[#48464C] hover:text-[#74BF1A] flex items-center transition">
            Services
          </button>
        </div>

        <!-- Study Destinations Dropdown -->
        <div class="relative group">
          <button class="text-[#48464C] hover:text-[#74BF1A] flex items-center transition">
            Study Destinations
          </button>
        </div>
      </div>

      <!-- Right Button -->
      <div class="hidden md:flex">
        <a
          href="#"
          class="bg-[#74BF1A] text-white px-4 py-2 rounded-lg font-medium hover:bg-green-600 transition"
        >
          Book free counselling <i class="fa-solid fa-arrow-right"></i>
        </a>
      </div>

      <!-- Mobile Menu Button -->
      <div class="md:hidden flex items-center">
        <button id="mobile-menu-btn" class="text-[#48464C] focus:outline-none">
          <i class="fa-solid fa-bars text-2xl"></i>
        </button>
      </div>
    </div>
  </div>

<!-- Mobile Menu Fullscreen -->
<div
  id="mobile-menu"
  class="hidden fixed inset-0 bg-white z-40 flex flex-col items-start justify-start px-6 pt-20 space-y-6 font-semibold text-lg"
>
  <!-- Close button -->
  <button id="close-menu-btn" class="absolute top-4 right-6 text-3xl text-[#48464C]">
    <i class="fa-solid fa-times"></i>
  </button>

  <a href="#" class="block text-[#48464C] hover:text-[#74BF1A] transition">About Us</a>
  <a href="#" class="block text-[#48464C] hover:text-[#74BF1A] transition">Events</a>
  <a href="#" class="block text-[#48464C] hover:text-[#74BF1A] transition">Blog</a>

  <!-- Services -->
  <a href="#"
    class="flex items-center justify-between w-full text-[#48464C] hover:text-[#74BF1A] transition"
  >
    Services

  </a>

  <!-- Study Destinations -->
  <a href="#"
    class="flex items-center justify-between w-full text-[#48464C] hover:text-[#74BF1A] transition"
  >
    Study Destinations

  </a>

  <a
    href="#"
    class="bg-[#74BF1A] text-white px-6 py-3 rounded-lg font-medium hover:bg-green-600 transition mt-6 w-full text-center"
  >
    Book free counselling <i class="fa-solid fa-arrow-right"></i>
  </a>
</div>


</nav>




    @yield('content')
    <script src="{{asset('assets/js/menu.js')}}"></script>

      <!------------------------ footer----------------------------------  -->
    <section >
      <footer
        class="flex flex-wrap lg:flex-nowrap justify-between px-6 md:px-12 "
      >
        <!-- 1st part  -->
        <div class="w-full sm:w-1/2 lg:w-auto ">
          <img src="images/logo.png" class="w-56" alt="logo" />
          <p class="w-full sm:w-72 lg:w-96 ">
            Global Minds Consultant - Pakistan’s #1 Abroad Consultant. Trusted
            by 1500+ people.
          </p>
          <p
            class="space-x-6 bg-[#092962] text-white text-xl h-10 pt-1 w-48 rounded-lg mt-5"
          >
            <i class="fa-brands fa-facebook ml-3 cursor-pointer"></i>
            <i class="fa-brands fa-instagram cursor-pointer"></i>
            <i class="fa-brands fa-linkedin cursor-pointer"></i>
            <i class="fa-brands fa-twitter cursor-pointer "></i>
          </p>
        </div>

        <!-- 2nd part -->
        <div class="mt-10 sm:mt-20 w-full sm:w-1/2 lg:w-auto">
          <h1 class="text-xl font-bold mb-3">Get free links</h1>
          <div class="space-y-2">
            <p class="text-[#605D64]">
              <i class="fa-solid fa-angle-right"></i> <a href="/"> About Us</a>
            </p>
            <p class="text-[#605D64]">
              <i class="fa-solid fa-angle-right"></i> <a href="/"> Locations</a>
            </p>
            <p class="text-[#605D64]">
              <i class="fa-solid fa-angle-right"></i> <a href="/"> Blogs</a>
            </p>
            <p class="text-[#605D64]">
              <i class="fa-solid fa-angle-right"></i> <a href="/"> FAQs</a>
            </p>
            <p class="text-[#605D64]">
              <i class="fa-solid fa-angle-right"></i>
              <a href="/"> Student Guide</a>
            </p>
            <p class="text-[#605D64]">
              <i class="fa-solid fa-angle-right"></i>
              <a href="/"> Private Policy</a>
            </p>
          </div>
        </div>

        <!-- 3rd part  -->
        <div class="mt-10 sm:mt-20 w-full sm:w-1/2 lg:w-auto">
          <h1 class="text-xl font-bold mb-3">Recent Blogs</h1>
          <div class="flex space-x-3">
            <div>
              <img src="image/image-4.jpg" class="h-16 rounded-lg" alt="" />
            </div>
            <div>
              <p>
                <i class="fa-solid fa-calendar text-xl text-[#092962]"></i>
                2024-06-07
              </p>
              <p class="font-bold">Blog title</p>
            </div>
          </div>

          <div class="flex space-x-3 mt-4">
            <div>
              <img src="image/image-4.jpg" class="h-16 rounded-lg" alt="" />
            </div>
            <div>
              <p>
                <i class="fa-solid fa-calendar text-xl text-[#092962]"></i>
                2024-06-07
              </p>
              <p class="font-bold">Blog title</p>
            </div>
          </div>
        </div>

        <!-- 4th part  -->
        <div class="mt-10 sm:mt-20 w-full sm:w-1/2 lg:w-auto">
          <h1 class="font-bold text-xl mb-3">Contact Us</h1>
          <p class="mt-3">
            <i
              class="fa-solid fa-phone border border-black w-9 h-9 text-center pt-2 rounded-md"
            ></i>
            +92 312 000000
          </p>
          <p class="mt-3">
            <i
              class="fa-solid fa-envelope border border-black w-9 h-9 text-center pt-2 rounded-md"
            ></i>
            abcd@gmail.com
          </p>
        </div>
      </footer>

      <!-- All rights reserved  -->
      <br /><br />
      <hr />
      <div class="text-center m-5">
        <p>Global Minds Consultant 2025 | All Rights Reserved</p>
      </div>
    </section>
  </body>
</html>

