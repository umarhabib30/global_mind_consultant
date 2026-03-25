<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IeltsCourseEnrollment extends Model
{
    use HasFactory;

    protected $fillable = [
        'ielts_course_id',
        'course_title',
        'full_name',
        'email',
        'phone',
        'preferred_time',
        'study_goal',
        'message',
    ];

    public function course()
    {
        return $this->belongsTo(IeltsCourse::class, 'ielts_course_id');
    }
}
