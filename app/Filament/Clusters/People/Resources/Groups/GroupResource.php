<?php

namespace Modules\People\Filament\Clusters\People\Resources\Groups;

use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Modules\People\Filament\Clusters\People\PeopleCluster;
use Modules\People\Filament\Clusters\People\Resources\Groups\Pages\CreateGroup;
use Modules\People\Filament\Clusters\People\Resources\Groups\Pages\EditGroup;
use Modules\People\Filament\Clusters\People\Resources\Groups\Pages\ListGroups;
use Modules\People\Filament\Clusters\People\Resources\Groups\Schemas\GroupForm;
use Modules\People\Filament\Clusters\People\Resources\Groups\Tables\GroupsTable;
use Modules\People\Models\Group;

class GroupResource extends Resource
{
    protected static ?string $model = Group::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedUserGroup;

    protected static ?string $cluster = PeopleCluster::class;

    protected static ?int $navigationSort = 2;

    protected static ?string $recordTitleAttribute = 'groupname';

    public static function form(Schema $schema): Schema
    {
        return GroupForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return GroupsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\GroupmembersRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListGroups::route('/'),
            'create' => CreateGroup::route('/create'),
            'edit' => EditGroup::route('/{record}/edit'),
        ];
    }
}
