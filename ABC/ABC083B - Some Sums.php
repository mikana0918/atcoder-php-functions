<?php
$input = fscanf(STDIN, "%d %d %d", $N, $min, $max);

$arr = [];
foreach(range(1, $N) as $n) {
  $wa = array_sum(str_split($n));
  if($min <= $wa && $wa <= $max) {
    $arr[] = $n;
  }
}
echo array_sum($arr);

