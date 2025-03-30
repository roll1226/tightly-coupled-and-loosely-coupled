<?php

namespace Tests\Unit\Http\Controllers\HighCoupling;

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\HighCoupling\HighCouplingNotificationController;
use App\Services\HighCoupling\NotificationService;
use Illuminate\Http\Request;

class HighCouplingNotificationControllerTest extends TestCase
{
    public function testSend()
    {
        // NotificationServiceのモックを作成
        $notificationServiceMock = $this->createMock(NotificationService::class);

        // sendNotificationメソッドが呼ばれることを期待
        $notificationServiceMock->expects($this->once())
            ->method('sendNotification')
            ->with($this->equalTo('Test message'))
            ->willReturn('Notification sent');

        // コントローラーのインスタンスを作成
        $controller = new HighCouplingNotificationController($notificationServiceMock);

        // リクエストのモックを作成
        $request = new Request(['message' => 'Test message']);

        // sendメソッドを呼び出し
        $response = $controller->send($request);

        // レスポンスを検証
        $this->assertEquals('Notification sent', $response);
    }
}
