<?php

namespace Esign\ShopifyData\DTOs;

use Spatie\LaravelData\Data;

/**
 * The classes of discounts that a discount can combine with.
 *
 * Based on Shopify's DiscountCombinesWith GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/DiscountCombinesWith
 */
class DiscountCombinesWithDto extends Data
{
    public function __construct(
        public ?bool $orderDiscounts = null,
        public ?bool $productDiscounts = null,
        public ?bool $shippingDiscounts = null,
    ) {}
}
