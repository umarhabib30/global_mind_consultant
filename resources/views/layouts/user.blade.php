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
    <nav class="bg-white fixed w-full p-2 left-0 z-50">
      <div class="px-6 mx-auto">
        <div class="flex justify-between items-center h-16">
          <!-- Logo -->
          <div class="flex-shrink-0">
            <img src="images/logo.png" alt="Logo" class="h-[130px] w-auto" />
          </div>

          <!-- Desktop Menu -->
          <div class="hidden md:flex space-x-8 items-center">
            <a href="#" class="text-[#48464C] hover:text-[#74BF1A]">About Us</a>
            <a href="#" class="text-[#48464C] hover:text-[#74BF1A]">Events</a>
            <a href="#" class="text-[#48464C] hover:text-[#74BF1A]">Blog</a>

            <!-- Services Dropdown -->
            <div class="relative group">
              <button
                class="text-[#48464C] hover:text-[#74BF1A] flex items-center"
              >
                Services <i class="fa-solid fa-chevron-down ml-1 text-sm"></i>
              </button>
              <div
                class="absolute left-0 mt-2 w-40 bg-white shadow-lg rounded-lg hidden group-hover:block"
              >
                <a href="#" class="block px-4 py-2 hover:bg-gray-100"
                  >Service 1</a
                >
                <a href="#" class="block px-4 py-2 hover:bg-gray-100"
                  >Service 2</a
                >
                <a href="#" class="block px-4 py-2 hover:bg-gray-100"
                  >Service 3</a
                >
              </div>
            </div>

            <!-- Study Destinations Dropdown -->
            <div class="relative group">
              <button
                class="text-[#48464C] hover:text-[#74BF1A] flex items-center"
              >
                Study Destinations
                <i class="fa-solid fa-chevron-down ml-1 text-sm"></i>
              </button>
              <div
                class="absolute left-0 mt-2 w-48 bg-white shadow-lg rounded-lg hidden group-hover:block"
              >
                <a href="#" class="block px-4 py-2 hover:text-[#74BF1A]">USA</a>
                <a href="#" class="block px-4 py-2 hover:text-[#74BF1A]">UK</a>
                <a href="#" class="block px-4 py-2 hover:text-[#74BF1A]"
                  >Canada</a
                >
                <a href="#" class="block px-4 py-2 hover:text-[#74BF1A]"
                  >Australia</a
                >
              </div>
            </div>
          </div>

          <!-- Right Button -->
          <div class="hidden md:flex">
            <a
              href="#"
              class="bg-[#74BF1A] text-white px-4 py-2 rounded-lg hover:bg-green-600 transition"
            >
              Book free counselling →
            </a>
          </div>

          <!-- Mobile Menu Button -->
          <div class="md:hidden flex items-center">
            <button
              id="mobile-menu-btn"
              class="text-[#48464C] focus:outline-none"
            >
              <i class="fa-solid fa-bars text-2xl"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Mobile Menu -->
      <div
        id="mobile-menu"
        class="hidden md:hidden bg-white px-4 pb-4 space-y-2"
      >
        <a href="#" class="block py-2 text-[#48464C] hover:text-[#74BF1A]"
          >About Us</a
        >
        <a href="#" class="block py-2 text-[#48464C] hover:text-[#74BF1A]"
          >Events</a
        >
        <a href="#" class="block py-2 text-[#48464C] hover:text-[#74BF1A]"
          >Blog</a
        >

        <!-- Mobile Services Dropdown -->
        <details>
          <summary
            class="cursor-pointer py-2 text-[#48464C] hover:text-[#74BF1A] flex justify-between"
          >
            Services <i class="fa-solid fa-chevron-down"></i>
          </summary>
          <div class="pl-4">
            <a href="#" class="block py-2 hover:text-[#74BF1A]">Service 1</a>
            <a href="#" class="block py-2 hover:text-[#74BF1A]">Service 2</a>
            <a href="#" class="block py-2 hover:text-[#74BF1A]">Service 3</a>
          </div>
        </details>

        <!-- Mobile Study Destinations Dropdown -->
        <details>
          <summary
            class="cursor-pointer py-2 text-[#48464C] hover:text-[#74BF1A] flex justify-between"
          >
            Study Destinations <i class="fa-solid fa-chevron-down"></i>
          </summary>
          <div class="pl-4">
            <a href="#" class="block py-2 hover:text-[#74BF1A]">USA</a>
            <a href="#" class="block py-2 hover:text-[#74BF1A]">UK</a>
            <a href="#" class="block py-2 hover:text-[#74BF1A]">Canada</a>
            <a href="#" class="block py-2 hover:text-[#74BF1A]">Australia</a>
          </div>
        </details>

        <!-- Mobile Button -->
        <a
          href="#"
          class="block bg-[#74BF1A] text-white px-4 py-2 rounded-lg hover:bg-green-600 transition"
        >
          Book free counselling →
        </a>
      </div>
    </nav>
    @yield('content')

      <!------------------------ footer----------------------------------  -->
    <section>
      <footer
        class="flex flex-wrap lg:flex-nowrap justify-between gap-10 mr-5 ml-5 lg:mr-20 lg:ml-10"
      >
        <!-- 1st part  -->
        <div class="w-full sm:w-1/2 lg:w-auto">
          <img src="images/logo.png" class="w-56" alt="logo" />
          <p class="w-full sm:w-72 lg:w-96 mt-3">
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

