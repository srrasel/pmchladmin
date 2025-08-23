<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    // If table name matches plural of model ("services"), you can skip this.
    protected $table = 'services';

    // Fields that can be mass assigned (important for Filament forms & API)
    protected $fillable = [
        'name',
        'category',
        'short_description',
        'description',
        'image',
    ];
}

