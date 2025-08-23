<?php

namespace App\Filament\Resources\Heroes\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class HeroForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('videourl')
                    ->required(),
            ]);
    }
}
