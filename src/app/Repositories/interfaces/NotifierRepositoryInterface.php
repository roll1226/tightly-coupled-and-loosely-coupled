<?php

namespace App\Repositories\Interfaces;

interface NotifierRepositoryInterface
{
    public function sendNotification(string $message): void;
}
