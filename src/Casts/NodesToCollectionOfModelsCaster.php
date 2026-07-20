<?php

namespace Esign\ShopifyData\Casts;

use Illuminate\Support\Collection;
use Spatie\LaravelData\Casts\Cast;
use Spatie\LaravelData\Support\Creation\CreationContext;
use Spatie\LaravelData\Support\DataProperty;

class NodesToCollectionOfModelsCaster implements Cast
{
    public function __construct(protected string $model) {}

    public function cast(DataProperty $property, mixed $value, array $properties, CreationContext $context): Collection
    {
        if (! is_array($value)) {
            return collect();
        }

        // Support edges->nodes structure (GraphQL connection pattern)
        if (isset($value['edges']) && is_array($value['edges'])) {
            return collect($value['edges'])->map(function ($edge) {
                if (! isset($edge['node'])) {
                    return null;
                }

                return $this->model::from($edge['node']);
            })->filter();
        }

        // Support direct nodes structure
        if (isset($value['nodes']) && is_array($value['nodes'])) {
            return $this->mapItems($value['nodes']);
        }

        // Support plain lists (non-connection GraphQL list fields,
        // e.g. taxLines, trackingInfo, Customer.addresses)
        if (array_is_list($value)) {
            return $this->mapItems($value);
        }

        return collect();
    }

    /**
     * Hydrate a list of node payloads, dropping null entries (GraphQL
     * null-bubbling can produce null list members under partial errors).
     */
    protected function mapItems(array $items): Collection
    {
        return collect($items)
            ->filter(fn ($item) => is_array($item))
            ->map(fn ($item) => $this->model::from($item))
            ->values();
    }
}
