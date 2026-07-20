<?php

namespace Esign\ShopifyData\Inputs;

use Esign\ShopifyData\Inputs\Base\BaseInput;

/**
 * The input fields for creating or updating a product.
 *
 * Based on Shopify's ProductInput GraphQL input type.
 *
 * Note: the productUpdate `input` argument is deprecated as of 2026-07.
 * Prefer ProductCreateInput / ProductUpdateInput with the `product` argument.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/input-objects/ProductInput
 */
class ProductInput extends BaseInput
{
    public function __construct(
        public ?string $id = null,
        public ?string $title = null,
        public ?string $descriptionHtml = null,
        public ?string $handle = null,
        public ?string $vendor = null,
        public ?string $productType = null,
        public ?array $tags = null,
        public ?array $metafields = null,
        public ?string $status = null,
        public ?bool $giftCard = null,
        public ?array $collectionsToJoin = null,
        public ?array $collectionsToLeave = null,
    ) {}
}
