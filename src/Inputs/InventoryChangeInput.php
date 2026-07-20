<?php

namespace Esign\ShopifyData\Inputs;

use Esign\ShopifyData\Inputs\Base\BaseInput;

/**
 * The input fields for the change to be made to an inventory item at a location.
 *
 * Based on Shopify's InventoryChangeInput GraphQL input type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/input-objects/InventoryChangeInput
 */
class InventoryChangeInput extends BaseInput
{
    public function __construct(
        public int $delta,
        public string $inventoryItemId,
        public string $locationId,
        public ?string $ledgerDocumentUri = null,
    ) {}
}
