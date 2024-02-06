<?php

use AgeekDev\MMName\Facades\MMName;

it('can check myan-glish names', function () {
    $result = MMName::isEnName('Tun Kyaw သက်');
    expect($result)->toBeFalse();

    $result = MMName::isEnName('Tun Kyaw Soe');
    expect($result)->toBeTrue();
});

it('can check myanmar names', function () {
    $result = MMName::isMmName('သီဟ ကျော်');
    expect($result)->toBeTrue();

    $result = MMName::isMmName('ရဲဝင်းထွဋ်');
    expect($result)->toBeTrue();

    $result = MMName::isMmName('သီဟ Kyaw');
    expect($result)->toBeFalse();
});
