<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TopField extends Model
{
    protected $fillable = [
        'title',
        'short_description',
        'long_description',
        'image',
        'button_text',
        'button_link',
        'is_active',
        'sort_order',
    ];
}
