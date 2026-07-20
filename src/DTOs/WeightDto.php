<?php

namespace Esign\ShopifyData\DTOs;

use Esign\ShopifyData\Enums\WeightUnit;
use Spatie\LaravelData\Data;

/**
 * A weight measurement with its numeric value and unit.
 *
 * Used throughout the API for shipping calculations, delivery conditions,
 * order line items, and inventory measurements.
 *
 * Based on Shopify's Weight GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/Weight
 */
class WeightDto extends Data
{
    public function __construct(
        public ?float $value = null,
        public ?WeightUnit $unit = null,
    ) {}
}
