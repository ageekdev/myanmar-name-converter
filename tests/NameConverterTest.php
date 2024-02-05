
<?php
use AgeekDev\MMName\Facades\MMName;

it('can convert myan-glish name to myanmar', function () {
    $result = en_name_to_mm('Chaung htoon Nwal shoon shunn');
    expect($result)->toEqual('ချောင်ထွန်းနွယ်ရွှန်းရွှန်း');

    $result = MMName::convertToMm('Dun Zaw Daing');
    expect($result)->toEqual('ဒွန်ဇော်ဒိုင်း');

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
    $result = MMName::convertToEn('ဒေါ်ဧပြီ');
    expect($result)->toEqual('Daw April');

    $result = MMName::convertToEn('ဒေါ်ဧပြီ', false);
    expect($result)->toEqual('daw april');

    $result = MMName::convertToEn('ယဥ်မာအေး');
    expect($result)->toEqual('Yin Mar Aye');

    $result = MMName::convertToEn('ဦးကိုကို');
    expect($result)->toEqual('U Ko Ko');

    $result = MMName::convertToEn('ဦးကိုကို');
    expect($result)->toEqual('U Ko Ko');

    $result = MMName::convertToEn('ဦးအောင်‌ဝေ'); // zero width space
    expect($result)->toEqual('U Aung Wai');

    $result = MMName::convertToEn('မောင်မောင်');
    expect($result)->toEqual('Maung Maung');

    $result = MMName::convertToEn('မောင်မောင်');
    expect($result)->toEqual('Maung Maung');

    $result = MMName::convertToEn('လွမ်းထူး');
    expect($result)->toEqual('Lwan Htue');

    $result = MMName::convertToEn('ကြိုးကြာ');
    expect($result)->toEqual('Kyoe Kyar');

    $result = MMName::convertToEn('မြင့်မြင့်ခင်');
    expect($result)->toEqual('Myint Myint Khin');

    $result = MMName::convertToEn('မမကြီး');
    expect($result)->toEqual('Ma Ma Gyi');

    $result = MMName::convertToEn('ရီရီ');
    expect($result)->toEqual('Yie Yie');

    $result = MMName::convertToEn('မာလာ');
    expect($result)->toEqual('Mar Lar');

    $result = MMName::convertToEn('ချစ်ချစ်');
    expect($result)->toEqual('Chit Chit');

    $result = MMName::convertToEn('ကျော်ထွဋ်');
    expect($result)->toEqual('Kyaw Htut');

    $result = MMName::convertToEn('ထွဋ်ကျော်');
    expect($result)->toEqual('Htut Kyaw');

    $result = MMName::convertToEn('ရွှေဇင်ရွှေစင်ရွှန်း');
    expect($result)->toEqual('Shwe Zin Shwe Sin Shunn');

    $result = MMName::convertToEn('ကုဋေကုဋာ');
    expect($result)->toEqual('Ka Day Ka Dar');

    $result = MMName::convertToEn('မုဒြာ');
    expect($result)->toEqual('Mu Dra');

    $result = MMName::convertToEn('အောင်ခိုင်ခန့်');  //  ခန့် ခ န ် ့
    expect($result)->toEqual('Aung Khine Khant');

    $result = MMName::convertToEn('အောင်ခိုင်ခန့်');  // ခန့် ခ န ့ ်
    expect($result)->toEqual('Aung Khine Khant');

    $result = MMName::convertToEn('မောင်ခွန်ရဲအောင်');
    expect($result)->toEqual('Maung Khun Ye Aung');

    $result = MMName::convertToEn('မောင်ခွန်ရဲအောင်');
    expect($result)->toEqual('Maung Khun Ye Aung');

    $result = MMName::convertToEn('မြတ်ထွဋ်သူ');
    expect($result)->toEqual('Myat Htut Thu');

    $result = MMName::convertToEn('အိတိုးလျှံ');
    expect($result)->toEqual('Ei Toe Shan');

    $result = MMName::convertToEn('ဒွေး');
    expect($result)->toEqual('Dwe');

    $result = MMName::convertToEn('ဝဏ္ဏကောင်း');
    expect($result)->toEqual('Wunna Kaung');

    $result = MMName::convertToEn('အိန္ဒြေကောင်း');
    expect($result)->toEqual('Eaindray Kaung');

    $result = MMName::convertToEn('သဒ္ဒါနိုင်');
    expect($result)->toEqual('Thadar Naing');

    $result = MMName::convertToEn('စန္ဒ');
    expect($result)->toEqual('Sanda');

    $result = MMName::convertToEn('စန္ဒာ');
    expect($result)->toEqual('Sandar');

    $result = MMName::convertToEn('မောင်သန့်သူ');
    expect($result)->toEqual('Maung Thant Thu');

    $result = MMName::convertToEn('မောင်မောင်ကျော်');
    expect($result)->toEqual('Maung Maung Kyaw');
});
