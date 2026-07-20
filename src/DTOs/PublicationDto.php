<?php

namespace Esign\ShopifyData\DTOs;

use Spatie\LaravelData\Data;

/**
 * A publication is a group of products and collections that is published to
 * an app, such as the Online Store sales channel.
 *
 * Based on Shopify's Publication GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/Publication
 */
class PublicationDto extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?bool $autoPublish = null,
        public ?bool $supportsFuturePublishing = null,
        /** Interface type (Catalog), kept as raw array. */
        public ?array $catalog = null,
    ) {}
}
