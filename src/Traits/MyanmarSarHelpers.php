<?php

namespace AgeekDev\MMName\Traits;

trait MyanmarSarHelpers
{
    private string $wordBreakExpression = '/(?!\x{1039})[\x{1000}-\x{1021}](?![\x{103a}\x{1039}])|[a-zA-Z0-9\x{1023}\x{1024}-\x{1029}\x{102a}\x{103f}\x{104c}\x{104d}\x{104f}\x{1040}-\x{1049}\x{104a}\x{104b}]+/u';

    public function myanmarSarSegment(string $text, string $separator = ' '): string
    {
        return preg_replace($this->wordBreakExpression, $separator.'$0', $text);
    }
}
