<?php

namespace Esign\ShopifyData\DTOs;

use Spatie\LaravelData\Data;

/**
 * Associates an order line item with quantities requiring fulfillment from
 * the respective fulfillment order.
 *
 * Based on Shopify's FulfillmentOrderLineItem GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/FulfillmentOrderLineItem
 */
class FulfillmentOrderLineItemDto extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?int $totalQuantity = null,
        public ?int $remainingQuantity = null,
        public ?string $sku = null,
        public ?string $productTitle = null,
        public ?string $variantTitle = null,
        public ?string $inventoryItemId = null,
        public ?bool $requiresShipping = null,
        public ?LineItemDto $lineItem = null,
        public ?ImageDto $image = null,
        public ?WeightDto $weight = null,
    ) {}
}
