<?php

namespace Esign\ShopifyData\Enums;

/**
 * The standard a barcode value conforms to.
 *
 * @see https://shopify.dev/docs/api/admin-graphql/latest/enums/BarcodeType
 */
enum BarcodeType: string
{
    case ASIN = 'ASIN';
    case EAN = 'EAN';
    case GTIN = 'GTIN';
    case ISBN = 'ISBN';
    case NS_PID = 'NS_PID';
    case UPC = 'UPC';
}
