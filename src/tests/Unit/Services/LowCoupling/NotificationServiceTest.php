<?php

namespace Tests\Unit\Services\LowCoupling;

use App\Services\LowCoupling\NotificationService;
use App\Services\Interfaces\NotifierInterface;
use PHPUnit\Framework\TestCase;

class NotificationServiceTest extends TestCase
{
    public function testNotifyUser()
    {
        // NotifierInterfaceのモックを作成
        $notifierMock = $this->createMock(NotifierInterface::class);

        // sendNotificationメソッドが呼ばれることを期待
        $notifierMock->expects($this->once())
            ->method('sendNotification')
            ->with($this->equalTo('Test message'));

        // NotificationServiceのインスタンスを作成
        $notificationService = new NotificationService($notifierMock);

        // notifyUserメソッドを呼び出し
        $notificationService->notifyUser('Test message');
    }
}
