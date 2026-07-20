<?php

namespace Esign\ShopifyData\DTOs;

use Spatie\LaravelData\Data;

/**
 * Represents a rule that's used to assign products to a collection.
 *
 * Based on Shopify's CollectionRule GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/CollectionRule
 */
class CollectionRuleDto extends Data
{
    public function __construct(
        public ?string $column = null,
        public ?string $relation = null,
        public ?string $condition = null,
        /** Union type (CollectionRuleConditionObject), kept as raw array. */
        public ?array $conditionObject = null,
    ) {}
}
