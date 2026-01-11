@extends('layouts.user')
@section('content')
    <!-----------------------------------FORM SECTION----------------------------------------------->

    <section class="relative w-full h-screen bg-center bg-cover"
        style="background-image: url('{{ asset('images/course-filter.png') }}');">
        <div class="absolute inset-0 bg-black/50"></div>

        <div class="relative z-10 flex items-center justify-center h-full text-center px-6">
            <h2 class="text-3xl md:text-6xl font-bold text-white">
                Explore Thousands of Programs across <br> the World
            </h2>
        </div>
        <!-----------------------------------END FORM SECTION----------------------------------------------->
        <div class="min-h-screen bg-gray-100 p-6 font-sans text-gray-800">
            <div class="max-w-7xl mx-auto flex gap-6">

                <aside class="w-72 flex-shrink-0">
                    <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
                        <div class="bg-[#86D043] p-4 flex justify-between items-center text-white">
                            <span class="font-bold text-lg">Filters</span>
                            <button type="button" onclick="window.location.href=window.location.pathname"
                                class="text-xs font-normal underline hover:text-gray-100">Reset All</button>
                        </div>

                        <div class="p-4 space-y-6">

                            <div class="border-b border-gray-100 pb-4">
                                <h4 class="flex justify-between items-center text-sm font-semibold mb-3 text-gray-700">
                                    Countries
                                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </h4>
                                <div class="relative mb-3">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                        </svg>
                                    </span>
                                    <input type="text" placeholder="Search Country"
                                        class="w-full pl-8 pr-2 py-1.5 text-xs border border-gray-200 rounded focus:ring-1 focus:ring-[#86D043] focus:outline-none">
                                </div>
                                <div class="space-y-2 max-h-40 overflow-y-auto custom-scrollbar">
                                    @foreach (['Australia', 'Canada', 'Germany', 'United Kingdom', 'United States'] as $country)
                                        <label
                                            class="flex items-center text-xs text-gray-600 cursor-pointer hover:text-gray-900">
                                            <input type="checkbox" name="countries[]" value="{{ $country }}"
                                                class="rounded border-gray-300 text-[#0A2357] focus:ring-[#0A2357] mr-2">
                                            {{ $country }}
                                        </label>
                                    @endforeach
                                </div>
                                <button
                                    class="mt-3 w-full py-1.5 bg-[#0A2357] text-white text-xs font-semibold rounded shadow-sm hover:bg-opacity-90 transition">Choose</button>
                            </div>

                            <div class="border-b border-gray-100 pb-4">
                                <h4 class="flex justify-between items-center text-sm font-semibold mb-3 text-gray-700">
                                    Degree Level
                                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </h4>
                                <div class="space-y-2">
                                    @foreach (['Undergraduate', 'Postgraduate', 'Postgraduate Research'] as $level)
                                        <label class="flex items-center text-xs text-gray-600 cursor-pointer">
                                            <input type="checkbox" name="degree[]" value="{{ $level }}"
                                                class="rounded border-gray-300 text-[#0A2357] mr-2">
                                            {{ $level }}
                                        </label>
                                    @endforeach
                                </div>
                                <button
                                    class="mt-3 w-full py-1.5 bg-[#0A2357] text-white text-xs font-semibold rounded shadow-sm">Choose</button>
                            </div>

                            <div class="border-b border-gray-100 pb-4">
                                <h4 class="flex justify-between items-center text-sm font-semibold mb-3 text-gray-700">
                                    Discipline
                                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </h4>
                                <div class="relative mb-3">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                        </svg>
                                    </span>
                                    <input type="text" placeholder="Search Discipline"
                                        class="w-full pl-8 pr-2 py-1.5 text-xs border border-gray-200 rounded focus:ring-1 focus:ring-[#86D043] focus:outline-none">
                                </div>
                                <div class="space-y-2">
                                    @foreach (['Engineering', 'Business', 'Medicine', 'Arts'] as $discipline)
                                        <label class="flex items-center text-xs text-gray-600 cursor-pointer">
                                            <input type="checkbox" name="discipline[]" value="{{ $discipline }}"
                                                class="rounded border-gray-300 text-[#0A2357] mr-2">
                                            {{ $discipline }}
                                        </label>
                                    @endforeach
                                </div>
                                <button
                                    class="mt-3 w-full py-1.5 bg-[#0A2357] text-white text-xs font-semibold rounded shadow-sm">Choose</button>
                            </div>

                            <div class="border-b border-gray-100 pb-4">
                                <h4 class="flex justify-between items-center text-sm font-semibold mb-3 text-gray-700">
                                    Scholarship Type
                                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </h4>
                                <div class="space-y-2">
                                    @foreach (['Sports', 'Academic Merit', 'Fully Funded', 'Partial', 'Accommodation', 'Travel'] as $type)
                                        <label class="flex items-center text-xs text-gray-600 cursor-pointer">
                                            <input type="checkbox" name="type[]" value="{{ $type }}"
                                                class="rounded border-gray-300 text-[#0A2357] mr-2">
                                            {{ $type }}
                                        </label>
                                    @endforeach
                                </div>
                                <button
                                    class="mt-3 w-full py-1.5 bg-[#0A2357] text-white text-xs font-semibold rounded shadow-sm">Choose</button>
                            </div>

                            <div class="pb-2">
                                <h4 class="flex justify-between items-center text-sm font-semibold mb-3 text-gray-700">
                                    Scholarship Deadline
                                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </h4>
                                <div class="grid grid-cols-1 gap-2">
                                    @foreach (['January', 'February', 'March', 'April', 'May', 'June'] as $month)
                                        <label class="flex items-center text-xs text-gray-600 cursor-pointer">
                                            <input type="checkbox" name="months[]" value="{{ $month }}"
                                                class="rounded border-gray-300 text-[#0A2357] mr-2">
                                            {{ $month }}
                                        </label>
                                    @endforeach
                                </div>
                                <button
                                    class="mt-3 w-full py-1.5 bg-[#0A2357] text-white text-xs font-semibold rounded shadow-sm">Choose</button>
                            </div>

                        </div>
                    </div>
                </aside>
                <main class="flex-1">
                    <div class="flex justify-between items-center mb-6">
                        <h1 class="text-xl font-bold text-gray-800">155675 Results Found</h1>
                        <div class="flex items-center gap-4">
                            <label class="flex items-center text-sm text-gray-600">
                                <input type="radio" name="sort" class="mr-2"> Recommended selection
                            </label>
                            <button class="bg-[#86D043] text-white px-6 py-2 rounded-md font-bold text-sm">Apply
                                Filter</button>
                        </div>
                    </div>

                    <div class="mb-6">
                        <span class="text-sm text-gray-500 mr-2">Sort By:</span>
                        <select class="border-gray-300 rounded-md text-sm p-1">
                            <option>Select Option</option>
                        </select>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
                            <div class="h-1 bg-[#86D043]"></div>
                            <div class="p-5">
                                <h3 class="text-[#0A2357] font-bold text-sm mb-4 leading-tight">
                                    [2024] International Student Scholarship
                                </h3>

                                <div class="space-y-2 mb-6">
                                    <div class="flex items-center text-xs text-gray-500">
                                        <span class="w-5 italic font-serif">🏛️</span> University Name
                                    </div>
                                    <div class="flex items-center text-xs text-gray-500">
                                        <span class="w-5">📅</span> Year of Offering
                                    </div>
                                    <div class="flex items-center text-xs text-gray-500">
                                        <span class="w-5">🎓</span> Degree
                                    </div>
                                    <div class="flex items-center text-xs text-gray-500">
                                        <span class="w-5">📍</span> Destination
                                    </div>
                                    <div class="flex items-center text-xs text-gray-500 font-semibold">
                                        <span class="w-5">💰</span> Full/Partial Fee
                                    </div>
                                </div>

                                <div class="flex gap-2">
                                    <button
                                        class="flex-1 py-2 border border-[#0A2357] text-[#0A2357] rounded text-xs font-bold hover:bg-gray-50">
                                        Discover
                                    </button>
                                    <button
                                        class="flex-1 py-2 bg-[#0A2357] text-white rounded text-xs font-bold hover:bg-blue-900 transition">
                                        Apply
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>




    </section>
@endsection
