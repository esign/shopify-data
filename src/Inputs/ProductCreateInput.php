<?php

namespace Esign\ShopifyData\Inputs;

use Esign\ShopifyData\Inputs\Base\BaseInput;

/**
 * The input fields required to create a product.
 *
 * Based on Shopify's ProductCreateInput GraphQL input type, used by the
 * productCreate mutation's `product` argument.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/input-objects/ProductCreateInput
 */
class ProductCreateInput extends BaseInput
{
    public function __construct(
        public ?string $title = null,
        public ?string $descriptionHtml = null,
        public ?string $handle = null,
        public ?string $vendor = null,
        public ?string $productType = null,
        public ?string $category = null,
        /** @var string[]|null */
        public ?array $tags = null,
        public ?bool $giftCard = null,
        /** @var string[]|null */
        public ?array $collectionsToJoin = null,
        /** @var MetafieldInput[]|null */
        public ?array $metafields = null,
        /** @var OptionCreateInput[]|null */
        public ?array $productOptions = null,
        public ?SEOInput $seo = null,
        public ?string $status = null,
        public ?string $templateSuffix = null,
        public ?bool $requiresSellingPlan = null,
        public ?string $combinedListingRole = null,
    ) {}
}
