<?php

namespace Tests\Unit\Services\HighCoupling;

use PHPUnit\Framework\TestCase;
use App\Services\HighCoupling\NotificationService;

class NotificationServiceTest extends TestCase
{
    public function testSendNotification()
    {
        // NotificationServiceのインスタンスを作成
        $notificationService = new NotificationService();

        // 出力をキャプチャして検証
        $this->expectOutputString("Sending Email: Test message");

        // sendNotificationメソッドを呼び出し
        $notificationService->sendNotification('Test message');
    }
}
