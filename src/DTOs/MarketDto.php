<?php

namespace Esign\ShopifyData\DTOs;

use Esign\ShopifyData\Casts\NodesToCollectionOfModelsCaster;
use Illuminate\Support\Collection;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

/**
 * A market is a group of one or more regions targeted for international sales,
 * enabling a merchant to serve customers in those areas with localized experiences.
 *
 * Based on Shopify's Market GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/Market
 */
class MarketDto extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $name = null,
        public ?string $handle = null,
        public ?bool $primary = null,
        public ?string $status = null,
        public ?string $type = null,
        /** Union/object type (MarketConditions), kept as raw array. */
        public ?array $conditions = null,
        #[WithCast(NodesToCollectionOfModelsCaster::class, model: MetafieldDto::class)]
        public ?Collection $metafields = null,
    ) {}
}
