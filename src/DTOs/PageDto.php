<?php

namespace Esign\ShopifyData\DTOs;

use Esign\ShopifyData\Casts\NodesToCollectionOfModelsCaster;
use Illuminate\Support\Collection;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

/**
 * A page on the Online Store.
 *
 * Based on Shopify's Page GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/Page
 */
class PageDto extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $title = null,
        public ?string $handle = null,
        public ?string $body = null,
        public ?string $bodySummary = null,
        public ?bool $isPublished = null,
        public ?string $publishedAt = null,
        public ?string $templateSuffix = null,
        #[WithCast(NodesToCollectionOfModelsCaster::class, model: MetafieldDto::class)]
        public ?Collection $metafields = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
    ) {}
}
