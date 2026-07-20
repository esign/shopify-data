<?php

namespace Esign\ShopifyData\Inputs;

use Esign\ShopifyData\Inputs\Base\BaseInput;

/**
 * The input fields for creating a product option.
 *
 * Based on Shopify's OptionCreateInput GraphQL input type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/input-objects/OptionCreateInput
 */
class OptionCreateInput extends BaseInput
{
    public function __construct(
        public ?string $name = null,
        public ?int $position = null,
        /** @var OptionValueCreateInput[]|null */
        public ?array $values = null,
        /** @var array|null LinkedMetafieldCreateInput value. */
        public ?array $linkedMetafield = null,
    ) {}
}
