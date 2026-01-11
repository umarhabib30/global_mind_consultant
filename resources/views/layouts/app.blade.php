<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Consultancy Firm') }}</title>

    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        @keyframes gradientShift {

            0%,
            100% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }
        }

        @keyframes dotPulse {

            0%,
            100% {
                opacity: 0.4;
                transform: scale(1);
            }

            50% {
                opacity: 0.7;
                transform: scale(1.05);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes floatPattern {

            0%,
            100% {
                transform: translate(0, 0) rotate(0deg);
            }

            33% {
                transform: translate(30px, -30px) rotate(120deg);
            }

            66% {
                transform: translate(-20px, 20px) rotate(240deg);
            }
        }

        @keyframes shimmer {
            0% {
                background-position: -1000px 0;
            }

            100% {
                background-position: 1000px 0;
            }
        }

        body {
            background: linear-gradient(-45deg, #e8f5e9, #f1f8e9, #dcedc8, #c5e1a5);
            background-size: 400% 400%;
            animation: gradientShift 20s ease infinite;
            position: relative;
            font-family: 'Inter', sans-serif;
            color: #2d3748;
            overflow-x: hidden;
            min-height: 100vh;
        }

        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: radial-gradient(#74BF1A 0.8px, transparent 0.8px);
            background-size: 40px 40px;
            animation: dotPulse 6s ease-in-out infinite;
            pointer-events: none;
            z-index: 1;
            opacity: 0.15;
        }

        body::after {
            content: '';
            position: fixed;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle at 20% 50%, rgba(116, 191, 26, 0.08) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(44, 82, 130, 0.08) 0%, transparent 50%);
            animation: floatPattern 30s ease-in-out infinite;
            pointer-events: none;
            z-index: 1;
        }

        /* Decorative circles */
        body::before {
            content: '';
            position: fixed;
            top: 10%;
            right: 15%;
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, rgba(116, 191, 26, 0.1) 0%, transparent 70%);
            border-radius: 50%;
            animation: floatPattern 25s ease-in-out infinite reverse;
            pointer-events: none;
            z-index: 1;
        }

        #app {
            position: relative;
            z-index: 2;
        }

        .auth-wrapper {
            min-height: 80vh;
            display: flex;
            align-items: center;
            animation: fadeIn 1s ease-out;
        }

        /* Shimmer effect on page load */
        main::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(116, 191, 26, 0.1), transparent);
            animation: shimmer 2s ease-in-out;
            pointer-events: none;
            z-index: 3;
        }

        main {
            position: relative;
        }
    </style>
</head>

<body>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>
