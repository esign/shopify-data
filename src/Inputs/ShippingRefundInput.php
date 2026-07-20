<?php

namespace Esign\ShopifyData\Inputs;

use Esign\ShopifyData\Inputs\Base\BaseInput;

/**
 * The input fields for the shipping cost to refund.
 *
 * Based on Shopify's ShippingRefundInput GraphQL input type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/input-objects/ShippingRefundInput
 */
class ShippingRefundInput extends BaseInput
{
    public function __construct(
        /** The monetary value of the shipping to refund, as a decimal string. */
        public ?string $amount = null,
        public ?bool $fullRefund = null,
    ) {}
}
