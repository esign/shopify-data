<?php

namespace Esign\ShopifyData\Enums;

/**
 * The valid statuses for a draft order.
 */
enum DraftOrderStatus: string
{
    case COMPLETED = 'COMPLETED';
    case INVOICE_SENT = 'INVOICE_SENT';
    case OPEN = 'OPEN';
}
