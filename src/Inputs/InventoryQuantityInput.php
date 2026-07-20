<?php

namespace Esign\ShopifyData\Inputs;

use Esign\ShopifyData\Inputs\Base\BaseInput;

/**
 * The input fields for the quantity to be set for an inventory item at a location.
 *
 * Based on Shopify's InventoryQuantityInput GraphQL input type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/input-objects/InventoryQuantityInput
 */
class InventoryQuantityInput extends BaseInput
{
    public function __construct(
        public string $inventoryItemId,
        public string $locationId,
        public int $quantity,
        /** Concurrency guard: the mutation is rejected if the current quantity differs. */
        public ?int $changeFromQuantity = null,
    ) {}
}
