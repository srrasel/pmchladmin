<?php

namespace App\Filament\Resources\ResearchPublications\Schemas;

use Filament\Schemas\Schema;

class ResearchPublicationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                TextInput::make('title')
                    ->label('Title')
                    ->required()
                    ->maxLength(255),

                Textarea::make('content')
                    ->label('Text Content')
                    ->required(),

                FileUpload::make('image')
                    ->label('Image')
                    ->image()
                    ->directory('research-images'),

                FileUpload::make('pdf')
                    ->label('PDF File')
                    ->directory('research-pdfs')
                    ->pdf(),
            ]);
    }
}
