<?php

namespace AgeekDev\MMName;

use AgeekDev\MMName\Traits\EnglishSarHelpers;
use AgeekDev\MMName\Traits\MyanmarSarHelpers;
use AgeekDev\MMName\Utilities\Normalizer;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Traits\Macroable;

class MMName extends Normalizer
{
    use EnglishSarHelpers, Macroable, MyanmarSarHelpers;

    protected array $dataSource;

    public function __construct()
    {
        $this->dataSource = [
            'en' => Config::get('en-names-map'),
            'mm' => Config::get('mm-names-map'),
        ];
    }

    public function convertToEn(string $nameString, bool $withPrefix = false): string
    {
        if (! $this->isMmName($nameString)) {
            return $this->normalizeMmText($nameString);
        }

        $enName = '';
        $nameSegments = $this->myanmarSarSegment($this->normalizeMmText($nameString));

        foreach (explode(' ', $nameSegments) as $name) {
            $enName .= ($this->dataSource['mm'][$name] ?? '').' ';
        }

        if ($withPrefix) {
            return $this->replacePrefix(trim($enName));
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

    public function isMmName(string $name): bool
    {
        return preg_match('/^[\x{1000}-\x{103F}\x{104A}-\x{109F}|\x{0020}]+$/u', $name);
    }

    public function isEnName(string $name): bool
    {
        return preg_match('/^[A-Za-z|\x{0020}]+$/', $name);
    }

    public function compare(string $firstName, string $secondName): bool
    {
        $firstName = $this->isMmName($firstName) ? $this->convertToMm($this->convertToEn($firstName)) : $this->convertToMm($firstName);
        $secondName = $this->isMmName($secondName) ? $this->convertToMm($this->convertToEn($secondName)) : $this->convertToMm($secondName);

        if (trim_whitespaces($firstName) === trim_whitespaces($secondName)) {
            return true;
        }

        return false;
    }
}
