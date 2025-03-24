<?php

namespace Tests\Unit\Services\HighCoupling;

use PHPUnit\Framework\TestCase;
use App\Services\HighCoupling\NotificationService;
use App\Services\HighCoupling\EmailNotifier;

class NotificationServiceTest extends TestCase
{
    public function testSendNotification()
    {
        /**
         * <?php

namespace App\Services\HighCoupling;

class NotificationService
{
    private EmailNotifier $notifier;

    public function __construct(EmailNotifier $notifier)
    {
        $this->notifier = $notifier;
    }

    public function sendNotification(string $message)
    {
        $this->notifier->sendEmail($message);
    }
}
    と書けばテスト出来る
         */
        // EmailNotifierのモックを作成
        $emailNotifierMock = $this->createMock(EmailNotifier::class);

        // sendEmailメソッドが呼ばれることを期待
        $emailNotifierMock->expects($this->once())
            ->method('sendEmail')
            ->with($this->equalTo('Test message'));

        // NotificationServiceのインスタンスを作成
        $notificationService = new NotificationService($emailNotifierMock);

        // sendNotificationメソッドを呼び出し
        $notificationService->sendNotification('Test message');
    }
}
