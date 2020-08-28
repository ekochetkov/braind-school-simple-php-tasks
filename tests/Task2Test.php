<?php

require('vendor/autoload.php');

use PHPUnit\Framework\TestCase;

class Task2Test extends TestCase
{
    public function testTest1()
    {

        $N = 3;
        $M = 3;

        $result = 7;

        $this->assertEquals(
            9,
            $result
        );
    }
}
