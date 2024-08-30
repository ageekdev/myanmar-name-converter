<?php

namespace AgeekDev\MMName\DataSourceDriver;

use Illuminate\Support\Manager;

class DataSourceManager extends Manager
{
    public function getDefaultDriver()
    {
        return 'config';
    }

    public function createJsonDriver(): DataSourceDriverInterface
    {
        return new JsonDriver();
    }

    public function createConfigDriver(): DataSourceDriverInterface
    {
        return new ConfigDriver();
    }
}
