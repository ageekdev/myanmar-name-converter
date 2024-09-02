<?php

use AgeekDev\MMName\Facades\MMName;

it('works using json driver', function () {

    config()->set('mm-name-converter.data_source_driver', 'json');

    $result = MMName::convertToMm('A mi Zan');
    expect($result)->toEqual('အေမီစျန်');

    $result = MMName::convertToEn('အေမီစျန်');
    expect($result)->toEqual('Ami Zan');

    $result = MMName::isEnName('Tun Kyaw Soe');
    expect($result)->toBeTrue();

    $result = MMName::isMmName('သီဟ ကျော်');
    expect($result)->toBeTrue();

    $result = MMName::compare('Htun Htun', 'Tun Htoon');
    expect($result)->toBeTrue();
});

it('works using config driver', function () {

    config()->set('mm-name-converter.data_source_driver', 'config');

    $result = MMName::convertToMm('A mi Zan');
    expect($result)->toEqual('အေမီစျန်');

    $result = MMName::convertToEn('အေမီစျန်');
    expect($result)->toEqual('Ami Zan');

    $result = MMName::isEnName('Tun Kyaw Soe');
    expect($result)->toBeTrue();

    $result = MMName::isMmName('သီဟ ကျော်');
    expect($result)->toBeTrue();

    $result = MMName::compare('Htun Htun', 'Tun Htoon');
    expect($result)->toBeTrue();
});
