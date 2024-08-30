<?php

namespace AgeekDev\MMName\DataSourceDriver;

use AgeekDev\MMName\DTO\DataSourceDTO;

class ConfigDriver extends DataSourceDriver
{
    public function make(): self
    {
        $this->dataSource = DataSourceDTO::make(
            config('mm-name-converter.data_source.config.en_filepath'),
            config('mm-name-converter.data_source.config.mm_filepath'),
        );

        return $this;
    }

    public function from(string $source = 'en'): self
    {
        $this->data = config(
            $this->dataSource->getPath($source)
        );

        return $this;
    }
}
