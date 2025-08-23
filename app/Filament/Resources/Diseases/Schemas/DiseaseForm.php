<?php

namespace App\Filament\Resources\Diseases\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Schema;

class DiseaseForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                     ->columnSpanFull(),
                FileUpload::make('image')
                    ->image()
                    ->columnSpanFull(),
                RichEditor::make('description')
                    ->default(null)
                    ->columnSpanFull()
                      ->extraAttributes(['style' => 'min-height:350px;']),
                
            ]);
    }
}
