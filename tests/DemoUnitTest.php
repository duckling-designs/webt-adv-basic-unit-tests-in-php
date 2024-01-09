<?php

use PHPUnit\Framework\TestCase;

final class DemoUnitTest extends TestCase
{
    public function testSuccess(): void
    {
        $this->assertTrue(true);
    }

    public function testFail(): void
    {
        $this->assertTrue(false);
    }
}

