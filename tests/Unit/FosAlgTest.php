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
    public function callWithEmptyStringAndExpectEmptyArray()
    {
        $data = '';

        $expected = [];

        $actual = Algorithm::baseRealisation($data);

        $this->assertEquals($expected, $actual);
    }

    /** @test */
    public function caseLessArgs() {
        foreach ($this->expectedCall as $locale => $data) {
            $expected = $this->expectedAnswer[$locale]['caseLessArgs'];

            $actual = Algorithm::baseRealisation($this->expectedCall[$locale]['caseLessArgs']);

            $this->assertEquals($expected, $actual);
        }
    }
}
