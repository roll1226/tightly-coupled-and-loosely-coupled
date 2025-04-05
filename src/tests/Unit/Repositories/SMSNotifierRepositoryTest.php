<?php

namespace Tests\Unit\Repositories;

use App\Repositories\SMSNotifierRepository;
use PHPUnit\Framework\TestCase;

class SMSNotifierRepositoryTest extends TestCase
{
    public function test_sms(): void
    {
        $smsNotifier = new SMSNotifierRepository();
        $this->expectOutputString("Sending SMS: Hello World");
        $smsNotifier->sendNotification('Hello World');
    }
}
