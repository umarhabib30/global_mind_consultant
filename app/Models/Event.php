<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\EventReservation;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'short_description',
        'long_description',
        'picture',
        'date',
        'start_time',
        'end_time',
        'speaker',
        'location',
        'status',
        'event_type',
        'attendees',
        'parameters',
        'why_attend',
    ];

    protected $casts = [
        'date' => 'date',
        'parameters' => 'array',
        'why_attend' => 'array',
    ];

    public function reservations()
    {
        return $this->hasMany(EventReservation::class);
    }
}
