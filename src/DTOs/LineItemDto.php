<?php

namespace Esign\ShopifyData\DTOs;

use Esign\ShopifyData\Casts\NodesToCollectionOfModelsCaster;
use Illuminate\Support\Collection;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

/**
 * Represents a single product or service that a customer purchased in an order.
 *
 * Each line item is associated with a product variant and can have multiple
 * discount allocations.
 *
 * Based on Shopify's LineItem GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/LineItem
 */
class LineItemDto extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $name = null,
        public ?string $title = null,
        public ?int $quantity = null,
        public ?string $sku = null,
        public ?string $variantTitle = null,
        public ?string $vendor = null,
        public ?ProductVariantDto $variant = null,
        public ?ProductDto $product = null,
        public ?MoneyBagDto $originalUnitPriceSet = null,
        public ?MoneyBagDto $discountedUnitPriceSet = null,
        public ?MoneyBagDto $originalTotalSet = null,
        public ?MoneyBagDto $discountedTotalSet = null,
        public ?WeightDto $weight = null,
        #[WithCast(NodesToCollectionOfModelsCaster::class, model: TaxLineDto::class)]
        public ?Collection $taxLines = null,
        #[WithCast(NodesToCollectionOfModelsCaster::class, model: DiscountAllocationDto::class)]
        public ?Collection $discountAllocations = null,
        public ?bool $requiresShipping = null,
        public ?bool $taxable = null,
    ) {}
}
