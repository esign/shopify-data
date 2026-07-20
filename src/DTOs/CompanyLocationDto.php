<?php

namespace Esign\ShopifyData\DTOs;

use Esign\ShopifyData\Casts\NodesToCollectionOfModelsCaster;
use Illuminate\Support\Collection;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

/**
 * A location or branch of a company that's a customer of the shop.
 *
 * Based on Shopify's CompanyLocation GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/CompanyLocation
 */
class CompanyLocationDto extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $name = null,
        public ?string $note = null,
        public ?string $externalId = null,
        public ?string $phone = null,
        public ?string $locale = null,
        public ?string $currency = null,
        public ?CompanyDto $company = null,
        public ?CompanyAddressDto $billingAddress = null,
        public ?CompanyAddressDto $shippingAddress = null,
        public ?CountDto $ordersCount = null,
        public ?MoneyV2Dto $totalSpent = null,
        #[WithCast(NodesToCollectionOfModelsCaster::class, model: MetafieldDto::class)]
        public ?Collection $metafields = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
    ) {}
}
