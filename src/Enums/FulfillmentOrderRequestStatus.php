<?php

namespace Esign\ShopifyData\Enums;

/**
 * The request status of a fulfillment order.
 */
enum FulfillmentOrderRequestStatus: string
{
    case ACCEPTED = 'ACCEPTED';
    case CANCELLATION_ACCEPTED = 'CANCELLATION_ACCEPTED';
    case CANCELLATION_REJECTED = 'CANCELLATION_REJECTED';
    case CANCELLATION_REQUESTED = 'CANCELLATION_REQUESTED';
    case CLOSED = 'CLOSED';
    case REJECTED = 'REJECTED';
    case SUBMITTED = 'SUBMITTED';
    case UNSUBMITTED = 'UNSUBMITTED';
}
