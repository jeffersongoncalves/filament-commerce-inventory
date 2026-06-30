<?php

namespace JeffersonGoncalves\FilamentCommerce\Inventory\Resources\InventoryItem\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use JeffersonGoncalves\FilamentCommerce\Inventory\Resources\InventoryItem\InventoryItemResource;

class ListInventoryItem extends ListRecords
{
    protected static string $resource = InventoryItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
