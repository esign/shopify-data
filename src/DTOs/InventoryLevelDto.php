<?php

namespace Esign\ShopifyData\DTOs;

use Esign\ShopifyData\Casts\NodesToCollectionOfModelsCaster;
use Illuminate\Support\Collection;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

/**
 * The quantities of an inventory item that are related to a specific location.
 *
 * Based on Shopify's InventoryLevel GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/InventoryLevel
 */
class InventoryLevelDto extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?InventoryItemDto $item = null,
        public ?LocationDto $location = null,
        #[WithCast(NodesToCollectionOfModelsCaster::class, model: InventoryQuantityDto::class)]
        public ?Collection $quantities = null,
        public ?bool $canDeactivate = null,
        public ?string $deactivationAlert = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
    ) {}
}
