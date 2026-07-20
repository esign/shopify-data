<?php

namespace Esign\ShopifyData\Inputs;

use Esign\ShopifyData\Inputs\Base\BaseInput;

/**
 * The input fields required to adjust inventory quantities using the
 * inventoryAdjustQuantities mutation.
 *
 * Based on Shopify's InventoryAdjustQuantitiesInput GraphQL input type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/input-objects/InventoryAdjustQuantitiesInput
 */
class InventoryAdjustQuantitiesInput extends BaseInput
{
    public function __construct(
        /** The quantity name to adjust: "available" or "on_hand". */
        public string $name,
        public string $reason,
        /** @var InventoryChangeInput[] */
        public array $changes,
        public ?string $referenceDocumentUri = null,
    ) {}
}
