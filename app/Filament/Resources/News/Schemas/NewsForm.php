<?php

namespace App\Filament\Resources\News\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class NewsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('category')
                    ->default(null),
                FileUpload::make('image')
                    ->image(),
                TextInput::make('author')
                    ->default(null),
                RichEditor::make('description')
                    ->default(null)
                    ->columnSpanFull()
                    ->extraAttributes(['style' => 'min-height:350px;']),

            ]);
    }
}
