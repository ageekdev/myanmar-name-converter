<?php

namespace AgeekDev\MMName\Traits;

trait MyanmarSarHelpers
{
    private string $wordBreakExpression = '/(?!\x{1039})[\x{1000}-\x{1021}](?![\x{103a}\x{1037}\x{1039}])|[a-zA-Z0-9\x{1023}\x{1024}\x{1026}-\x{1029}\x{102a}\x{103f}\x{104c}\x{104d}\x{104f}\x{1040}-\x{1049}\x{104a}\x{104b}]+/u';

    private array $mmWordsNormalizePattern = [
        '/\x{1037}\x{103A}/u' => '့်',
    ];

    public function splitMyanmarSarSegments(string $text, string $separator = ' '): string
    {
        $separatedWithSpace = preg_replace($this->wordBreakExpression, $separator.'$0', $text);

        $characters = collect(explode(' ', $separatedWithSpace));

        $restructuredTextArray = $characters
            ->map(function ($character, $key) use ($characters) {
                if (preg_match('/\x{1039}/u', $character)) {
                    // If character matches the pattern, concatenate with the next character if it exists
                    return isset($characters[$key + 1]) ? $character.$characters[$key + 1] : $character;
                }

                // If not, just return the character
                return $character;
            })
            ->reject(function ($character, $key) use ($characters) {
                // Reject any character that is meant to be unset
                return preg_match('/\x{1039}/u', $characters->get($key - 1));
            })
            ->values()
            ->all();

        return implode(' ', $restructuredTextArray);
    }

    public function isMmName(string $name): bool
    {
        return preg_match('/^[\x{1000}-\x{103F}\x{104A}-\x{109F}|\x{0020}]+$/u', $name);
    }

    public function normalizeMmText(string $text): string
    {
        return collect($this->mmWordsNormalizePattern)
            ->reduce(function ($text, $replace, $pattern) {
                return preg_replace($pattern, $replace, $text);
            }, $text);
    }
}
