<?php

namespace App\Filament\Resources\Videos\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Schema;

class VideoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('category')
                    ->default(null),
                TextInput::make('videourl')
                    ->default(null),
                RichEditor::make('description')
                    ->default(null)
                    ->columnSpanFull()
                    ->extraAttributes(['style' => 'min-height:350px;']),
            ]);
    }
}
