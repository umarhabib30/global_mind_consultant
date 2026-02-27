@extends('layouts.admin')

@section('content')
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Contact Inquiries</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered first">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Sender</th>
                                <th>Email</th>
                                <th class="text-center">Country</th>
                                <th class="text-center">Details</th>
                                <th class="text-center">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($messages as $message)
                                <tr>
                                    <td>{{ $message->created_at->format('d M Y') }}</td>

                                    <td><strong>{{ $message->name }}</strong></td>

                                    <td>{{ $message->email }}</td>

                                    <td class="text-center">
                                        <span class="badge" style="background-color: #79BD21; color: white;">
                                            {{ strtoupper($message->country ?? 'N/A') }}
                                        </span>
                                    </td>

                                    <td class="text-center">
                                        <a href="{{ route('admin.contact.show', $message->id) }}"
                                            class="btn btn-info btn-sm"
                                            style="background-color: #0A245D; color: white; border: none;">
                                            Details
                                        </a>
                                    </td>

                                    <td class="text-center">
                                        <form action="{{ route('admin.contact.destroy', $message->id) }}" method="POST"
                                            style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                onclick="return confirm('Are you sure you want to delete this inquiry?')"
                                                class="btn btn-danger btn-sm">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center text-muted">No messages found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="mt-3">
                    {{ $messages->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
