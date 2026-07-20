<?php

namespace Esign\ShopifyData\DTOs;

use Esign\ShopifyData\Casts\NodesToCollectionOfModelsCaster;
use Illuminate\Support\Collection;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

/**
 * The product property names, such as "Size", "Color", and "Material".
 *
 * Based on Shopify's ProductOption GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/ProductOption
 */
class ProductOptionDto extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $name = null,
        public ?int $position = null,
        /** @var string[]|null */
        public ?array $values = null,
        #[WithCast(NodesToCollectionOfModelsCaster::class, model: ProductOptionValueDto::class)]
        public ?Collection $optionValues = null,
    ) {}
}
