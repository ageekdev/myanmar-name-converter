<?php

namespace AgeekDev\MMName\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static string convertToMm(string $nameString)
 * @method static string convertToEn(string $nameString)
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
