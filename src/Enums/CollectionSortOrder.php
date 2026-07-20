<?php

namespace Esign\ShopifyData\Enums;

/**
 * Specifies the sort order for the products in the collection.
 */
enum CollectionSortOrder: string
{
    case ALPHA_ASC = 'ALPHA_ASC';
    case ALPHA_DESC = 'ALPHA_DESC';
    case BEST_SELLING = 'BEST_SELLING';
    case CREATED = 'CREATED';
    case CREATED_DESC = 'CREATED_DESC';
    case MANUAL = 'MANUAL';
    case MOST_RELEVANT = 'MOST_RELEVANT';
    case PRICE_ASC = 'PRICE_ASC';
    case PRICE_DESC = 'PRICE_DESC';
}
