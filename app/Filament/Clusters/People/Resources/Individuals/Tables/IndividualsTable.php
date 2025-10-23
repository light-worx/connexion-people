<?php

namespace Modules\People\Filament\Clusters\People\Resources\Individuals\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class IndividualsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable(),
                TextColumn::make('surname')
                    ->searchable(),
                TextColumn::make('firstname')
                    ->searchable(),
                TextColumn::make('email')
                    ->label('Email address')
                    ->searchable(),
                TextColumn::make('birthdate')
                    ->searchable(),
                TextColumn::make('sex')
                    ->searchable(),
                ImageColumn::make('image'),
                TextColumn::make('memberstatus')
                    ->searchable(),
                TextColumn::make('household.id')
                    ->searchable(),
                TextColumn::make('groupleader')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('giving')
                    ->searchable(),
                TextColumn::make('officephone')
                    ->searchable(),
                TextColumn::make('cellphone')
                    ->searchable(),
                TextColumn::make('welcome_email')
                    ->searchable(),
                TextColumn::make('user_id')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('uid')
                    ->searchable(),
                TextColumn::make('online')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('nametag_exclude')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
