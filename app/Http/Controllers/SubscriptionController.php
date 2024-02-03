<?php

namespace App\Http\Controllers;

use App\Http\Request\SubscribeRequest;
use App\Services\SubscriberService;

class SubscriptionController extends Controller
{    public function subscribe(SubscribeRequest $request, SubscriberService $subscriberService)
    {
        $subscribeEmail = $request->validated();

        if (!$subscriberService->subscribe($subscribeEmail)) {
            return response()->json(['message' => 'forbidden'], 403);
        }

        return response()->json(['message' => 'success'], 200);
    }
}
