<?php

namespace Esign\ShopifyData\DTOs;

use Esign\ShopifyData\Casts\NodesToCollectionOfModelsCaster;
use Illuminate\Support\Collection;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

/**
 * The record of the line items and transactions that were refunded to a
 * customer, along with restocking instructions for refunded line items.
 *
 * Based on Shopify's Refund GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/Refund
 */
class RefundDto extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $note = null,
        public ?string $legacyResourceId = null,
        public ?OrderDto $order = null,
        public ?MoneyBagDto $totalRefundedSet = null,
        #[WithCast(NodesToCollectionOfModelsCaster::class, model: RefundLineItemDto::class)]
        public ?Collection $refundLineItems = null,
        #[WithCast(NodesToCollectionOfModelsCaster::class, model: OrderTransactionDto::class)]
        public ?Collection $transactions = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
    ) {}
}
