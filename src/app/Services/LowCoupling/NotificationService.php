<?php

namespace App\Services\LowCoupling;

use App\Interfaces\NotifierInterface;

class NotificationService
{
    private NotifierInterface $notifier;

    public function __construct(NotifierInterface $notifier)
    {
        $this->notifier = $notifier;
    }

    public function notifyUser(string $message): void
    {
        $this->notifier->sendNotification($message);
    }
}
