<?php

namespace App\Filament\Resources\ResearchPublications\Pages;

use App\Filament\Resources\ResearchPublications\ResearchPublicationResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListResearchPublications extends ListRecords
{
    protected static string $resource = ResearchPublicationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
