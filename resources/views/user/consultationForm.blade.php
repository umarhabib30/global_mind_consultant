@extends('layouts.user')
@section('content')
 <!-----------------------------------HERO SECTION----------------------------------------------- -->
    <section
      class="relative bg-[url('/images/consultation-form.png')] bg-cover bg-top w-full h-screen flex items-center justify-center"
    ></section>

    <!-----------------------------------FORM SECTION----------------------------------------------->
    <section class="py-16 bg-[#F6F6F6]">
      <div class="px-6 md:px-12">
        <h2 class="text-2xl md:text-4xl font-bold mb-6 text-center">
          Career
          <span class="text-[#74BF1A]"> Counseling & </span>
          Consultation
        </h2>
        <p class="text-lg md:text-xl text-center mb-12 text-gray-600">
          Helping you choose the right country, university and program for your
          future success
        </p>

        <div class="flex flex-col lg:flex-row items-stretch gap-10">
          <!-- left Form -->
          <div class="w-full lg:w-1/2 flex flex-col justify-between">
            <div
              class="border rounded-2xl shadow-lg p-6 md:p-8 bg-gray-50 flex flex-col justify-between w-full h-full"
            >
              <div>
                <h1 class="text-3xl font-bold mb-6 text-[#092962]">
                  Share Your Details Our Experts Will Contact You
                </h1>

                <form action="" class="space-y-6">
                  <!--  First Name + Last Name -->
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <input
                      class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-[#74BF1A] outline-none"
                      placeholder="First Name"
                    />
                    <input
                      class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-[#74BF1A] outline-none"
                      placeholder="Last Name"
                    />
                  </div>

                  <!--  Email full width -->
                  <input
                    class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-[#74BF1A] outline-none"
                    placeholder="E-mail"
                  />

                  <!--  Phone Number + LinkedIn -->
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <input
                      class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-[#74BF1A] outline-none"
                      placeholder="Phone Number"
                    />
                    <input
                      class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-[#74BF1A] outline-none"
                      placeholder="LinkedIn Profile"
                    />
                  </div>

                  <!--  Preferred Study Destination + Nearest Branch Time -->
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <select
                      class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-[#74BF1A] outline-none"
                    >
                      <option selected disabled>
                        Preferred Study Destination
                      </option>
                      <option value="uk">UK</option>
                      <option value="usa">USA</option>
                      <option value="canada">Canada</option>
                    </select>

                    <select
                      class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-[#74BF1A] outline-none"
                    >
                      <option selected disabled>Nearest Branch Time</option>
                      <option value="morning">Morning</option>
                      <option value="afternoon">Afternoon</option>
                      <option value="evening">Evening</option>
                    </select>
                  </div>
                  <!-- Preferred Mode of Counseling + Preferred Study Level -->
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <select
                      class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-[#74BF1A] outline-none"
                    >
                      <option selected disabled>
                        Preferred Mode of Counseling
                      </option>
                      <option value="online">Online</option>
                      <option value="in-person">In-Person</option>
                      <option value="phone">Phone Call</option>
                    </select>

                    <select
                      class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-[#74BF1A] outline-none"
                    >
                      <option selected disabled>Preferred Study Level</option>
                      <option value="undergraduate">Undergraduate</option>
                      <option value="postgraduate">Postgraduate</option>
                      <option value="phd">PhD / Research</option>
                      <option value="diploma">Diploma / Certificate</option>
                    </select>
                  </div>

                  <!--  Message -->
                  <textarea
                    rows="5"
                    class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-[#74BF1A] outline-none resize-none"
                    placeholder="Message"
                  ></textarea>
                </form>
              </div>

              <!-- Button  -->
              <div class="hidden md:flex items-center justify-center">
                <a
                  href="#"
                  class="bg-[#74BF1A] text-white px-6 md:px-32 font-bold py-3 rounded-lg hover:bg-green-600 transition"
                >
                  Submit
                </a>
              </div>
            </div>
          </div>

          <!-- Image -->
          <div class="w-full lg:w-1/2 flex items-center">
            <div
              class="overflow-hidden rounded-2xl shadow-lg w-full h-[800px] my-auto"
            >
              <img
                src="images/call-form.png"
                alt="Students"
                class="w-full h-full object-cover rounded-2xl transform transition duration-500 hover:scale-105 hover:shadow-2xl"
              />
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection
