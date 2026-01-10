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
        'role',
        'bio',

        'profile_pic',
        'banner',

        'skills',

        'facebook',
        'instagram',
        'linkedin',

        'work_start_year',
        'work_end_year',
        'designation',
        'company_name',

        'degree_name',
        'university_name',
        'education_year',

        'status',
    ];

    protected $casts = [
        'skills' => 'array',
    ];
}
