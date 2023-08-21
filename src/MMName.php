<?php

namespace AgeekDev\MMName;

use AgeekDev\MMName\Traits\EnglishSarHelpers;
use AgeekDev\MMName\Traits\MyanmarSarHelpers;
use Illuminate\Support\Facades\Config;

class MMName
{
    use MyanmarSarHelpers, EnglishSarHelpers;

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
        $enName = '';
        $nameSegments = $this->myanmarSarSegment($nameString);

        foreach (explode(' ', $nameSegments) as $name) {
            $enName .= ($this->dataSource['mm'][$name] ?? '').' ';
        }

        return trim($enName);
    }

    public function convertToMm(string $nameString): string
    {
        $mmName = '';
        $enName = $this->exceptionalNamesReplace(strtolower($nameString));

        foreach (explode(' ', $enName) as $name) {
            $mmName .= ($this->dataSource['en'][$name] ?? '').' ';
        }

        return str_replace(' ', '', trim($mmName));
    }
}
