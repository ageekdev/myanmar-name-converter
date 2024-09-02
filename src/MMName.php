<?php

namespace AgeekDev\MMName;

use AgeekDev\MMName\Traits\EnglishSarHelpers;
use AgeekDev\MMName\Traits\MyanmarSarHelpers;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Traits\Macroable;

class MMName
{
    use EnglishSarHelpers,
        Macroable,
        MyanmarSarHelpers;

    protected array $dataSource;

    public function __construct()
    {
        $this->dataSource = [
            'en' => Config::get('en-names-map'),
            'mm' => Config::get('mm-names-map'),
        ];
    }

    public function convertToEn(string $nameString, bool $isUcWords = true): string
    {
        $nameString = clean_text($nameString);

        if (! $this->isMmName($nameString)) {
            return $this->normalizeMmText($nameString);
        }

        $nameSegments = $this->splitMyanmarSarSegments(
            $this->normalizeMmText($nameString)
        );

        $enName = $this->transform($nameSegments, 'mm');

        $result = trim(
            $this->replaceEnExceptionalWords(
                strtolower($enName)
            )
        );

        return $isUcWords ? ucwords($result) : $result;
    }

    public function convertToMm(string $nameString): string
    {
        if (! $this->isEnName($nameString)) {
            return $nameString;
        }

        $nameSegments = $this->replaceEnExceptionalWords(
            strtolower($nameString)
        );

        $mmName = $this->transform($nameSegments, 'en');

        return clean_text($mmName);
    }

    public function compare(string $firstName, string $secondName): bool
    {
        $normalize = function ($name) {
            return trim_whitespaces(
                $this->isMmName($name)
                    ? $this->convertToMm($this->convertToEn($name))
                    : $this->convertToMm($name)
            );
        };

        return $normalize($firstName) === $normalize($secondName);
    }

    protected function transform(string $nameSegment, string $source = 'en'): string
    {
        if (! in_array($source, ['en', 'mm'])) {
            throw new \LogicException('Invalid source name provided');
        }

        return collect(explode(' ', $nameSegment))
            ->map(function ($name) use ($source) {
                return $this->dataSource[$source][$name] ?? '';
            })
            ->implode(' ');
    }
}
