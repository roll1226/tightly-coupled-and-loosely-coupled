<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Entities\Todo;

class TodoTest extends TestCase
{
    /** @test */
    public function it_checks_fillable_attributes()
    {
        $todo = new Todo();

        $this->assertEquals(['title', 'description'], $todo->getFillable());
    }

    /** @test */
    public function it_checks_timestamps_are_enabled()
    {
        $todo = new Todo();

        $this->assertTrue($todo->timestamps);
    }

    /** @test */
    public function it_checks_casts_for_dates()
    {
        $todo = new Todo();

        $this->assertArrayHasKey('created_at', $todo->getCasts());
        $this->assertArrayHasKey('updated_at', $todo->getCasts());
        $this->assertEquals('datetime', $todo->getCasts()['created_at']);
        $this->assertEquals('datetime', $todo->getCasts()['updated_at']);
    }
}