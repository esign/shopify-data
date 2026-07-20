<?php

namespace Esign\ShopifyData\DTOs;

use Esign\ShopifyData\Casts\NodesToCollectionOfModelsCaster;
use Illuminate\Support\Collection;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

/**
 * Represents a collection of general settings and information about the shop.
 *
 * Based on Shopify's Shop GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/Shop
 */
class ShopDto extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $name = null,
        public ?string $email = null,
        public ?string $contactEmail = null,
        public ?string $description = null,
        public ?string $url = null,
        public ?string $myshopifyDomain = null,
        public ?DomainDto $primaryDomain = null,
        public ?string $currencyCode = null,
        /** @var string[]|null */
        public ?array $enabledPresentmentCurrencies = null,
        public ?string $ianaTimezone = null,
        public ?string $timezoneAbbreviation = null,
        public ?string $weightUnit = null,
        public ?string $unitSystem = null,
        /** @deprecated Use $shopAddress instead. */
        public ?ShopAddressDto $billingAddress = null,
        public ?ShopAddressDto $shopAddress = null,
        public ?ShopPlanDto $plan = null,
        /** @var string[]|null */
        public ?array $shipsToCountries = null,
        public ?bool $taxesIncluded = null,
        public ?bool $taxShipping = null,
        public ?bool $checkoutApiSupported = null,
        public ?bool $setupRequired = null,
        public ?string $orderNumberFormatPrefix = null,
        public ?string $orderNumberFormatSuffix = null,
        #[WithCast(NodesToCollectionOfModelsCaster::class, model: MetafieldDto::class)]
        public ?Collection $metafields = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
    ) {}
}
