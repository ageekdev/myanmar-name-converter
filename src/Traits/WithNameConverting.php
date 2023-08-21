<?php

namespace AgeekDev\MMName\Traits;

trait WithNameConverting
{
    use MyanmarSarHelpers, EnglishSarHelpers;

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
