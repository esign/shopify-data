<?php

namespace Esign\ShopifyData\DTOs;

use Spatie\LaravelData\Data;

/**
 * SEO information for a resource, such as the SEO title and description.
 *
 * Based on Shopify's SEO GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/SEO
 */
class SEODto extends Data
{
    public function __construct(
        public ?string $title = null,
        public ?string $description = null,
    ) {}
}
