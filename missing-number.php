<?php

// n * (n + 1) / 2
// done = 15minutes
function findMissing($arr, $N){
  $expectedSum = $N * ($N + 1) / 2;
  $actualSum = array_sum($arr);  

  return $expectedSum - $actualSum;
}

$arr = [1, 2, 3, 5];
echo findMissing($arr, 5);

