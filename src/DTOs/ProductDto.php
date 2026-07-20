<?php

namespace Esign\ShopifyData\DTOs;

use Esign\ShopifyData\Casts\NodesToCollectionOfModelsCaster;
use Illuminate\Support\Collection;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

/**
 * Represents a product in a merchant's store.
 *
 * Products are the goods and services that a merchant sells.
 *
 * Based on Shopify's Product GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/Product
 */
class ProductDto extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $title = null,
        public ?string $handle = null,
        public ?string $description = null,
        public ?string $descriptionHtml = null,
        public ?string $vendor = null,
        public ?string $productType = null,
        public ?array $tags = null,
        public ?string $status = null,
        public ?SEODto $seo = null,
        public ?ProductPriceRangeV2Dto $priceRangeV2 = null,
        #[WithCast(NodesToCollectionOfModelsCaster::class, model: ProductOptionDto::class)]
        public ?Collection $options = null,
        public ?int $totalInventory = null,
        public ?bool $hasOnlyDefaultVariant = null,
        public ?bool $isGiftCard = null,
        public ?string $onlineStoreUrl = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?string $publishedAt = null,
        #[WithCast(NodesToCollectionOfModelsCaster::class, model: ProductVariantDto::class)]
        public ?Collection $variants = null,
        /** @deprecated Use the media connection instead. */
        public ?array $images = null,
        #[WithCast(NodesToCollectionOfModelsCaster::class, model: MediaDto::class)]
        public ?Collection $media = null,
        #[WithCast(NodesToCollectionOfModelsCaster::class, model: MetafieldDto::class)]
        public ?Collection $metafields = null,
    ) {}
}
