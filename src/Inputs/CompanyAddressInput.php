<?php

namespace Esign\ShopifyData\Inputs;

use Esign\ShopifyData\Inputs\Base\BaseInput;

/**
 * The input fields to create or update the address of a company location.
 *
 * Based on Shopify's CompanyAddressInput GraphQL input type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/input-objects/CompanyAddressInput
 */
class CompanyAddressInput extends BaseInput
{
    public function __construct(
        public ?string $address1 = null,
        public ?string $address2 = null,
        public ?string $city = null,
        public ?string $countryCode = null,
        public ?string $firstName = null,
        public ?string $lastName = null,
        public ?string $phone = null,
        public ?string $recipient = null,
        public ?string $zip = null,
        public ?string $zoneCode = null,
    ) {}
}
