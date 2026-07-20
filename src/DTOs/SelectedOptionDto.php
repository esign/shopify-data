<?php

namespace Esign\ShopifyData\DTOs;

use Spatie\LaravelData\Data;

/**
 * Properties used by customers to select a product variant.
 *
 * Products can have multiple options, like different sizes or colors.
 *
 * Based on Shopify's SelectedOption GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/SelectedOption
 */
class SelectedOptionDto extends Data
{
    public function __construct(
        public ?string $name = null,
        public ?string $value = null,
        // Note: optionValue is ProductOptionValue object, but we'll keep it simple for now
        // If needed, can create ProductOptionValueDto later
    ) {}
}
