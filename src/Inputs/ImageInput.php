<?php

namespace Esign\ShopifyData\Inputs;

use Esign\ShopifyData\Inputs\Base\BaseInput;

/**
 * The input fields for an image.
 *
 * Based on Shopify's ImageInput GraphQL input type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/input-objects/ImageInput
 */
class ImageInput extends BaseInput
{
    public function __construct(
        public ?string $id = null,
        public ?string $altText = null,
        public ?string $src = null,
    ) {}
}
