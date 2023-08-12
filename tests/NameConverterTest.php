<?php

use AgeekDev\MMName\MMName;

it('can convert myan-glish name to myanmar', function () {
    $result = MMName::name('Chaung htoon Nwal shoon shunn')->convertToMm();
    expect($result)->toEqual('ချောင် ထွန်း နွယ် ရွှန်း ရွှန်း');

    $result = MMName::name('Ohn Mar Tha Dar')->convertToMm();
    expect($result)->toEqual('ဥမ္မာ သဒ္ဒါ');
});

it('can convert myanmar name to myan-glish', function () {
    $result = MMName::name('မောင်မောင်')->convertToEn();
    expect($result)->toEqual('mg mg');

    $result = MMName::name('လွမ်းထူး')->convertToEn();
    expect($result)->toEqual('lwan htue');

    $result = MMName::name('ကြိုးကြာ')->convertToEn();
    expect($result)->toEqual('kyoe kyar');

    $result = MMName::name('မြင့်မြင့်ခင်')->convertToEn();
    expect($result)->toEqual('myint myint khin');

    $result = MMName::name('မမကြီး')->convertToEn();
    expect($result)->toEqual('ma ma gyi');

    $result = MMName::name('ရီရီ')->convertToEn();
    expect($result)->toEqual('yie yie');

    $result = MMName::name('မာလာ')->convertToEn();
    expect($result)->toEqual('mar lar');

    $result = MMName::name('ချစ်ချစ်')->convertToEn();
    expect($result)->toEqual('chit chit');

    $result = MMName::name('ကျော်ထွဋ်')->convertToEn();
    expect($result)->toEqual('kyaw htut');

    $result = MMName::name('ထွဋ်ကျော်')->convertToEn();
    expect($result)->toEqual('htut kyaw');

    $result = MMName::name('ရွှေဇင်ရွှေစင်ရွှန်း')->convertToEn();
    expect($result)->toEqual('shwe zin shwe sin shunn');

    $result = MMName::name('ကုဋေကုဋာ')->convertToEn();
    expect($result)->toEqual('ka day ka dar');

    $result = MMName::name('မုဒြာ')->convertToEn();
    expect($result)->toEqual('mu dra');

    // need to fix
    // အိန္ဒြေ, သဒ္ဒါ
});
