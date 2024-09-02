<?php

namespace AgeekDev\MMName\DataSourceDriver;

use AgeekDev\MMName\DTO\DataSourceDTO;
use Illuminate\Support\Facades\Config;

class ConfigDriver extends DataSourceDriver
{
    public function make(): self
    {
        $this->dataSource = DataSourceDTO::make(
            enFilepath: Config::get('mm-name-converter.data_source.config.en_filepath'),
            mmFilepath: Config::get('mm-name-converter.data_source.config.mm_filepath'),
        );

        return $this;
    }

    public function from(string $source = 'en'): self
    {
        $this->data = Config::get(
            $this->dataSource->getPath($source)
        );

        return $this;
    }
}
