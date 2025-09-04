<?php

namespace App\Filament\Resources\CeoMessages\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;

use Filament\Schemas\Schema;

class CeoMessageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('position')
                    ->default(null),
                Textarea::make('qualifications_summary')
                    ->default(null),
                Textarea::make('sister_concern_text')
                    ->default(null),
                FileUpload::make('image')
                    ->image()
                    ->disk('public') // make sure it points to storage/app/public
                    ->directory('images') // optional folder
                    ->visibility('public')
                    ->columnSpanFull()
                    ->default(null),
                RichEditor::make('message_content')
                    ->default(null)
                    ->columnSpanFull()
                    ->extraAttributes(['style' => 'min-height:350px;']),
            ]);
    }
}
