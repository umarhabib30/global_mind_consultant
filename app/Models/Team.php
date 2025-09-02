<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'role',
        'role_details',
        'bio',
        'image',
        'linkedin',
        'facebook',
        'instagram',
        'experience_years',
        'education',
        'specialization',
        'status',
    ];
}
