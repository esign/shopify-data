<?php

namespace Esign\ShopifyData\DTOs;

use Spatie\LaravelData\Data;

/**
 * A payment transaction in the context of an order.
 *
 * Based on Shopify's OrderTransaction GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/OrderTransaction
 */
class OrderTransactionDto extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $kind = null,
        public ?string $status = null,
        public ?string $gateway = null,
        public ?string $errorCode = null,
        public ?string $authorizationCode = null,
        public ?string $authorizationExpiresAt = null,
        public ?string $accountNumber = null,
        public ?string $formattedGateway = null,
        public ?string $paymentId = null,
        public ?bool $manuallyCapturable = null,
        public ?bool $test = null,
        public ?MoneyBagDto $amountSet = null,
        public ?MoneyV2Dto $maximumRefundableV2 = null,
        public ?MoneyBagDto $totalUnsettledSet = null,
        public ?OrderTransactionDto $parentTransaction = null,
        public ?string $processedAt = null,
        public ?string $createdAt = null,
        /** JSON scalar: arrives as a decoded object/array, kept as raw array. */
        public ?array $receiptJson = null,
        public ?string $settlementCurrency = null,
        public ?string $settlementCurrencyRate = null,
    ) {}
}
