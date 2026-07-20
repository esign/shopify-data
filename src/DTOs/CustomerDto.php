<?php

namespace Esign\ShopifyData\DTOs;

use Esign\ShopifyData\Casts\NodesToCollectionOfModelsCaster;
use Illuminate\Support\Collection;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

/**
 * Information about a customer of the shop.
 *
 * Includes contact details, purchase history, and marketing preferences.
 *
 * Based on Shopify's Customer GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/Customer
 */
class CustomerDto extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $firstName = null,
        public ?string $lastName = null,
        /** @deprecated As of 2026-07, use $defaultEmailAddress->emailAddress instead. */
        public ?string $email = null,
        /** @deprecated As of 2026-07, use $defaultPhoneNumber->phoneNumber instead. */
        public ?string $phone = null,
        public ?CustomerEmailAddressDto $defaultEmailAddress = null,
        public ?CustomerPhoneNumberDto $defaultPhoneNumber = null,
        public ?string $displayName = null,
        public ?string $note = null,
        public ?array $tags = null,
        public ?MailingAddressDto $defaultAddress = null,
        /** @deprecated Limited to 250 addresses, use the addressesV2 connection instead. */
        #[WithCast(NodesToCollectionOfModelsCaster::class, model: MailingAddressDto::class)]
        public ?Collection $addresses = null,
        #[WithCast(NodesToCollectionOfModelsCaster::class, model: MailingAddressDto::class)]
        public ?Collection $addressesV2 = null,
        public ?MoneyV2Dto $amountSpent = null,
        public ?int $numberOfOrders = null,
        public ?bool $taxExempt = null,
        public ?bool $verifiedEmail = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
    ) {}
}
