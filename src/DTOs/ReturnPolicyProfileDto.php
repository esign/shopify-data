<?php

namespace Esign\ShopifyData\DTOs;

use Spatie\LaravelData\Data;

/**
 * A return policy profile: a set of structured return rules that markets reference.
 *
 * Based on Shopify's ReturnPolicyProfile GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/ReturnPolicyProfile
 */
class ReturnPolicyProfileDto extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $name = null,
        public ?bool $default = null,
        /** Object type (ReturnPoliciesReturnRules), kept as raw array. */
        public ?array $returnRules = null,
        /** Object type (ReturnPoliciesEditRules), kept as raw array. */
        public ?array $editRules = null,
        public ?string $updatedAt = null,
    ) {}
}
