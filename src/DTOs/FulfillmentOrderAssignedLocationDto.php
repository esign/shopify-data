<?php

namespace Esign\ShopifyData\DTOs;

use Spatie\LaravelData\Data;

/**
 * The fulfillment order's assigned location, which is the location where the
 * fulfillment is expected to happen.
 *
 * Based on Shopify's FulfillmentOrderAssignedLocation GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/FulfillmentOrderAssignedLocation
 */
class FulfillmentOrderAssignedLocationDto extends Data
{
    public function __construct(
        public ?string $name = null,
        public ?string $address1 = null,
        public ?string $address2 = null,
        public ?string $city = null,
        public ?string $countryCode = null,
        public ?string $phone = null,
        public ?string $province = null,
        public ?string $zip = null,
        public ?LocationDto $location = null,
    ) {}
}
