<?php

namespace AgeekDev\MMName\DTO;

class DataSourceDTO
{
    public static function make(string $enFilepath, string $mmFilepath): self
    {
        return new self($enFilepath, $mmFilepath);
    }

    public function __construct(private readonly string $enFilepath, private readonly string $mmFilepath) {}

    public function getPath(string $source = 'en'): string
    {
        check_source_name($source);

        return $source == 'en' ? $this->enFilepath : $this->mmFilepath;
    }
}
