<?php

namespace App\Filament\Resources\Galleries\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class GalleryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),

                FileUpload::make('featured_image')
                    ->image()
                    ->disk('public') // make sure it points to storage/app/public
                    ->directory('images') // optional folder
                    ->visibility('public')
                    ->required(),

                FileUpload::make('gallery_images')   // ✅ multiple images
                    ->image()
                    ->disk('public') // make sure it points to storage/app/public
                    ->directory('images') // optional folder
                    ->visibility('public')
                    ->multiple()                     // allows multiple uploads
                    ->columnSpanFull(),
            ]);
    }
}
