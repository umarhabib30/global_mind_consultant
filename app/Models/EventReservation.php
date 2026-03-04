<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventReservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_id',
        'full_name',
        'email',
        'phone',
        'country_interested',
        'study_level',
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
