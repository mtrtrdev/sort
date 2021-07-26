<?php

require("utillity.php");
require("algorithm.php");

// 並びがランダムな配列を生成
$createCnt = 10;
$randNums  = makeRandNums($createCnt);

echo "<pre>";

echo "--------------------------------　";
echo "ソート前";
echo "<br>";
var_dump($randNums);


 // バブルソート
 echo "--------------------------------　";
echo "バブルソート";
echo "<br>";
var_dump(bubbleSort($randNums));


// 選択ソート
echo "--------------------------------　";
echo "選択ソート";
echo "<br>";
var_dump(selectSort($randNums));


// クイックソート
echo "--------------------------------　";
echo "クイックソート";
echo "<br>";
$listCount = count($randNums);
var_dump(quickSort($randNums, 0, $listCount-1));




