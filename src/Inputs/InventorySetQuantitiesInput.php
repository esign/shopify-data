<?php

namespace Esign\ShopifyData\Inputs;

use Esign\ShopifyData\Inputs\Base\BaseInput;

/**
 * The input fields required to set inventory quantities using the
 * inventorySetQuantities mutation.
 *
 * Based on Shopify's InventorySetQuantitiesInput GraphQL input type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/input-objects/InventorySetQuantitiesInput
 */
class InventorySetQuantitiesInput extends BaseInput
{
    public function __construct(
        /** The quantity name to set: "available" or "on_hand". */
        public string $name,
        public string $reason,
        /** @var InventoryQuantityInput[] */
        public array $quantities,
        public ?string $referenceDocumentUri = null,
    ) {}
}
