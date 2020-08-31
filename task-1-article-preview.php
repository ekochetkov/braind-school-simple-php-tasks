<?php

namespace BraindSchool;

/**
 * Task1 Решение задания 1. Реализовать скрипт на PHP
 */
class Task1
{

    var $content;
    var $link;

    function __construct($content, $link)
    {
        $this->content = $content;
        $this->link    = $link;
    }

    static function htmlMakeLink($title, $href)
    {
        return sprintf(
            '<a href="%s">%s</a>',
            $href,
            $title
        );
    }
    
    /**
     * articleMakePreview Формирование содержимого предпросмотра статьи
     *
     * @param  integer $length Количество символов для разделения
     * @return void
     */
    function articleMakePreview($length = 200)
    {

        $short_content = mb_substr($this->content, 0, $length);

        $words = explode(' ', $short_content);

        $short_content_body = implode(' ', array_slice($words, 0, count($words) - 3));

        $short_content_link = self::htmlMakeLink(
            implode(' ', array_slice($words, count($words) - 3, 3)) . '...',
            $this->link
        );

        return $short_content_body . ' ' . $short_content_link;
    }
}
