<?php

namespace Esign\ShopifyData\DTOs;

use Spatie\LaravelData\Data;

/**
 * The items in the order that qualify for the discount, their quantities,
 * and the total value of the discount.
 *
 * Based on Shopify's DiscountCustomerGets GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/DiscountCustomerGets
 */
class DiscountCustomerGetsDto extends Data
{
    public function __construct(
        public ?bool $appliesOnOneTimePurchase = null,
        public ?bool $appliesOnSubscription = null,
        /** Union type (DiscountCustomerGetsValue), kept as raw array. */
        public ?array $value = null,
        /** Union type (DiscountItems), kept as raw array. */
        public ?array $items = null,
    ) {}
}
