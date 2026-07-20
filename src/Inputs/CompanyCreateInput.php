<?php

namespace Esign\ShopifyData\Inputs;

use Esign\ShopifyData\Inputs\Base\BaseInput;

/**
 * The input fields for creating a company with its associated main contact
 * and location.
 *
 * Based on Shopify's CompanyCreateInput GraphQL input type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/input-objects/CompanyCreateInput
 */
class CompanyCreateInput extends BaseInput
{
    public function __construct(
        public CompanyInput $company,
        public ?CompanyContactInput $companyContact = null,
        public ?CompanyLocationInput $companyLocation = null,
    ) {}
}
