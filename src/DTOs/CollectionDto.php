<?php

namespace Esign\ShopifyData\DTOs;

use Esign\ShopifyData\Casts\NodesToCollectionOfModelsCaster;
use Illuminate\Support\Collection;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

/**
 * Represents a group of products that can be displayed in online stores and
 * other sales channels in categories, which makes it easy for customers to
 * find them.
 *
 * Based on Shopify's Collection GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/Collection
 */
class CollectionDto extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $title = null,
        public ?string $handle = null,
        public ?string $description = null,
        public ?string $descriptionHtml = null,
        public ?string $sortOrder = null,
        public ?string $templateSuffix = null,
        public ?ImageDto $image = null,
        public ?SEODto $seo = null,
        /** @deprecated Use the `sources` field instead. */
        public ?CollectionRuleSetDto $ruleSet = null,
        public ?CountDto $productsCount = null,
        #[WithCast(NodesToCollectionOfModelsCaster::class, model: ProductDto::class)]
        public ?Collection $products = null,
        #[WithCast(NodesToCollectionOfModelsCaster::class, model: MetafieldDto::class)]
        public ?Collection $metafields = null,
        public ?string $legacyResourceId = null,
        public ?string $updatedAt = null,
    ) {}
}
