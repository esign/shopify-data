<?php

namespace Esign\ShopifyData\DTOs;

use Spatie\LaravelData\Data;

/**
 * A person that acts on behalf of a company that they are a contact for.
 *
 * Based on Shopify's CompanyContact GraphQL type.
 *
 * @see https://shopify.dev/api/admin-graphql/latest/objects/CompanyContact
 */
class CompanyContactDto extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $title = null,
        public ?string $locale = null,
        public ?bool $isMainContact = null,
        public ?CustomerDto $customer = null,
        public ?CompanyDto $company = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
    ) {}
}
