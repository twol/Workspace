<?php

echo "以下の整列配列を基本選択法で昇順にソートする\n";
$arr = array(16, 9, 4, 39, 5);

echo "配列を表示する\n";
echo "ソート前：\n";
for ($i = 0; $i < 5; $i++) {
	echo $arr[$i] . " ";
}
echo "\n";//改行

echo '外側の$iのループが発見した最小値を格納する要路番号'."\n";
for($i = 0; $i < 4; $i++) {
	//最小値を比較対象領域の戦闘の要素にする
	$min = $arr[$i];
	//内側の$jのループが最小値を発見する
	for($j = $i + 1; $j < 5; $j++) {
		//現在の最小値よりも要素が小さい場合
		//最小値を変更する
		if($min > $arr[$j]) {
			//最小値を変更する
			$min = $arr[$j];
			//最小値の要素番号を記憶する
			$pos = $j;
		}
	}
	//発見した最小値を、最小値を核の王する
	//要素番号のところと入れ替える
	$tmp = $arr[$i];
	$arr[$i] = $arr[$pos];
	$arr[$pos] = $tmp;
}

//配列を表示する
echo "ソート後：";
for($i = 0; $i < 5; $i++) {
	echo $arr[$i] . " ";
}
echo "\n";//改行

?>
