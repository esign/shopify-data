<?php

namespace Esign\ShopifyData\DTOs;

use Spatie\LaravelData\Data;

/**
 * A fulfillment service is a third party warehouse that prepares and ships
 * orders on behalf of the store owner.
 *
 * Based on Shopify's FulfillmentService GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/FulfillmentService
 */
class FulfillmentServiceDto extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $handle = null,
        public ?string $serviceName = null,
        public ?string $type = null,
        public ?string $callbackUrl = null,
        public ?bool $inventoryManagement = null,
        public ?bool $trackingSupport = null,
        public ?LocationDto $location = null,
    ) {}
}
