<?php

namespace Esign\ShopifyData\DTOs;

use Spatie\LaravelData\Data;

/**
 * Represents a generic custom attribute, such as whether an order is a
 * customer's first, using a key-value pair.
 *
 * Based on Shopify's Attribute GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/Attribute
 */
class AttributeDto extends Data
{
    public function __construct(
        public ?string $key = null,
        public ?string $value = null,
    ) {}
}
