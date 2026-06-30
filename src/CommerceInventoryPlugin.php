<?php

namespace JeffersonGoncalves\FilamentCommerce\Inventory;

use Filament\Contracts\Plugin;
use Filament\Panel;
use JeffersonGoncalves\FilamentCommerce\Inventory\Concerns\HasCommerceInventoryPluginConfig;
use JeffersonGoncalves\FilamentCommerce\Inventory\Resources\InventoryItem\InventoryItemResource;

class CommerceInventoryPlugin implements Plugin
{
    use HasCommerceInventoryPluginConfig;

    public function getId(): string
    {
        return 'filament-commerce-inventory';
    }

    public function register(Panel $panel): void
    {
        $panel->resources($this->resolveResources([
            'inventory' => InventoryItemResource::class,
        ]));

        $panel->widgets($this->resolveWidgets());
    }

    public function boot(Panel $panel): void
    {
        //
    }
}
