<?php

  $name1 = 'tatsuya';
  echo strlen($name1);

  $name2 = 'たつや';
  echo mb_strlen($name2);

  $string = '私の名前は前川です';
  echo str_replace('前川','まえかわ',$string);

?>