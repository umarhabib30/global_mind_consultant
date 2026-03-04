<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DestinationFaqs;
use Illuminate\Http\Request;

class DestinationFaqsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faqs = DestinationFaqs::orderBy('sort_order')
            ->orderByDesc('id')
            ->get();

        $data = [
            'heading' => 'Destination FAQs',
            'title' => 'View Destination FAQs',
            'active' => 'destination-faqs',
            'faqs' => $faqs,
        ];

        return view('admin.destination-faqs.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'heading' => 'Destination FAQs',
            'title' => 'Add Destination FAQ',
            'active' => 'destination-faqs',
        ];

        return view('admin.destination-faqs.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'question' => ['required', 'string', 'max:255'],
            'answer' => ['required', 'string'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
            'is_active' => ['nullable', 'boolean'],
        ]);

        DestinationFaqs::create([
            'question' => $validated['question'],
            'answer' => $validated['answer'],
            'sort_order' => $validated['sort_order'] ?? 0,
            'is_active' => $request->boolean('is_active'),
        ]);

        return redirect()->route('destination-faqs.index')->with('success', 'FAQ added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return redirect()->route('destination-faqs.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $faq = DestinationFaqs::findOrFail($id);

        $data = [
            'heading' => 'Destination FAQs',
            'title' => 'Edit Destination FAQ',
            'active' => 'destination-faqs',
            'faq' => $faq,
        ];

        return view('admin.destination-faqs.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $faq = DestinationFaqs::findOrFail($id);

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

        return redirect()->route('destination-faqs.index')->with('success', 'FAQ updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $faq = DestinationFaqs::findOrFail($id);
        $faq->delete();

        return redirect()->route('destination-faqs.index')->with('success', 'FAQ deleted successfully.');
    }
}
