<?php

namespace CityPay\Test\Utils;

use CityPay\Utils\DirectPostMac;
use PHPUnit\Framework\TestCase;

class DirectPostMacTest extends TestCase
{

    public function testCreateMac(): void
    {
        self::assertEquals("163DBAB194D743866A9BCC7FC9C8A88FCD99C6BBBF08D619291212D1B91EE12E", DirectPostMac::createMac("LK123456789", hex2ByteArray("0123456789ABCDEF"), 27595, "OD-12345678"));
    }

    public function testVerifyMac(): void
    {
        self::assertTrue(DirectPostMac::verify("163DBAB194D743866A9BCC7FC9C8A88FCD99C6BBBF08D619291212D1B91EE12E", "LK123456789", hex2ByteArray("0123456789ABCDEF"), 27595 , "OD-12345678"));
    }
}
