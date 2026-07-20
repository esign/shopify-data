<?php

namespace Esign\ShopifyData\Tests\Unit;

use Esign\ShopifyData\Inputs\Base\BaseInput;
use Esign\ShopifyData\Tests\TestCase;

class BaseInputTest extends TestCase
{
    public function test_to_array_omits_null_values(): void
    {
        $input = new FakeInput(title: 'Snowboard');

        $this->assertSame(['title' => 'Snowboard'], $input->toArray());
    }

    public function test_to_array_preserves_falsy_non_null_values(): void
    {
        $input = new FakeInput(
            title: '',
            published: false,
            position: 0,
        );

        $this->assertSame([
            'title' => '',
            'published' => false,
            'position' => 0,
        ], $input->toArray());
    }
}

class FakeInput extends BaseInput
{
    public function __construct(
        public ?string $title = null,
        public ?bool $published = null,
        public ?int $position = null,
    ) {}
}
