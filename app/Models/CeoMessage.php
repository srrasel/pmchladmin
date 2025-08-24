<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CeoMessage extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'qualifications_summary',
        'position',
        'image',
        'sister_concern_text',
        'message_content',
    ];
}
