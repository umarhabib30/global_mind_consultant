@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card shadow-lg rounded-lg border-0">
                <div class="card-header d-flex justify-content-between align-items-center" style="background-color: #0A245D;">
                    <h5 class="text-white mb-0">Edit About FAQ</h5>
                    <a href="{{ route('about-faqs.index') }}"
                        class="btn" style="background-color: #74BF1A; color: white; font-weight: 600;">
                        Back to FAQs
                    </a>
                </div>

                <div class="card-body p-5">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('about-faqs.update', $faq->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row g-4">
                            <div class="col-md-12 mb-4">
                                <label for="question" class="form-label fw-semibold">Question</label>
                                <input id="question" type="text" class="form-control form-control-lg shadow-sm rounded"
                                    name="question" value="{{ old('question', $faq->question) }}" required>
                            </div>

                            <div class="col-md-12 mb-4">
                                <label for="answer" class="form-label fw-semibold">Answer</label>
                                <textarea id="answer" class="form-control form-control-lg shadow-sm rounded" name="answer" rows="5" required>{{ old('answer', $faq->answer) }}</textarea>
                            </div>

                            <div class="col-md-6 mb-4">
                                <label for="sort_order" class="form-label fw-semibold">Sort Order</label>
                                <input id="sort_order" type="number" min="0"
                                    class="form-control form-control-lg shadow-sm rounded" name="sort_order"
                                    value="{{ old('sort_order', $faq->sort_order) }}">
                            </div>

                            <div class="col-md-6 mb-4 d-flex align-items-center">
                                <div class="form-check mt-4">
                                    <input class="form-check-input" type="checkbox" name="is_active" id="is_active"
                                        value="1" {{ old('is_active', $faq->is_active) ? 'checked' : '' }}>
                                    <label class="form-check-label fw-semibold" for="is_active">
                                        Active
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4 text-center">
                            <button type="submit" class="btn btn-lg shadow"
                                style="background-color: #74BF1A; color: white; font-weight: 600; padding: 12px 50px;">
                                Update FAQ
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

