<?php

namespace Esign\ShopifyData\Inputs;

use Esign\ShopifyData\Inputs\Base\BaseInput;

/**
 * The input fields to update a gift card.
 *
 * Based on Shopify's GiftCardUpdateInput GraphQL input type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/input-objects/GiftCardUpdateInput
 */
class GiftCardUpdateInput extends BaseInput
{
    public function __construct(
        public ?string $customerId = null,
        public ?string $expiresOn = null,
        public ?string $note = null,
        public ?GiftCardRecipientInput $recipientAttributes = null,
        public ?string $templateSuffix = null,
    ) {}
}
