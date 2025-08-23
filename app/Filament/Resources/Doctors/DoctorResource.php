<?php

namespace App\Filament\Resources\Doctors;

use App\Filament\Resources\Doctors\Pages\CreateDoctor;
use App\Filament\Resources\Doctors\Pages\EditDoctor;
use App\Filament\Resources\Doctors\Pages\ListDoctors;
use App\Filament\Resources\Doctors\Pages\ViewDoctor;
use App\Filament\Resources\Doctors\Schemas\DoctorForm;
use App\Filament\Resources\Doctors\Schemas\DoctorInfolist;
use App\Filament\Resources\Doctors\Tables\DoctorsTable;
use App\Models\Doctor;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class DoctorResource extends Resource
{
    protected static ?string $model = Doctor::class;

    protected static string | BackedEnum | null $navigationIcon = 'heroicon-o-plus-circle';        // cross/health

    protected static ?string $recordTitleAttribute = 'doctor';

    public static function form(Schema $schema): Schema
    {
        return DoctorForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return DoctorInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DoctorsTable::configure($table);
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
            'index' => ListDoctors::route('/'),
            'create' => CreateDoctor::route('/create'),
            'view' => ViewDoctor::route('/{record}'),
            'edit' => EditDoctor::route('/{record}/edit'),
        ];
    }
}
