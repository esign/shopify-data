<?php

namespace Esign\ShopifyData\DTOs;

use Spatie\LaravelData\Data;

/**
 * Represents the address of a location.
 *
 * Based on Shopify's LocationAddress GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/LocationAddress
 */
class LocationAddressDto extends Data
{
    public function __construct(
        public ?string $address1 = null,
        public ?string $address2 = null,
        public ?string $city = null,
        public ?string $country = null,
        public ?string $countryCode = null,
        public ?array $formatted = null,
        public ?float $latitude = null,
        public ?float $longitude = null,
        public ?string $phone = null,
        public ?string $province = null,
        public ?string $provinceCode = null,
        public ?string $zip = null,
    ) {}
}
