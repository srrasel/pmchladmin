<?php

namespace App\Filament\Resources\ResearchPublications\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ResearchPublicationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Title')
                    ->required()
                     ->columnSpanFull()
                    ->maxLength(255),
                  // Bio WYSIWYG with min-height 350px
                RichEditor::make('content')
                    ->default(null)
                    ->columnSpanFull()
                    ->extraAttributes(['style' => 'min-height:350px;']),

                FileUpload::make('image')
                    ->label('Image')
                    ->image()
                    ->directory('research-images'),

                FileUpload::make('pdf')
                    ->label('PDF File')
                    ->directory('research-pdfs')
                    ->acceptedFileTypes(['application/pdf']), // <- fixed
            ]);
    }
}
