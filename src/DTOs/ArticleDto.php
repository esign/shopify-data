<?php

namespace Esign\ShopifyData\DTOs;

use Esign\ShopifyData\Casts\NodesToCollectionOfModelsCaster;
use Illuminate\Support\Collection;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

/**
 * An article in the blogging system.
 *
 * Based on Shopify's Article GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/Article
 */
class ArticleDto extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $title = null,
        public ?string $handle = null,
        public ?string $body = null,
        public ?string $summary = null,
        public ?array $tags = null,
        public ?bool $isPublished = null,
        public ?string $publishedAt = null,
        public ?string $templateSuffix = null,
        public ?ArticleAuthorDto $author = null,
        public ?BlogDto $blog = null,
        public ?ImageDto $image = null,
        #[WithCast(NodesToCollectionOfModelsCaster::class, model: MetafieldDto::class)]
        public ?Collection $metafields = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
    ) {}
}
