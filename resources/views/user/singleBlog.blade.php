@extends('layouts.user')
@section('content')
    <!-----------------------------------HERO SECTION----------------------------------------------- -->
    <section
        class="relative bg-[url('/images/single-blog.png')] bg-cover bg-center w-full h-screen flex items-center justify-center">
        <div class="absolute inset-0 bg-black bg-opacity-60 fade-in" data-delay="0.2" data-duration="1.5"></div>

        <div class="relative z-10 max-w-4xl text-center text-white p-6">

            <h1 class="text-4xl md:text-6xl font-extrabold leading-tight mb-4 slide-down" data-delay="0.8" data-duration="1.2">
                The Ultimate Guide to Securing Fully Funded Scholarships for 2026
            </h1>

            <p class="text-lg md:text-xl text-gray-300 fade-up" data-delay="1.0" data-duration="1.2">
                By Mr. Josh | Published on October 15, 2025
            </p>

        </div>
    </section>

    <!-----------------------------------BLOG SECTION----------------------------------------------->
    <section class="py-16 bg-[#F6F6F6]">
        <div class="px-6 md:px-12 grid grid-cols-1 lg:grid-cols-3 gap-10 overflow-hidden">

            <div class="lg:col-span-2 space-y-10 stagger-up" data-stagger="0.2" data-delay="0.4" data-duration="1.0">

                <h2 class="text-2xl md:text-4xl font-bold mb-6">
                    The <span class="text-[#74BF1A]">Future</span> of Artificial Intelligence in Education
                </h2>

                <div class="space-y-4">
                    <h3 class="text-xl md:text-2xl font-semibold text-[#092962]">
                        Transforming Learning Through Intelligent Systems
                    </h3>
                    <p class="text-gray-700 leading-relaxed text-base md:text-lg">
                        Artificial Intelligence (AI) is rapidly reshaping the landscape of modern education.
                        From personalized learning experiences to automated grading and intelligent tutoring
                        systems, AI has made classrooms more interactive, efficient, and inclusive. With the
                        help of adaptive algorithms, students can now learn at their own pace, while teachers
                        focus on mentoring rather than monotonous administrative tasks. This digital evolution
                        is helping bridge educational gaps and making learning accessible to all, regardless of
                        location or background.
                    </p>
                </div>

                <div class="space-y-4">
                    <h3 class="text-xl md:text-2xl font-semibold text-[#092962]">
                        The Role of AI in Shaping Tomorrow’s Classrooms
                    </h3>
                    <p class="text-gray-700 leading-relaxed text-base md:text-lg">
                        The next generation of classrooms will rely heavily on data-driven insights powered by
                        AI. Predictive analytics can identify struggling students before they fall behind, while
                        virtual reality (VR) and AI together can simulate immersive real-world scenarios for
                        practical learning. Furthermore, AI-powered chatbots and assistants are enhancing
                        student engagement by providing 24/7 support and instant feedback. As these technologies
                        evolve, the focus will shift from rote memorization to critical thinking and creativity,
                        preparating students for future challenges.
                    </p>
                </div>

                <div class="space-y-4">
                    <h3 class="text-xl md:text-2xl font-semibold text-[#092962]">
                        Key Takeaways
                    </h3>
                    <ul class="space-y-3">
                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-check text-[#74BF1A] mt-1"></i>
                            <p class="text-gray-700">
                                AI enables personalized learning paths tailored to individual student needs.
                            </p>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-check text-[#74BF1A] mt-1"></i>
                            <p class="text-gray-700">
                                Automation reduces teacher workload, allowing more focus on creativity and mentorship.
                            </p>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-check text-[#74BF1A] mt-1"></i>
                            <p class="text-gray-700">
                                Future classrooms will combine AI, VR, and data analytics to enhance real-world learning.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="lg:col-span-1">
                <div class="bg-white rounded-2xl shadow-lg p-6 space-y-6 slide-right" data-delay="0.8" data-duration="1.2">

                    <h3 class="text-xl font-bold text-[#092962] mb-4">Recent Blogs</h3>

                    <div class="flex gap-4 items-center border-b pb-4">
                        <img src="images/footer.png" class="h-16 w-16 object-cover rounded-lg" alt="Blog 1" />
                        <div>
                            <p class="flex items-center text-sm text-gray-500 gap-1">
                                <i class="fa-regular fa-calendar text-[#74BF1A]"></i>
                                2024-09-12
                            </p>
                            <h4 class="font-semibold text-gray-800 hover:text-[#74BF1A] cursor-pointer">
                                The Rise of AI in Modern Healthcare
                            </h4>
                        </div>
                    </div>

                    <div class="flex gap-4 items-center border-b pb-4">
                        <img src="images/footer.png" class="h-16 w-16 object-cover rounded-lg" alt="Blog 2" />
                        <div>
                            <p class="flex items-center text-sm text-gray-500 gap-1">
                                <i class="fa-regular fa-calendar text-[#74BF1A]"></i>
                                2024-09-20
                            </p>
                            <h4 class="font-semibold text-gray-800 hover:text-[#74BF1A] cursor-pointer">
                                How Automation Is Changing the Workplace
                            </h4>
                        </div>
                    </div>

                    <div class="flex gap-4 items-center">
                        <img src="images/footer.png" class="h-16 w-16 object-cover rounded-lg" alt="Blog 3" />
                        <div>
                            <p class="flex items-center text-sm text-gray-500 gap-1">
                                <i class="fa-regular fa-calendar text-[#74BF1A]"></i>
                                2024-09-27
                            </p>
                            <h4 class="font-semibold text-gray-800 hover:text-[#74BF1A] cursor-pointer">
                                The Impact of Technology on Future Jobs
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
