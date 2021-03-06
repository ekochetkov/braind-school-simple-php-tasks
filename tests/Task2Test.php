<?php

require('vendor/autoload.php');
require('task-2-help-programmer-Petya.php');

use PHPUnit\Framework\TestCase;
use BraindSchool\Task2;

class Task2Test extends TestCase
{

    public function testTest1()
    {

        $N = 3;
        $M = 3;

        $this->assertEquals(9, Task2::minCommits($N, $M));
        $this->assertEquals(9, Task2::minCommitsV2($N, $M));
    }

    public function testTest2()
    {

        $N = 2;
        $M = 0;

        $this->assertEquals(1, Task2::minCommits($N, $M));
        $this->assertEquals(1, Task2::minCommitsV2($N, $M));
    }

    public function testTest3()
    {

        $N = 1;
        $M = 2;

        $this->assertEquals(2, Task2::minCommits($N, $M));
        $this->assertEquals(2, Task2::minCommitsV2($N, $M));
    }

    public function testTest4()
    {

        $N = 1;
        $M = 0;

        $this->assertEquals(-1, Task2::minCommits($N, $M));
        $this->assertEquals(-1, Task2::minCommitsV2($N, $M));
    }

    public function testTest5()
    {

        $N = 5;
        $M = 0;

        $this->assertEquals(-1, Task2::minCommits($N, $M));
        $this->assertEquals(-1, Task2::minCommitsV2($N, $M));
    }

    public function testTest6()
    {

        $N = 0;
        $M = 0;

        $this->assertEquals(0, Task2::minCommits($N, $M));
        $this->assertEquals(0, Task2::minCommitsV2($N, $M));
    }

    public function testTest7()
    {

        $N = 0;
        $M = 6;

        $this->assertEquals(8, Task2::minCommits($N, $M));
        $this->assertEquals(8, Task2::minCommitsV2($N, $M));
    }
}
