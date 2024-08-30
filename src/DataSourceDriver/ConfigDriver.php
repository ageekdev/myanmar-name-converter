<?php

namespace AgeekDev\MMName\DataSourceDriver;

use AgeekDev\MMName\DTO\DataSourceDTO;
use Illuminate\Support\Collection;

class ConfigDriver implements DataSourceDriverInterface
{
    private DataSourceDTO $dataSource;

    public function getDataSource(): self
    {
        $this->dataSource = DataSourceDTO::make(
            config('mm-name-converter.data_source.config.en_filepath'),
            config('mm-name-converter.data_source.config.mm_filepath'),
        );

        return $this;
    }

    public function fetchData(string $source = 'en'): Collection
    {
        return collect(
            config($this->dataSource->getPath($source))
        );
    }
}
