<?php

namespace App\Filament\Resources\HealthPackages;

use App\Filament\Resources\HealthPackages\Pages\CreateHealthPackage;
use App\Filament\Resources\HealthPackages\Pages\EditHealthPackage;
use App\Filament\Resources\HealthPackages\Pages\ListHealthPackages;
use App\Filament\Resources\HealthPackages\Schemas\HealthPackageForm;
use App\Filament\Resources\HealthPackages\Tables\HealthPackagesTable;
use App\Models\HealthPackage;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class HealthPackageResource extends Resource
{
    protected static ?string $model = HealthPackage::class;

    protected static string | BackedEnum | null $navigationIcon = 'heroicon-o-document-text';    // documents / package info

    protected static ?string $recordTitleAttribute = 'HealthPackage';

    public static function form(Schema $schema): Schema
    {
        return HealthPackageForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return HealthPackagesTable::configure($table);
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
            'index' => ListHealthPackages::route('/'),
            'create' => CreateHealthPackage::route('/create'),
            'edit' => EditHealthPackage::route('/{record}/edit'),
        ];
    }
}
