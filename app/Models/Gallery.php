<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'featured_image',
        'gallery_images',
    ];

    // Cast gallery_images as array
    protected $casts = [
        'gallery_images' => 'array',
    ];
}
