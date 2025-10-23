<?php

namespace Modules\People\Filament;

use Coolsam\Modules\Concerns\ModuleFilamentPlugin;
use Filament\Contracts\Plugin;
use Filament\Panel;

class PeoplePlugin implements Plugin
{
    use ModuleFilamentPlugin;

    public function getModuleName(): string
    {
        return 'People';
    }

    public function getId(): string
    {
        return 'people';
    }

    public function boot(Panel $panel): void
    {
        // TODO: Implement boot() method.
    }
}
