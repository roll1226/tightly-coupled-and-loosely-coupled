<?php

namespace Tests\Unit\Repositories;

use App\Repositories\NotificationRepository;
use PHPUnit\Framework\TestCase;

class NotificationRepositoryTest extends TestCase
{
    public function testSendNotification()
    {
        // NotificationRepositoryのインスタンスを作成
        $repository = new NotificationRepository();

        // 出力をキャプチャ
        $this->expectOutputString("Sending Notification: Test message\n");

        // sendNotificationメソッドを呼び出し
        $repository->sendNotification('Test message');
    }
}
