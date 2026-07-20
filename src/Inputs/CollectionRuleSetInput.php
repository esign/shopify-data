<?php

namespace Esign\ShopifyData\Inputs;

use Esign\ShopifyData\Inputs\Base\BaseInput;

/**
 * The input fields for a rule set of the collection.
 *
 * Based on Shopify's CollectionRuleSetInput GraphQL input type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/input-objects/CollectionRuleSetInput
 */
class CollectionRuleSetInput extends BaseInput
{
    public function __construct(
        public bool $appliedDisjunctively,
        /** @var CollectionRuleInput[]|null */
        public ?array $rules = null,
    ) {}
}
