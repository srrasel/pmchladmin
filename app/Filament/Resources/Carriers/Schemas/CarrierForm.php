<?php

namespace App\Filament\Resources\Carriers\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class CarrierForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->columnSpanFull()
                    ->maxLength(255),
                
                RichEditor::make('description')
                    ->required()
                    ->columnSpanFull()
                    ->extraAttributes(['style' => 'min-height:350px;']), 
                TextInput::make('salary')
                    ->default(null),
                FileUpload::make('image')
                    ->image()
                    ->disk('public') // store in storage/app/public
                    ->visibility('public'),
            ]);
    }
}
