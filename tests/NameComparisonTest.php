<?php

use AgeekDev\MMName\Facades\MMName;

it('can compare myan-glish names', function () {
    $result = compare_en_names('Aung Kyaw Khine', 'Aung Kyaw Khaing');
    expect($result)->toBeTrue();

    $result = MMName::compareEn('Aung Kyaw Khine', 'Aung Kyaw Khaing');
    expect($result)->toBeTrue();

    $result = MMName::compareEn('Thida', 'thi dar');
    expect($result)->toBeTrue();
});

it('can compare myanmar names', function () {
    $result = compare_mm_names('သီဟကျော်', 'သီဟကျော်');
    expect($result)->toBeTrue();

    $result = MMName::compareMm('သီဟကျော်', 'သီဟကျော်');
    expect($result)->toBeTrue();

    $result = MMName::compareMm('thiha', 'thiha');
    expect($result)->toBeTrue();
});
