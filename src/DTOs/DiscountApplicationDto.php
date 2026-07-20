<?php

namespace Esign\ShopifyData\DTOs;

use Spatie\LaravelData\Data;

/**
 * Captures the intentions of a discount source at the time of application.
 *
 * Based on Shopify's DiscountApplication GraphQL interface. Concrete types
 * (AutomaticDiscountApplication, DiscountCodeApplication, ManualDiscountApplication,
 * ScriptDiscountApplication) share these fields; type-specific fields such as
 * DiscountCodeApplication.code can be captured through inline fragments and
 * hydrated via the value array.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/interfaces/DiscountApplication
 */
class DiscountApplicationDto extends Data
{
    public function __construct(
        public ?string $allocationMethod = null,
        public ?int $index = null,
        public ?string $targetSelection = null,
        public ?string $targetType = null,
        /** Union type (MoneyV2 | PricingPercentageValue), kept as raw array. */
        public ?array $value = null,
    ) {}
}
