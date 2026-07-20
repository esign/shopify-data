<?php

namespace Esign\ShopifyData\DTOs;

use Esign\ShopifyData\Casts\NodesToCollectionOfModelsCaster;
use Illuminate\Support\Collection;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

/**
 * Represents information about a company which is also a customer of the shop.
 *
 * Based on Shopify's Company GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/Company
 */
class CompanyDto extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $name = null,
        public ?string $note = null,
        public ?string $externalId = null,
        public ?string $lifetimeDuration = null,
        public ?CompanyContactDto $mainContact = null,
        public ?CountDto $contactsCount = null,
        public ?CountDto $locationsCount = null,
        public ?CountDto $ordersCount = null,
        public ?MoneyV2Dto $totalSpent = null,
        #[WithCast(NodesToCollectionOfModelsCaster::class, model: CompanyContactDto::class)]
        public ?Collection $contacts = null,
        #[WithCast(NodesToCollectionOfModelsCaster::class, model: CompanyLocationDto::class)]
        public ?Collection $locations = null,
        #[WithCast(NodesToCollectionOfModelsCaster::class, model: OrderDto::class)]
        public ?Collection $orders = null,
        #[WithCast(NodesToCollectionOfModelsCaster::class, model: MetafieldDto::class)]
        public ?Collection $metafields = null,
        public ?string $customerSince = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
    ) {}
}
