<?php

namespace AgeekDev\MMName\Traits;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Str;

trait EnglishSarHelpers
{
    private array $prefixNames = ['oo' => 'u', 'maung' => 'mg'];

    public function exceptionalNamesReplace(string $name): string
    {
        foreach (Config::get('en-exceptional-names') as $key => $value) {
            $name = str_replace($key, $value, $name);
        }

        return $name;
    }

    public function replacePrefix(string $name): string
    {
        if (Str::of($name)->startsWith(['oo', 'maung'])) {
            foreach ($this->prefixNames as $search => $prefix) {
                $name = Str::replaceFirst($search, $prefix, $name);
            }
        }

        return $name;
    }
}
