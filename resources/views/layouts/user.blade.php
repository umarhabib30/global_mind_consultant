<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Globals Minds Consultants || Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

    {{-- <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">

    <style>
        * {
            font-family: "Outfit", sans-serif !important;
        }
    </style> --}}
    @yield('styles')

</head>

<body>
    <!-----------------------------------NAVBAR----------------------------------------------- -->
    <!-- Navigation -->
    <nav class="bg-white fixed w-full left-0 z-[100] shadow-md">
        <div class="px-4 sm:px-6 lg:px-8 mx-auto">
            <div class="flex justify-between items-center h-20 md:h-18">
                <div class="flex-shrink-0">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo"
                            class="h-[120px] w-auto md:h-[80px] lg:h-[90px] transition-all" />
                    </a>
                </div>

                <div class="hidden md:flex space-x-6 items-center font-semibold">
                    <a href="{{ route('home') }}"
                        class="{{ request()->routeIs('home') ? 'text-[#74BF1A]' : 'text-[#48464C]' }} hover:text-[#74BF1A] transition">Home</a>
                    <a href="{{ route('about') }}"
                        class="{{ request()->routeIs('about') ? 'text-[#74BF1A]' : 'text-[#48464C]' }} hover:text-[#74BF1A] transition">About
                        Us</a>

                    <div class="relative group h-full flex items-center">
                        <a href="/services"
                            class="flex items-center gap-1 {{ request()->routeIs('services*') ? 'text-[#74BF1A]' : 'text-[#48464C]' }} hover:text-[#74BF1A] transition py-8">
                            Services <i
                                class="fa-solid fa-chevron-down text-[10px] group-hover:rotate-180 transition-transform"></i>
                        </a>

                        <div class="absolute left-0 top-[80%] pt-4 w-48 hidden group-hover:block z-[110]">
                            <div class="bg-white border border-gray-100 shadow-xl rounded-lg py-2">
                                <a href="/ielts"
                                    class="block px-4 py-2 text-sm text-[#48464C] hover:bg-gray-50 hover:text-[#74BF1A]">IELTS</a>
                                <a href="/universities"
                                    class="block px-4 py-2 text-sm text-[#48464C] hover:bg-gray-50 hover:text-[#74BF1A]">Universities</a>
                                <a href="/scholarships"
                                    class="block px-4 py-2 text-sm text-[#48464C] hover:bg-gray-50 hover:text-[#74BF1A]">Scholarships</a>
                                <a href="/course-filter"
                                    class="block px-4 py-2 text-sm text-[#48464C] hover:bg-gray-50 hover:text-[#74BF1A]">Course-Filter</a>


                            </div>
                        </div>
                    </div>

                    <a href="{{ route('events') }}"
                        class="{{ request()->routeIs('events') ? 'text-[#74BF1A]' : 'text-[#48464C]' }} hover:text-[#74BF1A] transition">Events</a>
                    <a href="{{ route('blog') }}"
                        class="{{ request()->routeIs('blog') ? 'text-[#74BF1A]' : 'text-[#48464C]' }} hover:text-[#74BF1A] transition">Blog</a>
                    <a href="{{ route('destination') }}"
                        class="{{ request()->routeIs('destination') ? 'text-[#74BF1A]' : 'text-[#48464C]' }} hover:text-[#74BF1A] transition">Study
                        Destinations</a>
                    <a href="{{ route('contact') }}"
                        class="{{ request()->routeIs('contact') ? 'text-[#74BF1A]' : 'text-[#48464C]' }} hover:text-[#74BF1A] transition">Contact</a>
                </div>

                <div class="hidden md:flex">
                    <a href="/consultation-form"
                        class="bg-[#74BF1A] text-white px-5 py-2.5 rounded-lg font-semibold hover:bg-green-600 transition">
                        Book Free Counselling
                    </a>
                </div>

                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-btn" class="text-[#48464C] p-2 relative z-[110]">
                        <i class="fa-solid fa-bars text-3xl"></i>
                    </button>
                </div>
            </div>
        </div>

        <div id="mobile-menu"
            class="hidden fixed inset-0 bg-white z-[120] flex flex-col px-6 pt-6 overflow-y-auto no-scrollbar">
            <div class="flex justify-between items-center w-full mb-10">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-20 w-auto" />
                <button id="close-menu-btn" class="text-3xl text-[#48464C]">
                    <i class="fa-solid fa-times"></i>
                </button>
            </div>

            <div class="flex flex-col space-y-4 font-semibold text-lg pb-10">
                <a href="{{ route('home') }}" class="py-2 border-b border-gray-50">Home</a>
                <a href="{{ route('about') }}" class="py-2 border-b border-gray-50">About Us</a>

                <div class="border-b border-gray-50">
                    <div class="flex justify-between items-center w-full py-2">
                        <a href="/services" class="flex-grow">Services</a>
                        <button id="mobile-services-btn" class="p-2">
                            <i class="fa-solid fa-chevron-down text-sm transition-transform"></i>
                        </button>
                    </div>
                    <div id="mobile-services-list" class="hidden flex-col bg-gray-50 rounded-lg">
                        <a href="/scholarships" class="px-4 py-3 text-base border-b border-gray-100">Scholarships</a>
                        <a href="/universities" class="px-4 py-3 text-base border-b border-gray-100">Universities</a>
                        <a href="/ielts" class="px-4 py-3 text-base">IELTS</a>
                    </div>
                </div>

                <a href="{{ route('events') }}" class="py-2 border-b border-gray-50">Events</a>
                <a href="{{ route('destination') }}" class="py-2 border-b border-gray-50">Study Destinations</a>
                <a href="{{ route('contact') }}" class="py-2">Contact</a>

                <a href="/consultation-form"
                    class="bg-[#74BF1A] text-white px-6 py-4 rounded-lg text-center mt-4 shadow-lg">
                    Book Free Counselling
                </a>
            </div>
        </div>
    </nav>

    <style>
        /* Hide scrollbar but allow scrolling */
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        /* Ensure the dropdown area is connected to the trigger */
        .nav-dropdown-bridge {
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            height: 20px;
            /* Bridges the gap between link and menu */
            background: transparent;
        }
    </style>









    @yield('content')
    <script src="{{ asset('assets/js/menu.js') }}"></script>
    <script src="{{ asset('assets/js/animations.js') }}"></script>


    <!------------------------ footer----------------------------------  -->
    <section>
        <footer class="flex flex-wrap lg:flex-nowrap justify-between px-6 md:px-12">
            <!-- 1st part -->
            <div class="w-full sm:w-1/2 lg:w-auto">
                <img src="images/logo.png" class="w-56 mb-2" alt="logo" />
                <p class="w-full sm:w-72 lg:w-96 leading-relaxed">
                    Global Minds Consultant - Pakistan’s #1 Abroad Consultant. Trusted
                    by 1500+ people.
                </p>
                <p class="space-x-6 bg-[#092962] text-white text-xl h-10 pt-1 w-48 rounded-lg mt-5">
                    <i class="fa-brands fa-facebook ml-3 cursor-pointer"></i>
                    <i class="fa-brands fa-instagram cursor-pointer"></i>
                    <i class="fa-brands fa-linkedin cursor-pointer"></i>
                    <i class="fa-brands fa-twitter cursor-pointer"></i>
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

            <!-- 3rd part -->
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

            <!-- 4th part -->
            <div class="mt-10 sm:mt-20 w-full sm:w-1/2 lg:w-auto">
                <h1 class="font-bold text-xl mb-3">Contact Us</h1>
                <p class="mt-3">
                    <i class="fa-solid fa-phone border border-black w-9 h-9 text-center pt-2 rounded-md"></i>
                    +92 312 000000
                </p>
                <p class="mt-3">
                    <i class="fa-solid fa-envelope border border-black w-9 h-9 text-center pt-2 rounded-md"></i>
                    abcd@gmail.com
                </p>
            </div>
        </footer>

        <!-- All rights reserved -->
        <br /><br />
        <hr />
        <div class="text-center m-5">
            <p>Global Minds Consultant 2025 | All Rights Reserved</p>
        </div>
    </section>

</body>

</html>
