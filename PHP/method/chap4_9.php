<?php

$x = 100;
$y = 200;

//否定
echo '!($x < $y)   :' . !($x < $y) . "\n";
echo '!($x < 101)  :' . !($x <101) . "\n";
echo '!($x < 100)  :' . !($x <100) . "\n";
echo "\n";//改行
//論理積
echo '$x == 100 && $y == 200 :' . ($x == 100 && $y == 200) . "\n";
echo '$x == 100 && $y != 200 :' . ($x == 100 && $y != 200) . "\n";
echo "\n";//改行
echo '$x == 100 and $y == 200 :' . ($x == 100 and $y == 200) . "\n";
echo '$x == 100 and $y != 200 :' . ($x == 100 and $y != 200) . "\n";
echo "\n";//改行
//論理和
echo '$x == 100 || $y == 200 :' . ($x == 100 || $y == 200) . "\n";
echo '$x == 100 || $y != 200 :' . ($x == 100 || $y != 200) . "\n";
echo "\n";//改行
echo '$x == 100 or $y == 200 :' . ($x == 100 or $y == 200) . "\n";
echo '$x == 100 or $y != 200 :' . ($x == 100 or $y != 200) . "\n";
echo "\n";//改行
//排他的論理和
echo '$x == 100 xor $y == 200 :' . ($x == 100 xor $y == 200) . "\n";
echo '$x == 100 xor $y != 200 :' . ($x == 100 xor $y != 200) . "\n";
echo "\n";//改行

?>
