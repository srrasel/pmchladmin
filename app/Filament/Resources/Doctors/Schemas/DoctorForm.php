<?php

namespace App\Filament\Resources\Doctors\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class DoctorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                // Document ID (optional)
                TextInput::make('documentId')
                    ->default(null)
                    ->hidden(), // hidden from form

                // Name field
                TextInput::make('name')
                    ->required()
                    ->label('Doctor Name'),

                // Slug (hidden)
                TextInput::make('slug')
                    ->hidden(),

                // Specialty
                TextInput::make('specialty')
                    ->required(),

                // Qualifications
                Textarea::make('qualifications')
                    ->default(null)
                    ->columnSpanFull(),

                // Position as number
                TextInput::make('position')
                    ->numeric()
                    ->default(0)
                    ->label('Position'),

                // Bio WYSIWYG with min-height 350px
                RichEditor::make('bio')
                    ->default(null)
                    ->columnSpanFull()
                    ->extraAttributes(['style' => 'min-height:350px;']),

                // Image upload
                FileUpload::make('image')
                    ->image(),
            ]);
    }
}
