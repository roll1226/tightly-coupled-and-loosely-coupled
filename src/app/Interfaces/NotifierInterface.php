<?php

namespace App\Interfaces;

interface NotifierInterface
{
    public function sendNotification(string $message): void;
}
