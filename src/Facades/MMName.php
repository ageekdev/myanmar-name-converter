<?php

namespace AgeekDev\MMName\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static string convertToMm(string $nameString): string
 * @method static string convertToEn(string $nameString, bool $withPrefix = false): string
 * @method static string isMmName(string $nameString): bool
 * @method static string isEnName(string $nameString): bool
 * @method static string compare(string $firstName, string $secondName): bool
 *
 * @see \AgeekDev\MMName\MMName
 */
class MMName extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \AgeekDev\MMName\MMName::class;
    }
}
