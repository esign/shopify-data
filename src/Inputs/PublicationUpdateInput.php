<?php

namespace Esign\ShopifyData\Inputs;

use Esign\ShopifyData\Inputs\Base\BaseInput;

/**
 * The input fields for updating a publication.
 *
 * Based on Shopify's PublicationUpdateInput GraphQL input type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/input-objects/PublicationUpdateInput
 */
class PublicationUpdateInput extends BaseInput
{
    public function __construct(
        public ?bool $autoPublish = null,
        /** @var string[]|null IDs of publishable resources to add. */
        public ?array $publishablesToAdd = null,
        /** @var string[]|null IDs of publishable resources to remove. */
        public ?array $publishablesToRemove = null,
    ) {}
}
