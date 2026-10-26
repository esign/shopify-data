<?php

namespace Esign\ShopifyData\Inputs;

use Esign\ShopifyData\Inputs\Base\BaseInput;

/**
 * The input fields to issue a gift card.
 *
 * Based on Shopify's GiftCardCreateInput GraphQL input type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/input-objects/GiftCardCreateInput
 */
class GiftCardCreateInput extends BaseInput
{
    public function __construct(
        /** @deprecated As of 2026-10, use $initialAmount instead. Decimal string. */
        public ?string $initialValue = null,
        public ?MoneyInput $initialAmount = null,
        public ?string $code = null,
        public ?string $customerId = null,
        public ?string $expiresOn = null,
        public ?string $note = null,
        public ?GiftCardRecipientInput $recipientAttributes = null,
        public ?string $templateSuffix = null,
    ) {}
}
