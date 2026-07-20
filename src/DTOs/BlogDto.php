<?php

namespace Esign\ShopifyData\DTOs;

use Esign\ShopifyData\Casts\NodesToCollectionOfModelsCaster;
use Illuminate\Support\Collection;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

/**
 * Shopify stores come with a built-in blogging engine, allowing a shop to
 * have one or more blogs.
 *
 * Based on Shopify's Blog GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/Blog
 */
class BlogDto extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $title = null,
        public ?string $handle = null,
        public ?string $commentPolicy = null,
        public ?string $templateSuffix = null,
        public ?CountDto $articlesCount = null,
        #[WithCast(NodesToCollectionOfModelsCaster::class, model: ArticleDto::class)]
        public ?Collection $articles = null,
        #[WithCast(NodesToCollectionOfModelsCaster::class, model: MetafieldDto::class)]
        public ?Collection $metafields = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
    ) {}
}
