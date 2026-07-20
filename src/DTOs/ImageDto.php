<?php

namespace Esign\ShopifyData\DTOs;

use Spatie\LaravelData\Data;

/**
 * Represents an image resource.
 *
 * Based on Shopify's Image GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/Image
 */
class ImageDto extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $altText = null,
        public ?string $url = null,
        public ?int $width = null,
        public ?int $height = null,
        public ?string $thumbhash = null,
    ) {}
}
