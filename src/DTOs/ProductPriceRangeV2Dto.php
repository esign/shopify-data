<?php

namespace Esign\ShopifyData\DTOs;

use Spatie\LaravelData\Data;

/**
 * The price range of the product with prices formatted as decimals.
 *
 * Based on Shopify's ProductPriceRangeV2 GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/ProductPriceRangeV2
 */
class ProductPriceRangeV2Dto extends Data
{
    public function __construct(
        public ?MoneyV2Dto $minVariantPrice = null,
        public ?MoneyV2Dto $maxVariantPrice = null,
    ) {}
}
