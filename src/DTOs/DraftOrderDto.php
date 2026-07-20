<?php

namespace Esign\ShopifyData\DTOs;

use Esign\ShopifyData\Casts\NodesToCollectionOfModelsCaster;
use Illuminate\Support\Collection;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

/**
 * An order that a merchant creates on behalf of a customer.
 *
 * Draft orders are useful for merchants that need to do the following tasks:
 * create new orders for sales made by phone, in person, by chat, or elsewhere;
 * send invoices to customers; use custom items to represent additional costs
 * or products not displayed in a shop's inventory.
 *
 * Based on Shopify's DraftOrder GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/DraftOrder
 */
class DraftOrderDto extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $name = null,
        public ?string $email = null,
        public ?string $phone = null,
        public ?string $note2 = null,
        public ?array $tags = null,
        public ?string $status = null,
        public ?string $invoiceUrl = null,
        public ?string $invoiceSentAt = null,
        public ?string $currencyCode = null,
        public ?string $presentmentCurrencyCode = null,
        public ?string $poNumber = null,
        public ?bool $taxExempt = null,
        public ?bool $taxesIncluded = null,
        public ?bool $visibleToCustomer = null,
        public ?string $reserveInventoryUntil = null,
        public ?CustomerDto $customer = null,
        public ?MailingAddressDto $billingAddress = null,
        public ?MailingAddressDto $shippingAddress = null,
        public ?DraftOrderAppliedDiscountDto $appliedDiscount = null,
        public ?ShippingLineDto $shippingLine = null,
        public ?OrderDto $order = null,
        #[WithCast(NodesToCollectionOfModelsCaster::class, model: DraftOrderLineItemDto::class)]
        public ?Collection $lineItems = null,
        #[WithCast(NodesToCollectionOfModelsCaster::class, model: AttributeDto::class)]
        public ?Collection $customAttributes = null,
        #[WithCast(NodesToCollectionOfModelsCaster::class, model: MetafieldDto::class)]
        public ?Collection $metafields = null,
        public ?MoneyBagDto $totalPriceSet = null,
        public ?MoneyBagDto $subtotalPriceSet = null,
        public ?MoneyBagDto $totalTaxSet = null,
        public ?MoneyBagDto $totalDiscountsSet = null,
        public ?MoneyBagDto $totalShippingPriceSet = null,
        public ?string $totalWeight = null,
        public ?string $completedAt = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
    ) {}
}
