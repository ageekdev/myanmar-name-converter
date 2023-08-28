
<?php
use AgeekDev\MMName\Facades\MMName;

it('can convert myan-glish name to myanmar', function () {
    $result = en_name_to_mm('Chaung htoon Nwal shoon shunn');
    expect($result)->toEqual('ချောင်ထွန်းနွယ်ရွှန်းရွှန်း');

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

    $result = MMName::convertToMm('khun ye aung');
    expect($result)->toEqual('ခွန်ရဲအောင်');

    $result = MMName::convertToMm('salai ye aung');
    expect($result)->toEqual('စလိုင်းရဲအောင်');

    $result = MMName::convertToMm('waiyan aung');
    expect($result)->toEqual('၀ေယံအောင်');

    $result = MMName::convertToMm('aung khine khant');
    expect($result)->toEqual('အောင်ခိုင်ခန့်');

    $result = MMName::convertToMm('aung khaing khant');
    expect($result)->toEqual('အောင်ခိုင်ခန့်');

    $result = MMName::convertToMm('wanna kaung');
    expect($result)->toEqual('ဝဏ္ဏကောင်း');

    $result = MMName::convertToMm('thanda');
    expect($result)->toEqual('သန္တာ');

    $result = MMName::convertToMm('sanda');
    expect($result)->toEqual('စန္ဒ');

    $result = MMName::convertToMm('sandar');
    expect($result)->toEqual('စန္ဒာ');

    $result = MMName::convertToMm('zeya');
    expect($result)->toEqual('ဇေယျာ');

    $result = MMName::convertToMm('Nann Yupar Hlaing');
    expect($result)->toEqual('နန်းရူပါလှိုင်');

    $result = MMName::convertToMm('Dway');
    expect($result)->toEqual('ဒွေး');
});

it('can convert myanmar name to myan-glish', function () {
    $result = mm_name_to_en('မောင်မောင်');
    expect($result)->toEqual('mg mg');

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

    $result = MMName::convertToEn('အောင်ခိုင်ခန့်');  //  ခန့် ခ န ် ့
    expect($result)->toEqual('aung khine khant');

    $result = MMName::convertToEn('အောင်ခိုင်ခန့်');  // ခန့် ခ န ့ ်
    expect($result)->toEqual('aung khine khant');

    $result = MMName::convertToEn('မြတ်ထွဋ်သူ');
    expect($result)->toEqual('myat htut thu');

    $result = MMName::convertToEn('အိတိုးလျှံ');
    expect($result)->toEqual('ei toe shan');

    $result = MMName::convertToEn('ဒွေး');
    expect($result)->toEqual('dwe');

    $result = MMName::convertToEn('ဝဏ္ဏကောင်း');
    expect($result)->toEqual('wunna kaung');

    $result = MMName::convertToEn('အိန္ဒြေကောင်း');
    expect($result)->toEqual('eaindray kaung');

    $result = MMName::convertToEn('သဒ္ဒါနိုင်');
    expect($result)->toEqual('thadar naing');

    $result = MMName::convertToEn('စန္ဒ');
    expect($result)->toEqual('sanda');

    $result = MMName::convertToEn('စန္ဒာ');
    expect($result)->toEqual('sandar');
});
