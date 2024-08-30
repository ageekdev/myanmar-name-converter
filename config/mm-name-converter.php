<?php

return [
    'data_source_driver' => env('MM_NAME_CONVERTER_DATA_SOURCE', 'config'), // 'config' or 'json'

    'data_source' => [
        'json' => [
            'en_filepath' => env('MM_NAME_CONVERTER_EN_JSON_PATH', './json/en-names.json'),
            'mm_filepath' => env('MM_NAME_CONVERTER_MM_JSON_PATH', './json/mm-names.json'),
        ],
        'config' => [
            'en_filepath' => 'en-names-map',
            'mm_filepath' => 'mm-names-map',
        ],
    ],
];
