<?php

require('vendor/autoload.php');
require('task-3-strange-math.php');

use PHPUnit\Framework\TestCase;

class Task3Test extends TestCase
{
    public function testTest1()
    {

        $n = 11;
        $k =  2;

        // 1, 10, 11, 2, 3, 4, 5, 6, 7, 8, 9
        // 1,  2,  3, 4

        $indexOfK = getIndexOfK($n,$k);

        $this->assertEquals(
            4,
            $indexOfK
        );
    }

    public function testTest2()
    {

        $n = 15;
        $k =  2;

        // 1, 10, 11, 12, 13, 14, 15, 2, 3, 4, 5, 6, 7, 8, 9
        // 1,  2,  3,  4,  5,  6,  7, 8

        $indexOfK = getIndexOfK($n,$k);

        $this->assertEquals(
            8,
            $indexOfK
        );
    }

    public function testTest3()
    {

        $n = 22;
        $k =  2;

        // 1, 10, 11, 12, 13, 14, 15, 16, 17, 18
        // 1,  2,  3,  4,  5,  6,  7,  8,  9, 10

        // 19,  2, 20, 21, 22,  3,  4,  5,  6,  7
        // 11, 12, 13, 14, 15, 16, 17, 18, 19, 22

        $indexOfK = getIndexOfK($n,$k);

        $this->assertEquals(
            12,
            $indexOfK
        );
    }

}
