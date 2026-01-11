@extends('layouts.user')
@section('content')
    <section class="bg-[#F6F6F6] overflow-hidden">
        <div class="px-6 md:px-12"></div>

        {{-- Hero Section --}}
        <div class="h-screen w-full relative">
            <img class="h-full w-full object-cover" src="/images/img.jpg" alt="Contact Background">
            <div
                class="w-11/12 md:w-1/2 h-auto md:h-1/2 bg-white/10 absolute backdrop-blur-md top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2
                flex flex-col justify-center items-center text-center p-8 rounded-2xl border border-white/30">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Contact Us</h1>
                <p class="text-center text-white text-lg">
                    Have questions? We're here to help. Reach out to our team for expert guidance and support tailored
                    to
                    your needs.
                </p>
            </div>
        </div>

        {{-- Contact Info & Form Section --}}
        <section class="relative min-h-screen flex flex-col justify-center items-center bg-gray-50 ">
            <div
                class="flex flex-col md:flex-row justify-center relative md:absolute md:-top-[15%] bg-white w-[90%] lg:w-[70%] rounded-2xl shadow-2xl overflow-hidden">

                {{-- Left Side: Contact Details --}}
                <div class="bg-[#FAFAFA] px-6 py-10 space-y-8 md:w-1/2 p-5 lg:p-10">
                    <div class="space-y-4">
                        <h2 class="text-3xl text-[#48464C] font-bold">Get in touch</h2>
                        <p class="text-gray-600 leading-relaxed">
                            We value your feedback and inquiries. Please fill out the form or use our contact details
                            below
                            to get started.
                        </p>
                    </div>

                    <div class="space-y-6">
                        {{-- Location Icon & Text --}}
                        <div class="flex gap-5 items-start">
                            <div class="h-12 w-12 shrink-0 flex justify-center items-center rounded-full bg-[#092962]">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-[#092962]">Head Office</h3>
                                <p class="text-gray-600">Noori Gate, Silanwali Road</p>
                                <p class="text-gray-600">Sargodha, Pakistan</p>
                            </div>
                        </div>

                        {{-- Phone Icon & Text --}}
                        <div class="flex gap-5 items-start">
                            <div class="h-12 w-12 shrink-0 flex justify-center items-center rounded-full bg-[#092962]">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-[#092962]">Phone Number</h3>
                                <p class="text-gray-600">+92 48 1234567</p>
                                <p class="text-gray-600">+92 300 0000000</p>
                            </div>
                        </div>

                        {{-- Email Icon & Text --}}
                        <div class="flex gap-5 items-start">
                            <div class="h-12 w-12 shrink-0 flex justify-center items-center rounded-full bg-[#092962]">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-[#092962]">E-mail</h3>
                                <p class="text-gray-600">info@yourcompany.com</p>
                                <p class="text-gray-600">support@yourcompany.com</p>
                            </div>
                        </div>

                        <div class="pt-4">
                            <p class="font-bold mb-4">Follow us on social media</p>
                            <div class="flex items-center gap-6">
                                {{-- Social Icons using Font Awesome --}}
                                <a href="#" class="text-[#092962] hover:text-blue-800 transition text-2xl">
                                    <i class="fab fa-facebook"></i>
                                </a>
                                <a href="#" class="text-[#092962] hover:text-pink-600 transition text-2xl">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="#" class="text-[#092962] hover:text-blue-700 transition text-2xl">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

                {{-- Right Side: Form --}}
                {{-- Success Message Alert --}}
                @if (session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-md mb-4 shadow-sm">
                        {{ session('success') }}
                    </div>
                @endif

                {{-- Updated form tag: replaced action="#" with route('contact.store') --}}
                {{-- Right Side: Form --}}
                <div class="px-6 py-10 md:w-1/2 lg:p-10">
                    {{-- Success Message Alert --}}
                    @if (session('success'))
                        <div
                            class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-md mb-4 shadow-sm">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-5">
                        @csrf

                        <h2 class="text-3xl text-[#48464C] font-bold">Send us a message</h2>

                        <div>
                            <input
                                class="border border-gray-300 rounded-md w-full p-4 focus:ring-2 focus:ring-[#092962] outline-none transition"
                                type="text" name="name" placeholder="Your Name" value="{{ old('name') }}" required>
                            @error('name')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <input
                                class="border border-gray-300 rounded-md w-full p-4 focus:ring-2 focus:ring-[#092962] outline-none transition"
                                type="email" name="email" placeholder="Email Address" value="{{ old('email') }}"
                                required>
                            @error('email')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <select
                            class="border border-gray-300 rounded-md w-full p-4 focus:ring-2 focus:ring-[#092962] outline-none transition"
                            name="country">
                            <option value="">Select Country</option>
                            <option value="Pakistan" {{ old('country') == 'Pakistan' ? 'selected' : '' }}>Pakistan</option>
                            <option value="USA" {{ old('country') == 'USA' ? 'selected' : '' }}>USA</option>
                            <option value="Canada" {{ old('country') == 'Canada' ? 'selected' : '' }}>Canada</option>
                            <option value="Japan" {{ old('country') == 'Japan' ? 'selected' : '' }}>Japan</option>
                        </select>

                        <div>
                            <textarea class="border border-gray-300 rounded-md w-full p-4 focus:ring-2 focus:ring-[#092962] outline-none transition"
                                name="message" placeholder="How can we help you?" rows="5" required>{{ old('message') }}</textarea>
                            @error('message')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit"
                            class="w-full rounded-md text-center bg-[#092962] hover:bg-[#071d44] text-white font-bold p-4 transition duration-300 shadow-md">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </section>

        </div>
    </section>
@endsection
