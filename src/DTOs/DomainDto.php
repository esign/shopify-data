<?php

namespace Esign\ShopifyData\DTOs;

use Spatie\LaravelData\Data;

/**
 * A unique string that represents the address of a Shopify store on the Internet.
 *
 * Based on Shopify's Domain GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/Domain
 */
class DomainDto extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $host = null,
        public ?string $url = null,
        public ?bool $sslEnabled = null,
    ) {}
}
