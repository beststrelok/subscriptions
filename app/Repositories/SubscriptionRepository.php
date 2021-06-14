<?php

namespace App\Repositories;

use App\Models\Subscription;

class SubscriptionRepository
{
    public function createSubscription(string $subscriptionId, string $productId)
    {
        Subscription::create([
            'subscriptio_id' => $subscriptionId,
            'product_id' => $subscriptionId,
            // other required fields
        ]);
    }

    public function renewSubscription(string $subscriptionId, string $productId)
    {
        // TODO
    }

    public function cancelSubscription(string $subscriptionId, string $productId)
    {
        // TODO
    }
}
