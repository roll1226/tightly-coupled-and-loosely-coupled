<?php

namespace App\Services\HighCoupling;

class EmailNotifier
{
    public function sendEmail(string $message)
    {
        echo "Sending Email: $message\n";
    }
}
