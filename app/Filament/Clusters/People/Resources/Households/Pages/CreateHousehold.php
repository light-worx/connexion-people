<?php

namespace Modules\People\Filament\Clusters\People\Resources\Households\Pages;

use Filament\Resources\Pages\CreateRecord;
use Modules\People\Filament\Clusters\People\Resources\Households\HouseholdResource;

class CreateHousehold extends CreateRecord
{
    protected static string $resource = HouseholdResource::class;
}
