<?php

namespace Esign\ShopifyData\Inputs;

use Esign\ShopifyData\Inputs\Base\BaseInput;

/**
 * The input fields for collections attached to a discount.
 *
 * Based on Shopify's DiscountCollectionsInput GraphQL input type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/input-objects/DiscountCollectionsInput
 */
class DiscountCollectionsInput extends BaseInput
{
    public function __construct(
        /** @var string[]|null Collection IDs to add. */
        public ?array $add = null,
        /** @var string[]|null Collection IDs to remove. */
        public ?array $remove = null,
    ) {}
}
