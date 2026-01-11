@extends('layouts.user')
@section('content')
    <!-----------------------------------HERO SECTION----------------------------------------------- -->
    <section
        class="relative bg-[url('/images/consultation-form.png')] bg-cover bg-top w-full h-screen flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 bg-black bg-opacity-60 fade-in" data-delay="0.2" data-duration="1.8"></div>

        <div class="relative z-10 max-w-4xl text-center text-white p-6">

            <p class="text-lg md:text-xl font-medium text-[#74BF1A] mb-4 fade-up" data-delay="0.8" data-duration="1.0">
                Start Your Journey Today
            </p>

            <h1 class="text-4xl sm:text-6xl md:text-7xl font-bold leading-tight mb-6 slide-down" data-delay="1.1"
                data-duration="1.5">
                Book Your <span class="text-[#74BF1A]">Personalized Consultation</span> Session
            </h1>

            <p class="text-base md:text-xl text-gray-200 mb-8 fade-up" data-delay="1.5" data-duration="1.2">
                Connect with our expert counselors to discuss university options, application strategy, and visa guidance.
            </p>

            <a href="#consultation-form-section"
                class="inline-block py-3 px-10 text-xl font-semibold bg-[#74BF1A] text-white rounded-lg uppercase tracking-wider hover:bg-[#5aa012] transition scale-in"
                data-delay="1.8" data-duration="1.0">
                Schedule a Free Call
            </a>

        </div>
    </section>

    <!-----------------------------------FORM SECTION----------------------------------------------->
    <section class="py-16 bg-[#F6F6F6] overflow-hidden">
        <div class="px-6 md:px-12">
            <h2 class="text-2xl md:text-4xl font-bold mb-6 text-center fade-up" data-delay="0.2" data-duration="1.0">
                Career
                <span class="text-[#74BF1A]"> Counseling & </span>
                Consultation
            </h2>

            <p class="text-lg md:text-xl text-center mb-12 text-gray-600 fade-up" data-delay="0.4" data-duration="1.0">
                Helping you choose the right country, university and program for your
                future success
            </p>

            <div class="flex flex-col lg:flex-row items-stretch gap-10">

                <div class="w-full lg:w-1/2 flex flex-col justify-between slide-left" data-delay="0.7" data-duration="1.2">
                    <div class="border rounded-2xl shadow-lg p-6 md:p-8 bg-white flex flex-col justify-between w-full h-full"
                        id="consultation-form-section">
                        <div>
                            <h1 class="text-3xl font-bold mb-6 text-[#092962]">
                                Share Your Details Our Experts Will Contact You
                            </h1>

                            @if (session('success'))
                                <div
                                    class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded shadow-md">
                                    {{ session('success') }}
                                </div>
                            @endif

                            @if ($errors->any())
                                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded">
                                    <ul class="list-disc pl-5">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form action="{{ route('consultation.store') }}" method="POST" class="space-y-6">
                                @csrf

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <input name="first_name" required value="{{ old('first_name') }}"
                                        class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-[#74BF1A] outline-none"
                                        placeholder="First Name" />

                                    <input name="last_name" required value="{{ old('last_name') }}"
                                        class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-[#74BF1A] outline-none"
                                        placeholder="Last Name" />
                                </div>

                                <input name="email" type="email" required value="{{ old('email') }}"
                                    class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-[#74BF1A] outline-none"
                                    placeholder="E-mail" />

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <input name="phone" required value="{{ old('phone') }}"
                                        class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-[#74BF1A] outline-none"
                                        placeholder="Phone Number" />

                                    <input name="linkedin_profile" value="{{ old('linkedin_profile') }}"
                                        class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-[#74BF1A] outline-none"
                                        placeholder="LinkedIn Profile" />
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <select name="destination" required
                                        class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-[#74BF1A] outline-none text-gray-500">
                                        <option selected disabled value="">Preferred Study Destination</option>
                                        <option value="uk" {{ old('destination') == 'uk' ? 'selected' : '' }}>UK
                                        </option>
                                        <option value="usa" {{ old('destination') == 'usa' ? 'selected' : '' }}>USA
                                        </option>
                                        <option value="canada" {{ old('destination') == 'canada' ? 'selected' : '' }}>
                                            Canada</option>
                                    </select>

                                    <select name="branch_time" required
                                        class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-[#74BF1A] outline-none text-gray-500">
                                        <option selected disabled value="">Nearest Branch Time</option>
                                        <option value="morning" {{ old('branch_time') == 'morning' ? 'selected' : '' }}>
                                            Morning</option>
                                        <option value="afternoon"
                                            {{ old('branch_time') == 'afternoon' ? 'selected' : '' }}>Afternoon</option>
                                        <option value="evening" {{ old('branch_time') == 'evening' ? 'selected' : '' }}>
                                            Evening</option>
                                    </select>
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <select name="counseling_mode" required
                                        class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-[#74BF1A] outline-none text-gray-500">
                                        <option selected disabled value="">Preferred Mode of Counseling</option>
                                        <option value="online" {{ old('counseling_mode') == 'online' ? 'selected' : '' }}>
                                            Online</option>
                                        <option value="in-person"
                                            {{ old('counseling_mode') == 'in-person' ? 'selected' : '' }}>In-Person
                                        </option>
                                        <option value="phone" {{ old('counseling_mode') == 'phone' ? 'selected' : '' }}>
                                            Phone Call</option>
                                    </select>

                                    <select name="study_level" required
                                        class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-[#74BF1A] outline-none text-gray-500">
                                        <option selected disabled value="">Preferred Study Level</option>
                                        <option value="undergraduate"
                                            {{ old('study_level') == 'undergraduate' ? 'selected' : '' }}>Undergraduate
                                        </option>
                                        <option value="postgraduate"
                                            {{ old('study_level') == 'postgraduate' ? 'selected' : '' }}>Postgraduate
                                        </option>
                                        <option value="phd" {{ old('study_level') == 'phd' ? 'selected' : '' }}>PhD /
                                            Research</option>
                                        <option value="diploma" {{ old('study_level') == 'diploma' ? 'selected' : '' }}>
                                            Diploma / Certificate</option>
                                    </select>
                                </div>

                                <textarea name="message" rows="5" required
                                    class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-[#74BF1A] outline-none resize-none"
                                    placeholder="Message">{{ old('message') }}</textarea>

                                <div class="mt-8 flex items-center justify-center">
                                    <button type="submit"
                                        class="bg-[#74BF1A] text-white px-6 md:px-32 font-bold py-3 rounded-lg hover:bg-green-600 transition w-full text-center">
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-1/2 flex items-center slide-right" data-delay="0.9" data-duration="1.2">
                    <div class="overflow-hidden rounded-2xl shadow-lg w-full h-[800px] my-auto">
                        <img src="{{ asset('images/call-form.png') }}" alt="Students"
                            class="w-full h-full object-cover rounded-2xl transform transition duration-500 hover:scale-105 hover:shadow-2xl" />
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
