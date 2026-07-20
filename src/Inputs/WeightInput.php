<?php

namespace Esign\ShopifyData\Inputs;

use Esign\ShopifyData\Enums\WeightUnit;
use Esign\ShopifyData\Inputs\Base\BaseInput;

/**
 * The input fields for the weight unit and value inputs.
 *
 * Based on Shopify's WeightInput GraphQL input type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/input-objects/WeightInput
 */
class WeightInput extends BaseInput
{
    public function __construct(
        public float $value,
        public WeightUnit $unit,
    ) {}
}
