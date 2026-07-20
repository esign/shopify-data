<?php

namespace Esign\ShopifyData\Inputs;

use Esign\ShopifyData\Inputs\Base\BaseInput;

/**
 * The input fields required to create or update a selling plan group.
 *
 * Based on Shopify's SellingPlanGroupInput GraphQL input type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/input-objects/SellingPlanGroupInput
 */
class SellingPlanGroupInput extends BaseInput
{
    public function __construct(
        public ?string $name = null,
        public ?string $merchantCode = null,
        public ?string $description = null,
        public ?string $appId = null,
        /** @var string[]|null */
        public ?array $options = null,
        public ?int $position = null,
        /** @var SellingPlanInput[]|null */
        public ?array $sellingPlansToCreate = null,
        /** @var SellingPlanInput[]|null */
        public ?array $sellingPlansToUpdate = null,
        /** @var string[]|null IDs of selling plans to delete. */
        public ?array $sellingPlansToDelete = null,
    ) {}
}
