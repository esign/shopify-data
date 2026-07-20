<?php

namespace Esign\ShopifyData\DTOs;

use Spatie\LaravelData\Data;

/**
 * Represents the physical measurements of an inventory item.
 *
 * Based on Shopify's InventoryItemMeasurement GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/InventoryItemMeasurement
 */
class InventoryItemMeasurementDto extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?WeightDto $weight = null,
    ) {}
}
