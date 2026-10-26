<?php

namespace Esign\ShopifyData\DTOs;

use Spatie\LaravelData\Data;

/**
 * The record of when a customer consented to receive SMS marketing material.
 *
 * Based on Shopify's CustomerSmsMarketingConsent GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/CustomerSmsMarketingConsent
 */
class CustomerSmsMarketingConsentDto extends Data
{
    public function __construct(
        public ?string $state = null,
        public ?string $optInLevel = null,
        public ?string $collectedFrom = null,
        public ?LocationDto $sourceLocation = null,
        public ?string $updatedAt = null,
    ) {}
}
