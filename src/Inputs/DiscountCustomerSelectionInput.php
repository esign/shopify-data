<?php

namespace Esign\ShopifyData\Inputs;

use Esign\ShopifyData\Inputs\Base\BaseInput;

/**
 * The input fields for the customers who can use this discount.
 *
 * Based on Shopify's DiscountCustomerSelectionInput GraphQL input type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/input-objects/DiscountCustomerSelectionInput
 */
class DiscountCustomerSelectionInput extends BaseInput
{
    public function __construct(
        public ?bool $all = null,
        /** @var array|null DiscountCustomersInput value ({add, remove}). */
        public ?array $customers = null,
        /** @var array|null DiscountCustomerSegmentsInput value ({add, remove}). */
        public ?array $customerSegments = null,
    ) {}
}
