<?php
fscanf(STDIN, "%d", $fiveHundred);
fscanf(STDIN, "%d", $oneHundred);
fscanf(STDIN, "%d", $fifty);
fscanf(STDIN, "%d", $expected);
// 全てのお金を使って、$expectedになるまでを試す

//500, 100, 50
//0 0..2 0..2
//1 0..2 0..2
//2 0..2 0..2

$evaluate = [];
$count = 0;
for($j = 0; $j <=$fiveHundred; $j++) { 
  // スキップ
  // if($j * 500 > $expected || $j > $fiveHundred) {
  //   break;
  // }
  for($k = 0; $k<=$oneHundred; $k++) {
     // スキップ
  	// if($k * 100 > $expected || $k > $oneHundred) {
    //   break;
    // }
    for($l = 0; $l<=$fifty; $l++) {
      // スキップ
  	  // if($j * 50 > $expected || $l > $fifty) {
      //   break;
      // }
      $sum = 500*$j + 100*$k + 50*$l;
      if($sum === $expected) {
        // $choice = [$j, $k, $l];
        // $evaluate[] = $choice;
        $count++;
      }
    }
  }
}
echo $count;
// print_r($evaluate);