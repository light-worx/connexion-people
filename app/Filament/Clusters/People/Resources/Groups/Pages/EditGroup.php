<?php

namespace Modules\People\Filament\Clusters\People\Resources\Groups\Pages;

use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Modules\People\Filament\Clusters\People\Resources\Groups\GroupResource;

class EditGroup extends EditRecord
{
    protected static string $resource = GroupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
