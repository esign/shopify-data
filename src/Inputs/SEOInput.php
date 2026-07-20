<?php

namespace Esign\ShopifyData\Inputs;

use Esign\ShopifyData\Inputs\Base\BaseInput;

/**
 * The input fields for SEO information.
 *
 * Based on Shopify's SEOInput GraphQL input type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/input-objects/SEOInput
 */
class SEOInput extends BaseInput
{
    public function __construct(
        public ?string $title = null,
        public ?string $description = null,
    ) {}
}
