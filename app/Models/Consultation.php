<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'linkedin_profile',
        'destination',
        'branch_time',
        'counseling_mode',
        'study_level',
        'message',
    ];
}
