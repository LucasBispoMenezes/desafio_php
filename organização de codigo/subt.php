<?php 
  function subtracao (...$args) {
    return array_reduce($args, function ($carry, $item) {
      return $carry - $item;
    });
  }