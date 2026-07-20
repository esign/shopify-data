<?php

namespace Esign\ShopifyData\DTOs;

use Spatie\LaravelData\Data;

/**
 * Represents how a product can be sold and purchased, such as a subscription
 * with a specific billing and delivery policy.
 *
 * Based on Shopify's SellingPlan GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/SellingPlan
 */
class SellingPlanDto extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $name = null,
        public ?string $description = null,
        /** @var string[]|null */
        public ?array $options = null,
        public ?int $position = null,
        public ?string $category = null,
        /** Union type (SellingPlanBillingPolicy), kept as raw array. */
        public ?array $billingPolicy = null,
        /** Union type (SellingPlanDeliveryPolicy), kept as raw array. */
        public ?array $deliveryPolicy = null,
        /** Union type list (SellingPlanPricingPolicy), kept as raw array. */
        public ?array $pricingPolicies = null,
        /** Union type (SellingPlanInventoryPolicy), kept as raw array. */
        public ?array $inventoryPolicy = null,
        public ?string $createdAt = null,
    ) {}
}
