<?php

namespace Esign\ShopifyData\DTOs;

use Esign\ShopifyData\Casts\NodesToCollectionOfModelsCaster;
use Illuminate\Support\Collection;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

/**
 * Represents the goods available to be shipped to a customer. It holds
 * essential information about the goods, including SKU and whether it is
 * tracked.
 *
 * Based on Shopify's InventoryItem GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/InventoryItem
 */
class InventoryItemDto extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $sku = null,
        public ?bool $tracked = null,
        public ?bool $requiresShipping = null,
        public ?string $countryCodeOfOrigin = null,
        public ?string $provinceCodeOfOrigin = null,
        public ?string $harmonizedSystemCode = null,
        public ?MoneyV2Dto $unitCost = null,
        public ?InventoryItemMeasurementDto $measurement = null,
        /** @deprecated Use $variants instead. */
        public ?ProductVariantDto $variant = null,
        #[WithCast(NodesToCollectionOfModelsCaster::class, model: ProductVariantDto::class)]
        public ?Collection $variants = null,
        public ?InventoryLevelDto $inventoryLevel = null,
        #[WithCast(NodesToCollectionOfModelsCaster::class, model: InventoryLevelDto::class)]
        public ?Collection $inventoryLevels = null,
        public ?CountDto $locationsCount = null,
        public ?int $duplicateSkuCount = null,
        public ?string $inventoryHistoryUrl = null,
        public ?string $legacyResourceId = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
    ) {}
}
