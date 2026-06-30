<?php

namespace JeffersonGoncalves\FilamentCommerce\Inventory\Concerns;

use JeffersonGoncalves\FilamentCommerce\Core\Concerns\HasCommercePluginConfig;

trait HasCommerceInventoryPluginConfig
{
    use HasCommercePluginConfig;

    protected function getConfigKey(): string
    {
        return 'filament-commerce-inventory';
    }

    protected function getDefaultNavigationGroup(): string
    {
        return 'Commerce — Catalog';
    }
}
