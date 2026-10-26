<?php

namespace Esign\ShopifyData\DTOs;

use Spatie\LaravelData\Data;

/**
 * A barcode associated with a product variant.
 *
 * Based on Shopify's ProductVariantBarcode GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/ProductVariantBarcode
 */
class ProductVariantBarcodeDto extends Data
{
    public function __construct(
        public ?string $value = null,
        public ?string $type = null,
    ) {}
}
