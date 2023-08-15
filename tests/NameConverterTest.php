<?php

use AgeekDev\MMName\Facades\MMName;

it('can convert myan-glish name to myanmar', function () {
    $result = MMName::convertToMm('Chaung htoon Nwal shoon shunn');
    expect($result)->toEqual('ချောင်ထွန်းနွယ်ရွှန်းရွှန်း');

    $result = MMName::convertToMm('Ohn Mar Tha Dar');
    expect($result)->toEqual('ဥမ္မာသဒ္ဒါ');

    $result = MMName::convertToMm('Arkar');
    expect($result)->toEqual('အာကာ');

    $result = MMName::convertToMm('thi da');
    expect($result)->toEqual('သီတာ');

    $result = MMName::convertToMm('thiha kyaw');
    expect($result)->toEqual('သီဟကျော်');

    $result = MMName::convertToMm('tun tun');
    expect($result)->toEqual('ထွန်းထွန်း');
});

it('can convert myanmar name to myan-glish', function () {
    $result = MMName::convertToEn('မောင်မောင်');
    expect($result)->toEqual('mg mg');

    $result = MMName::convertToEn('လွမ်းထူး');
    expect($result)->toEqual('lwan htue');

    $result = MMName::convertToEn('ကြိုးကြာ');
    expect($result)->toEqual('kyoe kyar');

    $result = MMName::convertToEn('မြင့်မြင့်ခင်');
    expect($result)->toEqual('myint myint khin');

    $result = MMName::convertToEn('မမကြီး');
    expect($result)->toEqual('ma ma gyi');

    $result = MMName::convertToEn('ရီရီ');
    expect($result)->toEqual('yie yie');

    $result = MMName::convertToEn('မာလာ');
    expect($result)->toEqual('mar lar');

    $result = MMName::convertToEn('ချစ်ချစ်');
    expect($result)->toEqual('chit chit');

    $result = MMName::convertToEn('ကျော်ထွဋ်');
    expect($result)->toEqual('kyaw htut');

    $result = MMName::convertToEn('ထွဋ်ကျော်');
    expect($result)->toEqual('htut kyaw');

    $result = MMName::convertToEn('ရွှေဇင်ရွှေစင်ရွှန်း');
    expect($result)->toEqual('shwe zin shwe sin shunn');

    $result = MMName::convertToEn('ကုဋေကုဋာ');
    expect($result)->toEqual('ka day ka dar');

    $result = MMName::convertToEn('မုဒြာ');
    expect($result)->toEqual('mu dra');

    // need to fix
    // အိန္ဒြေ, သဒ္ဒါ
});
