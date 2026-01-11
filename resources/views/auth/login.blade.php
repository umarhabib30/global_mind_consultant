@extends('layouts.app')

@section('content')
    <style>
        :root {
            --primary-green: #74BF1A;
            --dark-green: #5a9615;
            --light-green: #8dd422;
            --text-dark: #1a202c;
            --text-muted: #718096;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
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

        @keyframes pulse {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0.8;
            }
        }

        .auth-wrapper {
            animation: fadeInUp 0.6s ease-out;
        }

        .login-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(116, 191, 26, 0.08);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .login-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 3px;
            background: linear-gradient(90deg, transparent, var(--primary-green), transparent);
            animation: shimmer 3s infinite;
        }

        .login-card:hover {
            box-shadow: 0 20px 40px rgba(116, 191, 26, 0.15);
            transform: translateY(-5px);
        }

        .card-header {
            background: transparent !important;
            border-bottom: none !important;
            font-size: 1.75rem;
            font-weight: 800;
            letter-spacing: -0.025em;
            color: var(--text-dark);
            padding-top: 2.5rem !important;
            text-align: center;
            animation: fadeInUp 0.8s ease-out 0.2s both;
            position: relative;
        }

        .card-header::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background: linear-gradient(90deg, var(--dark-green), var(--primary-green), var(--light-green));
            border-radius: 2px;
            animation: pulse 2s ease-in-out infinite;
        }

        .consultancy-subtitle {
            text-align: center;
            color: var(--text-muted);
            font-size: 0.9rem;
            margin-bottom: 2rem;
            margin-top: 1rem;
            animation: fadeInUp 0.8s ease-out 0.3s both;
        }

        .card-body {
            animation: fadeInUp 0.8s ease-out 0.4s both;
        }

        .form-label {
            font-size: 0.75rem;
            letter-spacing: 0.05em;
            color: #4a5568;
            text-transform: uppercase;
            font-weight: 700;
            transition: color 0.3s ease;
        }

        .form-control {
            border-radius: 8px;
            padding: 0.8rem 1rem;
            border: 1.5px solid #e2e8f0;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            background: #ffffff;
        }

        .form-control:focus {
            box-shadow: 0 0 0 3px rgba(116, 191, 26, 0.15);
            border-color: var(--primary-green);
            transform: translateY(-2px);
        }

        .form-control:focus+.form-label {
            color: var(--primary-green);
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--dark-green) 0%, var(--primary-green) 100%);
            border: none;
            padding: 0.8rem;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .btn-primary::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .btn-primary:hover::before {
            left: 100%;
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, var(--primary-green) 0%, var(--light-green) 100%);
            transform: translateY(-2px) scale(1.02);
            box-shadow: 0 10px 20px rgba(116, 191, 26, 0.3);
        }

        .btn-primary:active {
            transform: translateY(0);
            box-shadow: 0 5px 10px rgba(116, 191, 26, 0.2);
        }

        .btn-link {
            color: var(--primary-green);
            font-weight: 500;
            text-decoration: none;
            position: relative;
            transition: color 0.3s ease;
        }

        .btn-link::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary-green);
            transition: width 0.3s ease;
        }

        .btn-link:hover::after {
            width: 100%;
        }

        .btn-link:hover {
            color: var(--dark-green);
        }

        .footer-text {
            color: var(--text-muted);
            animation: fadeInUp 0.8s ease-out 0.6s both;
        }

        .footer-text a {
            color: var(--text-dark);
            font-weight: 600;
            text-decoration: none;
            position: relative;
            transition: color 0.3s ease;
        }

        .footer-text a::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary-green);
            transition: width 0.3s ease;
        }

        .footer-text a:hover::after {
            width: 100%;
        }

        .footer-text a:hover {
            color: var(--primary-green);
        }

        .form-check-input {
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .form-check-input:checked {
            background-color: var(--primary-green);
            border-color: var(--primary-green);
            transform: scale(1.1);
        }

        .form-check-label {
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .form-check:hover .form-check-label {
            color: var(--primary-green) !important;
        }

        .mb-4 {
            animation: fadeInUp 0.6s ease-out both;
        }

        .mb-4:nth-child(1) {
            animation-delay: 0.5s;
        }

        .mb-4:nth-child(2) {
            animation-delay: 0.6s;
        }

        .mb-4:nth-child(3) {
            animation-delay: 0.7s;
        }

        .d-grid {
            animation: fadeInUp 0.6s ease-out 0.8s both;
        }

        input::placeholder {
            transition: all 0.3s ease;
        }

        input:focus::placeholder {
            opacity: 0.5;
            transform: translateX(5px);
        }

        .invalid-feedback {
            animation: fadeInUp 0.3s ease-out;
        }
    </style>

    <div class="auth-wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5 col-lg-4">
                    <div class="card login-card p-3">
                        <div class="card-header">{{ __('Admin Portal GMC') }}</div>
                        <p class="consultancy-subtitle">Secure Access to Strategic Insights</p>

                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="mb-4">
                                    <label for="email" class="form-label">{{ __('Professional Email') }}</label>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus
                                        placeholder="name@firm.com">
                                    @error('email')
                                        <span class="invalid-feedback"
                                            role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="password" class="form-label">{{ __('Password') }}</label>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password" placeholder="••••••••">
                                    @error('password')
                                        <span class="invalid-feedback"
                                            role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>

                                <div class="mb-4 d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label small text-muted" for="remember">
                                            {{ __('Keep me signed in') }}
                                        </label>
                                    </div>

                                    {{-- @if (Route::has('password.request'))
                                        <a class="btn btn-link p-0 small" href="{{ route('password.request') }}">
                                            {{ __('Forgot Credentials?') }}
                                        </a>
                                    @endif --}}
                                </div>

                                <div class="d-grid mt-2">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('SIGN IN') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
