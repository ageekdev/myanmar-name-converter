<?php

namespace AgeekDev\MMName;

use Illuminate\Support\Facades\Config;

class MMName extends NameManipulator
{
    protected array $dataSource;

    public function __construct()
    {
        $this->dataSource = [
            'en' => Config::get('en-names-map'),
            'mm' => Config::get('mm-names-map'),
        ];
    }
}
