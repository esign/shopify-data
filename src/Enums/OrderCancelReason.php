<?php

namespace Esign\ShopifyData\Enums;

/**
 * Represents the reason for the order's cancellation.
 */
enum OrderCancelReason: string
{
    case CUSTOMER = 'CUSTOMER';
    case DECLINED = 'DECLINED';
    case FRAUD = 'FRAUD';
    case INVENTORY = 'INVENTORY';
    case OTHER = 'OTHER';
    case STAFF = 'STAFF';
}
