<?php

namespace Esign\ShopifyData\Inputs;

use Esign\ShopifyData\Inputs\Base\BaseInput;

/**
 * The input fields required to create or update a collection.
 *
 * Based on Shopify's CollectionInput GraphQL input type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/input-objects/CollectionInput
 */
class CollectionInput extends BaseInput
{
    public function __construct(
        public ?string $id = null,
        public ?string $title = null,
        public ?string $descriptionHtml = null,
        public ?string $handle = null,
        public ?ImageInput $image = null,
        /** @var string[]|null Initial list of product IDs; only available on create. */
        public ?array $products = null,
        public ?CollectionRuleSetInput $ruleSet = null,
        public ?string $templateSuffix = null,
        public ?string $sortOrder = null,
        /** @var MetafieldInput[]|null */
        public ?array $metafields = null,
        public ?SEOInput $seo = null,
        public ?bool $redirectNewHandle = null,
    ) {}
}
