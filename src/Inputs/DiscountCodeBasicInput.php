<?php

namespace Esign\ShopifyData\Inputs;

use Esign\ShopifyData\Inputs\Base\BaseInput;

/**
 * The input fields for creating or updating a basic code discount.
 *
 * Based on Shopify's DiscountCodeBasicInput GraphQL input type, used by the
 * discountCodeBasicCreate and discountCodeBasicUpdate mutations.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/input-objects/DiscountCodeBasicInput
 */
class DiscountCodeBasicInput extends BaseInput
{
    public function __construct(
        public ?string $title = null,
        public ?string $code = null,
        public ?string $startsAt = null,
        public ?string $endsAt = null,
        public ?int $usageLimit = null,
        public ?bool $appliesOncePerCustomer = null,
        public ?int $recurringCycleLimit = null,
        /** @deprecated Shopify deprecated this input field in favour of `context`. */
        public ?DiscountCustomerSelectionInput $customerSelection = null,
        public ?DiscountCustomerGetsInput $customerGets = null,
        public ?DiscountMinimumRequirementInput $minimumRequirement = null,
        public ?DiscountCombinesWithInput $combinesWith = null,
    ) {}
}
