<?php

use AgeekDev\MMName\Facades\MMName;

it('can convert myanmar name to myan-glish', function () {

    $result = MMName::convertToEn('အေမီစျန်');
    expect($result)->toEqual('Ami Zan');

    $result = MMName::convertToEn('တင်ဥက္ကာမောင်');
    expect($result)->toEqual('Tin Oakkar Maung');

    $result = MMName::convertToEn('ဒီဇင်ဘာအောင်');
    expect($result)->toEqual('December Aung');

    $result = MMName::convertToEn('အောဂတ်စတင်း');
    expect($result)->toEqual('Augustine');

    $result = MMName::convertToEn('အောဂတ်');
    expect($result)->toEqual('August');

    $result = MMName::convertToEn('ဇူလိုင်မိုး');
    expect($result)->toEqual('July Moe');

    $result = MMName::convertToEn('ဗစ်တာခင်ညို');
    expect($result)->toEqual('Victor Khin Nyo');

    $result = MMName::convertToEn('မေသရဖီ');
    expect($result)->toEqual('May Thayaphi');

    $result = MMName::convertToEn('ဒေါ်ဥမ္မာ');
    expect($result)->toEqual('Daw Ohnmar');

    $result = MMName::convertToEn('ဒေါ်သီတာ');
    expect($result)->toEqual('Daw Thidar');

    $result = MMName::convertToEn('ဒေါ်သန္တာဦး');
    expect($result)->toEqual('Daw Thandar Oo');

    $result = MMName::convertToEn('စန္ဒီစန္ဒီ');
    expect($result)->toEqual('Sandy Sandy');

    $result = MMName::convertToEn('နဒီပွင့်');
    expect($result)->toEqual('Nadi Pwint');

    $result = MMName::convertToEn('အာကာမြင့်အောင်');
    expect($result)->toEqual('Arkar Myint Aung');

    $result = MMName::convertToEn('ဒေါ်ဧပြီ');
    expect($result)->toEqual('Daw April');

    $result = MMName::convertToEn('ဒေါ်ဧပြီ', false);
    expect($result)->toEqual('daw april');

    $result = MMName::convertToEn('ယဥ်မာအေး');
    expect($result)->toEqual('Yin Mar Aye');

    $result = MMName::convertToEn('ယဉ်မာအေး');
    expect($result)->toEqual('Yin Mar Aye');

    $result = MMName::convertToEn('ဦးကိုကို');
    expect($result)->toEqual('Oo Ko Ko');

    $result = MMName::convertToEn('ဦးကိုကို');
    expect($result)->toEqual('Oo Ko Ko');

    $result = MMName::convertToEn('ဦးအောင်‌ဝေ'); // zero width space
    expect($result)->toEqual('Oo Aung Wai');

    $result = MMName::convertToEn('မောင်မောင်');
    expect($result)->toEqual('Maung Maung');

    $result = MMName::convertToEn('ခိုင်သင်ဇာ');
    expect($result)->toEqual('Khine Thinzar');

    $result = MMName::convertToEn('ဥက္ကာမိုး');
    expect($result)->toEqual('Oakkar Moe');

    $result = MMName::convertToEn('ရဲဝင်းထွဋ်');
    expect($result)->toEqual('Ye Win Htut');

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

    $result = MMName::convertToEn('ဆလိုင်း');
    expect($result)->toEqual('Salai');

    $result = MMName::convertToEn('စလိုင်း');
    expect($result)->toEqual('Salai');

});
