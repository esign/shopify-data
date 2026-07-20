<?php

namespace Esign\ShopifyData\Inputs;

use Esign\ShopifyData\Inputs\Base\BaseInput;

/**
 * The input fields used to create or update a draft order.
 *
 * Based on Shopify's DraftOrderInput GraphQL input type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/input-objects/DraftOrderInput
 */
class DraftOrderInput extends BaseInput
{
    public function __construct(
        public ?string $email = null,
        public ?string $phone = null,
        public ?string $note = null,
        /** @var string[]|null */
        public ?array $tags = null,
        public ?string $poNumber = null,
        public ?bool $taxExempt = null,
        public ?bool $visibleToCustomer = null,
        public ?bool $useCustomerDefaultAddress = null,
        public ?string $reserveInventoryUntil = null,
        public ?string $presentmentCurrencyCode = null,
        public ?MailingAddressInput $billingAddress = null,
        public ?MailingAddressInput $shippingAddress = null,
        public ?DraftOrderAppliedDiscountInput $appliedDiscount = null,
        /** @var DraftOrderLineItemInput[]|null */
        public ?array $lineItems = null,
        public ?ShippingLineInput $shippingLine = null,
        public ?PurchasingEntityInput $purchasingEntity = null,
        /** @var array[]|null List of AttributeInput values ({key, value}). */
        public ?array $customAttributes = null,
        /** @var MetafieldInput[]|null */
        public ?array $metafields = null,
        public ?bool $allowDiscountCodesInCheckout = null,
        public ?string $sourceName = null,
    ) {}
}
