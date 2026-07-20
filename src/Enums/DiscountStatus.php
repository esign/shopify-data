<?php

namespace Esign\ShopifyData\Enums;

/**
 * The status of the discount.
 */
enum DiscountStatus: string
{
    case ACTIVE = 'ACTIVE';
    case EXPIRED = 'EXPIRED';
    case SCHEDULED = 'SCHEDULED';
}
