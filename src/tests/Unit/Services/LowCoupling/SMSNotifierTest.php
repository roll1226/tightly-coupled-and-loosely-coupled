<?php

namespace Tests\Unit\Services\LowCoupling;

use App\Services\LowCoupling\SMSNotifier;
use PHPUnit\Framework\TestCase;

class SMSNotifierTest extends TestCase
{
    public function test_sendNotification(): void
    {
        $smsNotifier = new SMSNotifier();
        $this->expectOutputString("Sending SMS: Hello World");
        $smsNotifier->sendNotification('Hello World');
    }
}
