<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DestinationFaqs extends Model
{
    use HasFactory;

    protected $fillable = [
        'question',
        'answer',
        'is_active',
        'sort_order',
    ];
}
