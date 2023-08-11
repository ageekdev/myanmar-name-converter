<?php

namespace AgeekDev\MMName;

use AgeekDev\MMName\Traits\MyanmarSarHelpers;
use Illuminate\Support\Facades\Config;

class MMName
{
    use MyanmarSarHelpers;

    protected array $dataSource;

    final public function __construct(protected string $name)
    {
        $this->dataSource = Config::get('names-map');
    }

    public static function name(string $name): self
    {
        return new static($name);
    }

    public function convertToEn(): string
    {
        $enName = '';
        $nameSegments = $this->myanmarSarSegment($this->name);

        foreach (explode(' ', $nameSegments) as $name) {
            $enName .= ($this->dataSource['mm'][$name] ?? '').' ';
        }

        return trim($enName);
    }

    public function convertToMm(): string
    {
        $mmName = '';

        foreach (explode(' ', strtolower($this->name)) as $name) {
            $mmName .= ($this->dataSource['en'][$name] ?? '').' ';
        }

        return trim($mmName);
    }
}
