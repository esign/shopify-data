<?php

namespace Esign\ShopifyData\DTOs;

use Esign\ShopifyData\Casts\NodesToCollectionOfModelsCaster;
use Illuminate\Support\Collection;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

/**
 * Represents the location where the physical good resides.
 *
 * You can stock inventory at active locations. Active locations that have
 * fulfills_online_orders: true and are configured with a shipping rate,
 * pickup enabled or local delivery will be able to sell from their storefront.
 *
 * Based on Shopify's Location GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/Location
 */
class LocationDto extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $name = null,
        public ?LocationAddressDto $address = null,
        public ?bool $isActive = null,
        public ?bool $fulfillsOnlineOrders = null,
        public ?bool $hasActiveInventory = null,
        public ?bool $shipsInventory = null,
        public ?bool $isFulfillmentService = null,
        public ?bool $addressVerified = null,
        public ?bool $activatable = null,
        public ?bool $deactivatable = null,
        public ?bool $deletable = null,
        public ?bool $hasUnfulfilledOrders = null,
        public ?string $legacyResourceId = null,
        #[WithCast(NodesToCollectionOfModelsCaster::class, model: MetafieldDto::class)]
        public ?Collection $metafields = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
    ) {}
}
