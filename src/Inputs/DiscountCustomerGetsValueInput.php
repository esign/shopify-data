<?php

namespace Esign\ShopifyData\Inputs;

use Esign\ShopifyData\Inputs\Base\BaseInput;

/**
 * The input fields for the quantity of items discounted and the discount value.
 *
 * Based on Shopify's DiscountCustomerGetsValueInput GraphQL input type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/input-objects/DiscountCustomerGetsValueInput
 */
class DiscountCustomerGetsValueInput extends BaseInput
{
    public function __construct(
        public ?DiscountOnQuantityInput $discountOnQuantity = null,
        public ?DiscountAmountInput $discountAmount = null,
        public ?float $percentage = null,
    ) {}
}
