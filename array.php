<?php

  $array=[1,2,3,4,5,6];
// 1. array_map
  $array_map = array_map(function (int $e){
    return $e * 2;
  }, $array);

  // var_dump(array_all($array, function (int $e){
  //   return $e > 2;
  // }));

  var_dump($array_map[0]);