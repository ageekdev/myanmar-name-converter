<?php

namespace AgeekDev\MMName\DataSourceDriver;

use Illuminate\Support\Collection;

interface DataSourceDriverInterface
{
    public function make(): self;

    public function from(string $source = 'en'): self;

    public function toCollection(): Collection;

    public function toArray(): array;
}
