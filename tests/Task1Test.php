<?php

require('vendor/autoload.php');
require('task-1-article-preview.php');

use PHPUnit\Framework\TestCase;
use BraindSchool\Task1;

class Task1Test extends TestCase
{
    public function testArticleMakePreviewTest1()
    {

        //                        1
        //              01234567890123
        $articleText = 'A b c a. Ddes e f';
        $articleLink = 'http://example.com/?id=123';

        $task1 = new Task1($articleText, $articleLink);

        $this->assertEquals(
            'A b <a href="http://example.com/?id=123">c a. Dd...</a>',
            $task1->articleMakePreview(11)
        );
    }

    public function testArticleMakePreviewTest2()
    {

        //                        1
        //              01234567890123
        $articleText = 'A b c a. D e f';
        $articleLink = 'http://example.com/?id=123';

        $task1 = new Task1($articleText, $articleLink);

        $this->assertEquals(
            'A b c <a href="http://example.com/?id=123">a. D e...</a>',
            $task1->articleMakePreview(12)
        );
    }
}
