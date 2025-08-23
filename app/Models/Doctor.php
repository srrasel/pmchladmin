<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Doctor extends Model
{
    // Allow mass assignment for these fields
    protected $fillable = [
        'documentId',
        'name',
        'specialty',
        'qualifications',
        'position',
        'slug',
        'bio',
        'image',
    ];

    // Auto-generate slug from name when creating
    protected static function booted()
    {
        static::creating(function ($doctor) {
            if (empty($doctor->slug)) {
                $doctor->slug = Str::slug($doctor->name);
            }
        });
    }
}
