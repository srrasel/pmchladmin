<?php

namespace App\Filament\Resources\TopHeaders\Pages;

use App\Filament\Resources\TopHeaders\TopHeaderResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTopHeaders extends ListRecords
{
    protected static string $resource = TopHeaderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
