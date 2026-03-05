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
    <nav class="bg-white  w-full left-0 z-[100] shadow-md">
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
                    <a href="{{ route('reviews.index') }}"
                        class="{{ request()->routeIs('reviews.*') ? 'text-[#74BF1A]' : 'text-[#48464C]' }} hover:text-[#74BF1A] transition">Reviews</a>
                    <a href="{{ route('success-stories.index') }}"
                        class="{{ request()->routeIs('success-stories.*') ? 'text-[#74BF1A]' : 'text-[#48464C]' }} hover:text-[#74BF1A] transition">Success
                        Stories</a>
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
                <a href="{{ route('reviews.index') }}" class="py-2 border-b border-gray-50">Reviews</a>
                <a href="{{ route('success-stories.index') }}" class="py-2 border-b border-gray-50">Success Stories</a>
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
    <!------------------------ Footer ----------------------------------  -->
    <footer class="mt-16 bg-[#0A245D] text-white">
        <div class="max-w-7xl mx-auto px-6 md:px-12 py-12">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">
                <div>
                    <a href="{{ route('home') }}" class="inline-flex items-center">
                        <img src="{{ asset('images/logo.png') }}" class="h-20 w-auto" alt="Global Minds Consultants" />
                    </a>
                    <p class="mt-4 text-sm leading-7 text-blue-100">
                        Global Minds Consultants helps students choose the right destination, apply confidently, and
                        complete
                        their visa process with expert support.
                    </p>
                    <div class="mt-5 flex items-center gap-3">
                        <a href="#"
                            class="h-10 w-10 rounded-full bg-white/15 hover:bg-white hover:text-[#0A245D] transition flex items-center justify-center">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="#"
                            class="h-10 w-10 rounded-full bg-white/15 hover:bg-white hover:text-[#0A245D] transition flex items-center justify-center">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="#"
                            class="h-10 w-10 rounded-full bg-white/15 hover:bg-white hover:text-[#0A245D] transition flex items-center justify-center">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>

                <div>
                    <h3 class="text-lg font-bold mb-4">Quick Links</h3>
                    <ul class="space-y-2 text-blue-100">
                        <li><a href="{{ route('home') }}" class="hover:text-white transition">Home</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-white transition">About Us</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-white transition">Services</a></li>
                        <li><a href="{{ route('destination') }}" class="hover:text-white transition">Study
                                Destinations</a></li>
                        <li><a href="{{ route('events') }}" class="hover:text-white transition">Events</a></li>
                        <li><a href="{{ route('blog') }}" class="hover:text-white transition">Blog</a></li>
                        <li><a href="{{ route('reviews.index') }}" class="hover:text-white transition">Reviews</a></li>
                        <li><a href="{{ route('success-stories.index') }}" class="hover:text-white transition">Success
                                Stories</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-white transition">Contact</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-bold mb-4">Our Services</h3>
                    <ul class="space-y-2 text-blue-100">
                        <li><a href="{{ route('ielts') }}" class="hover:text-white transition">IELTS Preparation</a>
                        </li>
                        <li><a href="{{ route('universities') }}" class="hover:text-white transition">University
                                Admissions</a></li>
                        <li><a href="{{ route('scholarships') }}" class="hover:text-white transition">Scholarship
                                Guidance</a></li>
                        <li><a href="{{ route('course-filter') }}" class="hover:text-white transition">Course
                                Filter</a></li>
                        <li><a href="{{ route('consultation') }}" class="hover:text-white transition">Book Free
                                Consultation</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-bold mb-4">Contact Info</h3>
                    <ul class="space-y-4 text-blue-100">
                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-location-dot mt-1 text-[#74BF1A]"></i>
                            <span>Office no 14, 4th floor, Mall of Sargodha</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-phone mt-1 text-[#74BF1A]"></i>
                            <span>+92 317 1115091 / +92 317 1115092</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fa-brands fa-facebook-f mt-1 text-[#74BF1A]"></i>
                            <span>Global Minds Consultants</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="border-t border-white/15">
            <div class="max-w-7xl mx-auto px-6 md:px-12 py-4 text-sm text-blue-100 text-center">
                Global Minds Consultants {{ date('Y') }} | All Rights Reserved
            </div>
        </div>
    </footer>

</body>

</html>
