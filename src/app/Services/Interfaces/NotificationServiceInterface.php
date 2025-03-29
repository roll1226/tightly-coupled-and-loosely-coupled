<?php

namespace App\Services\Interfaces;

interface NotificationServiceInterface
{
    public function notifyUser(string $message): void;
}
