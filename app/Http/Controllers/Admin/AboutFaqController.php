<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutFaq;
use Illuminate\Http\Request;

class AboutFaqController extends Controller
{
    public function index()
    {
        $faqs = AboutFaq::orderBy('sort_order')
            ->orderByDesc('id')
            ->get();

        return view('admin.about-faqs.index', [
            'heading' => 'About FAQs',
            'title' => 'View About FAQs',
            'active' => 'about-faqs',
            'faqs' => $faqs,
        ]);
    }

    public function create()
    {
        return view('admin.about-faqs.create', [
            'heading' => 'About FAQs',
            'title' => 'Add About FAQ',
            'active' => 'about-faqs',
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'question' => ['required', 'string', 'max:255'],
            'answer' => ['required', 'string'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
            'is_active' => ['nullable', 'boolean'],
        ]);

        AboutFaq::create([
            'question' => $validated['question'],
            'answer' => $validated['answer'],
            'sort_order' => $validated['sort_order'] ?? 0,
            'is_active' => $request->boolean('is_active'),
        ]);

        return redirect()->route('about-faqs.index')->with('success', 'FAQ added successfully.');
    }

    public function edit(string $id)
    {
        $faq = AboutFaq::findOrFail($id);

        return view('admin.about-faqs.edit', [
            'heading' => 'About FAQs',
            'title' => 'Edit About FAQ',
            'active' => 'about-faqs',
            'faq' => $faq,
        ]);
    }

    public function update(Request $request, string $id)
    {
        $faq = AboutFaq::findOrFail($id);

        $validated = $request->validate([
            'question' => ['required', 'string', 'max:255'],
            'answer' => ['required', 'string'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
            'is_active' => ['nullable', 'boolean'],
        ]);

        $faq->update([
            'question' => $validated['question'],
            'answer' => $validated['answer'],
            'sort_order' => $validated['sort_order'] ?? 0,
            'is_active' => $request->boolean('is_active'),
        ]);

        return redirect()->route('about-faqs.index')->with('success', 'FAQ updated successfully.');
    }

    public function destroy(string $id)
    {
        $faq = AboutFaq::findOrFail($id);
        $faq->delete();

        return redirect()->route('about-faqs.index')->with('success', 'FAQ deleted successfully.');
    }
}

