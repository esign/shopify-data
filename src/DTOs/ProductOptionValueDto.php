<?php

namespace Esign\ShopifyData\DTOs;

use Spatie\LaravelData\Data;

/**
 * The product option value names, such as "Red", "Blue" and "Green" for a
 * "Color" option.
 *
 * Based on Shopify's ProductOptionValue GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/ProductOptionValue
 */
class ProductOptionValueDto extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $name = null,
        public ?bool $hasVariants = null,
    ) {}
}
