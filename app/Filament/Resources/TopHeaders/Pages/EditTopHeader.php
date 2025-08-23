<?php

namespace App\Filament\Resources\TopHeaders\Pages;

use App\Filament\Resources\TopHeaders\TopHeaderResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTopHeader extends EditRecord
{
    protected static string $resource = TopHeaderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
