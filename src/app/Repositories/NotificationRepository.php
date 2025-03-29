<?php

namespace App\Repositories;

use App\Repositories\Interfaces\NotificationRepositoryInterface;

class NotificationRepository implements NotificationRepositoryInterface
{
    public function sendNotification(string $message): void
    {
        echo "Sending Notification: $message\n";
    }
}
