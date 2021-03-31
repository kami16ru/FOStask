<?php

namespace App;

abstract class Algorithm
{
    public function __construct()
    {
    }

    static function testHello() {
        return "Hello there!";
    }
}