<?php

namespace Esign\ShopifyData\Inputs;

use Esign\ShopifyData\Inputs\Base\BaseInput;

/**
 * The input fields to add a recipient to a gift card.
 *
 * Based on Shopify's GiftCardRecipientInput GraphQL input type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/input-objects/GiftCardRecipientInput
 */
class GiftCardRecipientInput extends BaseInput
{
    public function __construct(
        /** The ID of the customer who will receive the gift card. */
        public string $id,
        public ?string $message = null,
        public ?string $preferredName = null,
        public ?string $sendNotificationAt = null,
    ) {}
}
