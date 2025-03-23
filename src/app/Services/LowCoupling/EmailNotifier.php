<?php

namespace App\Services\LowCoupling;

use App\Services\Interfaces\NotifierInterface;

class EmailNotifier implements NotifierInterface
{
    public function sendNotification(string $message): void
    {
        echo "Sending Email: $message";
    }
}
