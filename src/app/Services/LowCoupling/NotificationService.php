<?php

namespace App\Services\LowCoupling;

use App\Services\Interfaces\NotifierInterface;
use App\Services\Interfaces\NotificationServiceInterface;

class NotificationService implements NotificationServiceInterface
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
