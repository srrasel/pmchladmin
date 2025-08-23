<?php
use App\Models\Doctor;
use Illuminate\Support\Facades\Route;

Route::get('/doctors', function () {
    return Doctor::all()->map(function ($doc) {
        return [
            "id" => $doc->id,
            "documentId" => $doc->documentId,
            "Name" => $doc->name,
            "Specialty" => $doc->specialty,
            "Qualifications" => $doc->qualifications,
            "Position" => $doc->position,
            "slug" => $doc->slug,
            "createdAt" => $doc->created_at->toISOString(),
            "updatedAt" => $doc->updated_at->toISOString(),
            "Bio" => $doc->bio, // if bio is longText with HTML
            "image" => $doc->image ? asset('storage/' . $doc->image) : null,
        ];
    });
});

