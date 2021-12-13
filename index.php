<?php

  $height = 180;

  if ($height == 180){
      echo '身長は.{$height}.cmです！';
  }

  $color = 'blue';

  if ($color == red){
      echo '信号は赤です。';
  } elseif ($color == yellow){
      echo '信号は黄色です。';
  } else {
      echo '信号は赤色です。';
  }

//   emptyを使用したif文

  $num = '';

  if (empty($num)){
      echo '変数は空です';
  } else{
      echo '変数は空ではありません';
  }

  if (!empty($num)){
    echo '変数は空ではありません！';
  }

  $color1 = 'yellow';
  $color2 = 'red';

  if ($color1 === 'blue' && $color2 === 'red'){
      echo '変数の中身が２つとも一致しています！';
  } elseif ($color1 === 'blue' || $color2 === 'red'){
      echo '変数の中身が1つだけ一致しています！';
  } else {
      echo '変数の中身は全く一致していません！';
  }

?>