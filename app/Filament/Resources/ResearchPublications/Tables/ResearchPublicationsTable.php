<?php

namespace App\Filament\Resources\ResearchPublications\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Table;

class ResearchPublicationsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                //
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
                //
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

