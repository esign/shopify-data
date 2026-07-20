<?php

namespace Esign\ShopifyData\Inputs;

use Esign\ShopifyData\Inputs\Base\BaseInput;

/**
 * The input fields for how the discount will be applied.
 *
 * Based on Shopify's DiscountEffectInput GraphQL input type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/input-objects/DiscountEffectInput
 */
class DiscountEffectInput extends BaseInput
{
    public function __construct(
        public ?float $percentage = null,
        public ?DiscountAmountInput $amount = null,
    ) {}
}
