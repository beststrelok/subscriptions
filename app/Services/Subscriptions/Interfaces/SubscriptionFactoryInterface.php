<?php

namespace App\Services\Subscriptions\Interfaces;

interface SubscriptionFactoryInterface {
    public function fromRequest(array $request): SubscriptionDtoInterface;
}
