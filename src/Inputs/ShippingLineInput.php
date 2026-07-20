<?php

namespace Esign\ShopifyData\Inputs;

use Esign\ShopifyData\Inputs\Base\BaseInput;

/**
 * The input fields for a shipping line.
 *
 * Based on Shopify's ShippingLineInput GraphQL input type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/input-objects/ShippingLineInput
 */
class ShippingLineInput extends BaseInput
{
    public function __construct(
        public ?string $title = null,
        public ?string $shippingRateHandle = null,
        public ?MoneyInput $priceWithCurrency = null,
    ) {}
}
