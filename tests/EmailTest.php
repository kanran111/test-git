<?php

use PHPUnit\Framework\TestCase;

final class EmailTest extends TestCase
{
    public function testTaoTestTuDiaChiEmailHopLe()
    {
        $this->assertInstanceOf(
            Email::class,
            Email::fromString('user@example.com')
        );
    }

    public function testToiTestChoi()
    {
        $this->expectException(InvalidArgumentException::class);

        Email::fromString('valid');
    }

    public function testCoTheSuDungNhuChuoi()
    {
        $this->assertEquals(
            'user@example.com',
            Email::fromString('user@example.com')
        );
    }
}
