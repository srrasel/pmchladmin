<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'category',
        'short_description',
        'doctors_count',
        'established_year',
        'description',
        'image',
    ];
}
