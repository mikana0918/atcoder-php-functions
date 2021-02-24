<?php
/**
 * https://atcoder.jp/contests/abs/tasks/abc081_b
 */
  
fscanf(STDIN, "%d", $numCount);

$input = fgets(STDIN);
$nums = explode(' ', trim($input));


$shouldDoAgain = true;
$count = 0;
$res = array_map(
	function(string $n) {
    	return (int) $n;
    },
  	$nums
);

do {
  $toBoolArray = array_map(
    function(int $n) {
      if($n % 2 === 0 ) {
        return true;
      } else {
        return false;
      }
    }, 
    $res
  );

  $shouldDoAgain = array_reduce(
    $toBoolArray,
    function(bool $a, bool $b) {
      return $a && $b;
    },
    true
  );

  if(!$shouldDoAgain) {
    break;
  }

  $count++;

$res = array_map(
    function(int $n) {
      return $n / 2;
    },
    $res,
);

} while ($shouldDoAgain);

print_r( $count );
