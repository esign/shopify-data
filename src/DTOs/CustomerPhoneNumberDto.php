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
        public ?CustomerSmsMarketingConsentDto $smsMarketingConsent = null,
        /** @deprecated As of 2026-10, use $smsMarketingConsent->state instead. */
        public ?string $marketingState = null,
        /** @deprecated As of 2026-10, use $smsMarketingConsent->optInLevel instead. */
        public ?string $marketingOptInLevel = null,
        /** @deprecated As of 2026-10, use $smsMarketingConsent->updatedAt instead. */
        public ?string $marketingUpdatedAt = null,
        /** @deprecated As of 2026-10, use $smsMarketingConsent->collectedFrom instead. */
        public ?string $marketingCollectedFrom = null,
    ) {}
}
