<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Algorithm;

class UserTest extends TestCase
{
    public function testPhpUnitOk()
    {
        $expected = 'expected';

        $actual = 'expected';

        $this->assertEquals($expected, $actual);
    }

    public function testPhpUnitFail()
    {
        $expected = 'expected';

        $actual = 'actual';

        $this->assertNotEquals($expected, $actual);
    }

    public function testHello()
    {
        $expected = 'Hello there!';

        $actual = Algorithm::testHello();

        $this->assertEquals($expected, $actual);
    }
}
