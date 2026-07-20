<?php

namespace Esign\ShopifyData\DTOs;

use Esign\ShopifyData\Casts\NodesToCollectionOfModelsCaster;
use Illuminate\Support\Collection;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

/**
 * Represents the shipping details that the customer chose for their order.
 *
 * Based on Shopify's ShippingLine GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/ShippingLine
 */
class ShippingLineDto extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $title = null,
        public ?string $code = null,
        public ?string $carrierIdentifier = null,
        public ?string $source = null,
        public ?string $deliveryCategory = null,
        public ?string $shippingRateHandle = null,
        public ?string $phone = null,
        public ?MoneyBagDto $originalPriceSet = null,
        public ?MoneyBagDto $discountedPriceSet = null,
        public ?MoneyBagDto $currentDiscountedPriceSet = null,
        public ?bool $custom = null,
        public ?bool $isRemoved = null,
        #[WithCast(NodesToCollectionOfModelsCaster::class, model: TaxLineDto::class)]
        public ?Collection $taxLines = null,
        #[WithCast(NodesToCollectionOfModelsCaster::class, model: DiscountAllocationDto::class)]
        public ?Collection $discountAllocations = null,
    ) {}
}
