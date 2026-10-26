<?php

namespace Esign\ShopifyData\Enums;

/**
 * The type of restock performed for a refunded line item.
 */
enum RefundLineItemRestockType: string
{
    case CANCEL = 'CANCEL';
    /** @deprecated Not accepted for new refunds; use RETURN (fulfilled) or CANCEL (unfulfilled). */
    case LEGACY_RESTOCK = 'LEGACY_RESTOCK';
    case NO_RESTOCK = 'NO_RESTOCK';
    case RETURN = 'RETURN';
}
