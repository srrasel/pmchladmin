<?php

use Illuminate\Support\Facades\Route;
use App\Models\Doctor;
use App\Models\Service;
use App\Models\Department;
use App\Models\News;
use App\Models\Video;
use App\Models\SuccessStory;
use App\Models\HealthPackage;
use App\Models\Gallery;
use App\Models\Client;
use App\Models\CeoMessage;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return 'Login page not implemented yet';
})->name('login');

Route::get('/api/doctors', function () {
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

Route::get('/api/services', function () {
    return Service::all()->map(function ($service) {
        return [
            "id" => $service->id,
            "Name" => $service->name,
            "category" => $service->category,
            "ShortDescription" => $service->short_description,
            "Description" => $service->description, // if stored as JSON
            "Image" => $service->image ? asset('storage/' . $service->image) : null,
            "createdAt" => $service->created_at->toISOString(),
            "updatedAt" => $service->updated_at->toISOString(),
        ];
    });
});

Route::get('/api/departments', function () {
    return Department::all()->map(function ($department) {
        return [
            "id" => $department->id,
            "Title" => $department->title,
            "Category" => $department->category,
            "ShortDescription" => $department->short_description,
            "DoctorsCount" => $department->doctors_count,
            "Established_Year" => $department->established_year,
            "Description" => $department->description,
            "Image" => $department->image ? asset('storage/' . $department->image) : null,
            "createdAt" => $department->created_at?->toISOString(),
            "updatedAt" => $department->updated_at?->toISOString(),
        ];
    });
});

Route::get('/api/news', function () {
    return News::all()->map(function ($news) {
        return [
            "id" => $news->id,
            "Title" => $news->title,
            "Category" => $news->category,
            "Image" => $news->image ? asset('storage/' . $news->image) : null,
            "Author" => $news->author,
            "Description" => $news->description,
            "createdAt" => $news->created_at?->toISOString(),
            "updatedAt" => $news->updated_at?->toISOString(),
        ];
    });
});

Route::get('/api/videos', function () {
    return Video::all()->map(function ($video) {
        return [
            "id" => $video->id,
            "Title" => $video->title,
            "Category" => $video->category,
            "VideoUrl" => $video->videourl,
            "Description" => $video->description,
            "createdAt" => $video->created_at?->toISOString(),
            "updatedAt" => $video->updated_at?->toISOString(),
        ];
    });
});

Route::get('/api/success-stories', function () {
    return SuccessStory::all()->map(function ($story) {
        return [
            "id" => $story->id,
            "Title" => $story->title,
            "Category" => $story->category,
            "Video" => $story->video,
            "Description" => $story->description,
            "createdAt" => $story->created_at?->toISOString(),
            "updatedAt" => $story->updated_at?->toISOString(),
        ];
    });
});

Route::get('/api/health-packages', function () {
    return HealthPackage::all()->map(function ($package) {
        return [
            "id" => $package->id,
            "Title" => $package->title,
            "ShortDescription" => $package->short_description,
            "Description" => $package->description,
            "Image" => $package->image ? asset('storage/' . $package->image) : null,
            "createdAt" => $package->created_at?->toISOString(),
            "updatedAt" => $package->updated_at?->toISOString(),
        ];
    });
});
Route::get('/api/gallery', function () {
    return Gallery::all()->map(function ($item) {
        return [
            "id" => $item->id,
            "Title" => $item->title,
            "FeaturedImage" => $item->featured_image ? asset('storage/' . $item->featured_image) : null,
            "GalleryImages" => $item->gallery_images ? array_map(fn($img) => asset('storage/' . $img), $item->gallery_images) : [],
            "createdAt" => $item->created_at?->toISOString(),
            "updatedAt" => $item->updated_at?->toISOString(),
        ];
    });
});

Route::get('/api/clients', function () {
    return Client::all()->map(fn($client) => [
        'id' => $client->id,
        'title' => $client->title,
        'image' => $client->image ? asset('storage/' . $client->image) : null,
        'createdAt' => $client->created_at->toISOString(),
        'updatedAt' => $client->updated_at->toISOString(),
    ]);
});
Route::get('/api/ceo-messages', function () {
    return \App\Models\CeoMessage::all()->map(function ($message) {
        return [
            "id" => $message->id,
            "Name" => $message->name,
            "QualificationsSummary" => $message->qualifications_summary,
            "Position" => $message->position,
            "SisterConcernText" => $message->sister_concern_text,
            "MessageContent" => $message->message_content,
            "createdAt" => $message->created_at?->toISOString(),
            "updatedAt" => $message->updated_at?->toISOString(),
        ];
    });
});