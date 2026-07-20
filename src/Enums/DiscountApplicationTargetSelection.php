<?php

namespace Esign\ShopifyData\Enums;

/**
 * The lines on the order to which the discount is applied.
 */
enum DiscountApplicationTargetSelection: string
{
    case ALL = 'ALL';
    case ENTITLED = 'ENTITLED';
    case EXPLICIT = 'EXPLICIT';
}
