<?php

namespace Esign\ShopifyData\DTOs;

use Spatie\LaravelData\Data;

/**
 * Represents a recipient who will receive the issued gift card.
 *
 * Based on Shopify's GiftCardRecipient GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/GiftCardRecipient
 */
class GiftCardRecipientDto extends Data
{
    public function __construct(
        public ?CustomerDto $recipient = null,
        public ?string $message = null,
        public ?string $preferredName = null,
        public ?string $sendNotificationAt = null,
    ) {}
}
