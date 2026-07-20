<?php

namespace Esign\ShopifyData\Enums;

/**
 * The class of the discount for combining purposes.
 */
enum DiscountClass: string
{
    case ORDER = 'ORDER';
    case PRODUCT = 'PRODUCT';
    case SHIPPING = 'SHIPPING';
}
