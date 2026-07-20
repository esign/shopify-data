<?php

namespace Esign\ShopifyData\Inputs;

use Esign\ShopifyData\Inputs\Base\BaseInput;

/**
 * The input fields for products and product variants attached to a discount.
 *
 * Based on Shopify's DiscountProductsInput GraphQL input type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/input-objects/DiscountProductsInput
 */
class DiscountProductsInput extends BaseInput
{
    public function __construct(
        /** @var string[]|null Product IDs to add. */
        public ?array $productsToAdd = null,
        /** @var string[]|null Product IDs to remove. */
        public ?array $productsToRemove = null,
        /** @var string[]|null Product variant IDs to add. */
        public ?array $productVariantsToAdd = null,
        /** @var string[]|null Product variant IDs to remove. */
        public ?array $productVariantsToRemove = null,
    ) {}
}
