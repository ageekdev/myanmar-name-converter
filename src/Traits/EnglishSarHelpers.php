<?php

namespace AgeekDev\MMName\Traits;

trait EnglishSarHelpers
{
    private array $specialNames = [
        'ohn mar' => 'ohnmar',
        'tha dar' => 'thadar',
        'eain dray' => 'eaindray',
        'aein dray' => 'aeindray',
        'thu ya' => 'thuya',
        'thu ra' => 'thura',
        'thi da' => 'thida',
    ];

    public function exceptionalNamesReplace(string $name): string
    {
        foreach ($this->specialNames as $key => $value) {
            $name = str_replace($key, $value, $name);
        }

        return $name;
    }
}
