<?php

namespace App\Filament\Resources\ResearchPublications\Tables;

use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;

class ResearchPublicationsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Title')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('content')
                    ->label('Content')
                    ->limit(50) // show first 50 characters
                    ->wrap(),

                ImageColumn::make('image')
                    ->label('Image')
                    ->disk('public')
                    ->height(50)
                    ->width(50),

                TextColumn::make('pdf')
                    ->label('PDF')
                    ->formatStateUsing(fn($state) => $state ? 'Available' : 'Not uploaded'),

                TextColumn::make('created_at')
                    ->label('Created')
                    ->dateTime('M d, Y H:i'),
            ])
            ->filters([
                // you can add filters here if needed
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
