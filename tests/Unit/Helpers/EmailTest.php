<?php

namespace Tests\Unit\Helpers;

use PHPUnit\Framework\TestCase;
use App\Helpers\Email;

class EmailTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function testEmail(): void
    {
        $result = Email::validate('info@email.com');
        $this->assertTrue($result);

        $result = Email::validate('info@@email.com');
        $this->assertFalse($result);
    }
}
