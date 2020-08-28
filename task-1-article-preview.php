<?php

function htmlMakeLink($title, $href)
{
    return sprintf(
        '<a href="%s">%s</a>',
        $href,
        $title
    );
}

function articleMakePreview($content, $link, $length = 200)
{

    $short_content = mb_substr($content, 0, $length);

    $words = explode(' ', $short_content);

    $short_content_body = implode(' ', array_slice($words, 0, count($words) - 3));

    $short_content_link = htmlMakeLink(
        implode(' ', array_slice($words, count($words) - 3, 3)) . '...',
        $link
    );

    return $short_content_body . ' ' . $short_content_link;
}
