@extends('layouts.admin')
@section('content')
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">IELTS FAQs</h5>
                <a href="{{ route('ielts-faqs.create') }}" class="btn btn-success btn-sm">Add FAQ</a>
            </div>
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <div class="table-responsive">
                    <table class="table table-striped table-bordered first">
                        <thead>
                            <tr>
                                <th width="50">#</th>
                                <th>Question</th>
                                <th>Answer</th>
                                <th width="120">Status</th>
                                <th width="120">Sort Order</th>
                                <th width="100" class="text-center">Edit</th>
                                <th width="100" class="text-center">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($faqs as $index => $faq)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $faq->question }}</td>
                                    <td>{{ \Illuminate\Support\Str::limit($faq->answer, 100) }}</td>
                                    <td>
                                        @if ($faq->is_active)
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-secondary">Inactive</span>
                                        @endif
                                    </td>
                                    <td>{{ $faq->sort_order }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('ielts-faqs.edit', $faq->id) }}"
                                            class="btn btn-primary btn-sm">Edit</a>
                                    </td>
                                    <td class="text-center">
                                        <form action="{{ route('ielts-faqs.destroy', $faq->id) }}" method="POST"
                                            style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                onclick="return confirm('Are you sure you want to delete this FAQ?')"
                                                class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">No FAQs found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

