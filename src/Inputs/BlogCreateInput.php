<?php

namespace Esign\ShopifyData\Inputs;

use Esign\ShopifyData\Inputs\Base\BaseInput;

/**
 * The input fields to create a blog.
 *
 * Based on Shopify's BlogCreateInput GraphQL input type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/input-objects/BlogCreateInput
 */
class BlogCreateInput extends BaseInput
{
    public function __construct(
        public string $title,
        public ?string $handle = null,
        public ?string $commentPolicy = null,
        public ?string $templateSuffix = null,
        /** @var MetafieldInput[]|null */
        public ?array $metafields = null,
    ) {}
}
