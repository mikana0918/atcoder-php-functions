<?php
fscanf(STDIN, "%d", $fiveHundred);
fscanf(STDIN, "%d", $oneHundred);
fscanf(STDIN, "%d", $fifty);
fscanf(STDIN, "%d", $expected);

/**
 * for文より速い, 実行時間も早い
 */
$count = 0;
foreach(range(0, $fiveHundred) as $j) { 
  foreach(range(0, $oneHundred) as $k) {
    foreach(range(0, $fifty) as $l) {
      $sum = 500*$j + 100*$k + 50*$l;
      if($sum === $expected) {
        $count++;
      }
    }
  }
}
echo $count;