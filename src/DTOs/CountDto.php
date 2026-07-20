<?php

namespace Esign\ShopifyData\DTOs;

use Spatie\LaravelData\Data;

/**
 * Details for count of elements, such as the count of products in a collection.
 *
 * Based on Shopify's Count GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/Count
 */
class CountDto extends Data
{
    public function __construct(
        public ?int $count = null,
        public ?string $precision = null,
    ) {}
}
