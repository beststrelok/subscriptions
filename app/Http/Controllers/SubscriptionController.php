<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Exception;

class SubscriptionController extends Controller
{
    public function processWebhook(Request $request, string $provider)
    {
        try {
            $dtoFactoryName = 'App\Services\Subscriptions\\' . ucfirst($provider) . 'SubscriptionDtoFactory';
            $dtoFactory = new $dtoFactoryName();
            $subscriptionDto = $dtoFactory->fromRequest($request->all());

            // TODO bind it via ServiceProvider
            $subscriptionName = 'App\Services\Subscriptions\\' . ucfirst($provider) . 'Subscription';
            $subscription = new $subscriptionName();
            $subscription->processSubscription($subscriptionDto);
        } catch (Exception $ex) {
            return 400;
        }

        return 200;
    }
}
