<?php

namespace Esign\ShopifyData\Inputs;

use Esign\ShopifyData\Inputs\Base\BaseInput;

/**
 * The input fields to update a page.
 *
 * Based on Shopify's PageUpdateInput GraphQL input type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/input-objects/PageUpdateInput
 */
class PageUpdateInput extends BaseInput
{
    public function __construct(
        public ?string $title = null,
        public ?string $body = null,
        public ?string $handle = null,
        public ?bool $isPublished = null,
        public ?string $publishDate = null,
        public ?string $templateSuffix = null,
        public ?bool $redirectNewHandle = null,
        /** @var MetafieldInput[]|null */
        public ?array $metafields = null,
    ) {}
}
