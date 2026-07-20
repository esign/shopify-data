<?php

namespace Esign\ShopifyData\Enums;

/**
 * Represents the order's current financial status.
 */
enum OrderDisplayFinancialStatus: string
{
    case AUTHORIZED = 'AUTHORIZED';
    case EXPIRED = 'EXPIRED';
    case PAID = 'PAID';
    case PARTIALLY_PAID = 'PARTIALLY_PAID';
    case PARTIALLY_REFUNDED = 'PARTIALLY_REFUNDED';
    case PENDING = 'PENDING';
    case REFUNDED = 'REFUNDED';
    case VOIDED = 'VOIDED';
}
