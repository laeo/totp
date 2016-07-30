<?php require_once dirname(__DIR__) . '/vendor/autoload.php';

function str_random($length = 6)
{
    $atom   = range('a', 'z');
    $atom   = join('', $atom);
    $suffle = str_shuffle($atom);

    return substr($suffle, 0, $length);
}
