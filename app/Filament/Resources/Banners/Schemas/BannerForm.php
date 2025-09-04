<?php

namespace App\Filament\Resources\Banners\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class BannerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('image')
                    ->image()
                    ->disk('public') // make sure it points to storage/app/public
                    ->directory('images') // optional folder
                    ->visibility('public')
                    ->required(),
            ]);
    }
}
