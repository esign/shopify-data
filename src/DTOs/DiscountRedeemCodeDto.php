<?php

namespace Esign\ShopifyData\DTOs;

use Spatie\LaravelData\Data;

/**
 * A code that a customer can use at checkout to receive a discount.
 *
 * Based on Shopify's DiscountRedeemCode GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/DiscountRedeemCode
 */
class DiscountRedeemCodeDto extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $code = null,
        public ?int $asyncUsageCount = null,
    ) {}
}
