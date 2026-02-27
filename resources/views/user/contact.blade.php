@extends('layouts.user')

@section('content')
    <section class="bg-[#F6F6F6] overflow-hidden">

        <!-------------------------- HERO SECTION-------------------------------->
        <div class="h-[70vh] md:h-screen w-full relative flex items-center justify-center overflow-hidden">
            <img class="hero-bg h-[140%] w-full object-cover absolute top-0 left-0 brightness-50" src="/images/img.jpg"
                alt="Contact Background">

            <div
                class="hero-card w-11/12 md:w-2/3 lg:w-1/2 z-10 bg-white/10 backdrop-blur-xl p-10 rounded-3xl border border-white/20 shadow-2xl text-center">
                <h1 class="hero-title text-5xl md:text-7xl font-extrabold text-white mb-6 tracking-tight">
                    Contact <span class="text-[#74BF1A]">Us</span>
                </h1>
                <p class="hero-text text-white/90 text-lg md:text-xl max-w-2xl mx-auto leading-relaxed">
                    Have questions? We're here to help. Reach out to our team for expert guidance and support tailored to
                    your unique needs.
                </p>
                <div class="hero-btn mt-8">
                    <a href="#contact-form"
                        class="px-8 py-3 bg-white text-[#092962] font-bold rounded-full hover:bg-blue-50 transition-all duration-300 shadow-lg">
                        Scroll to Message
                    </a>
                </div>
            </div>
        </div>

        {{-- Contact Info & Form Section --}}
        <section id="contact-form" class="relative min-h-screen flex flex-col justify-center items-center bg-gray-50 py-20">

            <div
                class="flex flex-col md:flex-row justify-center relative md:-top-32 bg-white w-[92%] lg:w-[85%] xl:w-[75%] rounded-[2.5rem] shadow-[0_50px_100px_-20px_rgba(0,0,0,0.1)] overflow-hidden">

                {{-- Left Side: Contact Details --}}
                <div class="bg-[#092962] text-white px-8 py-12 md:w-5/12 lg:p-16 flex flex-col justify-between slide-left">
                    <div class="space-y-6">
                        <h2 class="text-4xl font-bold word-split">Get in touch</h2>
                        <p class="text-blue-100/80 leading-relaxed text-lg fade-in" data-delay="0.5">
                            We value your feedback and inquiries. Use our contact details or the form to start a
                            conversation.
                        </p>

                        <div class="space-y-8 pt-8 stagger-up" data-stagger="0.2">
                            {{-- Location --}}
                            <div class="flex gap-6 items-start group">
                                <div
                                    class="h-14 w-14 shrink-0 flex justify-center items-center rounded-2xl bg-white/10 group-hover:bg-white/20 transition-colors border border-white/10">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-bold text-xl text-white">Head Office</h3>
                                    <p class="text-blue-100/70">Office no 14, 4th floor, Mall of Sargodha</p>
                                </div>
                            </div>

                            {{-- Phone --}}
                            <div class="flex gap-6 items-start group">
                                <div
                                    class="h-14 w-14 shrink-0 flex justify-center items-center rounded-2xl bg-white/10 group-hover:bg-white/20 transition-colors border border-white/10">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-bold text-xl text-white">Phone</h3>
                                    <p class="text-blue-100/70">+92 317 1115091 / +92 317 1115092</p>
                                </div>
                            </div>

                            {{-- Email --}}
                            <div class="flex gap-6 items-start group">
                                <div
                                    class="h-14 w-14 shrink-0 flex justify-center items-center rounded-2xl bg-white/10 group-hover:bg-white/20 transition-colors border border-white/10">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-bold text-xl text-white">Email</h3>
                                    <p class="text-blue-100/70">info@globalmindsconsultants.com</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pt-12 fade-up" data-delay="1">
                        <p class="font-medium text-blue-200 mb-6 uppercase tracking-widest text-sm">Follow us</p>
                        <div class="flex items-center gap-4">
                            <a href="#"
                                class="h-12 w-12 flex items-center justify-center rounded-full bg-white/10 hover:bg-white text-white hover:text-[#092962] transition-all duration-300">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#"
                                class="h-12 w-12 flex items-center justify-center rounded-full bg-white/10 hover:bg-white text-white hover:text-pink-600 transition-all duration-300">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#"
                                class="h-12 w-12 flex items-center justify-center rounded-full bg-white/10 hover:bg-white text-white hover:text-blue-500 transition-all duration-300">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Right Side: Form --}}
                <div class="px-8 py-12 md:w-7/12 lg:p-16 slide-right">
                    @if (session('success'))
                        <div
                            class="fade-in bg-green-50 border-l-4 border-green-500 text-green-700 p-4 mb-8 rounded-r-lg shadow-sm flex items-center gap-3">
                            <i class="fas fa-check-circle"></i>
                            <span class="font-medium">{{ session('success') }}</span>
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                        @csrf
                        <div class="space-y-2">
                            <h2 class="text-3xl text-gray-800 font-bold mb-2">Send us a message</h2>
                            <div class="h-1.5 w-16 bg-blue-600 rounded-full mb-8"></div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div class="fade-up" data-delay="0.1">
                                <label class="block mb-1 ml-1 text-sm font-semibold text-gray-700">Full Name</label>
                                <input
                                    class="mt-2 block w-full min-h-[52px] rounded-xl border-2 border-gray-300 bg-white px-4 py-3 text-gray-700 placeholder-gray-400 shadow-sm outline-none transition-all duration-300 ease-in-out hover:border-gray-400 focus:border-blue-500 focus:ring-4 focus:ring-blue-100"
                                    type="text" name="name" placeholder="John Doe" value="{{ old('name') }}"
                                    required>
                                @error('name')
                                    <span class="text-red-500 text-xs mt-1 ml-1">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="fade-up" data-delay="0.2">
                                <label class="block mb-1 ml-1 text-sm font-semibold text-gray-700">Email Address</label>
                                <input
                                    class="mt-2 block w-full min-h-[52px] rounded-xl border-2 border-gray-300 bg-white px-4 py-3 text-gray-700 placeholder-gray-400 shadow-sm outline-none transition-all duration-300 ease-in-out hover:border-gray-400 focus:border-blue-500 focus:ring-4 focus:ring-blue-100"
                                    type="email" name="email" placeholder="john@example.com"
                                    value="{{ old('email') }}" required>
                                @error('email')
                                    <span class="text-red-500 text-xs mt-1 ml-1">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="fade-up" data-delay="0.3">
                            <label class="block mb-1 ml-1 text-sm font-semibold text-gray-700">Country</label>
                            <input
                                class="mt-2 block w-full min-h-[52px] rounded-xl border-2 border-gray-300 bg-white px-4 py-3 text-gray-700 placeholder-gray-400 shadow-sm outline-none transition-all duration-300 ease-in-out hover:border-gray-400 focus:border-blue-500 focus:ring-4 focus:ring-blue-100"
                                type="text" name="country" placeholder="Enter your country"
                                value="{{ old('country') }}">
                        </div>

                        <div class="fade-up" data-delay="0.4">
                            <label class="block mb-1 ml-1 text-sm font-semibold text-gray-700">Your Message</label>
                            <textarea
                                class="mt-2 block w-full min-h-[130px] resize-y rounded-xl border-2 border-gray-300 bg-white px-4 py-3 text-gray-700 placeholder-gray-400 shadow-sm outline-none transition-all duration-300 ease-in-out hover:border-gray-400 focus:border-blue-500 focus:ring-4 focus:ring-blue-100"
                                name="message" placeholder="How can we help you today?" rows="4" required>{{ old('message') }}</textarea>
                            @error('message')
                                <span class="text-red-500 text-xs mt-1 ml-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit"
                            class="group relative w-full overflow-hidden rounded-xl bg-[#092962] py-5 text-white transition-all duration-300 hover:shadow-[0_15px_30px_-5px_rgba(9,41,98,0.4)] active:scale-[0.98]">
                            <div class="relative z-10 flex items-center justify-center gap-3 font-bold text-lg">
                                <span>Send Inquiry</span>
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z" />
                                </svg>
                            </div>
                        </button>
                    </form>
                </div>
            </div>
        </section>
    </section>

    <style>
        html {
            scroll-behavior: smooth;
        }

        /* Basic animation placeholders if not using a library like GSAP or AOS */
        .fade-up {
            animation: fadeInUp 0.6s ease-out forwards;
            opacity: 0;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
@endsection
