@extends('layouts.admin')

@section('content')
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="mb-3">
            <a href="{{ route('admin.contact.index') }}" class="btn btn-sm shadow-sm"
                style="background-color: #0A245D; color: white;">
                <i class="fa fa-arrow-left"></i> Back to Inquiries
            </a>
        </div>

        <div class="card shadow-sm border-0">
            <div class="card-header bg-white border-bottom" style="border-left: 5px solid #0A245D;">
                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="mb-0 fw-bold" style="color: #0A245D;">Contact Message Detail</h3>
                    <span class="text-muted small">Received: {{ $message->created_at->format('d M Y, h:i A') }}</span>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-5 border-end">
                        <h5 class="mb-4 pb-2 border-bottom fw-bold" style="color: #79BD21;">
                            <i class="fa fa-user me-2"></i>Sender Information
                        </h5>

                        <div class="mb-4">
                            <label class="small text-uppercase fw-bold text-muted d-block mb-1">Full Name</label>
                            <p class="fs-5 fw-semibold text-dark">{{ $message->name }}</p>
                        </div>

                        <div class="mb-4">
                            <label class="small text-uppercase fw-bold text-muted d-block mb-1">Email Address</label>
                            <p class="fs-5">
                                <a href="mailto:{{ $message->email }}" style="color: #0A245D; text-decoration: none;">
                                    <i class="fa fa-envelope me-1 small"></i> {{ $message->email }}
                                </a>
                            </p>
                        </div>

                        <div class="mb-4">
                            <label class="small text-uppercase fw-bold text-muted d-block mb-1">Location/Country</label>
                            <p class="fs-5 text-dark">
                                <i class="fa fa-globe me-1 small"></i> {{ $message->country ?? 'Not Provided' }}
                            </p>
                        </div>
                    </div>

                    <div class="col-md-7 ps-md-4">
                        <h5 class="mb-4 pb-2 border-bottom fw-bold" style="color: #79BD21;">
                            <i class="fa fa-envelope-open me-2"></i>Inquiry Message
                        </h5>

                        <div class="p-4 rounded shadow-sm"
                            style="background-color: #f8faff; border-left: 4px solid #0A245D; min-height: 200px;">
                            <label class="small text-uppercase fw-bold text-muted d-block mb-2">Message Content:</label>
                            <p class="text-dark" style="white-space: pre-wrap; line-height: 1.8;">
                                {{ $message->message }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-footer bg-light d-flex justify-content-end py-3">
                <form action="{{ route('admin.contact.destroy', $message->id) }}" method="POST"
                    onsubmit="return confirm('Are you sure you want to delete this message permanently?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger btn-sm px-4">
                        <i class="fa fa-trash me-1"></i> Delete Message
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
