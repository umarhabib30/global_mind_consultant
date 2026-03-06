<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\IeltsFaq;
use Illuminate\Http\Request;

class IeltsFaqController extends Controller
{
    public function index()
    {
        $faqs = IeltsFaq::orderBy('sort_order')
            ->orderByDesc('id')
            ->get();

        return view('admin.ielts-faqs.index', [
            'heading' => 'IELTS FAQs',
            'title' => 'View IELTS FAQs',
            'active' => 'ielts-faqs',
            'faqs' => $faqs,
        ]);
    }

    public function create()
    {
        return view('admin.ielts-faqs.create', [
            'heading' => 'IELTS FAQs',
            'title' => 'Add IELTS FAQ',
            'active' => 'ielts-faqs',
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

        IeltsFaq::create([
            'question' => $validated['question'],
            'answer' => $validated['answer'],
            'sort_order' => $validated['sort_order'] ?? 0,
            'is_active' => $request->boolean('is_active'),
        ]);

        return redirect()->route('ielts-faqs.index')->with('success', 'FAQ added successfully.');
    }

    public function edit(string $id)
    {
        $faq = IeltsFaq::findOrFail($id);

        return view('admin.ielts-faqs.edit', [
            'heading' => 'IELTS FAQs',
            'title' => 'Edit IELTS FAQ',
            'active' => 'ielts-faqs',
            'faq' => $faq,
        ]);
    }

    public function update(Request $request, string $id)
    {
        $faq = IeltsFaq::findOrFail($id);

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

        return redirect()->route('ielts-faqs.index')->with('success', 'FAQ updated successfully.');
    }

    public function destroy(string $id)
    {
        $faq = IeltsFaq::findOrFail($id);
        $faq->delete();

        return redirect()->route('ielts-faqs.index')->with('success', 'FAQ deleted successfully.');
    }
}

