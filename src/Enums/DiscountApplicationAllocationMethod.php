<?php

namespace Esign\ShopifyData\Enums;

/**
 * The method by which the discount's value is allocated onto its entitled lines.
 */
enum DiscountApplicationAllocationMethod: string
{
    case ACROSS = 'ACROSS';
    case EACH = 'EACH';
    /** @deprecated Use ACROSS instead. */
    case ONE = 'ONE';
}
