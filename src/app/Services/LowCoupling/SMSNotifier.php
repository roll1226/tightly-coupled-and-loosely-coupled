<?php

namespace App\Services\LowCoupling;

use App\Services\Interfaces\NotifierInterface;

class SMSNotifier implements NotifierInterface
{
    public function sendNotification(string $message): void
    {
        echo "Sending SMS: $message\n";
    }
}
