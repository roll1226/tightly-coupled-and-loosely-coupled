<?php

namespace Tests\Unit\Http\Controllers\HighCoupling;

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\HighCoupling\HighCouplingNotificationController;
use Illuminate\Http\Request;

class HighCouplingNotificationControllerTest extends TestCase
{
    public function test_send()
    {
        $controller = new HighCouplingNotificationController();

        $request = new Request(['message' => 'Test message']);

        $response = $controller->send($request);

        $this->assertNull($response);
    }
}
