<?php

namespace App\Services\Subscriptions\Interfaces;

interface SubscriptionDtoInterface
{
    public function getSubscriptionId(): string;

    public function getStatus(): string;

    public function getProductId(): string;
}
