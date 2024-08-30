<?php

namespace AgeekDev\MMName\DataSourceDriver;

use AgeekDev\MMName\DTO\DataSourceDTO;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\File;

class JsonDriver extends DataSourceDriver
{
    public function make(): self
    {
        $this->dataSource = DataSourceDTO::make(
            enFilepath: Config::get('mm-name-converter.data_source.json.en_filepath'),
            mmFilepath: Config::get('mm-name-converter.data_source.json.mm_filepath'),
        );

        return $this;
    }

    public function from(string $source = 'en'): self
    {
        $this->data = json_decode(
            File::get(
                $this->dataSource->getPath($source)
            )
        );

        return $this;
    }
}
