<?php

namespace AgeekDev\MMName\Traits;

trait WithNameComparing
{
    use WithNameConverting;

    public static function compare(string $firstName, string $secondName): bool|string
    {
        if ($firstName === $secondName) {
            return true;
        }

        return "The two string: $firstName and $secondName does not match";
    }
}
