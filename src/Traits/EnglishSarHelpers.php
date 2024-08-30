<?php

namespace AgeekDev\MMName\Traits;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Str;

trait EnglishSarHelpers
{
    private array $prefixNames = ['oo' => 'u', 'maung' => 'mg'];

    public function replaceEnExceptionalWords(string $name): string
    {
        foreach (Config::get('en-exceptional-names') as $key => $value) {
            $name = str_replace($key, $value, $name);
        }

        return $name;
    }

    /**
     * @deprecated
     */
    public function replacePrefix(string $name): string
    {
        if (Str::of($name)->startsWith(['oo', 'maung'])) {
            foreach ($this->prefixNames as $search => $prefix) {
                $name = Str::replaceFirst($search, $prefix, $name);
            }
        }

        return $name;
    }

    public function isEnName(string $name): bool
    {
        return preg_match('/^[A-Za-z|\x{0020}]+$/', $name);
    }

    public function convertToEn(string $nameString, bool $isUcWords = true): string
    {
        $nameString = clean_text($nameString);

        if (! $this->isMmName($nameString)) {
            return $this->normalizeMmText($nameString);
        }

        $nameSegments = $this->splitMyanmarSarSegments(
            $this->normalizeMmText($nameString)
        );

        $enName = $this->transform($nameSegments, 'mm');

        $result = trim(
            $this->replaceEnExceptionalWords(
                strtolower($enName)
            )
        );

        return $isUcWords ? ucwords($result) : $result;
    }
}
