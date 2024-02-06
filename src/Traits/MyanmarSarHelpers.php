<?php

namespace AgeekDev\MMName\Traits;

trait MyanmarSarHelpers
{
    private string $wordBreakExpression = '/(?!\x{1039})[\x{1000}-\x{1021}](?![\x{103a}\x{1037}\x{1039}])|[a-zA-Z0-9\x{1023}\x{1024}\x{1026}-\x{1029}\x{102a}\x{103f}\x{104c}\x{104d}\x{104f}\x{1040}-\x{1049}\x{104a}\x{104b}]+/u';

    public function myanmarSarSegment(string $text, string $separator = ' '): string
    {
        $seperatedWithSpace = preg_replace($this->wordBreakExpression, $separator.'$0', $text);

        $restructuredTextArray = [];
        $toBeUnset = [];
        $characters = explode(' ', $seperatedWithSpace);

        foreach ($characters as $key => $character) {
            if (preg_match('/\x{1039}/u', $character)) {
                $restructuredTextArray[] = isset($characters[$key + 1]) ? $character.$characters[$key + 1] : $character;
                $toBeUnset[] = $key + 1;
            } else {
                $restructuredTextArray[] = $character;
            }
        }

        foreach ($toBeUnset as $index) {
            unset($restructuredTextArray[$index]);
        }

        return implode(' ', $restructuredTextArray);
    }
}
