<?php

namespace Esign\ShopifyData\Enums;

/**
 * The type of restock performed for a refunded line item.
 */
enum RefundLineItemRestockType: string
{
    case CANCEL = 'CANCEL';
    case LEGACY_RESTOCK = 'LEGACY_RESTOCK';
    case NO_RESTOCK = 'NO_RESTOCK';
    case RETURN = 'RETURN';
}
