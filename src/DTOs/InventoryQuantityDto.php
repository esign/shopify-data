<?php

namespace Esign\ShopifyData\DTOs;

use Spatie\LaravelData\Data;

/**
 * Represents a quantity of an inventory item at a specific location, for a
 * specific name (such as "available" or "on_hand").
 *
 * Based on Shopify's InventoryQuantity GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/InventoryQuantity
 */
class InventoryQuantityDto extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $name = null,
        public ?int $quantity = null,
        public ?string $updatedAt = null,
    ) {}
}
