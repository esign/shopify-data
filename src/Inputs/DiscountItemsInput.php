<?php

namespace Esign\ShopifyData\Inputs;

use Esign\ShopifyData\Inputs\Base\BaseInput;

/**
 * The input fields for the items attached to a discount. You can specify the
 * discount items by product ID or collection ID.
 *
 * Based on Shopify's DiscountItemsInput GraphQL input type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/input-objects/DiscountItemsInput
 */
class DiscountItemsInput extends BaseInput
{
    public function __construct(
        public ?bool $all = null,
        public ?DiscountCollectionsInput $collections = null,
        public ?DiscountProductsInput $products = null,
    ) {}
}
