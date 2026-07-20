<?php

namespace Esign\ShopifyData\Inputs;

use Esign\ShopifyData\Inputs\Base\BaseInput;

/**
 * The input fields to create a refund.
 *
 * Based on Shopify's RefundInput GraphQL input type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/input-objects/RefundInput
 */
class RefundInput extends BaseInput
{
    public function __construct(
        public string $orderId,
        public ?string $note = null,
        public ?bool $notify = null,
        public ?string $currency = null,
        public ?ShippingRefundInput $shipping = null,
        /** @var RefundLineItemInput[]|null */
        public ?array $refundLineItems = null,
        /** @var OrderTransactionInput[]|null */
        public ?array $transactions = null,
    ) {}
}
