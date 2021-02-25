<?php
//桁数
fscanf(STDIN, "%d", $N);
//カードの数字
$input = fgets(STDIN);
$arr = explode(' ', trim($input));

asort($arr, SORT_NUMERIC);

$cards = array_reverse($arr);

print_r($cards);

$turn = true;
$count = 0;
foreach($cards as $c) {
  if($turn) {
    $count += $c;
  } else {
    $count -= $c;
  }
  $turn != $turn;
}

$point = 0;
$point += array_sum($alice);
$point -= array_sum($bob);

echo $point;