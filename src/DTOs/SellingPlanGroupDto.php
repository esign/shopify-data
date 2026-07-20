<?php

namespace Esign\ShopifyData\DTOs;

use Esign\ShopifyData\Casts\NodesToCollectionOfModelsCaster;
use Illuminate\Support\Collection;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

/**
 * Represents a selling method (such as "Subscribe and save"), and the
 * selling plans it groups that customers can purchase products with.
 *
 * Based on Shopify's SellingPlanGroup GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/SellingPlanGroup
 */
class SellingPlanGroupDto extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $name = null,
        public ?string $merchantCode = null,
        public ?string $description = null,
        public ?string $summary = null,
        public ?string $appId = null,
        /** @var string[]|null */
        public ?array $options = null,
        public ?int $position = null,
        public ?CountDto $productsCount = null,
        public ?CountDto $productVariantsCount = null,
        #[WithCast(NodesToCollectionOfModelsCaster::class, model: SellingPlanDto::class)]
        public ?Collection $sellingPlans = null,
        #[WithCast(NodesToCollectionOfModelsCaster::class, model: ProductDto::class)]
        public ?Collection $products = null,
        public ?string $createdAt = null,
    ) {}
}
