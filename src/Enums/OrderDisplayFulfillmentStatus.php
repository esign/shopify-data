<?php

namespace Esign\ShopifyData\Enums;

/**
 * Represents the order's aggregated fulfillment status for display purposes.
 */
enum OrderDisplayFulfillmentStatus: string
{
    case FULFILLED = 'FULFILLED';
    case IN_PROGRESS = 'IN_PROGRESS';
    case ON_HOLD = 'ON_HOLD';
    case OPEN = 'OPEN';
    case PARTIALLY_FULFILLED = 'PARTIALLY_FULFILLED';
    case PENDING_FULFILLMENT = 'PENDING_FULFILLMENT';
    case REQUEST_DECLINED = 'REQUEST_DECLINED';
    case RESTOCKED = 'RESTOCKED';
    case SCHEDULED = 'SCHEDULED';
    case UNFULFILLED = 'UNFULFILLED';
}
