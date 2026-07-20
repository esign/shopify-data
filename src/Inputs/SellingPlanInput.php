<?php

namespace Esign\ShopifyData\Inputs;

use Esign\ShopifyData\Inputs\Base\BaseInput;

/**
 * The input fields to create or update a selling plan.
 *
 * Based on Shopify's SellingPlanInput GraphQL input type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/input-objects/SellingPlanInput
 */
class SellingPlanInput extends BaseInput
{
    public function __construct(
        public ?string $id = null,
        public ?string $name = null,
        public ?string $description = null,
        /** @var string[]|null */
        public ?array $options = null,
        public ?int $position = null,
        public ?string $category = null,
        /** @var array|null SellingPlanBillingPolicyInput value. */
        public ?array $billingPolicy = null,
        /** @var array|null SellingPlanDeliveryPolicyInput value. */
        public ?array $deliveryPolicy = null,
        /** @var array|null SellingPlanInventoryPolicyInput value. */
        public ?array $inventoryPolicy = null,
        /** @var array[]|null List of SellingPlanPricingPolicyInput values. */
        public ?array $pricingPolicies = null,
        /** @var MetafieldInput[]|null */
        public ?array $metafields = null,
    ) {}
}
