<?php

namespace JeffersonGoncalves\FilamentCommerce\Inventory\Tests\Fixtures;

use Filament\Panel;
use Filament\PanelProvider;
use JeffersonGoncalves\FilamentCommerce\Inventory\CommerceInventoryPlugin;

class TestPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->plugins([
                CommerceInventoryPlugin::make(),
            ]);
    }
}
