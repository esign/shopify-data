<?php

namespace Esign\ShopifyData\Inputs;

use Esign\ShopifyData\Inputs\Base\BaseInput;

/**
 * The input fields for company contact attributes when creating or updating
 * a company contact.
 *
 * Based on Shopify's CompanyContactInput GraphQL input type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/input-objects/CompanyContactInput
 */
class CompanyContactInput extends BaseInput
{
    public function __construct(
        public ?string $email = null,
        public ?string $firstName = null,
        public ?string $lastName = null,
        public ?string $locale = null,
        public ?string $phone = null,
        public ?string $title = null,
    ) {}
}
