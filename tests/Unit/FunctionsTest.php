<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class FunctionsTest extends TestCase
{
    public function testEmail(): void
    {
        $result = validate_email('test@example.com');
        $this->assertTrue($result);

        $result = validate_email('test@@example.com');
        $this->assertFalse($result);
    }
}
