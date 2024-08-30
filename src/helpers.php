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

if (! function_exists('compare_names')) {
    function compare_names(string $firstName, string $secondName): bool
    {
        return app(MMName::class)->compare($firstName, $secondName);
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

if (! function_exists('trim_whitespaces')) {
    function trim_whitespaces(string $value): string
    {
        return str_replace(' ', '', preg_replace('/\s\s+/', ' ', $value));
    }
}

if (! function_exists('clean_text')) {
    function clean_text(string $value): string
    {
        $value = preg_replace('/[\x{200B}-\x{200D}]/u', '', $value);

        $value = preg_replace('/\s\s+/', ' ', $value);

        $value = str_replace(' ', '', $value);

        return trim($value);
    }
}

if (! function_exists('check_source_name')) {
    function check_source_name(string $source): void
    {
        if (! in_array($source, ['en', 'mm'])) {
            throw new InvalidArgumentException('Invalid source name provided');
        }
    }
}
