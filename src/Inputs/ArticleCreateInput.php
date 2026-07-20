<?php

namespace Esign\ShopifyData\Inputs;

use Esign\ShopifyData\Inputs\Base\BaseInput;

/**
 * The input fields to create an article.
 *
 * Based on Shopify's ArticleCreateInput GraphQL input type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/input-objects/ArticleCreateInput
 */
class ArticleCreateInput extends BaseInput
{
    public function __construct(
        public string $blogId,
        public string $title,
        public ?string $body = null,
        public ?string $summary = null,
        public ?string $handle = null,
        /** @var array|null ArticleAuthorInput value ({name}). */
        public ?array $author = null,
        /** @var string[]|null */
        public ?array $tags = null,
        public ?bool $isPublished = null,
        public ?string $publishDate = null,
        public ?string $templateSuffix = null,
        /** @var array|null ArticleImageInput value ({url, altText}). */
        public ?array $image = null,
        /** @var MetafieldInput[]|null */
        public ?array $metafields = null,
    ) {}
}
