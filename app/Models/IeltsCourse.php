<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IeltsCourse extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'short_description',
        'features',
        'button_text',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'features' => 'array',
        'is_active' => 'boolean',
    ];

    public function enrollments()
    {
        return $this->hasMany(IeltsCourseEnrollment::class, 'ielts_course_id');
    }
}
