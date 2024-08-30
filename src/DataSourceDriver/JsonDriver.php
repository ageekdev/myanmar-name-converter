<?php

namespace AgeekDev\MMName\DataSourceDriver;

use AgeekDev\MMName\DTO\DataSourceDTO;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;

class JsonDriver implements DataSourceDriverInterface
{
    private DataSourceDTO $dataSource;

    public function getDataSource(): self
    {
        $this->dataSource = DataSourceDTO::make(
            config('mm-name-converter.data_source.json.en_filepath'),
            config('mm-name-converter.data_source.json.mm_filepath'),
        );

        return $this;
    }

    public function fetchData(string $source = 'en'): Collection
    {
        return collect(
            json_decode(File::get($this->dataSource->getPath($source)))
        );
    }
}
