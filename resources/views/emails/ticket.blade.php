<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Preview</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap');

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-50 p-6">

    <div class="max-w-3xl mx-auto bg-white rounded-[2rem] shadow-xl overflow-hidden border border-gray-100">

        <div class="flex justify-between items-center p-8 pb-6">
            <div>
                <h1 class="text-2xl font-extrabold text-blue-950">{{ $event_name }}</h1>
                <p class="text-blue-600 font-bold uppercase tracking-tight text-sm">{{ $school_name }}</p>
            </div>
            <div class="text-right">
                <div class="bg-blue-600 text-white px-4 py-1 rounded-full text-lg font-bold">
                    Nº{{ $ticket_no }}
                </div>
                <p class="text-gray-400 text-xs mt-1 font-bold">1/1</p>
            </div>
        </div>

        <div class="px-8">
            <img src="https://images.unsplash.com/photo-1541829070764-84a7d30dee62?auto=format&fit=crop&w=800&q=80"
                class="w-full h-56 object-cover rounded-2xl shadow-md" alt="Campus">
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 p-8">

            <div class="space-y-6">
                <div class="space-y-4">
                    <div class="flex items-center gap-3">
                        <span class="text-xl">📅</span>
                        <div>
                            <p class="text-xs text-gray-400 font-bold uppercase">Date</p>
                            <p class="font-bold text-gray-800">October 11, 2025</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="text-xl">🕒</span>
                        <div>
                            <p class="text-xs text-gray-400 font-bold uppercase">Time</p>
                            <p class="font-bold text-gray-800">5:00 PM - 9:00 PM CDT</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <span class="text-xl">📍</span>
                        <div>
                            <p class="text-xs text-gray-400 font-bold uppercase">Location</p>
                            <p class="font-bold text-gray-800 leading-tight">16011 Katy Fwy, Houston, TX 77094</p>
                        </div>
                    </div>
                </div>

                <div class="pt-4">
                    <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=TICKET-{{ $ticket_no }}"
                        class="w-32 h-32 p-2 border border-gray-100 rounded-xl" alt="QR">
                </div>
            </div>

            <div class="bg-blue-50/50 rounded-[1.5rem] p-6 border border-blue-100">
                <h2 class="text-blue-900 font-extrabold uppercase text-[10px] tracking-[0.2em] mb-4">Ticket Details</h2>

                <div class="mb-6">
                    <p class="text-2xl font-black text-gray-900 italic">{{ $ticket_type }}</p>
                    <div class="mt-3">
                        <p class="text-[10px] font-bold text-blue-500 uppercase">Buyer</p>
                        <p class="font-bold text-gray-800">{{ $buyer_name }}</p>
                        <p class="text-sm text-gray-500">{{ $buyer_email }}</p>
                    </div>
                </div>

                <div class="pt-4 border-t border-blue-200">
                    <h3 class="text-[10px] font-bold text-blue-500 uppercase mb-3">Additional Details</h3>
                    <ul class="space-y-2">
                        @if ($is_full_table)
                            <li class="flex items-center text-sm font-bold text-gray-700">
                                <span class="w-1.5 h-1.5 rounded-full bg-blue-500 mr-2"></span> Full Table Booked
                            </li>
                        @else
                            <li class="flex items-center text-sm font-bold text-gray-700">
                                <span class="w-1.5 h-1.5 rounded-full bg-blue-500 mr-2"></span> Adults:
                                {{ $adult_count }}
                            </li>
                            <li class="flex items-center text-sm font-bold text-gray-700">
                                <span class="w-1.5 h-1.5 rounded-full bg-blue-500 mr-2"></span> Young:
                                {{ $young_count }}
                            </li>
                        @endif

                        @if ($babysitting_count > 0)
                            <li class="flex items-center text-sm font-bold text-gray-700">
                                <span class="w-1.5 h-1.5 rounded-full bg-orange-400 mr-2"></span> Babysitting:
                                {{ $babysitting_count }}
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>

        <div class="bg-blue-950 p-4 text-center">
            <p class="text-blue-200 text-[10px] font-bold uppercase tracking-[0.3em]">HQA Support Ticket</p>
        </div>
    </div>

</body>

</html>
