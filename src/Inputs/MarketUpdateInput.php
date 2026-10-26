<?php

namespace Esign\ShopifyData\Inputs;

use Esign\ShopifyData\Inputs\Base\BaseInput;

/**
 * The input fields used to update a market.
 *
 * Based on Shopify's MarketUpdateInput GraphQL input type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/input-objects/MarketUpdateInput
 */
class MarketUpdateInput extends BaseInput
{
    public function __construct(
        public ?string $name = null,
        public ?string $handle = null,
        public ?string $status = null,
        /** @var array|null MarketConditionsUpdateInput value. */
        public ?array $conditions = null,
        public ?string $returnPolicyProfileId = null,
        public ?bool $removeReturnPolicyProfile = null,
    ) {}
}
