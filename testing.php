<?php

require("utillity.php");
require("algorithm.php");

// 並びがランダムな配列を生成
$createCnt = 10;
$randNums  = makeRandNums($createCnt);

 // バブルソート
$bubblesortArr = bubbleSort($randNums);
;







