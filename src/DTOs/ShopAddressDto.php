<?php

namespace Esign\ShopifyData\DTOs;

use Spatie\LaravelData\Data;

/**
 * The billing address of a store.
 *
 * Based on Shopify's ShopAddress GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/ShopAddress
 */
class ShopAddressDto extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $address1 = null,
        public ?string $address2 = null,
        public ?string $city = null,
        public ?string $company = null,
        public ?string $country = null,
        public ?string $countryCodeV2 = null,
        public ?string $phone = null,
        public ?string $province = null,
        public ?string $provinceCode = null,
        public ?string $zip = null,
        public ?float $latitude = null,
        public ?float $longitude = null,
        /** @var string[]|null */
        public ?array $formatted = null,
    ) {}
}
