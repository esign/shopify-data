<?php

namespace Esign\ShopifyData\Inputs;

use Esign\ShopifyData\Inputs\Base\BaseInput;

/**
 * The input fields for company location when creating or updating a company location.
 *
 * Based on Shopify's CompanyLocationInput GraphQL input type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/input-objects/CompanyLocationInput
 */
class CompanyLocationInput extends BaseInput
{
    public function __construct(
        public ?string $name = null,
        public ?string $note = null,
        public ?string $phone = null,
        public ?string $locale = null,
        public ?string $externalId = null,
        public ?CompanyAddressInput $billingAddress = null,
        public ?CompanyAddressInput $shippingAddress = null,
        public ?bool $billingSameAsShipping = null,
        public ?string $taxRegistrationId = null,
        /** @var string[]|null List of TaxExemption enum values. */
        public ?array $taxExemptions = null,
    ) {}
}
