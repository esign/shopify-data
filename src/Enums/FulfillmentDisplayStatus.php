<?php

namespace Esign\ShopifyData\Enums;

/**
 * The display status of a fulfillment.
 */
enum FulfillmentDisplayStatus: string
{
    case ATTEMPTED_DELIVERY = 'ATTEMPTED_DELIVERY';
    case CANCELED = 'CANCELED';
    case CARRIER_PICKED_UP = 'CARRIER_PICKED_UP';
    case CONFIRMED = 'CONFIRMED';
    case DELAYED = 'DELAYED';
    case DELIVERED = 'DELIVERED';
    case FAILURE = 'FAILURE';
    case FULFILLED = 'FULFILLED';
    case IN_TRANSIT = 'IN_TRANSIT';
    case LABEL_PRINTED = 'LABEL_PRINTED';
    case LABEL_PURCHASED = 'LABEL_PURCHASED';
    case LABEL_VOIDED = 'LABEL_VOIDED';
    case MARKED_AS_FULFILLED = 'MARKED_AS_FULFILLED';
    case NOT_DELIVERED = 'NOT_DELIVERED';
    case OUT_FOR_DELIVERY = 'OUT_FOR_DELIVERY';
    case PICKED_UP = 'PICKED_UP';
    case READY_FOR_PICKUP = 'READY_FOR_PICKUP';
    case SUBMITTED = 'SUBMITTED';
}
