<?php

namespace AgeekDev\MMName\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AgeekDev\MMName\MMName
 */
class MMName extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \AgeekDev\MMName\MMName::class;
    }
}
