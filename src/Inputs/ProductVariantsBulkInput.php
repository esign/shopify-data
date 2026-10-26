<?php

namespace Esign\ShopifyData\Inputs;

use Esign\ShopifyData\Inputs\Base\BaseInput;

/**
 * The input fields for specifying a product variant to create or update
 * as part of a variant bulk mutation.
 *
 * Based on Shopify's ProductVariantsBulkInput GraphQL input type, used by
 * productVariantsBulkCreate and productVariantsBulkUpdate.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/input-objects/ProductVariantsBulkInput
 */
class ProductVariantsBulkInput extends BaseInput
{
    public function __construct(
        public ?string $id = null,
        /** @deprecated As of 2026-10, use $barcodes instead. Cannot be combined with $barcodes. */
        public ?string $barcode = null,
        /** @var BarcodeInput[]|null Replaces the variant's entire barcode set (max 20). */
        public ?array $barcodes = null,
        public ?string $price = null,
        public ?string $compareAtPrice = null,
        public ?string $inventoryPolicy = null,
        public ?InventoryItemInput $inventoryItem = null,
        /** @var array[]|null List of ProductVariantInventoryQuantityInput values ({availableQuantity, locationId}). */
        public ?array $inventoryQuantities = null,
        public ?string $mediaId = null,
        /** @var string[]|null */
        public ?array $mediaSrc = null,
        /** @var MetafieldInput[]|null */
        public ?array $metafields = null,
        /** @var array[]|null List of VariantOptionValueInput values. */
        public ?array $optionValues = null,
        public ?bool $requiresComponents = null,
        public ?string $taxCode = null,
        public ?bool $taxable = null,
    ) {}
}
