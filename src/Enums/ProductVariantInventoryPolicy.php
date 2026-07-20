<?php

namespace Esign\ShopifyData\Enums;

/**
 * The inventory policy for a product variant controls whether customers can
 * continue to buy the variant when it is out of stock.
 */
enum ProductVariantInventoryPolicy: string
{
    case CONTINUE = 'CONTINUE';
    case DENY = 'DENY';
}
