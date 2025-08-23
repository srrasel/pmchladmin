<?php

namespace App\Filament\Resources\CeoMessages;

use App\Filament\Resources\CeoMessages\Pages\CreateCeoMessage;
use App\Filament\Resources\CeoMessages\Pages\EditCeoMessage;
use App\Filament\Resources\CeoMessages\Pages\ListCeoMessages;
use App\Filament\Resources\CeoMessages\Schemas\CeoMessageForm;
use App\Filament\Resources\CeoMessages\Tables\CeoMessagesTable;
use App\Models\CeoMessage;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CeoMessageResource extends Resource
{
    protected static ?string $model = CeoMessage::class;

    protected static string | BackedEnum | null $navigationIcon = 'heroicon-o-chat-bubble-left-right'; 

    protected static ?string $recordTitleAttribute = 'CeoMessage';

    public static function form(Schema $schema): Schema
    {
        return CeoMessageForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CeoMessagesTable::configure($table);
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
            'index' => ListCeoMessages::route('/'),
            'create' => CreateCeoMessage::route('/create'),
            'edit' => EditCeoMessage::route('/{record}/edit'),
        ];
    }
}
