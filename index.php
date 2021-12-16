<?php

  function name($name){
      echo $name;
  }
  name('名前');

  function sumPrice($int1, $int2){
      $int3 = $int1 + $int2;
      return $int3;
  }

  $total = sumPrice(3,5);

  echo $total;
?>