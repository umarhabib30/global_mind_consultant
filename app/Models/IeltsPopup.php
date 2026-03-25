<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class IeltsPopup extends Model
{
    protected $fillable = [
        'heading',
        'subheading',
        'description',
        'points',
        'image_path',
        'video_url',
        'button_text',
        'button_link',
        'facebook_link',
        'instagram_link',
        'youtube_link',
        'whatsapp_link',
        'delay_seconds',
        'is_active',
    ];

    protected $casts = [
        'points' => 'array',
        'delay_seconds' => 'integer',
        'is_active' => 'boolean',
    ];

    public function getImageUrlAttribute(): ?string
    {
        if (!$this->image_path) {
            return null;
        }

        $publicImagePath = public_path($this->image_path);
        if (File::exists($publicImagePath)) {
            return asset($this->image_path);
        }

        $storageImagePath = storage_path('app/public/' . $this->image_path);
        if (File::exists($storageImagePath)) {
            return asset('storage/' . $this->image_path);
        }

        return null;
    }
}
