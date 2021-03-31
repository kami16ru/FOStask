<?php

namespace Tests;

use App\Algorithm;
use Tests\FosAlgTestCase;

class FosAlgTest extends FosAlgTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    /** @test */
    public function callWithEmptyArrayAndExpectEmptyArray()
    {
        $expected = [];

        $actual = Algorithm::baseRealisation([]);

        $this->assertEquals($expected, $actual);
    }

    /** @test */
    public function callWithOneElement()
    {
        $expected = [];

        $actual = Algorithm::baseRealisation([]);

        $this->assertEquals($expected, $actual);
    }

    /** @test */
    public function callWithManyElements() {
        $data = $this->expectedCall;

        $expected = $this->expectedAnswer;

        foreach ($expected as $locale => $expectedData) {
            foreach ($expectedData as $assertion => $value) {
                $this->assertEquals($expected[$locale][$assertion], Algorithm::baseRealisation($data[$locale][$assertion]));
            }
        }

    }
}
