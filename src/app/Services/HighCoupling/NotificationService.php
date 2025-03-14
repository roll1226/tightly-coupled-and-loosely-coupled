<?php

namespace App\Services\HighCoupling;

use App\Services\HighCoupling\EmailNotifier;

class NotificationService
{
    private EmailNotifier $notifier;

    public function __construct()
    {
        $this->notifier = new EmailNotifier();
    }

    public function sendNotification(string $message)
    {
        $this->notifier->sendEmail($message);
    }
}
