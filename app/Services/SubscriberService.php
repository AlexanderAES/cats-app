<?php

namespace App\Services;

use App\Models\Subscriber;

class SubscriberService
{
    public function subscribe($email): bool
    {
        if (Subscriber::byEmail($email)->exists()) {
            return false; // такой email уже существует
        }

        Subscriber::create($email);
        return true; // Подписка успешно оформлена
    }
}
