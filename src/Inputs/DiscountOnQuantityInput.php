<?php

namespace Esign\ShopifyData\Inputs;

use Esign\ShopifyData\Inputs\Base\BaseInput;

/**
 * The input fields for the quantity of items discounted and the discount value.
 *
 * Based on Shopify's DiscountOnQuantityInput GraphQL input type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/input-objects/DiscountOnQuantityInput
 */
class DiscountOnQuantityInput extends BaseInput
{
    public function __construct(
        /** The quantity of items to discount, as a numeric string. */
        public ?string $quantity = null,
        public ?DiscountEffectInput $effect = null,
    ) {}
}
