<?php

namespace AgeekDev\MMName\DataSourceDriver;

use AgeekDev\MMName\DTO\DataSourceDTO;
use Illuminate\Support\Collection;

abstract class DataSourceDriver implements DataSourceDriverInterface
{
    protected mixed $data;

    protected DataSourceDTO $dataSource;

    public function toCollection(): Collection
    {
        return collect($this->data);
    }

    public function toArray(): array
    {
        return $this->toCollection()->toArray();
    }
}
