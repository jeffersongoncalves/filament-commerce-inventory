<?php

namespace JeffersonGoncalves\FilamentCommerce\Inventory\Resources\InventoryItem\Pages;

use Filament\Resources\Pages\CreateRecord;
use JeffersonGoncalves\FilamentCommerce\Inventory\Resources\InventoryItem\InventoryItemResource;

class CreateInventoryItem extends CreateRecord
{
    protected static string $resource = InventoryItemResource::class;
}
