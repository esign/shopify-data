<?php

namespace Esign\ShopifyData\DTOs;

use Esign\ShopifyData\Casts\NodesToCollectionOfModelsCaster;
use Illuminate\Support\Collection;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

/**
 * The FulfillmentOrder object represents either an in-progress or a completed
 * request to fulfill items in an order, made to a fulfillment location.
 *
 * Based on Shopify's FulfillmentOrder GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/FulfillmentOrder
 */
class FulfillmentOrderDto extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $status = null,
        public ?string $requestStatus = null,
        public ?string $orderId = null,
        public ?string $orderName = null,
        /** @deprecated Use `order.attribution.handle` instead (not mapped on OrderDto). */
        public ?string $channelId = null,
        public ?FulfillmentOrderAssignedLocationDto $assignedLocation = null,
        public ?FulfillmentOrderDestinationDto $destination = null,
        public ?OrderDto $order = null,
        #[WithCast(NodesToCollectionOfModelsCaster::class, model: FulfillmentOrderLineItemDto::class)]
        public ?Collection $lineItems = null,
        #[WithCast(NodesToCollectionOfModelsCaster::class, model: FulfillmentDto::class)]
        public ?Collection $fulfillments = null,
        public ?string $fulfillAt = null,
        public ?string $fulfillBy = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
    ) {}
}
