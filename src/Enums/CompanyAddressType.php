<?php

namespace Esign\ShopifyData\Enums;

/**
 * The valid values for the address type of a company.
 */
enum CompanyAddressType: string
{
    case BILLING = 'BILLING';
    case SHIPPING = 'SHIPPING';
}
