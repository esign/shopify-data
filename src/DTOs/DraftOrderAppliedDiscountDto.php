<?php

namespace Esign\ShopifyData\DTOs;

use Spatie\LaravelData\Data;

/**
 * The order-level discount applied to a draft order.
 *
 * Based on Shopify's DraftOrderAppliedDiscount GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/DraftOrderAppliedDiscount
 */
class DraftOrderAppliedDiscountDto extends Data
{
    public function __construct(
        public ?string $title = null,
        public ?string $description = null,
        public ?float $value = null,
        public ?string $valueType = null,
        public ?MoneyBagDto $amountSet = null,
    ) {}
}
