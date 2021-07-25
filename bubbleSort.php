<?php

$randNums = makeRandNums(100);


$count = count($randNums);
for($n=$count -1; $n > 0; $n--){
    for($i = 0;$i < $n; $i ++){
        if($randNums[$i]  > $randNums[$i + 1]){
            $tmp = $randNums[$i];
            $randNums[$i] =  $randNums[$i + 1] ;
            $randNums[$i + 1] = $tmp ;
    
        }


    }

}


// echo "<pre>";
// var_dump($randNums);







/**
 * ランダムな数字の配列を生成
 * 値が飛び石にはならないようMAX値は引数の値とする
 */
function makeRandNums ($count = NULL) {
    $arr = array();

    $count = isset($count) !== FALSE ? $count : 5  ;
    
    for ($i = 0 ; $i < $count ; $i++){
        $needle = mt_rand(1, $count);
        if(in_array($needle, $arr) !== FALSE){
            $i--;
        }else{
            $arr[] = $needle;
        }
        
    }
    return $arr;
    
}
