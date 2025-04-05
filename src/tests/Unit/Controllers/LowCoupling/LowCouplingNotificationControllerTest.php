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
        $notificationServiceMock = $this->createMock(NotificationService::class);
        $notificationServiceMock->expects($this->once())
            ->method('notifyUser')
            ->with($this->equalTo('Test message'));

        $controller = new LowCouplingNotificationController($notificationServiceMock);

        $request = new Request(['message' => 'Test message']);

        $response = $controller->send($request);

        $this->assertNull($response);
    }
}
