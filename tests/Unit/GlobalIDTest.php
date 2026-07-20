<?php

namespace Esign\ShopifyData\Tests\Unit;

use Esign\ShopifyData\Enums\GlobalIDObject;
use Esign\ShopifyData\Support\GlobalID;
use Esign\ShopifyData\Tests\TestCase;
use InvalidArgumentException;

class GlobalIDTest extends TestCase
{
    public function test_builds_gid_from_numeric_id(): void
    {
        $this->assertSame(
            'gid://shopify/Product/123456',
            GlobalID::toShopifyGid(GlobalIDObject::PRODUCT, '123456')
        );
    }

    public function test_extracts_numeric_id_from_gid(): void
    {
        $this->assertSame('123456', GlobalID::extractId('gid://shopify/Product/123456'));
    }

    public function test_extract_id_rejects_invalid_format(): void
    {
        $this->expectException(InvalidArgumentException::class);

        GlobalID::extractId('not-a-gid');
    }
}
