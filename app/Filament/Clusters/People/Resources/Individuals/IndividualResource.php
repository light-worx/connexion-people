<?php

namespace Modules\People\Filament\Clusters\People\Resources\Individuals;

use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Modules\People\Filament\Clusters\People\PeopleCluster;
use Modules\People\Filament\Clusters\People\Resources\Individuals\Pages\CreateIndividual;
use Modules\People\Filament\Clusters\People\Resources\Individuals\Pages\EditIndividual;
use Modules\People\Filament\Clusters\People\Resources\Individuals\Pages\ListIndividuals;
use Modules\People\Filament\Clusters\People\Resources\Individuals\Schemas\IndividualForm;
use Modules\People\Filament\Clusters\People\Resources\Individuals\Tables\IndividualsTable;
use Modules\People\Models\Individual;

class IndividualResource extends Resource
{
    protected static ?string $model = Individual::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedUser;

    protected static ?string $cluster = PeopleCluster::class;

    protected static ?string $recordTitleAttribute = 'fullname';

    public static function form(Schema $schema): Schema
    {
        return IndividualForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return IndividualsTable::configure($table);
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
            'index' => ListIndividuals::route('/'),
            'create' => CreateIndividual::route('/create'),
            'edit' => EditIndividual::route('/{record}/edit'),
        ];
    }
}
