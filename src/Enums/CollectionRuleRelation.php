<?php

namespace Esign\ShopifyData\Enums;

/**
 * Specifies the relationship between the column (attribute) and the condition
 * of a collection rule.
 */
enum CollectionRuleRelation: string
{
    case CONTAINS = 'CONTAINS';
    case ENDS_WITH = 'ENDS_WITH';
    case EQUALS = 'EQUALS';
    case GREATER_THAN = 'GREATER_THAN';
    case IS_NOT_SET = 'IS_NOT_SET';
    case IS_SET = 'IS_SET';
    case LESS_THAN = 'LESS_THAN';
    case NOT_CONTAINS = 'NOT_CONTAINS';
    case NOT_EQUALS = 'NOT_EQUALS';
    case STARTS_WITH = 'STARTS_WITH';
}
