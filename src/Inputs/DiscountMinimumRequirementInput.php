<?php

namespace Esign\ShopifyData\Inputs;

use Esign\ShopifyData\Inputs\Base\BaseInput;

/**
 * The input fields for the minimum quantity or subtotal required for a discount.
 *
 * Based on Shopify's DiscountMinimumRequirementInput GraphQL input type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/input-objects/DiscountMinimumRequirementInput
 */
class DiscountMinimumRequirementInput extends BaseInput
{
    public function __construct(
        /** @var array|null DiscountMinimumQuantityInput value ({greaterThanOrEqualToQuantity}). */
        public ?array $quantity = null,
        /** @var array|null DiscountMinimumSubtotalInput value ({greaterThanOrEqualToSubtotal}). */
        public ?array $subtotal = null,
    ) {}
}
