<?php

class NotificationRepository implements NotificationRepositoryInterface
{
    public function sendNotification(string $message): void
    {
        echo "Sending Notification: $message\n";
    }
}
