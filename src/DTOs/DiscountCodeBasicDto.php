<?php

namespace Esign\ShopifyData\DTOs;

use Esign\ShopifyData\Casts\NodesToCollectionOfModelsCaster;
use Illuminate\Support\Collection;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

/**
 * A code discount that offers customers a percentage or fixed amount discount
 * on specific products, collections, or the entire order.
 *
 * Based on Shopify's DiscountCodeBasic GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/DiscountCodeBasic
 */
class DiscountCodeBasicDto extends Data
{
    public function __construct(
        public ?string $title = null,
        public ?string $summary = null,
        public ?string $status = null,
        public ?CountDto $codesCount = null,
        public ?int $asyncUsageCount = null,
        public ?bool $appliesOncePerCustomer = null,
        public ?int $usageLimit = null,
        public ?int $recurringCycleLimit = null,
        public ?DiscountCustomerGetsDto $customerGets = null,
        public ?DiscountCombinesWithDto $combinesWith = null,
        #[WithCast(NodesToCollectionOfModelsCaster::class, model: DiscountRedeemCodeDto::class)]
        public ?Collection $codes = null,
        public ?string $startsAt = null,
        public ?string $endsAt = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
    ) {}
}
