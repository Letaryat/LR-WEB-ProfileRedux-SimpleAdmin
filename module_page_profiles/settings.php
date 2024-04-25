<?php return array(
  'faceit_api_key' => '', //https://developers.faceit.com/
  'use_all_vips_servers_in_one_table' => '0', // если у вас несколько игроков и вип игроки в одной базе поставьте 1 
  'bans_for_all_servers' => '0', // если у вас баны выдаются на сервера то поставьте 1 
  'lcrs' => 
  [
    [
      'min' => 0, // минимальное значания points 
      'max' => 700, // максимальное значания points 
      'status' => 'Non trusted', // имя статуса или имя перевода (если включено использование перевода)
      'translation' => '0' // использовать ли перевод
    ],
    [
      'min' => 701,
      'max' => 1500,
      'status' => 'Default',
      'translation' => '0'
    ],
    [
      'min' => 1501,
      'max' => 2000,
      'status' => 'Trusted',
      'translation' => '0'
    ]
  ],
  'backs' => 
  [
    1 => 
    [
      'url' => 'app/modules/module_page_profiles/assets/img/backs/image/no_image.jpg',
      'video' => 0,
    ],
    2 => 
    [
      'url' => 'app/modules/module_page_profiles/assets/img/backs/image/1.jpg',
      'video' => 0,
    ],
    3 => 
    [
      'url' => 'app/modules/module_page_profiles/assets/img/backs/image/2.jpg',
      'video' => 0,
    ],
    4 => 
    [
      'url' => 'app/modules/module_page_profiles/assets/img/backs/image/3.jpg',
      'video' => 0,
    ],
    5 => 
    [
      'url' => 'app/modules/module_page_profiles/assets/img/backs/image/4.jpg',
      'video' => 0,
    ],
    5 => 
    [
      'url' => 'app/modules/module_page_profiles/assets/img/backs/image/5.jpg',
      'video' => 0,
    ],
    6 => 
    [
      'url' => 'app/modules/module_page_profiles/assets/img/backs/image/v1.mp4',
      'video' => 1,
    ],
    7 => 
    [
      'url' => 'app/modules/module_page_profiles/assets/img/backs/image/v2.mp4',
      'video' => 1,
    ],
  ],
);