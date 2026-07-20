<?php

namespace Esign\ShopifyData\Inputs;

use Esign\ShopifyData\Enums\DraftOrderAppliedDiscountType;
use Esign\ShopifyData\Inputs\Base\BaseInput;

/**
 * The input fields for applying an order-level discount to a draft order.
 *
 * Based on Shopify's DraftOrderAppliedDiscountInput GraphQL input type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/input-objects/DraftOrderAppliedDiscountInput
 */
class DraftOrderAppliedDiscountInput extends BaseInput
{
    public function __construct(
        public float $value,
        public DraftOrderAppliedDiscountType $valueType,
        public ?string $title = null,
        public ?string $description = null,
        public ?MoneyInput $amountWithCurrency = null,
    ) {}
}
