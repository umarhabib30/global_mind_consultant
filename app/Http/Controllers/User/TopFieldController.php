<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\TopField;

class TopFieldController extends Controller
{
    public function show(string $id)
    {
        $field = TopField::where('is_active', true)->findOrFail($id);

        $relatedFields = TopField::where('is_active', true)
            ->where('id', '!=', $field->id)
            ->orderBy('sort_order')
            ->orderByDesc('id')
            ->take(3)
            ->get();

        return view('user.topFieldDetails', compact('field', 'relatedFields'));
    }
}
