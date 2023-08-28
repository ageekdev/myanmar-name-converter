<?php

use AgeekDev\MMName\Facades\MMName;

it('can check myan-glish names', function () {
    $result = MMName::isEnName('Tun Kyaw သက်');
    dd($result);
    expect($result)->toBeFalse();
});

it('can check myanmar names', function () {
    $result = MMName::isMmName('သီဟကျော်');
    //    dd($result);
    expect($result)->toBeTrue();
});
