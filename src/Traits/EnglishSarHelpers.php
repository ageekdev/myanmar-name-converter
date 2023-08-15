<?php

namespace AgeekDev\MMName\Traits;

use Illuminate\Support\Facades\Config;

trait EnglishSarHelpers
{
    public function exceptionalNamesReplace(string $name): string
    {
        foreach (Config::get('en-exceptional-names') as $key => $value) {
            $name = str_replace($key, $value, $name);
        }

        return $name;
    }
}
