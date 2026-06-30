<?php

namespace JeffersonGoncalves\FilamentCommerce\Inventory\Resources\InventoryItem;

use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use JeffersonGoncalves\Commerce\Inventory\Models\InventoryItem;
use JeffersonGoncalves\FilamentCommerce\Inventory\CommerceInventoryPlugin;
use JeffersonGoncalves\FilamentCommerce\Inventory\Resources\InventoryItem\Pages\CreateInventoryItem;
use JeffersonGoncalves\FilamentCommerce\Inventory\Resources\InventoryItem\Pages\EditInventoryItem;
use JeffersonGoncalves\FilamentCommerce\Inventory\Resources\InventoryItem\Pages\ListInventoryItem;
use JeffersonGoncalves\FilamentCommerce\Inventory\Resources\InventoryItem\Schemas\InventoryItemForm;
use JeffersonGoncalves\FilamentCommerce\Inventory\Resources\InventoryItem\Tables\InventoryItemTable;

class InventoryItemResource extends Resource
{
    protected static ?string $model = InventoryItem::class;

    public static function getNavigationGroup(): ?string
    {
        try {
            return CommerceInventoryPlugin::get()->getNavigationGroup();
        } catch (\Throwable) {
            return config('filament-commerce-inventory.navigation_group', 'Commerce — Catalog');
        }
    }

    public static function form(Form $form): Form
    {
        return InventoryItemForm::configure($form);
    }

    public static function table(Table $table): Table
    {
        return InventoryItemTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListInventoryItem::route('/'),
            'create' => CreateInventoryItem::route('/create'),
            'edit' => EditInventoryItem::route('/{record}/edit'),
        ];
    }
}
