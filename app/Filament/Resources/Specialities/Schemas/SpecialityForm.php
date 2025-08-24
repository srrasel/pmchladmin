<?php

namespace App\Filament\Resources\Specialities\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class SpecialityForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->default(null),
                Textarea::make('shortdescription')
                    ->default(null)
                    ->columnSpanFull(),
                TextInput::make('category')
                    ->default(null),
                FileUpload::make('image')
                    ->image(),
            ]);
    }
}
