<?php

namespace AgeekDev\MMName;

use AgeekDev\MMName\DataSourceDriver\DataSourceDriverInterface;
use AgeekDev\MMName\Traits\EnglishSarHelpers;
use AgeekDev\MMName\Traits\MyanmarSarHelpers;
use Illuminate\Support\Traits\Macroable;

class MMName
{
    use EnglishSarHelpers,
        Macroable,
        MyanmarSarHelpers;

    public function __construct(protected DataSourceDriverInterface $dataSource)
    {
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
                return $this->dataSource
                    ->from($source)
                    ->toCollection()
                    ->get($name) ?? '';
            })
            ->implode(' ');
    }
}
