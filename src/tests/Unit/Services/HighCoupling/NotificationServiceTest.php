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

    public function test_sendNotificationWithEmptyMessage()
    {
        $notificationService = new NotificationService();

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Message cannot be empty');

        $notificationService->sendEmail('');
    }
    public function test_sendNotificationWithWhitespaceMessage()
    {
        $notificationService = new NotificationService();

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Message cannot be empty');

        $notificationService->sendEmail('   ');
    }
    public function test_sendNotificationWithNullMessage()
    {
        $notificationService = new NotificationService();

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Message cannot be null');

        $notificationService->sendEmail(null);
    }
}
