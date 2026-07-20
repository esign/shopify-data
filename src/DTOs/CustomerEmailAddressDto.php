<?php

namespace Esign\ShopifyData\DTOs;

use Spatie\LaravelData\Data;

/**
 * Information about a customer's email address.
 *
 * Based on Shopify's CustomerEmailAddress GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/CustomerEmailAddress
 */
class CustomerEmailAddressDto extends Data
{
    public function __construct(
        public ?string $emailAddress = null,
        public ?string $marketingState = null,
        public ?string $marketingOptInLevel = null,
        public ?string $marketingUpdatedAt = null,
        public ?string $openTrackingLevel = null,
        public ?bool $validFormat = null,
    ) {}
}
