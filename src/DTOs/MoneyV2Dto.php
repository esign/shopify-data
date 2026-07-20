<?php

namespace Esign\ShopifyData\DTOs;

use Spatie\LaravelData\Data;

/**
 * Represents a precise monetary value and its associated currency.
 *
 * Based on Shopify's MoneyV2 GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/MoneyV2
 */
class MoneyV2Dto extends Data
{
    public function __construct(
        public ?string $amount = null,
        public ?string $currencyCode = null,
    ) {}
}
