<?php

use AgeekDev\MMName\Facades\MMName;

it('can convert myan-glish name to myanmar', function () {

    $result = MMName::convertToMm('A mi Zan');
    expect($result)->toEqual('အေမီစျန်');

    $result = MMName::convertToMm('Ami Zan');
    expect($result)->toEqual('အေမီစျန်');

    $result = MMName::convertToMm('Tin Oakkar Maung');
    expect($result)->toEqual('တင်ဥက္ကာမောင်');

    $result = MMName::convertToMm('August Moe');
    expect($result)->toEqual('အောဂတ်မိုး');

    $result = MMName::convertToMm('July Moe');
    expect($result)->toEqual('ဇူလိုင်မိုး');

    $result = MMName::convertToMm('August');
    expect($result)->toEqual('အောဂတ်');

    $result = MMName::convertToMm('Augustine');
    expect($result)->toEqual('အောဂတ်စတင်း');

    $result = MMName::convertToMm('December Aung');
    expect($result)->toEqual('ဒီဇင်ဘာအောင်');

    $result = MMName::convertToMm('Daw April');
    expect($result)->toEqual('ဒေါ်ဧပြီ');

    $result = MMName::convertToMm('Victor Khin Nyo');
    expect($result)->toEqual('ဗစ်တာခင်ညို');

    $result = MMName::convertToMm('Htate Htar');
    expect($result)->toEqual('ထိပ်ထား');

    $result = MMName::convertToMm('May Thayaphi');
    expect($result)->toEqual('မေသရဖီ');

    $result = MMName::convertToMm('May Tharaphi');
    expect($result)->toEqual('မေသရဖီ');

    $result = MMName::convertToMm('May Tha ya phi');
    expect($result)->toEqual('မေသရဖီ');

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

    $result = MMName::convertToMm('Arkar Myint Aung');
    expect($result)->toEqual('အာကာမြင့်အောင်');

    $result = MMName::convertToMm('Yair Win Htut');
    expect($result)->toEqual('ရဲဝင်းထွဋ်');

    $result = MMName::convertToMm('Nadi Pwint');
    expect($result)->toEqual('နဒီပွင့်');

    $result = MMName::convertToMm('Nady Pwint');
    expect($result)->toEqual('နဒီပွင့်');

    $result = MMName::convertToMm('Sandy Sandi');
    expect($result)->toEqual('စန္ဒီစန္ဒီ');

    $result = MMName::convertToMm('Salai');
    expect($result)->toEqual('စလိုင်း');
});
