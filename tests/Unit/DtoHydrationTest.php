<?php

namespace Esign\ShopifyData\Tests\Unit;

use Esign\ShopifyData\DTOs\CollectionDto;
use Esign\ShopifyData\DTOs\CollectionRuleDto;
use Esign\ShopifyData\DTOs\DraftOrderDto;
use Esign\ShopifyData\DTOs\DraftOrderLineItemDto;
use Esign\ShopifyData\DTOs\FulfillmentOrderDto;
use Esign\ShopifyData\DTOs\FulfillmentOrderLineItemDto;
use Esign\ShopifyData\DTOs\InventoryLevelDto;
use Esign\ShopifyData\DTOs\LineItemDto;
use Esign\ShopifyData\DTOs\MoneyV2Dto;
use Esign\ShopifyData\DTOs\OrderTransactionDto;
use Esign\ShopifyData\DTOs\ProductDto;
use Esign\ShopifyData\DTOs\ProductVariantDto;
use Esign\ShopifyData\DTOs\TaxLineDto;
use Esign\ShopifyData\Enums\CountryCode;
use Esign\ShopifyData\Enums\CurrencyCode;
use Esign\ShopifyData\Tests\TestCase;
use Illuminate\Support\Collection;

class DtoHydrationTest extends TestCase
{
    public function test_hydrates_simple_dto_from_array(): void
    {
        $money = MoneyV2Dto::from([
            'amount' => '19.99',
            'currencyCode' => 'EUR',
        ]);

        $this->assertSame('19.99', $money->amount);
        $this->assertSame('EUR', $money->currencyCode);
    }

    public function test_hydrates_product_with_edges_nodes_collection(): void
    {
        $product = ProductDto::from([
            'id' => 'gid://shopify/Product/123',
            'title' => 'Snowboard',
            'status' => 'ACTIVE',
            'variants' => [
                'edges' => [
                    ['node' => ['id' => 'gid://shopify/ProductVariant/1', 'title' => 'Default']],
                    ['node' => ['id' => 'gid://shopify/ProductVariant/2', 'title' => 'Large']],
                ],
            ],
        ]);

        $this->assertSame('gid://shopify/Product/123', $product->id);
        $this->assertInstanceOf(Collection::class, $product->variants);
        $this->assertCount(2, $product->variants);
        $this->assertInstanceOf(ProductVariantDto::class, $product->variants->first());
        $this->assertSame('Default', $product->variants->first()->title);
    }

    public function test_hydrates_collection_with_nested_rule_set(): void
    {
        $collection = CollectionDto::from([
            'id' => 'gid://shopify/Collection/1',
            'title' => 'Sale',
            'ruleSet' => [
                'appliedDisjunctively' => false,
                'rules' => [
                    ['column' => 'TAG', 'relation' => 'EQUALS', 'condition' => 'sale'],
                ],
            ],
        ]);

        $this->assertFalse($collection->ruleSet->appliedDisjunctively);
        $this->assertInstanceOf(CollectionRuleDto::class, $collection->ruleSet->rules->first());
        $this->assertSame('TAG', $collection->ruleSet->rules->first()->column);
    }

    public function test_hydrates_draft_order_with_line_items_connection(): void
    {
        $draftOrder = DraftOrderDto::from([
            'id' => 'gid://shopify/DraftOrder/1',
            'status' => 'OPEN',
            'lineItems' => [
                'edges' => [
                    ['node' => ['id' => 'gid://shopify/DraftOrderLineItem/1', 'quantity' => 2]],
                ],
            ],
        ]);

        $this->assertSame('OPEN', $draftOrder->status);
        $this->assertInstanceOf(DraftOrderLineItemDto::class, $draftOrder->lineItems->first());
        $this->assertSame(2, $draftOrder->lineItems->first()->quantity);
    }

    public function test_hydrates_fulfillment_order_with_assigned_location(): void
    {
        $fulfillmentOrder = FulfillmentOrderDto::from([
            'id' => 'gid://shopify/FulfillmentOrder/1',
            'status' => 'OPEN',
            'assignedLocation' => ['name' => 'Warehouse', 'countryCode' => 'BE'],
            'lineItems' => [
                'nodes' => [
                    ['id' => 'gid://shopify/FulfillmentOrderLineItem/1', 'totalQuantity' => 3],
                ],
            ],
        ]);

        $this->assertSame('Warehouse', $fulfillmentOrder->assignedLocation->name);
        $this->assertInstanceOf(FulfillmentOrderLineItemDto::class, $fulfillmentOrder->lineItems->first());
        $this->assertSame(3, $fulfillmentOrder->lineItems->first()->totalQuantity);
    }

    public function test_hydrates_inventory_level_with_plain_list_of_quantities(): void
    {
        $level = InventoryLevelDto::from([
            'id' => 'gid://shopify/InventoryLevel/1',
            'quantities' => [
                ['name' => 'available', 'quantity' => 10],
                ['name' => 'on_hand', 'quantity' => 12],
            ],
        ]);

        $this->assertCount(2, $level->quantities);
        $this->assertSame('available', $level->quantities->first()->name);
        $this->assertSame(10, $level->quantities->first()->quantity);
    }

    public function test_hydrates_line_item_tax_lines_from_plain_list(): void
    {
        $lineItem = LineItemDto::from([
            'id' => 'gid://shopify/LineItem/1',
            'taxLines' => [
                ['title' => 'BTW', 'rate' => 0.21],
            ],
        ]);

        $this->assertInstanceOf(TaxLineDto::class, $lineItem->taxLines->first());
        $this->assertSame(0.21, $lineItem->taxLines->first()->rate);
    }

    public function test_filters_null_entries_from_nodes_and_plain_lists(): void
    {
        $product = ProductDto::from([
            'variants' => [
                'nodes' => [
                    ['id' => 'gid://shopify/ProductVariant/1'],
                    null,
                ],
            ],
        ]);

        $this->assertCount(1, $product->variants);
        $this->assertSame('gid://shopify/ProductVariant/1', $product->variants->first()->id);

        $lineItem = LineItemDto::from([
            'taxLines' => [
                ['title' => 'BTW'],
                null,
            ],
        ]);

        $this->assertCount(1, $lineItem->taxLines);
    }

    public function test_hydrates_order_transaction_receipt_json_as_array(): void
    {
        $transaction = OrderTransactionDto::from([
            'id' => 'gid://shopify/OrderTransaction/1',
            'receiptJson' => ['paid_amount' => '5.00'],
        ]);

        $this->assertSame(['paid_amount' => '5.00'], $transaction->receiptJson);
    }

    public function test_giant_enums_contain_expected_values(): void
    {
        $this->assertSame(CurrencyCode::EUR, CurrencyCode::from('EUR'));
        $this->assertSame(CountryCode::BE, CountryCode::from('BE'));
    }
}
