<?php

namespace Esign\ShopifyData\DTOs;

use Spatie\LaravelData\Data;

/**
 * Represents a billing or shipping address for a company location.
 *
 * Based on Shopify's CompanyAddress GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/CompanyAddress
 */
class CompanyAddressDto extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $address1 = null,
        public ?string $address2 = null,
        public ?string $city = null,
        public ?string $companyName = null,
        public ?string $country = null,
        public ?string $countryCode = null,
        public ?string $firstName = null,
        public ?string $lastName = null,
        public ?string $phone = null,
        public ?string $province = null,
        public ?string $recipient = null,
        public ?string $zip = null,
        public ?string $zoneCode = null,
        /** @var string[]|null */
        public ?array $formattedAddress = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
    ) {}
}
