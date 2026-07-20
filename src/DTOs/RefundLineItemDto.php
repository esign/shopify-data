<?php

namespace Esign\ShopifyData\DTOs;

use Spatie\LaravelData\Data;

/**
 * A line item that's included in a refund.
 *
 * Based on Shopify's RefundLineItem GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/RefundLineItem
 */
class RefundLineItemDto extends Data
{
    public function __construct(
        public ?LineItemDto $lineItem = null,
        public ?int $quantity = null,
        public ?string $restockType = null,
        public ?bool $restocked = null,
        public ?LocationDto $location = null,
        public ?MoneyBagDto $priceSet = null,
        public ?MoneyBagDto $subtotalSet = null,
        public ?MoneyBagDto $totalTaxSet = null,
    ) {}
}
