<?php

namespace Esign\ShopifyData\DTOs;

use Spatie\LaravelData\Data;

/**
 * Represents the destination where the items should be sent upon fulfillment.
 *
 * Based on Shopify's FulfillmentOrderDestination GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/FulfillmentOrderDestination
 */
class FulfillmentOrderDestinationDto extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $address1 = null,
        public ?string $address2 = null,
        public ?string $city = null,
        public ?string $company = null,
        public ?string $countryCode = null,
        public ?string $email = null,
        public ?string $firstName = null,
        public ?string $lastName = null,
        public ?string $phone = null,
        public ?string $province = null,
        public ?string $zip = null,
    ) {}
}
