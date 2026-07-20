<?php

namespace Esign\ShopifyData\Inputs;

use Esign\ShopifyData\Inputs\Base\BaseInput;

/**
 * The input fields for a metafield value to set on an owner resource.
 *
 * Based on Shopify's MetafieldsSetInput GraphQL input type, used by the
 * metafieldsSet mutation.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/input-objects/MetafieldsSetInput
 */
class MetafieldsSetInput extends BaseInput
{
    public function __construct(
        public string $ownerId,
        public string $key,
        public string $value,
        public ?string $namespace = null,
        public ?string $type = null,
        public ?string $compareDigest = null,
    ) {}
}
