<?php

namespace App\Services\HighCoupling;

class NotificationService
{
    public function sendNotification(string $message)
    {
        echo "Sending Email: $message";
    }
}
