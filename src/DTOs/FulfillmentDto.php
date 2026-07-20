<?php

namespace Esign\ShopifyData\DTOs;

use Esign\ShopifyData\Casts\NodesToCollectionOfModelsCaster;
use Illuminate\Support\Collection;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

/**
 * Represents a fulfillment.
 *
 * In Shopify, a fulfillment represents a shipment of one or more items in an order.
 * When an order has been completely fulfilled, it means that all the items that are
 * included in the order have been sent to the customer.
 *
 * Based on Shopify's Fulfillment GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/Fulfillment
 */
class FulfillmentDto extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $name = null,
        public ?string $status = null,
        public ?OrderDto $order = null,
        public ?LocationDto $location = null,
        public ?FulfillmentServiceDto $service = null,
        #[WithCast(NodesToCollectionOfModelsCaster::class, model: FulfillmentTrackingInfoDto::class)]
        public ?Collection $trackingInfo = null,
        #[WithCast(NodesToCollectionOfModelsCaster::class, model: FulfillmentLineItemDto::class)]
        public ?Collection $fulfillmentLineItems = null,
        public ?bool $requiresShipping = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?string $inTransitAt = null,
        public ?string $deliveredAt = null,
        public ?string $estimatedDeliveryAt = null,
    ) {}
}
