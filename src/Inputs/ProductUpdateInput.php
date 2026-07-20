<?php

namespace Esign\ShopifyData\Inputs;

use Esign\ShopifyData\Inputs\Base\BaseInput;

/**
 * The input fields for updating a product.
 *
 * Based on Shopify's ProductUpdateInput GraphQL input type, used by the
 * productUpdate mutation's `product` argument.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/input-objects/ProductUpdateInput
 */
class ProductUpdateInput extends BaseInput
{
    public function __construct(
        public ?string $id = null,
        public ?string $title = null,
        public ?string $descriptionHtml = null,
        public ?string $handle = null,
        public ?string $vendor = null,
        public ?string $productType = null,
        public ?string $category = null,
        /** @var string[]|null */
        public ?array $tags = null,
        /** @var string[]|null */
        public ?array $collectionsToJoin = null,
        /** @var string[]|null */
        public ?array $collectionsToLeave = null,
        /** @var MetafieldInput[]|null */
        public ?array $metafields = null,
        public ?SEOInput $seo = null,
        public ?string $status = null,
        public ?string $templateSuffix = null,
        public ?bool $redirectNewHandle = null,
        public ?bool $requiresSellingPlan = null,
        public ?bool $deleteConflictingConstrainedMetafields = null,
    ) {}
}
