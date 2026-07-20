<?php

namespace Esign\ShopifyData\Inputs;

use Esign\ShopifyData\Inputs\Base\BaseInput;

/**
 * The input fields to update a blog.
 *
 * Based on Shopify's BlogUpdateInput GraphQL input type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/input-objects/BlogUpdateInput
 */
class BlogUpdateInput extends BaseInput
{
    public function __construct(
        public ?string $title = null,
        public ?string $handle = null,
        public ?string $commentPolicy = null,
        public ?string $templateSuffix = null,
        public ?bool $redirectNewHandle = null,
        /** @var MetafieldInput[]|null */
        public ?array $metafields = null,
    ) {}
}
