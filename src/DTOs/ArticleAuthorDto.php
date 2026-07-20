<?php

namespace Esign\ShopifyData\DTOs;

use Spatie\LaravelData\Data;

/**
 * Represents an article author in an Article.
 *
 * Based on Shopify's ArticleAuthor GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/ArticleAuthor
 */
class ArticleAuthorDto extends Data
{
    public function __construct(
        public ?string $name = null,
    ) {}
}
