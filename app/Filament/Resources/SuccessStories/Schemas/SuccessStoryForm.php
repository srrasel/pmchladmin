<?php

namespace App\Filament\Resources\SuccessStories\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Schema;

class SuccessStoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('category')
                    ->default(null),
                TextInput::make('video')
                    ->default(null),
                RichEditor::make('description')
                    ->default(null)
                    ->columnSpanFull()
                     ->extraAttributes(['style' => 'min-height:350px;']),
            ]);
    }
}
