<?php

namespace Esign\ShopifyData\DTOs;

use Spatie\LaravelData\Data;

/**
 * Represents an error in the input of a mutation.
 *
 * Based on Shopify's UserError GraphQL type. Specialized user error types
 * returned by individual mutations share these fields.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/UserError
 */
class UserErrorDto extends Data
{
    public function __construct(
        public ?array $field = null,
        public ?string $message = null,
    ) {}
}
