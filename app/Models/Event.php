<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',                // Event title
        'short_description',    // Event short description
        'long_description',     // Event long description (multiple paragraphs)
        'picture',              // Event picture path
        'date',                 // Event date
        'start_time',           // Event start time
        'end_time',             // Event end time
        'speaker',              // Event speaker
        'location',             // Event location
        'status',               // Event status: scheduled, in_progress, completed, cancelled
        'attendees',            // Number of attendees
        'parameters',           // Parameters of expo (multiple points)
        'why_attend',           // Why attend points (multiple points)
    ];
}
