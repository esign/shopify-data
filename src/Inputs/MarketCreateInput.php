<?php

namespace Esign\ShopifyData\Inputs;

use Esign\ShopifyData\Inputs\Base\BaseInput;

/**
 * The input fields required to create a market.
 *
 * Based on Shopify's MarketCreateInput GraphQL input type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/input-objects/MarketCreateInput
 */
class MarketCreateInput extends BaseInput
{
    public function __construct(
        public string $name,
        public ?string $handle = null,
        public ?string $status = null,
        /** @var array|null MarketConditionsInput value. */
        public ?array $conditions = null,
        /** When omitted, the market inherits the return policy profile of its parent market. */
        public ?string $returnPolicyProfileId = null,
    ) {}
}
