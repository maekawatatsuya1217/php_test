<?php

// 1行のみの配列の場合

//   配列の中から特定の要素を出力
  $array_1 = ["北海道", "東京都", "大阪府"];
  echo $array_1[0];

//   配列の中身を全て出力
  var_dump($array_1);

//   複数行の配列の場合

//   配列の中から特定の要素を出力

  $array_2 = [
    ["青","黄","赤"],
    ["紫","緑","白"]
  ];
  echo $array_2[0][2];

  //   配列の中から特定の要素を出力
  var_dump($array_2);

//   連想配列

    $array_3 = [
    'name' => '前川',
    'height' => 170,
    'hobby' => 'バドミントン'
    ];

    echo $array_3['name'];

    var_dump($array_3);

    // 複雑な連想配列

    $player = [
        '本田選手' => [
            'height' => 180,
            'hobby' => 'サッカー'
        ],
        '香川選手' => [
            'height' => 170,
            'hobby' => 'サッカー'
        ],
    ];

    echo $player['本田選手']['height'];

    var_dump($player);

?>