<?php

namespace Esign\ShopifyData\DTOs;

use Esign\ShopifyData\Casts\NodesToCollectionOfModelsCaster;
use Illuminate\Support\Collection;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

/**
 * Represents a version of a product that comes in more than one option,
 * such as size or color.
 *
 * Based on Shopify's ProductVariant GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/ProductVariant
 */
class ProductVariantDto extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $title = null,
        public ?string $sku = null,
        public ?string $barcode = null,
        public ?string $price = null,
        public ?string $compareAtPrice = null,
        public ?ProductDto $product = null,
        public ?int $position = null,
        public ?bool $availableForSale = null,
        public ?bool $taxable = null,
        public ?int $inventoryQuantity = null,
        public ?string $inventoryPolicy = null,
        public ?InventoryItemDto $inventoryItem = null,
        #[WithCast(NodesToCollectionOfModelsCaster::class, model: SelectedOptionDto::class)]
        public ?Collection $selectedOptions = null,
        #[WithCast(NodesToCollectionOfModelsCaster::class, model: MetafieldDto::class)]
        public ?Collection $metafields = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
    ) {}
}
