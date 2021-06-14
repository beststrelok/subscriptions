<?php

namespace App\Services\Subscriptions;

use App\Services\Subscriptions\Interfaces\SubscriptionDtoInterface;

class SubscriptionDto implements SubscriptionDtoInterface
{
    protected string $subscriptionId;

    protected string $status;

    protected string $productId;

    public function __construct(array $properties)
    {
        foreach ($properties as $key => $value){
            $this->{$key} = $value;
        }
    }

    public function getSubscriptionId(): string
    {
        return $this->subscriptionId;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function getProductId(): string
    {
        return $this->productId;
    }
}
