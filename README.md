# Shopify Data

Typed DTOs, Inputs and Enums for the Shopify Admin GraphQL API, built on
[spatie/laravel-data](https://spatie.be/docs/laravel-data).

This package is the optional data-object companion to
[esign/laravel-shopify](https://github.com/esign/laravel-shopify). It contains
no HTTP or authentication logic — just the typed representations of Shopify
Admin API objects, so it can be used with any GraphQL client.

## Versioning

Releases track **Shopify Admin API versions**: tag `2026.07.x` matches API
version `2026-07`. Patch releases within a tag fix mappings without changing
the targeted API version. Pin the release line that matches the `api_version`
your app uses:

```bash
composer require esign/shopify-data:^2026.07
```

## What's inside

- `Esign\ShopifyData\DTOs\*` — response objects (`ProductDto`, `OrderDto`,
  `CustomerDto`, …), hydrated via Spatie Data (e.g. `ProductDto::from($nodeArray)`)
- `Esign\ShopifyData\Inputs\*` — mutation input objects (`ProductInput`,
  `CustomerInput`, …). `toArray()` omits `null` properties so optional fields
  are excluded from GraphQL variables, while `false`, `0` and `''` are kept.
- `Esign\ShopifyData\Enums\*` — backed enums for Shopify enum types
  (`ProductStatus`, `WeightUnit`, `MetafieldType`, …)
- `Esign\ShopifyData\Support\GlobalID` — helpers for `gid://shopify/...`
  global IDs
- `Esign\ShopifyData\Casts\NodesToCollectionOfModelsCaster` — maps GraphQL
  `edges { node }` structures onto Illuminate Collections of DTOs

## Usage with esign/laravel-shopify

```php
use Esign\LaravelShopify\GraphQL\Contracts\Query;
use Esign\ShopifyData\DTOs\ProductDto;
use Shopify\App\Types\GQLResult;

class GetProductQuery implements Query
{
    public function __construct(private string $id) {}

    public function query(): string
    {
        return <<<'GRAPHQL'
        query GetProduct($id: ID!) {
            product(id: $id) { id title handle status }
        }
        GRAPHQL;
    }

    public function variables(): array
    {
        return ['id' => $this->id];
    }

    public function mapFromResponse(GQLResult $response): ProductDto
    {
        return ProductDto::from($response->data['product']);
    }
}
```

## Testing

```bash
composer test
```
