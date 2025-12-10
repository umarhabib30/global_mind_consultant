@extends('layouts.user')
@section('content')
    <!-----------------------------------FORM SECTION----------------------------------------------->

<section
    class="relative w-full h-screen bg-center bg-cover"
    style="background-image: url('{{ asset('images/course-filter.png') }}');"
>
    <div class="absolute inset-0 bg-black/50"></div>

    <div class="relative z-10 flex items-center justify-center h-full text-center px-6">
        <h2 class="text-3xl md:text-6xl font-bold text-white">
            Explore Thousands of Programs across <br> the World
        </h2>
    </div>



</section>

    <!-----------------------------------ART SECTION----------------------------------------------->

<section class="py-16 ">
  <div class="px-6 md:px-12 grid grid-cols-1 lg:grid-cols-10 items-center gap-10">

    <!-- LEFT SIDE  -->
    <div class="lg:col-span-6 space-y-5">
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

    <!-- RIGHT SIDE  -->
    <div class="lg:col-span-4 flex justify-center">
      <img
        src="{{ asset('images/art.jpg') }}"
        alt="Art & Humanities"
        class="rounded-xl shadow-lg w-full lg:w-[90%] object-cover"
      />
    </div>

  </div>
</section>

   <!----------------------------- CARDS SECTION -------------------------------------------->
  <section class="py-16 bg-[#F6F6F6]">
    <div class="px-6 md:px-12 flex gap-8 bg-[#f5f5f5]">
        <aside class="w-[280px] flex flex-col h-full sticky top-0">

            <div class="bg-[#98D94A] flex justify-between items-center h-[100px] w-full rounded-t-lg px-4">
                <h1 class="font-medium text-xl text-white">Filters</h1>
                <p class="text-[#092962] font-medium text-xl cursor-pointer">Discover All</p>
            </div>

            <div class="p-3 bg-white shadow-lg border-b border-gray-200 rounded-md">

    <!-- Header -->
    <div class="flex items-center justify-between py-1 border-b mb-3">
        <h2 class="text-sm font-semibold text-gray-700">Countries</h2>
        <i class="fa-solid fa-chevron-down text-gray-600 text-xs cursor-pointer"></i>
    </div>

    <div class="relative mb-3">
        <input
            type="text"
            placeholder="Search country"
            class="shadow-lg border bg-gray-100 pl-8 pr-2 py-1.5 text-sm rounded-md w-full focus:outline-none focus:ring-1 focus:ring-[#092962]"
        />
        <i class="fa fa-search absolute top-1/2 left-2 -translate-y-1/2 text-gray-400 text-xs"></i>
    </div>

    <div class="space-y-3 text-sm max-h-48 overflow-y-auto pr-2">
        <div class="flex gap-3.5 items-center">
            <input type="checkbox" class="cursor-pointer h-4 w-4 focus:ring-[#092962]">
            <label class="text-gray-700">Pakistan</label>
        </div>

        <div class="flex gap-3.5 items-center">
            <input type="checkbox" class="cursor-pointer h-4 w-4 focus:ring-[#092962]">
            <label class="text-gray-700">France</label>
        </div>

        <div class="flex gap-3.5 items-center">
            <input type="checkbox" class="cursor-pointer h-4 w-4 focus:ring-[#092962]">
            <label class="text-gray-700">Germany</label>
        </div>

        <div class="flex gap-3.5 items-center">
            <input type="checkbox" class="cursor-pointer h-4 w-4 focus:ring-[#092962]">
            <label class="text-gray-700">England</label>
        </div>

        <div class="flex gap-3.5 items-center">
            <input type="checkbox" class="cursor-pointer h-4 w-4 focus:ring-[#092962]">
            <label class="text-gray-700">Usa</label>
        </div>
    </div>

    <!-- Button -->
    <div class="flex justify-center items-center mt-4">
        <button class="bg-[#092962] text-white py-1.5 px-6 rounded-md text-sm cursor-pointer">
            Discover
        </button>
    </div>
</div>

<div class="p-3 mt-2 bg-white shadow-lg rounded-md">

    <div class="flex items-center justify-between py-1 border-b mb-3">
        <h2 class="text-sm font-semibold text-gray-700">Degree Level</h2>
        <i class="fa-solid fa-chevron-down text-gray-600 text-xs cursor-pointer"></i>
    </div>

    <!-- Checkbox List -->
    <div class="space-y-3 text-sm">
        <div class="flex gap-3.5 items-center">
            <input type="checkbox" class="cursor-pointer h-4 w-4 text-[#092962] focus:ring-[#092962]">
            <label class="text-gray-700">Bachelor</label>
        </div>

        <div class="flex gap-3.5 items-center">
            <input type="checkbox" class="cursor-pointer h-4 w-4 text-[#092962] focus:ring-[#092962]">
            <label class="text-gray-700">Undergraduate</label>
        </div>

        <div class="flex gap-3.5 items-center">
            <input type="checkbox" class="cursor-pointer h-4 w-4 text-[#092962] focus:ring-[#092962]">
            <label class="text-gray-700">Postgraduate</label>
        </div>

        <div class="flex gap-3.5 items-center">
            <input type="checkbox" class="cursor-pointer h-4 w-4 text-[#092962] focus:ring-[#092962]">
            <label class="text-gray-700">Postgraduate Degree</label>
        </div>
    </div>

    <!-- Button -->
    <div class="flex justify-center items-center mt-4">
        <button class="bg-[#092962] text-white py-1.5 px-6 rounded-md text-sm cursor-pointer hover:bg-[#0b3a85] transition">
            Discover
        </button>
    </div>

</div>


        </aside>

        <div class="w-full">

<!-- Top Row -->
<div class="flex justify-between items-center mb-4 ">

    <!--  Result count -->
    <h2 class="text-xl font-medium text-gray-800">788,454 Results Found</h2>

    <!-- RIGHT -->
    <div class="flex items-center gap-4">

        <!-- Checkbox + label -->
        <label class="flex items-center text-sm gap-2 cursor-pointer">
            <input type="checkbox" class="h-4 w-4 text-[#092962] focus:ring-[#092962]">
            <span class="text-gray-700">Recommended Courses</span>
        </label>

        <!-- Apply Now Button -->
        <button class="bg-[#98D94A] text-white py-1.5 px-4 rounded-md text-sm hover:bg-[#7bc334] transition">
            Apply Now
        </button>
    </div>

</div>

<div class="border-b mb-5"></div>

<!-- Second Row  -->
<div class="flex justify-between items-center pb-10">

    <!-- LEFT: Sort By -->
    <div class="flex items-center text-sm gap-2">
        <p class="text-gray-700">Sort by:</p>

        <select class="border rounded-md px-3 py-1.5 bg-white text-gray-700 focus:outline-none cursor-pointer">
            <option value="newest">Newest First</option>
            <option value="oldest">Oldest First</option>
            <option value="az">A to Z</option>
            <option value="za">Z to A</option>
        </select>
    </div>

    <!-- RIGHT: Currency Select -->
    <div class="relative">
        <select class="appearance-none border rounded-md bg-white px-10 py-2 text-sm text-gray-700 w-48 focus:outline-none cursor-pointer">

            <option value="USD">USD — US Dollar</option>
            <option value="EUR">EUR — Euro</option>
            <option value="GBP">GBP — British Pound</option>
            <option value="PKR">PKR — Pakistani Rupee</option>
            <option value="AED">AED — UAE Dirham</option>

        </select>

        <!-- Dollar icon box -->
        <div class="absolute top-1/2 left-2 -translate-y-1/2 w-7 h-7 bg-gray-100 border rounded flex items-center justify-center pointer-events-none">
            <img src="dollar-icon.png" class="w-4 h-4" />
        </div>

        <!-- Dropdown Arrow -->
        <i class="fa-solid fa-chevron-down absolute right-3 top-1/2 -translate-y-1/2 text-xs text-gray-600 pointer-events-none"></i>
    </div>

</div>



       <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

    <div class="w-full bg-white rounded-md shadow-lg">
   <div
    class="bg-[#C0F283] relative h-36 flex flex-col justify-center items-center border-b-2 border-b-[#508C08] rounded-t-md p-3">

    <div class="absolute top-2.5 right-3 flex items-center gap-2">
        <img src="{{ asset('images/share.png') }}" alt="Arrow Icon" class="h-5 w-5 cursor-pointer">
        <img src="{{ asset('images/heart.png') }}" alt="Heart Icon" class="h-5 w-5 cursor-pointer">
    </div>

    <!-- University logo -->
    <img class="h-14 mt-4" src="{{ asset('images/cardlogo.png') }}" alt="University Logo">

    <!-- University name -->
    <p class="text-[#092962] font-semibold text-xl mt-1 text-center">UNIVERSITY OF OXFORD</p>

    <!-- Address -->
    <p class="font-light text-center text-[12px] text-gray-900">Wellington Square, Oxford OX1 2JD, UK</p>
</div>


        <div class="p-4 space-y-4">

            <div class="space-y-2">
                <h1 class="text-[#48464C] font-bold text-lg leading-tight">
                    Master of Transport in <br> Sustainable Transport
                </h1>

                <div class="flex items-center justify-between text-sm">
                    <div class="flex items-center gap-1.5">
                        <img src="{{ asset('/images/course.png') }}" class="h-4" alt="Course Icon">
                        <span class="font-medium text-[#092962]">Transport in Sustainable...</span>
                    </div>
                    <img src="{{ asset('/images/info.png') }}" class="h-4" alt="Info Icon">
                </div>
            </div>

            <div class="flex items-start justify-between text-sm text-gray-700">
                <div class="space-y-2.5">
                    <span class="flex items-center gap-2">
                        <img src="{{ asset('/images/degree.png') }}" class="h-4">Masters
                    </span>
                    <span class="flex items-center gap-2">
                        <img src="{{ asset('/images/map.png') }}" class="h-4">On Campus
                    </span>
                    <span class="flex items-center gap-2">
                        <img src="{{ asset('/images/dolar.png') }}" class="h-4">18,000 USD/Year
                    </span>
                </div>

                <div class="space-y-2.5">
                    <span class="flex items-center gap-2">
                        <img src="{{ asset('/images/clock.png') }}" class="h-4">18 Months
                    </span>
                    <span class="flex items-center gap-2">
                        <img src="{{ asset('/images/lang.png') }}" class="h-4">English
                    </span>
                    <span class="flex items-center gap-2">
                        <img src="{{ asset('/images/time.png') }}" class="h-4">Full Time
                    </span>
                </div>
            </div>

            <div class="flex justify-center gap-4 pt-2">
                <button class="bg-white border border-[#092962] text-[#092962] py-1.5 px-8 rounded-md text-sm shadow-md hover:bg-gray-50 transition">Discover</button>
                <button class="bg-[#092962] text-white py-1.5 px-8 rounded-md text-sm shadow-md hover:bg-[#1f4c93] transition">Apply</button>
            </div>

        </div>
    </div>

    <!-- Card2 -->

     <div class="w-full bg-white rounded-md shadow-lg">
   <div
    class="bg-[#C0F283] relative h-36 flex flex-col justify-center items-center border-b-2 border-b-[#508C08] rounded-t-md p-3">

    <div class="absolute top-2.5 right-3 flex items-center gap-2">
        <img src="{{ asset('images/share.png') }}" alt="Arrow Icon" class="h-5 w-5 cursor-pointer">
        <img src="{{ asset('images/heart.png') }}" alt="Heart Icon" class="h-5 w-5 cursor-pointer">
    </div>

    <!-- University logo -->
    <img class="h-14 mt-4" src="{{ asset('images/cardlogo.png') }}" alt="University Logo">

    <!-- University name -->
    <p class="text-[#092962] font-semibold text-xl mt-1 text-center">UNIVERSITY OF OXFORD</p>

    <!-- Address -->
    <p class="font-light text-center text-[12px] text-gray-900">Wellington Square, Oxford OX1 2JD, UK</p>
</div>


        <div class="p-4 space-y-4">

            <div class="space-y-2">
                <h1 class="text-[#48464C] font-bold text-lg leading-tight">
                    Master of Transport in <br> Sustainable Transport
                </h1>

                <div class="flex items-center justify-between text-sm">
                    <div class="flex items-center gap-1.5">
                        <img src="{{ asset('/images/course.png') }}" class="h-4" alt="Course Icon">
                        <span class="font-medium text-[#092962]">Transport in Sustainable...</span>
                    </div>
                    <img src="{{ asset('/images/info.png') }}" class="h-4" alt="Info Icon">
                </div>
            </div>

            <div class="flex items-start justify-between text-sm text-gray-700">
                <div class="space-y-2.5">
                    <span class="flex items-center gap-2">
                        <img src="{{ asset('/images/degree.png') }}" class="h-4">Masters
                    </span>
                    <span class="flex items-center gap-2">
                        <img src="{{ asset('/images/map.png') }}" class="h-4">On Campus
                    </span>
                    <span class="flex items-center gap-2">
                        <img src="{{ asset('/images/dolar.png') }}" class="h-4">18,000 USD/Year
                    </span>
                </div>

                <div class="space-y-2.5">
                    <span class="flex items-center gap-2">
                        <img src="{{ asset('/images/clock.png') }}" class="h-4">18 Months
                    </span>
                    <span class="flex items-center gap-2">
                        <img src="{{ asset('/images/lang.png') }}" class="h-4">English
                    </span>
                    <span class="flex items-center gap-2">
                        <img src="{{ asset('/images/time.png') }}" class="h-4">Full Time
                    </span>
                </div>
            </div>

            <div class="flex justify-center gap-4 pt-2">
                <button class="bg-white border border-[#092962] text-[#092962] py-1.5 px-8 rounded-md text-sm shadow-md hover:bg-gray-50 transition">Discover</button>
                <button class="bg-[#092962] text-white py-1.5 px-8 rounded-md text-sm shadow-md hover:bg-[#1f4c93] transition">Apply</button>
            </div>

        </div>
    </div>
     <!-- Card3 -->

     <div class="w-full bg-white rounded-md shadow-lg">
   <div
    class="bg-[#C0F283] relative h-36 flex flex-col justify-center items-center border-b-2 border-b-[#508C08] rounded-t-md p-3">

    <div class="absolute top-2.5 right-3 flex items-center gap-2">
        <img src="{{ asset('images/share.png') }}" alt="Arrow Icon" class="h-5 w-5 cursor-pointer">
        <img src="{{ asset('images/heart.png') }}" alt="Heart Icon" class="h-5 w-5 cursor-pointer">
    </div>

    <!-- University logo -->
    <img class="h-14 mt-4" src="{{ asset('images/cardlogo.png') }}" alt="University Logo">

    <!-- University name -->
    <p class="text-[#092962] font-semibold text-xl mt-1 text-center">UNIVERSITY OF OXFORD</p>

    <!-- Address -->
    <p class="font-light text-center text-[12px] text-gray-900">Wellington Square, Oxford OX1 2JD, UK</p>
</div>


        <div class="p-4 space-y-4">

            <div class="space-y-2">
                <h1 class="text-[#48464C] font-bold text-lg leading-tight">
                    Master of Transport in <br> Sustainable Transport
                </h1>

                <div class="flex items-center justify-between text-sm">
                    <div class="flex items-center gap-1.5">
                        <img src="{{ asset('/images/course.png') }}" class="h-4" alt="Course Icon">
                        <span class="font-medium text-[#092962]">Transport in Sustainable...</span>
                    </div>
                    <img src="{{ asset('/images/info.png') }}" class="h-4" alt="Info Icon">
                </div>
            </div>

            <div class="flex items-start justify-between text-sm text-gray-700">
                <div class="space-y-2.5">
                    <span class="flex items-center gap-2">
                        <img src="{{ asset('/images/degree.png') }}" class="h-4">Masters
                    </span>
                    <span class="flex items-center gap-2">
                        <img src="{{ asset('/images/map.png') }}" class="h-4">On Campus
                    </span>
                    <span class="flex items-center gap-2">
                        <img src="{{ asset('/images/dolar.png') }}" class="h-4">18,000 USD/Year
                    </span>
                </div>

                <div class="space-y-2.5">
                    <span class="flex items-center gap-2">
                        <img src="{{ asset('/images/clock.png') }}" class="h-4">18 Months
                    </span>
                    <span class="flex items-center gap-2">
                        <img src="{{ asset('/images/lang.png') }}" class="h-4">English
                    </span>
                    <span class="flex items-center gap-2">
                        <img src="{{ asset('/images/time.png') }}" class="h-4">Full Time
                    </span>
                </div>
            </div>

            <div class="flex justify-center gap-4 pt-2">
                <button class="bg-white border border-[#092962] text-[#092962] py-1.5 px-8 rounded-md text-sm shadow-md hover:bg-gray-50 transition">Discover</button>
                <button class="bg-[#092962] text-white py-1.5 px-8 rounded-md text-sm shadow-md hover:bg-[#1f4c93] transition">Apply</button>
            </div>

        </div>
    </div>



</div>

        </div>
    </div>
</section>

    <!-- FOOTER -->
    {{-- <footer class="py-5 bg-white">
        <div class="px-10 h-full grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">

            <!-- COLUMN 1 -->
            <div class="space-y-3.5">
                <img class="h-[60px]" src="./Logo.png" alt="Logo" />
                <p class="text-[12px]">
                    Global Minds Consultant — Pakistan’s #1 Abroad<br />
                    Consultant. Trusted by 1500+ people.
                </p>

                <div class="bg-blue-950 px-1.5 py-2.5 rounded-md flex justify-around items-center text-white w-1/2">
                    <i class="fa-brands fa-facebook-square text-lg"></i>
                    <i class="fa-brands fa-instagram text-lg"></i>
                    <i class="fa-brands fa-linkedin text-lg"></i>
                    <i class="fa-brands fa-twitter text-lg"></i>
                </div>
            </div>

            <!-- COLUMN 2 -->
            <div class="space-y-1.5">
                <h1 class="font-medium text-2xl">Get free link</h1>

                <ul class="space-y-1">
                    <li class="flex items-center gap-2.5 cursor-pointer">
                        <i class="fa-solid fa-angle-right"></i> About
                    </li>
                    <li class="flex items-center gap-2.5 cursor-pointer">
                        <i class="fa-solid fa-angle-right"></i> Locations
                    </li>
                    <li class="flex items-center gap-2.5 cursor-pointer">
                        <i class="fa-solid fa-angle-right"></i> Blogs
                    </li>
                    <li class="flex items-center gap-2.5 cursor-pointer">
                        <i class="fa-solid fa-angle-right"></i> FAQs
                    </li>
                    <li class="flex items-center gap-2.5 cursor-pointer">
                        <i class="fa-solid fa-angle-right"></i> Student Guide
                    </li>
                    <li class="flex items-center gap-2.5 cursor-pointer">
                        <i class="fa-solid fa-angle-right"></i> Private Policy
                    </li>
                </ul>
            </div>

            <!-- COLUMN 3 -->
            <div class="space-y-3.5">
                <h1 class="font-medium text-2xl">Recent Blogs</h1>

                <!-- Blog item 1 -->
                <div class="flex items-center gap-1.5">
                    <div class="h-10 w-10">
                        <img class="rounded-md h-full w-full object-cover" src="./footer-img.jpg" alt="" />
                    </div>
                    <div>
                        <p class="flex items-center gap-1">
                            <img src="./bag.png" class="h-4" alt="bag" />
                            <span>24-06-09</span>
                        </p>
                        <p>Blog title</p>
                    </div>
                </div>

                <!-- Blog item 2 -->
                <div class="flex items-center gap-1.5">
                    <div class="h-10 w-10">
                        <img class="rounded-md h-full w-full object-cover" src="./footer-img.jpg" alt="" />
                    </div>
                    <div>
                        <p class="flex items-center gap-1">
                            <img src="./bag.png" class="h-4" alt="bag" />
                            <span>24-06-09</span>
                        </p>
                        <p>Blog title</p>
                    </div>
                </div>

            </div>

            <!-- COLUMN 4 -->
            <div class="space-y-3.5">
                <h1 class="font-medium text-2xl">Contact Us</h1>

                <div class="flex items-center gap-2.5">
                    <img class="h-10 w-10" src="./phone.png" alt="phone" />
                    <span>+92 123 456789</span>
                </div>

                <div class="flex items-center gap-2.5">
                    <img class="h-10 w-10" src="./email.png" alt="email" />
                    <span>abcd@gmail.com</span>
                </div>
            </div>

        </div>

        <hr class="my-4" />

        <p class="text-center p-2.5">
            Global Minds Consultant 2025 | All Rights Reserved
        </p>


    </footer> --}}


@endsection
