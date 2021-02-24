<?php

/**
 * 標準入力 基本
 */
# 整数の入力
fscanf(STDIN, "%d", $a);
# スペース区切りの整数の入力
fscanf(STDIN, "%d %d", $b, $c);
# 文字列の入力
fscanf(STDIN, "%s", $s);
# 出力
echo ($a+$b+$c)." ".$s."\n";

/**
 * 標準入力
 * 
 * STDIN: 101 => [1, 0, 1]
 */
$input = fgets(STDIN);
print_r(str_split($input));