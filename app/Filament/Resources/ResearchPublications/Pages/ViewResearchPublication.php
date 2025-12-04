<?php

namespace App\Filament\Resources\ResearchPublications\Pages;

use App\Filament\Resources\ResearchPublications\ResearchPublicationResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewResearchPublication extends ViewRecord
{
    protected static string $resource = ResearchPublicationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
