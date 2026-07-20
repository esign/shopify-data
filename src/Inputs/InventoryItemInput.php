<?php

namespace Esign\ShopifyData\Inputs;

use Esign\ShopifyData\Inputs\Base\BaseInput;

/**
 * The input fields for an inventory item.
 *
 * Based on Shopify's InventoryItemInput GraphQL input type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/input-objects/InventoryItemInput
 */
class InventoryItemInput extends BaseInput
{
    public function __construct(
        public ?string $sku = null,
        public ?string $cost = null,
        public ?bool $tracked = null,
        public ?string $countryCodeOfOrigin = null,
        public ?string $provinceCodeOfOrigin = null,
        public ?string $harmonizedSystemCode = null,
        /** @var array[]|null List of CountryHarmonizedSystemCodeInput values. */
        public ?array $countryHarmonizedSystemCodes = null,
        public ?InventoryItemMeasurementInput $measurement = null,
        public ?bool $requiresShipping = null,
    ) {}
}
