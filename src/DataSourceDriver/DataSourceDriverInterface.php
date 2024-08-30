<?php

namespace AgeekDev\MMName\DataSourceDriver;

use Illuminate\Support\Collection;

interface DataSourceDriverInterface
{
    public function getDataSource(): self;

    public function fetchData(string $source = 'en'): Collection;
}
