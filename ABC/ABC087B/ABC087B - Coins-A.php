<?php
fscanf(STDIN, "%d", $fiveHundred);
fscanf(STDIN, "%d", $oneHundred);
fscanf(STDIN, "%d", $fifty);
fscanf(STDIN, "%d", $expected);

/**
 * メモリ使用率少しマシになったけど実行速度がforループのみのほうが早い...
 */
$evaluate = [];
$count = 0;
for($j = 0; $j <=$fiveHundred; $j++) { 
  // スキップ
  if($j * 500 > $expected || $j > $fiveHundred) {
    continue;
  }
  for($k = 0; $k<=$oneHundred; $k++) {
     // スキップ
  	if($k * 100 > $expected || $k > $oneHundred) {
      continue;
    }
    for($l = 0; $l<=$fifty; $l++) {
      // スキップ
  	  if($j * 50 > $expected || $l > $fifty) {
        continue;
      }
      $sum = 500*$j + 100*$k + 50*$l;
      if($sum === $expected) {
        $count++;
      }
    }
  }
}
echo $count;