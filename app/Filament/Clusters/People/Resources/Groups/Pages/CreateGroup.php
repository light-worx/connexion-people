<?php

namespace Modules\People\Filament\Clusters\People\Resources\Groups\Pages;

use Filament\Resources\Pages\CreateRecord;
use Modules\People\Filament\Clusters\People\Resources\Groups\GroupResource;

class CreateGroup extends CreateRecord
{
    protected static string $resource = GroupResource::class;
}
