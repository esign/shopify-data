<?php

namespace Esign\ShopifyData\Inputs;

use Esign\ShopifyData\Inputs\Base\BaseInput;

/**
 * The input fields for the items in the order that qualify for the discount,
 * their quantities, and the total value of the discount.
 *
 * Based on Shopify's DiscountCustomerGetsInput GraphQL input type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/input-objects/DiscountCustomerGetsInput
 */
class DiscountCustomerGetsInput extends BaseInput
{
    public function __construct(
        public ?DiscountCustomerGetsValueInput $value = null,
        public ?DiscountItemsInput $items = null,
        public ?bool $appliesOnOneTimePurchase = null,
        public ?bool $appliesOnSubscription = null,
    ) {}
}
