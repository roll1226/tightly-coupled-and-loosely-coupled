<?php

namespace Tests\Unit\Services\HighCoupling;

use App\Services\HighCoupling\EmailNotifier;

use PHPUnit\Framework\TestCase;

class EmailNotifierTest extends TestCase
{
    public function test_sendEmail(): void
    {
        $emailNotifier = new EmailNotifier();
        $this->expectOutputString("Sending Email: Hello World");
        $emailNotifier->sendEmail('Hello World');
    }
}
