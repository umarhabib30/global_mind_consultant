@extends('layouts.admin')

@section('content')
    <style>
        .detail-card {
            border: 0;
            border-radius: 24px;
            background: #fff;
            box-shadow: 0 10px 30px rgba(15, 23, 42, .06);
            overflow: hidden;
        }

        .glass-header {
            padding: 2.25rem 2rem;
            background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 45%, #2563eb 100%);
            position: relative;
        }

        .avatar-circle {
            width: 64px;
            height: 64px;
            border-radius: 18px;
            background: rgba(255, 255, 255, .16);
            border: 1px solid rgba(255, 255, 255, .25);
            backdrop-filter: blur(10px);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            font-size: 1.5rem;
            color: #fff;
            flex: 0 0 auto;
        }

        .pill-chip {
            display: inline-flex;
            align-items: center;
            gap: .5rem;
            padding: .35rem .75rem;
            border-radius: 999px;
            background: rgba(255, 255, 255, .12);
            border: 1px solid rgba(255, 255, 255, .18);
            color: rgba(255, 255, 255, .9);
            font-size: .9rem;
            width: fit-content;
        }

        .chip-row {
            margin-top: .8rem;
            column-gap: .7rem !important;
            row-gap: .6rem !important;
        }

        .quick-card {
            border-radius: 18px;
            background: rgba(255, 255, 255, .10);
            border: 1px solid rgba(255, 255, 255, .16);
            padding: 1rem 1rem;
            color: #fff;
        }

        .quick-label {
            font-size: .72rem;
            letter-spacing: 1px;
            text-transform: uppercase;
            color: rgba(255, 255, 255, .65);
            font-weight: 800;
            margin-bottom: .25rem;
        }

        .quick-value {
            font-weight: 700;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .soft-success {
            background: #ecfdf5 !important;
            color: #059669 !important;
            border: 1px solid #d1fae5;
            border-radius: 999px;
            padding: .5rem .9rem;
            font-weight: 700;
        }

        .action-btn {
            border-radius: 14px;
            padding: .85rem 1rem;
            font-weight: 700;
            transition: all .2s ease;
        }

        .action-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 18px rgba(2, 6, 23, .10);
        }

        .meta-card {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 18px;
            padding: 1.25rem;
        }

        .info-label {
            font-size: .72rem;
            letter-spacing: 1px;
            text-transform: uppercase;
            color: #64748b;
            font-weight: 800;
            margin-bottom: .35rem;
        }

        .message-card {
            border: 1px solid #e2e8f0;
            border-radius: 18px;
            padding: 1.5rem;
            background: #fff;
            box-shadow: 0 6px 16px rgba(15, 23, 42, .05);
        }

        .tip-card {
            border-radius: 18px;
            background: #fffbeb;
            border: 1px solid #fde68a;
            padding: 1.1rem;
        }

        .tip-icon {
            width: 40px;
            height: 40px;
            border-radius: 999px;
            background: #fff;
            border: 1px solid #fde68a;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 6px 14px rgba(15, 23, 42, .06);
            flex: 0 0 auto;
        }
    </style>

    <div class="container-fluid py-4">

        {{-- Top bar --}}
        <div
            class="d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-3 mb-4 px-2">
            <a href="{{ route('admin.contact.index') }}" class="btn bg-white border-0 shadow-sm action-btn">
                <span class="me-2 text-muted">←</span>
                Back to Inbox
            </a>

            <span class="soft-success d-inline-flex align-items-center gap-2">
                <span style="width:10px;height:10px;border-radius:999px;background:#10b981;display:inline-block;"></span>
                Received
            </span>
        </div>

        <div class="card detail-card">
            {{-- Header --}}
            <div class="glass-header">
                <div class="d-flex flex-column flex-sm-row align-items-start align-items-sm-center gap-12">
                    <div class="avatar-circle">
                        {{ strtoupper(substr($message->name ?? 'U', 0, 1)) }}
                    </div>

                    <div class="flex-grow-1">
                        <h3 class="text-white fw-bold mb-3">
                            {{ $message->name ?? 'Unknown Sender' }}
                        </h3>

                        <div class="d-flex flex-wrap chip-row">
                            <span class="pill-chip">
                                <span class="opacity-75">🕒</span>
                                <span class="fw-semibold">Sent:</span>
                                {{ optional($message->created_at)->format('F j, Y \a\t g:i A') }}
                            </span>

                            <span class="pill-chip">
                                <span class="opacity-75">⏳</span>
                                <span class="fw-semibold">
                                    {{ optional($message->created_at)->diffForHumans() }}
                                </span>
                            </span>
                        </div>
                    </div>
                </div>

                {{-- Quick details row --}}
                <div class="row g-3 mt-4">
                    <div class="col-12 col-md-4">
                        <a href="mailto:{{ $message->email }}" class="text-decoration-none">
                            <div class="quick-card">
                                <div class="quick-label">Email</div>
                                <div class="d-flex align-items-center justify-content-between gap-2">
                                    <div class="quick-value">{{ $message->email }}</div>
                                    <div class="opacity-75">↗</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="quick-card">
                            <div class="quick-label">Location</div>
                            <div class="quick-value">{{ $message->country ?: 'Unknown' }}</div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="quick-card">
                            <div class="quick-label">Status</div>
                            <div class="quick-value">Received ✅</div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Body --}}
            <div class="card-body p-4 p-lg-5">
                <div class="row g-5">
                    {{-- Left meta --}}
                    <div class="col-lg-4">
                        <div class="meta-card">
                            <div class="mb-4">
                                <div class="info-label">Email Address</div>
                                <div class="fw-bold">
                                    <a href="mailto:{{ $message->email }}" class="text-dark text-decoration-none">
                                        {{ $message->email }}
                                        <span class="text-muted ms-1">↗</span>
                                    </a>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="info-label">Country</div>
                                <div class="d-inline-flex align-items-center gap-2 bg-white border rounded-3 px-3 py-2">
                                    <span>🌍</span>
                                    <span class="fw-semibold">{{ $message->country ?: 'Unknown' }}</span>
                                </div>
                            </div>

                            <div class="d-grid">
                                <a href="mailto:{{ $message->email }}" class="btn btn-primary action-btn">
                                    ✉️ Send Direct Reply
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- Right message --}}
                    <div class="col-lg-8">
                        <div class="d-flex justify-content-between align-items-end mb-3">
                            <h4 class="fw-bold mb-0" style="color:#0f172a;">Message Brief</h4>
                            <span class="text-muted small">
                                {{ optional($message->created_at)->diffForHumans() }}
                            </span>
                        </div>

                        <div class="message-card">
                            <div class="text-secondary" style="line-height:1.9; white-space:pre-line;">
                                {{ $message->message ?: 'The sender did not include a message body.' }}
                            </div>
                        </div>

                        <div class="tip-card mt-4 d-flex gap-3">
                            <div class="tip-icon">💡</div>
                            <div class="small text-warning-emphasis">
                                <strong>Admin Tip:</strong>
                                When replying, mention the sender’s country
                                <strong>({{ $message->country ?: 'Unknown' }})</strong>
                                if it impacts shipping or regional policies—it adds a personal touch.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
