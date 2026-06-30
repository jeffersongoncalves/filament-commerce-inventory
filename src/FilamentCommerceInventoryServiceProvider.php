<?php

namespace JeffersonGoncalves\FilamentCommerce\Inventory;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentCommerceInventoryServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-commerce-inventory';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasConfigFile();
    }
}
