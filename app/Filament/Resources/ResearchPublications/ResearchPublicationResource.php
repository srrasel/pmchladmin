<?php

namespace App\Filament\Resources\ResearchPublications;

use App\Filament\Resources\ResearchPublications\Pages\CreateResearchPublication;
use App\Filament\Resources\ResearchPublications\Pages\EditResearchPublication;
use App\Filament\Resources\ResearchPublications\Pages\ListResearchPublications;
use App\Filament\Resources\ResearchPublications\Pages\ViewResearchPublication;
use App\Filament\Resources\ResearchPublications\Schemas\ResearchPublicationForm;
use App\Filament\Resources\ResearchPublications\Schemas\ResearchPublicationInfolist;
use App\Filament\Resources\ResearchPublications\Tables\ResearchPublicationsTable;
use App\Models\ResearchPublication;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ResearchPublicationResource extends Resource
{
    protected static ?string $model = ResearchPublication::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'ResearchPublication';

    public static function form(Schema $schema): Schema
    {
        return ResearchPublicationForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ResearchPublicationInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ResearchPublicationsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListResearchPublications::route('/'),
            'create' => CreateResearchPublication::route('/create'),
            'view' => ViewResearchPublication::route('/{record}'),
            'edit' => EditResearchPublication::route('/{record}/edit'),
        ];
    }
}
