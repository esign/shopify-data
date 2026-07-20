<?php

namespace Esign\ShopifyData\Inputs;

use Esign\ShopifyData\Inputs\Base\BaseInput;

/**
 * The input fields for the value of the discount and how it is applied.
 *
 * Based on Shopify's DiscountAmountInput GraphQL input type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/input-objects/DiscountAmountInput
 */
class DiscountAmountInput extends BaseInput
{
    public function __construct(
        /** The monetary value of the discount, as a decimal string. */
        public ?string $amount = null,
        public ?bool $appliesOnEachItem = null,
    ) {}
}
