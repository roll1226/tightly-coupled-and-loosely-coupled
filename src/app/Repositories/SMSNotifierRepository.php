<?php

namespace App\Repositories;

use App\Repositories\Interfaces\NotifierRepositoryInterface;

class SMSNotifierRepository implements NotifierRepositoryInterface
{
    public function sendNotification(string $message): void
    {
        echo "Sending SMS: $message";
    }
}
