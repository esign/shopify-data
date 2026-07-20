<?php

namespace Esign\ShopifyData\Inputs;

use Esign\ShopifyData\Inputs\Base\BaseInput;

/**
 * The input fields for creating a publication.
 *
 * Based on Shopify's PublicationCreateInput GraphQL input type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/input-objects/PublicationCreateInput
 */
class PublicationCreateInput extends BaseInput
{
    public function __construct(
        public ?string $catalogId = null,
        public ?bool $autoPublish = null,
        public ?string $defaultState = null,
    ) {}
}
