<?php

namespace Tests\Unit\Services\LowCoupling;

use App\Services\LowCoupling\NotificationService;
use App\Repositories\Interfaces\NotifierRepositoryInterface;
use PHPUnit\Framework\TestCase;

class NotificationServiceTest extends TestCase
{
    public function testNotifyUser()
    {
        $notifierMock = $this->createMock(NotifierRepositoryInterface::class);

        $notifierMock->expects($this->once())
            ->method('sendNotification')
            ->with($this->equalTo('Test message'));

        $notificationService = new NotificationService($notifierMock);

        $notificationService->notifyUser('Test message');
    }

    public function testNotifyUserWithEmptyMessage()
    {
        $notifierMock = $this->createMock(NotifierRepositoryInterface::class);

        $notificationService = new NotificationService($notifierMock);

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Message cannot be empty');

        $notificationService->notifyUser('');
    }
    public function testNotifyUserWithWhitespaceMessage()
    {
        $notifierMock = $this->createMock(NotifierRepositoryInterface::class);

        $notificationService = new NotificationService($notifierMock);

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Message cannot be empty');

        $notificationService->notifyUser('   ');
    }
    public function testNotifyUserWithNullMessage()
    {
        $notifierMock = $this->createMock(NotifierRepositoryInterface::class);

        $notificationService = new NotificationService($notifierMock);

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Message cannot be null');

        $notificationService->notifyUser(null);
    }
}
