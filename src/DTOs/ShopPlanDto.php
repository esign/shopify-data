<?php

namespace Esign\ShopifyData\DTOs;

use Spatie\LaravelData\Data;

/**
 * The billing plan of the shop.
 *
 * Based on Shopify's ShopPlan GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/ShopPlan
 */
class ShopPlanDto extends Data
{
    public function __construct(
        /** @deprecated Use $publicDisplayName instead. */
        public ?string $displayName = null,
        public ?string $publicDisplayName = null,
        public ?bool $partnerDevelopment = null,
        public ?bool $shopifyPlus = null,
    ) {}
}
