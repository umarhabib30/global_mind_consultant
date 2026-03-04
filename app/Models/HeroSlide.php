<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeroSlide extends Model
{
    protected $fillable = [
        'title',
        'highlight_text',
        'description',
        'button_text',
        'button_link',
        'background_image',
        'is_active',
        'sort_order',
    ];
}
