<?php

namespace JeffersonGoncalves\FilamentCommerce\Inventory\Resources\InventoryItem\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class InventoryItemForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(null)
            ->components([
                Section::make('Details')
                    ->schema([
                        TextInput::make('sku'),
                        TextInput::make('title'),
                    ])->columns(2),
            ]);
    }
}
