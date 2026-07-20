<?php

namespace Esign\ShopifyData\DTOs;

use Spatie\LaravelData\Data;

/**
 * Pagination information about a GraphQL connection.
 *
 * Based on Shopify's PageInfo GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/PageInfo
 */
class PageInfoDto extends Data
{
    public function __construct(
        public ?bool $hasNextPage = null,
        public ?bool $hasPreviousPage = null,
        public ?string $startCursor = null,
        public ?string $endCursor = null,
    ) {}
}
