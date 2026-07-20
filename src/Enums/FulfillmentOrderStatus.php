<?php

namespace Esign\ShopifyData\Enums;

/**
 * The status of a fulfillment order.
 */
enum FulfillmentOrderStatus: string
{
    case CANCELLED = 'CANCELLED';
    case CLOSED = 'CLOSED';
    case IN_PROGRESS = 'IN_PROGRESS';
    case INCOMPLETE = 'INCOMPLETE';
    case ON_HOLD = 'ON_HOLD';
    case OPEN = 'OPEN';
    case SCHEDULED = 'SCHEDULED';
}
