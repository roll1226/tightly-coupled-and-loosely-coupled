<?php

namespace Tests\Unit\Services\HighCoupling;

use PHPUnit\Framework\TestCase;
use App\Services\HighCoupling\NotificationService;

class NotificationServiceTest extends TestCase
{
    public function test_sendNotification()
    {
        $notificationService = new NotificationService();

        $this->expectOutputString("Sending Email: Test message");

        $notificationService->sendEmail('Test message');
    }
}
