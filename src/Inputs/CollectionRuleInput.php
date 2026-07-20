<?php

namespace Esign\ShopifyData\Inputs;

use Esign\ShopifyData\Enums\CollectionRuleColumn;
use Esign\ShopifyData\Enums\CollectionRuleRelation;
use Esign\ShopifyData\Inputs\Base\BaseInput;

/**
 * The input fields for a rule to associate with a collection.
 *
 * Based on Shopify's CollectionRuleInput GraphQL input type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/input-objects/CollectionRuleInput
 */
class CollectionRuleInput extends BaseInput
{
    public function __construct(
        public CollectionRuleColumn $column,
        public CollectionRuleRelation $relation,
        public string $condition,
        public ?string $conditionObjectId = null,
    ) {}
}
