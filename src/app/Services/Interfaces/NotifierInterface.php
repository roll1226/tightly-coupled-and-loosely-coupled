<?php

namespace App\Services\Interfaces;

interface NotifierInterface
{
    public function sendNotification(string $message): void;
}
