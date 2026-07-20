<?php

namespace Esign\ShopifyData\Inputs;

use Esign\ShopifyData\Inputs\Base\BaseInput;

/**
 * The input fields to determine which discount classes the discount can combine with.
 *
 * Based on Shopify's DiscountCombinesWithInput GraphQL input type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/input-objects/DiscountCombinesWithInput
 */
class DiscountCombinesWithInput extends BaseInput
{
    public function __construct(
        public ?bool $orderDiscounts = null,
        public ?bool $productDiscounts = null,
        public ?bool $shippingDiscounts = null,
    ) {}
}
