<?php

namespace Esign\ShopifyData\Inputs;

use Esign\ShopifyData\Inputs\Base\BaseInput;

/**
 * The input fields required to create a product option value.
 *
 * Based on Shopify's OptionValueCreateInput GraphQL input type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/input-objects/OptionValueCreateInput
 */
class OptionValueCreateInput extends BaseInput
{
    public function __construct(
        public ?string $name = null,
        /** @var array|null LinkedMetafieldValueCreateInput value. */
        public ?array $linkedMetafieldValue = null,
    ) {}
}
