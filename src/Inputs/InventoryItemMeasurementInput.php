<?php

namespace Esign\ShopifyData\Inputs;

use Esign\ShopifyData\Inputs\Base\BaseInput;

/**
 * The input fields for an inventory item measurement.
 *
 * Based on Shopify's InventoryItemMeasurementInput GraphQL input type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/input-objects/InventoryItemMeasurementInput
 */
class InventoryItemMeasurementInput extends BaseInput
{
    public function __construct(
        public ?WeightInput $weight = null,
    ) {}
}
