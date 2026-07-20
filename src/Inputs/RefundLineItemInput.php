<?php

namespace Esign\ShopifyData\Inputs;

use Esign\ShopifyData\Enums\RefundLineItemRestockType;
use Esign\ShopifyData\Inputs\Base\BaseInput;

/**
 * The input fields required to reimburse line items on a refund.
 *
 * Based on Shopify's RefundLineItemInput GraphQL input type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/input-objects/RefundLineItemInput
 */
class RefundLineItemInput extends BaseInput
{
    public function __construct(
        public string $lineItemId,
        public int $quantity,
        public ?RefundLineItemRestockType $restockType = null,
        public ?string $locationId = null,
    ) {}
}
