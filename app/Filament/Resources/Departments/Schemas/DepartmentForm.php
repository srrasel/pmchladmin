<?php

namespace App\Filament\Resources\Departments\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class DepartmentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('category')
                    ->default(null),

                TextInput::make('doctors_count')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('established_year')
                    ->default(null),
                Textarea::make('short_description')
                    ->default(null),
                FileUpload::make('image')
                    ->image()
                    ->disk('public') // make sure it points to storage/app/public
                    ->directory('images') // optional folder
                    ->visibility('public')
                    ->required(),
                RichEditor::make('description')
                    ->default(null)
                    ->columnSpanFull()
                     ->extraAttributes(['style' => 'min-height:350px;']),
                
            ]);
    }
}
