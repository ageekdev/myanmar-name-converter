<?php

namespace AgeekDev\MMName\Utilities;

/**
 * Normalize the Myanmar Texts
 */
class Normalizer
{
    private array $normalizations = [
        '/\x{1037}\x{103A}/u' => '့်',
    ];

    public function normalizeMmText(string $text): string
    {
        foreach ($this->normalizations as $pattern => $replace) {
            $text = preg_replace($pattern, $replace, $text);
        }

        return $text;
    }
}
