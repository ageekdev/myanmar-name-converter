<?php

namespace AgeekDev\MMName;

use AgeekDev\MMName\Traits\EnglishSarHelpers;
use AgeekDev\MMName\Traits\MyanmarSarHelpers;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Traits\Macroable;

class MMName
{
    use MyanmarSarHelpers, EnglishSarHelpers, Macroable;

    protected array $dataSource;

    public function __construct()
    {
        $this->dataSource = [
            'en' => Config::get('en-names-map'),
            'mm' => Config::get('mm-names-map'),
        ];
    }

    public function convertToEn(string $nameString): string
    {
        if (! $this->isMmName($nameString)) {
            return $nameString;
        }

        $enName = '';
        $nameSegments = $this->myanmarSarSegment($nameString);

        foreach (explode(' ', $nameSegments) as $name) {
            $enName .= ($this->dataSource['mm'][$name] ?? '').' ';
        }

        return trim($enName);
    }

    public function convertToMm(string $nameString): string
    {
        if (! $this->isEnName($nameString)) {
            return $nameString;
        }

        $mmName = '';
        $enName = $this->exceptionalNamesReplace(strtolower($nameString));

        foreach (explode(' ', $enName) as $name) {
            $mmName .= ($this->dataSource['en'][$name] ?? '').' ';
        }

        return str_replace(' ', '', trim($mmName));
    }

    public function compareMm(string $firstName, string $secondName): bool
    {
        if ($firstName === $secondName) {
            return true;
        }

        return false;
    }

    public function compareEn(string $firstName, string $secondName): bool
    {
        // Need to convert to mm first since mm words are unique.
        if ($this->convertToMm($firstName) === $this->convertToMm($secondName)) {
            return true;
        }

        return false;
    }

    public function isMmName(string $name): bool
    {
        return preg_match('/^[\x{1000}-\x{103F}\x{104A}-\x{109F}|\x{0020}]+$/u', $name);
    }

    public function isEnName(string $name): bool
    {
        return preg_match('/^[A-Za-z|\x{0020}]+$/', $name);
    }
}
