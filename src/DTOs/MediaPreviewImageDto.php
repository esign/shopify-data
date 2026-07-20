<?php

namespace Esign\ShopifyData\DTOs;

use Esign\ShopifyData\Enums\MediaPreviewImageStatus;
use Spatie\LaravelData\Data;

/**
 * Represents the preview image for a media.
 *
 * Based on Shopify's MediaPreviewImage GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/MediaPreviewImage
 */
class MediaPreviewImageDto extends Data
{
    public function __construct(
        public ?ImageDto $image = null,
        public ?MediaPreviewImageStatus $status = null,
    ) {}
}
