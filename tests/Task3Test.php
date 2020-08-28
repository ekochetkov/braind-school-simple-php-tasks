<?php

require('vendor/autoload.php');

use PHPUnit\Framework\TestCase;

class Task3Test extends TestCase
{
    public function testTest1()
    {

        $n = 11;
        $k =  2;

        $result = 5;

        $this->assertEquals(
            4,
            $result
        );
    }
}
