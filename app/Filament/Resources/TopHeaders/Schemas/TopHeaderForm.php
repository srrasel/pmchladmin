<?php

namespace App\Filament\Resources\TopHeaders\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Types;
use Filament\Forms\Components\TextInput;

class TopHeaderForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                  TextInput::make('emergency_number')
                    ->required(),
                TextInput::make('hotline_number')
                    ->default(null)
            ]);
    }
}
