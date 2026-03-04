<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Popup extends Model
{
    protected $fillable = [
        'title',
        'description',
        'button_text',
        'button_link',
        'is_active',
    ];
}
