<?php

namespace Esign\ShopifyData\Enums;

use Esign\ShopifyData\Support\GlobalID;

/**
 * All possible Shopify objects that can be represented by a Global ID.
 *
 * @see https://shopify.dev/docs/api/usage/gids#global-id-examples
 */
enum GlobalIDObject: string
{
    case ARTICLE = 'Article';
    case BLOG = 'Blog';
    case COLLECTION = 'Collection';
    case COMPANY = 'Company';
    case COMPANY_ADDRESS = 'CompanyAddress';
    case COMPANY_CONTACT = 'CompanyContact';
    case COMPANY_LOCATION = 'CompanyLocation';
    case CUSTOMER = 'Customer';
    case DISCOUNT_CODE_NODE = 'DiscountCodeNode';
    case DISCOUNT_REDEEM_CODE = 'DiscountRedeemCode';
    case DELIVERY_CARRIER_SERVICE = 'DeliveryCarrierService';
    case DELIVERY_LOCATION_GROUP = 'DeliveryLocationGroup';
    case DELIVERY_PROFILE = 'DeliveryProfile';
    case DELIVERY_ZONE = 'DeliveryZone';
    case DRAFT_ORDER = 'DraftOrder';
    case DRAFT_ORDER_LINE_ITEM = 'DraftOrderLineItem';
    case DUTY = 'Duty';
    case EMAIL_TEMPLATE = 'EmailTemplate';
    case FULFILLMENT = 'Fulfillment';
    case FULFILLMENT_EVENT = 'FulfillmentEvent';
    case FULFILLMENT_ORDER = 'FulfillmentOrder';
    case FULFILLMENT_ORDER_LINE_ITEM = 'FulfillmentOrderLineItem';
    case FULFILLMENT_SERVICE = 'FulfillmentService';
    case GIFT_CARD = 'GiftCard';
    case INVENTORY_ITEM = 'InventoryItem';
    case INVENTORY_LEVEL = 'InventoryLevel';
    case LINE_ITEM = 'LineItem';
    case LOCATION = 'Location';
    case MARKET = 'Market';
    case MARKETING_EVENT = 'MarketingEvent';
    case MEDIA_IMAGE = 'MediaImage';
    case METAFIELD = 'Metafield';
    case METAOBJECT = 'Metaobject';
    case ORDER = 'Order';
    case ORDER_IDENTITY = 'OrderIdentity'; // Special case if the order is not yet created in Shopify.
    case ORDER_TRANSACTION = 'OrderTransaction';
    case PAGE = 'Page';
    case PRODUCT = 'Product';
    case PRODUCT_IMAGE = 'ProductImage';
    case PRODUCT_OPTION = 'ProductOption';
    case PRODUCT_OPTION_VALUE = 'ProductOptionValue';
    case PRODUCT_VARIANT = 'ProductVariant';
    case PUBLICATION = 'Publication';
    case REFUND = 'Refund';
    case SELLING_PLAN = 'SellingPlan';
    case SELLING_PLAN_GROUP = 'SellingPlanGroup';
    case SHOP = 'Shop';
    case STAFF_MEMBER = 'StaffMember';
    case THEME = 'Theme';

    public function getGidPrefix(): string
    {
        return GlobalID::SHOPIFY_GID_PREFIX.$this->value;
    }
}
