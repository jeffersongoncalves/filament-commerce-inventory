<?php

namespace JeffersonGoncalves\FilamentCommerce\Inventory\Resources\InventoryItem\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use JeffersonGoncalves\FilamentCommerce\Inventory\Resources\InventoryItem\InventoryItemResource;

class EditInventoryItem extends EditRecord
{
    protected static string $resource = InventoryItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
