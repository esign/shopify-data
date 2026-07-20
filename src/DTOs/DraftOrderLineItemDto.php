<?php

namespace Esign\ShopifyData\DTOs;

use Esign\ShopifyData\Casts\NodesToCollectionOfModelsCaster;
use Illuminate\Support\Collection;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

/**
 * The line item of the draft order.
 *
 * Based on Shopify's DraftOrderLineItem GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/DraftOrderLineItem
 */
class DraftOrderLineItemDto extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $name = null,
        public ?string $title = null,
        public ?int $quantity = null,
        public ?string $sku = null,
        public ?string $vendor = null,
        public ?string $variantTitle = null,
        public ?bool $custom = null,
        public ?bool $requiresShipping = null,
        public ?bool $taxable = null,
        public ?ProductDto $product = null,
        public ?ProductVariantDto $variant = null,
        public ?ImageDto $image = null,
        public ?WeightDto $weight = null,
        public ?DraftOrderAppliedDiscountDto $appliedDiscount = null,
        public ?MoneyBagDto $originalUnitPriceSet = null,
        public ?MoneyBagDto $originalTotalSet = null,
        /** @deprecated Use $approximateDiscountedUnitPriceSet instead. */
        public ?MoneyBagDto $discountedUnitPriceSet = null,
        public ?MoneyBagDto $approximateDiscountedUnitPriceSet = null,
        public ?MoneyBagDto $discountedTotalSet = null,
        public ?MoneyBagDto $totalDiscountSet = null,
        #[WithCast(NodesToCollectionOfModelsCaster::class, model: TaxLineDto::class)]
        public ?Collection $taxLines = null,
        #[WithCast(NodesToCollectionOfModelsCaster::class, model: AttributeDto::class)]
        public ?Collection $customAttributes = null,
    ) {}
}
