<?php

use AgeekDev\MMName\MMName;

if (! function_exists('en_name_to_mm')) {
    function en_name_to_mm(string $name): string
    {
        return app(MMName::class)->convertToMm($name);
    }
}

if (! function_exists('mm_name_to_en')) {
    function mm_name_to_en(string $name): string
    {
        return app(MMName::class)->convertToEn($name);
    }
}

if (! function_exists('compare_en_names')) {
    function compare_en_names(string $firstName, string $secondName): bool
    {
        return app(MMName::class)->compareEn($firstName, $secondName);
    }
}

if (! function_exists('compare_mm_names')) {
    function compare_mm_names(string $firstName, string $secondName): bool
    {
        return app(MMName::class)->compareMm($firstName, $secondName);
    }
}

if (! function_exists('is_mm_name')) {
    function is_mm_name(string $name): bool
    {
        return app(MMName::class)->isMmName($name);
    }
}

if (! function_exists('is_en_name')) {
    function is_en_name(string $name): bool
    {
        return app(MMName::class)->isEnName($name);
    }
}
