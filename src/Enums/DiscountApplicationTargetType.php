<?php

namespace Esign\ShopifyData\Enums;

/**
 * The type of line (line item or shipping line) on an order that the discount
 * is applicable towards.
 */
enum DiscountApplicationTargetType: string
{
    case LINE_ITEM = 'LINE_ITEM';
    case SHIPPING_LINE = 'SHIPPING_LINE';
}
