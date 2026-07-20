<?php

namespace Esign\ShopifyData\Inputs;

use Esign\ShopifyData\Inputs\Base\BaseInput;

/**
 * The input fields to create a page.
 *
 * Based on Shopify's PageCreateInput GraphQL input type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/input-objects/PageCreateInput
 */
class PageCreateInput extends BaseInput
{
    public function __construct(
        public string $title,
        public ?string $body = null,
        public ?string $handle = null,
        public ?bool $isPublished = null,
        public ?string $publishDate = null,
        public ?string $templateSuffix = null,
        /** @var MetafieldInput[]|null */
        public ?array $metafields = null,
    ) {}
}
