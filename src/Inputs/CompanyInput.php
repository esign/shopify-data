<?php

namespace Esign\ShopifyData\Inputs;

use Esign\ShopifyData\Inputs\Base\BaseInput;

/**
 * The input fields for company attributes when creating or updating a company.
 *
 * Based on Shopify's CompanyInput GraphQL input type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/input-objects/CompanyInput
 */
class CompanyInput extends BaseInput
{
    public function __construct(
        public ?string $name = null,
        public ?string $note = null,
        public ?string $externalId = null,
        public ?string $customerSince = null,
    ) {}
}
