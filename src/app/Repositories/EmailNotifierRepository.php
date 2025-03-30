<?php

namespace App\Repositories;

use App\Repositories\Interfaces\NotifierRepositoryInterface;

class EmailNotifierRepository implements NotifierRepositoryInterface
{
    public function sendNotification(string $message): void
    {
        echo "Sending Email: $message";
    }
}
