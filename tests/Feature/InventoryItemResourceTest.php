<?php

use JeffersonGoncalves\Commerce\Inventory\Models\InventoryItem;
use JeffersonGoncalves\FilamentCommerce\Inventory\Resources\InventoryItem\Pages\CreateInventoryItem;
use JeffersonGoncalves\FilamentCommerce\Inventory\Resources\InventoryItem\Pages\ListInventoryItem;
use Livewire\Livewire;

it('renders the inventory list page', function () {
    InventoryItem::factory()->count(2)->create();

    Livewire::test(ListInventoryItem::class)->assertOk();
});

it('creates a inventory record through the panel', function () {
    Livewire::test(CreateInventoryItem::class)
        ->fillForm([
            'sku' => 'SKU-1',
            'title' => 'Widget',
        ])
        ->call('create')
        ->assertHasNoFormErrors();

    expect(InventoryItem::query()->count())->toBe(1);
});
