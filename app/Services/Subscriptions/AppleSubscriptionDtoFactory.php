<?php

namespace App\Services\Subscriptions;

use App\Services\Subscriptions\Interfaces\SubscriptionDtoInterface;
use App\Services\Subscriptions\Interfaces\SubscriptionFactoryInterface;

class AppleSubscriptionDtoFactory implements SubscriptionFactoryInterface
{
    public function fromRequest(array $request): SubscriptionDtoInterface
    {
        return new SubscriptionDto([
            'subscriptionId' => $request['auto_renew_adam_id'],
            'status' => $request['notification_type'],
            'productId' => $request['auto_renew_product_id']
        ]);
    }
}

