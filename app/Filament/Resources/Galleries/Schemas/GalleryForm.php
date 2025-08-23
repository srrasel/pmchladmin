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
                    ->image(),

                FileUpload::make('gallery_images')   // ✅ multiple images
                    ->image()
                    ->multiple()                     // allows multiple uploads
                    ->columnSpanFull(),
            ]);
    }
}
