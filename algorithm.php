<?php

function bubbleSort($arr){

    $valCnt = count($arr);

    // 外回りループ（100, 99, 98....）
    for($n = $valCnt-1; $n > 0; $n--){

        // 内回りループ（0~100, 0~99, 0~98....）
        for($i = 0;$i < $n; $i ++){

            $now  = $arr[$i];     // 現在の値（左側）
            $next = $arr[$i + 1]; // 次の値（右側）

            // 左が右より大きい値の場合
            if($now  > $next){

                // 左右を入れ替える
                $tmp         = $now;
                $arr[$i]     = $next;
                $arr[$i + 1] = $tmp;
        
            }


        }

    }

    return $arr;

}