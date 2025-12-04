<?php

namespace App\Filament\Resources\ResearchPublications\Pages;

use App\Filament\Resources\ResearchPublications\ResearchPublicationResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditResearchPublication extends EditRecord
{
    protected static string $resource = ResearchPublicationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
