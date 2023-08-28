<?php

use AgeekDev\MMName\Facades\MMName;

it('can compare names', function () {
    $result = compare_names('Aung Kyaw Khine', 'Aung Kyaw Khaing');
    expect($result)->toBeTrue();

    $result = MMName::compare('Aung Kyaw Khine', 'Aung Kyaw Khaing');
    expect($result)->toBeTrue();

    $result = MMName::compare('Htun Htun', 'Tun Htoon');
    expect($result)->toBeTrue();

    $result = MMName::compare('Thida', 'thi dar');
    expect($result)->toBeTrue();

    $result = MMName::compare('khaing', 'khine');
    expect($result)->toBeTrue();

    $result = MMName::compare('သီဟကျော်', 'သီ ဟ ကျော်');
    expect($result)->toBeTrue();

    $result = MMName::compare('သီဟကျော်', 'သီဟကျော်');
    expect($result)->toBeTrue();

    $result = MMName::compare('သီဟကျော်', 'thi ha kyaw');
    expect($result)->toBeTrue();

    $result = MMName::compare('thiha kyaw', 'သီ ဟ ကျော်');
    expect($result)->toBeTrue();
});
