<?php

namespace Esign\ShopifyData\Inputs;

use Esign\ShopifyData\Inputs\Base\BaseInput;

/**
 * The input fields for a product variant barcode.
 *
 * Based on Shopify's BarcodeInput GraphQL input type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/input-objects/BarcodeInput
 */
class BarcodeInput extends BaseInput
{
    public function __construct(
        public string $value,
        public ?string $type = null,
    ) {}
}
