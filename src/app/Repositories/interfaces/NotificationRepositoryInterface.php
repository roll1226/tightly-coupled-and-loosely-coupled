<?php

namespace App\Repositories\Interfaces;

interface NotificationRepositoryInterface
{
    public function sendNotification(string $message): void;
}
