<?php

namespace Esign\ShopifyData\Inputs\Base;

use Spatie\LaravelData\Data;

/**
 * Base Input class for all Shopify Input objects.
 *
 * This abstract class provides a foundation for all Input objects
 * used in GraphQL mutations. It extends Spatie's Data class to provide
 * type safety, validation, and extensibility features.
 *
 * All Input objects in this package can be extended in individual Shopify apps
 * to add custom properties or override methods as needed.
 */
abstract class BaseInput extends Data
{
    public function toArray(): array
    {
        // Filter out null values only, so optional fields are omitted from
        // GraphQL variables while falsy values (false, 0, '') are preserved.
        return array_filter(parent::toArray(), fn ($value) => $value !== null);
    }
}
