<?php

namespace Tests\Unit\Services\LowCoupling;

use App\Services\LowCoupling\EmailNotifier;
use PHPUnit\Framework\TestCase;

class EmailNotifierTest extends TestCase
{
    public function test_sendNotification(): void
    {
        $emailNotifier = new EmailNotifier();
        $this->expectOutputString("Sending Email: Hello World");
        $emailNotifier->sendNotification('Hello World');
    }
}
