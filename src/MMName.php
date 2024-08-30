<?php

namespace AgeekDev\MMName;

use AgeekDev\MMName\DataSourceDriver\DataSourceDriverInterface;
use AgeekDev\MMName\Facades\DataSource;
use AgeekDev\MMName\Traits\EnglishSarHelpers;
use AgeekDev\MMName\Traits\MyanmarSarHelpers;
use Illuminate\Support\Traits\Macroable;

class MMName
{
    use EnglishSarHelpers,
        Macroable,
        MyanmarSarHelpers;

    protected DataSourceDriverInterface $dataSource;

    public function __construct()
    {
        $this->dataSource = DataSource::driver(
            config('mm-name-converter.data_source_driver')
        )->getDataSource();
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
        check_source_name($source);

        return collect(explode(' ', $nameSegment))
            ->map(function ($name) use ($source) {
                return $this->dataSource->fetchData($source)->get($name) ?? '';
            })
            ->implode(' ');
    }
}
