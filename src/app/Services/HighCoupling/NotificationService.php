<?php

namespace App\Services\HighCoupling;

use InvalidArgumentException;

class NotificationService
{
    public function sendEmail(?string $message)
    {
        if ($message === null) {
            throw new InvalidArgumentException("Message cannot be null");
        }

        if (empty($message)) {
            throw new InvalidArgumentException("Message cannot be empty");
        }

        if (trim($message) === '') {
            throw new InvalidArgumentException("Message cannot be empty");
        }

        echo "Sending Email: $message";
    }
}
