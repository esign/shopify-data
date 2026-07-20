<?php

namespace Esign\ShopifyData\Inputs;

use Esign\ShopifyData\Inputs\Base\BaseInput;

/**
 * The input fields for a line item included in a draft order.
 *
 * Based on Shopify's DraftOrderLineItemInput GraphQL input type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/input-objects/DraftOrderLineItemInput
 */
class DraftOrderLineItemInput extends BaseInput
{
    public function __construct(
        public int $quantity,
        public ?string $variantId = null,
        public ?string $title = null,
        public ?string $sku = null,
        public ?bool $requiresShipping = null,
        public ?bool $taxable = null,
        public ?DraftOrderAppliedDiscountInput $appliedDiscount = null,
        /** @var array[]|null List of AttributeInput values ({key, value}). */
        public ?array $customAttributes = null,
        public ?WeightInput $weight = null,
        public ?MoneyInput $originalUnitPriceWithCurrency = null,
        public ?MoneyInput $priceOverride = null,
        public ?string $uuid = null,
    ) {}
}
