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
        'whatsapp',
        'location',
        'address',
        'role',
        'tagline',
        'bio',
        'portfolio_summary',
        'contact_note',

        'profile_pic',
        'banner',

        'skills',
        'languages',

        'facebook',
        'instagram',
        'linkedin',
        'website',
        'twitter',
        'youtube',
        'tiktok',
        'github',

        'work_start_year',
        'work_end_year',
        'designation',
        'company_name',
        'years_experience',
        'clients_helped',
        'sessions_completed',

        'degree_name',
        'university_name',
        'education_year',
        'experiences',
        'educations',
        'certifications',
        'awards',
        'projects',

        'status',
        'is_featured',
    ];

    protected $casts = [
        'skills' => 'array',
        'languages' => 'array',
        'experiences' => 'array',
        'educations' => 'array',
        'certifications' => 'array',
        'awards' => 'array',
        'projects' => 'array',
        'is_featured' => 'boolean',
    ];
}
