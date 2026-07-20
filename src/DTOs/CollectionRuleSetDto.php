<?php

namespace Esign\ShopifyData\DTOs;

use Esign\ShopifyData\Casts\NodesToCollectionOfModelsCaster;
use Illuminate\Support\Collection;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

/**
 * The set of rules that are used to determine which products are included
 * in a smart collection.
 *
 * Based on Shopify's CollectionRuleSet GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/CollectionRuleSet
 */
class CollectionRuleSetDto extends Data
{
    public function __construct(
        public ?bool $appliedDisjunctively = null,
        #[WithCast(NodesToCollectionOfModelsCaster::class, model: CollectionRuleDto::class)]
        public ?Collection $rules = null,
    ) {}
}
