<?php

namespace Esign\ShopifyData\Inputs;

use Esign\ShopifyData\Inputs\Base\BaseInput;

/**
 * The input fields and values to use when creating or updating a customer.
 *
 * Based on Shopify's CustomerInput GraphQL input type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/input-objects/CustomerInput
 */
class CustomerInput extends BaseInput
{
    public function __construct(
        public ?string $id = null,
        public ?string $email = null,
        public ?string $firstName = null,
        public ?string $lastName = null,
        public ?string $phone = null,
        public ?string $locale = null,
        public ?string $note = null,
        public ?array $tags = null,
        /** @deprecated Use the customerAddressCreate, customerAddressUpdate and customerAddressDelete mutations instead. */
        public ?array $addresses = null,
        public ?array $metafields = null,
        public ?bool $taxExempt = null,
        public ?array $taxExemptions = null,
        public ?string $multipassIdentifier = null,
    ) {}
}
