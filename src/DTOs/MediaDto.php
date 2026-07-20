<?php

namespace Esign\ShopifyData\DTOs;

use Esign\ShopifyData\Enums\MediaContentType;
use Esign\ShopifyData\Enums\MediaStatus;
use Spatie\LaravelData\Data;

/**
 * Represents a media object attached to a resource.
 *
 * Based on Shopify's Media GraphQL interface (implemented by MediaImage,
 * Video, ExternalVideo and Model3d). The shared interface fields are always
 * available; $mimeType, $image and $originalSource are only populated when
 * the node is a MediaImage and the query includes an `... on MediaImage`
 * fragment. Check $mediaContentType to know the concrete type. Type-specific
 * fields of Video, ExternalVideo and Model3d are not modelled; use
 * MediaImageDto directly when hydrating nodes that are known to be images.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/interfaces/Media
 */
class MediaDto extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $alt = null,
        public ?MediaContentType $mediaContentType = null,
        public ?MediaStatus $status = null,
        public ?MediaPreviewImageDto $preview = null,
        public ?string $mimeType = null,
        public ?ImageDto $image = null,
        public ?MediaImageOriginalSourceDto $originalSource = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
    ) {}
}
