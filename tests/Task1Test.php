<?php

require('vendor/autoload.php');
require('task-1-article-preview.php');

use PHPUnit\Framework\TestCase;

class Task1Test extends TestCase
{
    public function testArticleMakePreviewTest1()
    {

        //                        1
        //              01234567890123
        $articleText = 'A b c a. D e f';
        $articleLink = 'http://example.com/?id=123';

        $articlePreview = articleMakePreview(
            $articleText,
            $articleLink,
            10
        );

        $this->assertEquals(
            'A b <a href="http://example.com/?id=123">c a. D...</a>',
            $articlePreview
        );
    }

    public function testArticleMakePreviewTest2()
    {

        //                        1
        //              01234567890123
        $articleText = 'A b c a. D e f';
        $articleLink = 'http://example.com/?id=123';

        $articlePreview = articleMakePreview(
            $articleText,
            $articleLink,
            12
        );

        $this->assertEquals(
            'A b c <a href="http://example.com/?id=123">a. D e...</a>',
            $articlePreview
        );
    }
}
