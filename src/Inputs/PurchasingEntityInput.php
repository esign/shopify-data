<?php

namespace Esign\ShopifyData\Inputs;

use Esign\ShopifyData\Inputs\Base\BaseInput;

/**
 * The input fields for a purchasing entity: either an individual customer
 * or, for B2B, a purchasing company.
 *
 * Based on Shopify's PurchasingEntityInput GraphQL input type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/input-objects/PurchasingEntityInput
 */
class PurchasingEntityInput extends BaseInput
{
    public function __construct(
        public ?string $customerId = null,
        /** @var array|null PurchasingCompanyInput value ({companyContactId, companyId, companyLocationId}). */
        public ?array $purchasingCompany = null,
    ) {}
}
