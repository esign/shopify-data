<?php

namespace Esign\ShopifyData\DTOs;

use Spatie\LaravelData\Data;

/**
 * The original source for an image.
 *
 * Based on Shopify's MediaImageOriginalSource GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/MediaImageOriginalSource
 */
class MediaImageOriginalSourceDto extends Data
{
    public function __construct(
        public ?int $fileSize = null,
        public ?string $url = null,
    ) {}
}
