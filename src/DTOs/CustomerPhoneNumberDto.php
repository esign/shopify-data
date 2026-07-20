<?php

namespace Esign\ShopifyData\DTOs;

use Spatie\LaravelData\Data;

/**
 * Information about a customer's phone number.
 *
 * Based on Shopify's CustomerPhoneNumber GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/CustomerPhoneNumber
 */
class CustomerPhoneNumberDto extends Data
{
    public function __construct(
        public ?string $phoneNumber = null,
        public ?string $marketingState = null,
        public ?string $marketingOptInLevel = null,
        public ?string $marketingUpdatedAt = null,
        public ?string $marketingCollectedFrom = null,
    ) {}
}
