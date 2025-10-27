<?php

namespace Modules\People\Filament\Clusters\People\Resources\Groups\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Modules\People\Filament\Clusters\People\Resources\Groups\GroupResource;

class ListGroups extends ListRecords
{
    protected static string $resource = GroupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
