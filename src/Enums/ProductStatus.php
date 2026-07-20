<?php

namespace Esign\ShopifyData\Enums;

/**
 * The status of a product.
 */
enum ProductStatus: string
{
    case ACTIVE = 'ACTIVE';
    case ARCHIVED = 'ARCHIVED';
    case DRAFT = 'DRAFT';
    case UNLISTED = 'UNLISTED';
}
