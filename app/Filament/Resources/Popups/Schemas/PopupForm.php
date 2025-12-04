<?php

namespace App\Filament\Resources\Popups\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PopupForm
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
                TextInput::make('link')
                    ->default(null),
            ]);
    }
}
