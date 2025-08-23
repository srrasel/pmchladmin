<?php

namespace App\Filament\Resources\TopHeaders;

use App\Filament\Resources\TopHeaders\Pages\CreateTopHeader;
use App\Filament\Resources\TopHeaders\Pages\EditTopHeader;
use App\Filament\Resources\TopHeaders\Pages\ListTopHeaders;
use App\Filament\Resources\TopHeaders\Schemas\TopHeaderForm;
use App\Filament\Resources\TopHeaders\Tables\TopHeadersTable;
use App\Models\TopHeader;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TopHeaderResource extends Resource
{
    protected static ?string $model = TopHeader::class;

protected static string | BackedEnum | null $navigationIcon = 'heroicon-o-squares-2x2';       // grid / blocks

    protected static ?string $recordTitleAttribute = 'TopHeader';

    public static function form(Schema $schema): Schema
    {
        return TopHeaderForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TopHeadersTable::configure($table);
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
            'index' => ListTopHeaders::route('/'),
            'create' => CreateTopHeader::route('/create'),
            'edit' => EditTopHeader::route('/{record}/edit'),
        ];
    }
}
