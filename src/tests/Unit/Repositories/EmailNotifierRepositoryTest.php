<?php

namespace Tests\Unit\Repositories;

use App\Repositories\EmailNotifierRepository;
use PHPUnit\Framework\TestCase;

class EmailNotifierRepositoryTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_email(): void
    {
        $emailNotifier = new EmailNotifierRepository();
        $this->expectOutputString("Sending Email: Hello World");
        $emailNotifier->sendNotification('Hello World');
    }
}
