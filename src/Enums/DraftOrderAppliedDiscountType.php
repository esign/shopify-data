<?php

namespace Esign\ShopifyData\Enums;

/**
 * The valid discount types that can be applied to a draft order.
 */
enum DraftOrderAppliedDiscountType: string
{
    case FIXED_AMOUNT = 'FIXED_AMOUNT';
    case PERCENTAGE = 'PERCENTAGE';
}
