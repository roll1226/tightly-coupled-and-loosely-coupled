<?php

namespace App\Services\HighCoupling;

class EmailNotifier
{
    public function sendEmail(string $message)
    {
        echo "Sending Email: $message\n";
    }
}

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
