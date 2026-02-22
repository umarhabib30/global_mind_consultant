@extends('layouts.admin')

@section('content')
    <style>
        /* Custom styles for a unique look */
        .detail-card {
            border: none;
            border-radius: 24px;
            background: #ffffff;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.04);
        }

        .glass-header {
            background: linear-gradient(135deg, #0A245D 0%, #1c4bb0 100%);
            border-radius: 24px 24px 0 0 !important;
            padding: 2.5rem !important;
        }

        .info-label {
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 700;
            color: #94a3b8;
            margin-bottom: 0.5rem;
        }

        .avatar-circle {
            width: 64px;
            height: 64px;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            border-radius: 20px;
        }

        .message-bubble {
            background: #f8fafc;
            border: 1px solid #edf2f7;
            border-radius: 20px;
            padding: 2rem;
            position: relative;
            font-size: 1.05rem;
            color: #334155;
            line-height: 1.8;
        }

        .action-btn {
            transition: all 0.3s ease;
            border-radius: 12px;
            padding: 10px 20px;
            font-weight: 600;
        }

        .action-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
    </style>

    <div class="container-fluid py-4">
        <div class="d-flex justify-content-between align-items-center mb-4 px-2">
            <a href="{{ route('admin.contact.index') }}" class="btn action-btn btn-light bg-white shadow-sm border-0">
                <i class="fa fa-chevron-left me-2 text-primary"></i> Back to Inbox
            </a>
            <div class="d-flex align-items-center gap-3">
                <span class="badge bg-soft-success text-success rounded-pill px-3 py-2"
                    style="background: #ecfdf5; color: #059669;">
                    <i class="fa fa-check-circle me-1"></i> Received
                </span>
            </div>
        </div>

        <div class="card detail-card">
            <div class="card-header glass-header">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="d-flex align-items-center">
                            <div class="avatar-circle me-4 text-white">
                                {{ strtoupper(substr($message->name ?? 'U', 0, 1)) }}
                            </div>
                            <div>
                                <h3 class="text-white fw-bold mb-1">{{ $message->name }}</h3>
                                <p class="text-white-50 mb-0">
                                    <i class="fa fa-clock me-1"></i> Sent
                                    {{ $message->created_at->format('F j, Y \a\t g:i A') }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-md-end mt-3 mt-md-0">
                        <div class="text-white-50 small">Reference ID: #{{ $message->id }}</div>
                    </div>
                </div>
            </div>

            <div class="card-body p-4 p-lg-5">
                <div class="row g-5">
                    <div class="col-lg-4">
                        <div class="pe-lg-4 border-end-lg">
                            <div class="mb-5">
                                <div class="info-label">Email Address</div>
                                <h5 class="fw-bold mb-3">
                                    <a href="mailto:{{ $message->email }}" class="text-dark text-decoration-none">
                                        {{ $message->email }} <i class="fa fa-external-link-alt ms-1 small text-muted"></i>
                                    </a>
                                </h5>

                                <div class="info-label mt-4">Location</div>
                                <div class="d-flex align-items-center">
                                    <div class="bg-light rounded-3 px-3 py-2 border">
                                        <i class="fa fa-globe-americas me-2 text-primary"></i>
                                        <span class="fw-semibold text-dark">{{ $message->country ?: 'Unknown' }}</span>
                                    </div>
                                </div>
                            </div>

                            <hr class="my-4 opacity-50">

                            <div class="d-grid gap-3 space">
                                <a href="mailto:{{ $message->email }}" class="btn action-btn btn-primary py-3">
                                    <i class="fa fa-paper-plane me-2"></i> Send Direct Reply
                                </a>
                                <form action="{{ route('admin.contact.destroy', $message->id) }}" method="POST"
                                    onsubmit="return confirm('Delete this inquiry forever?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn action-btn btn-outline-danger w-100">
                                        <i class="fa fa-trash-alt me-2"></i> Move to Trash
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="d-flex justify-content-between align-items-end mb-4">
                            <h4 class="fw-bold mb-0" style="color: #0A245D;">Message Brief</h4>
                            <span class="text-muted small">{{ $message->created_at->diffForHumans() }}</span>
                        </div>

                        <div class="message-bubble shadow-sm">
                            {{ $message->message ?: 'The sender did not include a message body.' }}
                        </div>

                        <div class="mt-5 p-4 rounded-4 bg-light border-0 d-flex align-items-start gap-3">
                            <div class="bg-white rounded-circle p-2 shadow-sm">
                                <i class="fa fa-lightbulb text-warning"></i>
                            </div>
                            <div>
                                <p class="mb-0 text-muted small">
                                    <strong>Admin Tip:</strong> When replying, ensure you mention the sender's country
                                    ({{ $message->country }}) if it pertains to shipping or regional policies to add a
                                    personal touch.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
