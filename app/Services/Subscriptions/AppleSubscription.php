<?php

namespace App\Services\Subscriptions;

use App\Services\Subscriptions\Interfaces\SubscriptionDtoInterface;
use App\Repositories\SubscriptionRepository;

class AppleSubscription
{
    private SubscriptionRepository $subscriptionRepository;

    public function __construct(SubscriptionRepository $subscriptionRepository)
    {
        $this->subscriptionRepository = $subscriptionRepository;
    }

    public function processSubscription(SubscriptionDtoInterface $subDto)
    {
        $subscriptionId = $subDto->getSubscriptionId();
        $productId = $subDto->getProductId();

        switch ($subDto->getStatus()) {
            case 'INITIAL_BUY':
                $this->subscriptionRepository->createSubscription($subscriptionId, $productId);
                break;
            case 'DID_RENEW':
                $this->subscriptionRepository->renewSubscription($subscriptionId, $productId);
                break;
            case 'DID_FAIL_TO_RENEW':
                // TODO
                break;
            case 'CANCEL':
                $this->subscriptionRepository->cancelSubscription($subscriptionId, $productId);
                break;
        }
    }
}
