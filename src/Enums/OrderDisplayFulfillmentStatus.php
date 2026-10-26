<?php

namespace Esign\ShopifyData\Enums;

/**
 * Represents the order's aggregated fulfillment status for display purposes.
 */
enum OrderDisplayFulfillmentStatus: string
{
    case FULFILLED = 'FULFILLED';
    /** Returned since 2026-10 for orders with no remaining fulfillable quantity (previously UNFULFILLED). */
    case FULFILLMENT_NOT_REQUIRED = 'FULFILLMENT_NOT_REQUIRED';
    case IN_PROGRESS = 'IN_PROGRESS';
    case ON_HOLD = 'ON_HOLD';
    /** @deprecated Replaced by UNFULFILLED. */
    case OPEN = 'OPEN';
    case PARTIALLY_FULFILLED = 'PARTIALLY_FULFILLED';
    /** @deprecated Replaced by IN_PROGRESS. */
    case PENDING_FULFILLMENT = 'PENDING_FULFILLMENT';
    case REQUEST_DECLINED = 'REQUEST_DECLINED';
    /** @deprecated Replaced by UNFULFILLED. */
    case RESTOCKED = 'RESTOCKED';
    case SCHEDULED = 'SCHEDULED';
    case UNFULFILLED = 'UNFULFILLED';
}
