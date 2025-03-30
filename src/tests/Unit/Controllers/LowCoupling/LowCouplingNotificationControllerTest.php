<?php

namespace Tests\Unit\Controllers\LowCoupling;

use App\Http\Controllers\LowCoupling\LowCouplingNotificationController;
use App\Services\LowCoupling\NotificationService;
use PHPUnit\Framework\TestCase;
use Illuminate\Http\Request;

class LowCouplingNotificationControllerTest extends TestCase
{
    public function test_send(): void
    {
        // NotificationServiceのモックを作成
        $notificationServiceMock = $this->createMock(NotificationService::class);
        $notificationServiceMock->expects($this->once())
            ->method('notifyUser')
            ->with($this->equalTo('Test message'));

        // コントローラーのインスタンスを作成
        $controller = new LowCouplingNotificationController($notificationServiceMock);

        // リクエストのモックを作成
        $request = new Request(['message' => 'Test message']);

        // sendメソッドを呼び出し
        $response = $controller->send($request);

        // レスポンスを検証
        $this->assertNull($response); // notifyUserがvoidを返すため、レスポンスはnull
    }
}
