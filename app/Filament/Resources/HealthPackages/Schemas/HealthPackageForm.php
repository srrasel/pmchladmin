<?php

namespace App\Filament\Resources\HealthPackages\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Schema;

class HealthPackageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                Textarea::make('short_description')
                    ->default(null)
                    ->columnSpanFull(),
                FileUpload::make('image')
                    ->image(),
                RichEditor::make('description')
                    ->default(null)
                    ->columnSpanFull()
                    ->extraAttributes(['style' => 'min-height:350px;']),
                
            ]);
    }
}
