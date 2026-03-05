<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class SuccessStory extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'client_name',
        'is_anonymous',
        'country',
        'visa_type',
        'approval_status',
        'approval_date',
        'processing_time_days',
        'processing_time_text',
        'case_summary',
        'full_story',
        'cover_image',
        'cover_image_alt',
        'cover_image_blur',
        'visa_approval_image',
        'visa_approval_image_alt',
        'visa_approval_image_blur',
        'gallery_images',
        'gallery_meta',
        'documents_verified',
        'testimonial_quote',
        'rating',
        'tags',
        'meta_title',
        'meta_description',
        'og_image',
        'status',
        'featured',
    ];

    protected $casts = [
        'is_anonymous' => 'boolean',
        'cover_image_blur' => 'boolean',
        'visa_approval_image_blur' => 'boolean',
        'documents_verified' => 'boolean',
        'featured' => 'boolean',
        'gallery_images' => 'array',
        'gallery_meta' => 'array',
        'tags' => 'array',
        'approval_date' => 'date',
    ];

    public function scopePublished(Builder $query): Builder
    {
        return $query->where('status', 'published');
    }
}
