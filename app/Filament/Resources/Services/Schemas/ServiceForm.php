<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Forms; // ✅ this is missing
use Filament\Forms\Form;
use Filament\Schemas\Schema;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('category')
                    ->maxLength(255),

                Forms\Components\Textarea::make('short_description'),
                
                Forms\Components\FileUpload::make('image')
                    ->directory('services')
                    ->image(), // to upload images

                Forms\Components\RichEditor::make('description')
                    ->columnSpanFull()
                    ->extraAttributes(['style' => 'min-height:350px;']),

            ]);
    }
}
