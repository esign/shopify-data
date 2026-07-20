<?php

namespace Esign\ShopifyData\Inputs;

use Esign\ShopifyData\Enums\OrderTransactionKind;
use Esign\ShopifyData\Inputs\Base\BaseInput;

/**
 * The input fields for the transaction to create for an order refund.
 *
 * Based on Shopify's OrderTransactionInput GraphQL input type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/input-objects/OrderTransactionInput
 */
class OrderTransactionInput extends BaseInput
{
    public function __construct(
        /** The monetary value of the transaction, as a decimal string. */
        public string $amount,
        public string $gateway,
        public OrderTransactionKind $kind,
        public string $orderId,
        public ?string $parentId = null,
    ) {}
}
