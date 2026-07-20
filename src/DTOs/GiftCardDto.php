<?php

namespace Esign\ShopifyData\DTOs;

use Spatie\LaravelData\Data;

/**
 * Represents an issued gift card.
 *
 * Based on Shopify's GiftCard GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/GiftCard
 */
class GiftCardDto extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $maskedCode = null,
        public ?string $lastCharacters = null,
        public ?MoneyV2Dto $balance = null,
        public ?MoneyV2Dto $initialValue = null,
        public ?string $note = null,
        public ?bool $enabled = null,
        public ?string $expiresOn = null,
        public ?string $templateSuffix = null,
        public ?CustomerDto $customer = null,
        public ?OrderDto $order = null,
        public ?GiftCardRecipientDto $recipientAttributes = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?string $deactivatedAt = null,
    ) {}
}
