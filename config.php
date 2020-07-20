<?php
    if(isset($_GET['lang']) && !empty($_GET['lang']))
    {
        $lang = $_GET['lang'];
    }
    else
    {
        $lang = 'TW';
    }
    if(isset($_GET['stock']) && !empty($_GET['stock']))
    {
        $stock = $_GET['stock'];
    }
    else
    {
        $stock = '';
    }
    date_default_timezone_set('Asia/Taipei');
    $date = date('Y-m-d');
    $lang_Arr = [
        'TR' => '土耳其',
        'DK' => '丹麥',
        'BR' => '巴西',
        'JP' => '日本',
        'BE' => '比利時',
        'IL' => '以色列',
        'CA' => '加拿大',
        'TW' => '台灣',
        'HU' => '匈牙利',
        'ID' => '印尼',
        'IN' => '印度',
        'GR' => '希臘',
        'SA' => '沙烏地阿拉伯',
        'NG' => '奈及利亞',
        'FR' => '法國',
        'PL' => '波蘭',
        'KE' => '肯亞',
        'FI' => '芬蘭',
        'AR' => '阿根廷',
        'RU' => '俄羅斯',
        'ZA' => '南非',
        'KR' => '南韓',
        'US' => '美國',
        'GB' => '英國',
        'HK' => '香港',
        'CO' => '哥倫比亞',
        'EG' => '埃及',
        'NO' => '挪威',
        'TH' => '泰國',
        'UA' => '烏克蘭',
        'NZ' => '紐西蘭',
        'MY' => '馬來西亞',
        'CZ' => '捷克',
        'NL' => '荷蘭',
        'CL' => '智利',
        'PH' => '菲律賓',
        'VN' => '越南',
        'AT' => '奧地利',
        'IE' => '愛爾蘭',
        'SG' => '新加坡',
        'CH' => '瑞士',
        'SE' => '瑞典',
        'IT' => '義大利',
        'PT' => '葡萄牙',
        'DE' => '德國',
        'MX' => '墨西哥',
        'AU' => '澳洲',
        'RO' => '羅馬尼亞',
    ];
    $folderpath = './python/data/google_trends/'.$lang.'/';
    if(!is_dir($folderpath))
    {
        mkdir("./python/data/google_trends/".$lang, 0777);
    }
    $filepath = './python/data/google_trends/'.$lang.'/'.$date.'.json';
    $badge = ['primary','secondary','success','danger','warning','info','dark'];