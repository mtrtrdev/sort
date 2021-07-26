<?php

/**
 * バブルソート
 */
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

/**
 * 選択ソート
 */
function selectSort($arr){
    $valCnt = count($arr);

    // 外回りループ（100, 99, 98....）
    for($n = $valCnt-1; $n > 0; $n--){

        $bef = $arr[$n]; // 比較元の値
        $minV = $bef;    // 最小値
        $minK = $n;    // 最小値

        // 内回りループ（0~100, 0~99, 0~98....）
        for($i = 0;$i < $n; $i ++){

            $aft  = $arr[$i]; // 比較先の値
            // var_dump($minV. " vs ". $aft);

            if($minV <= $aft){
                $minV = $aft;
                $minK = $i;

            }
        }

        // 最終最小値と位置を入れ替える
        // var_dump($minV. " ⇔ ". $bef);
        $arr[$n]     = $minV;
        $arr[$minK]  = $bef;

    }
    return $arr;
}



/**
 * クイックソート
 * ・一般的に最も高速と言われているデータの整列法
 * ・基準値を決めて、それより大きい数字のグループと小さい数字のグループを作る
 * ・グループに分けたら、グループないで新たに基準値を決めて処理を繰り返す
 */
function quickSort (&$list, $first, $last){

    // ポインター位置を定義（ポインターは可変値）
    $firstPointer = $first;
    $lastPointer  = $last;

    // 配列内の中央に位置する基準値を定義
    $points      = (int)($firstPointer + $lastPointer);
    $centerValue = $list[$points / 2];

    // 並び替えができなくなるまで
    do {

        // 基準値と比較してポインタを移動
        // （左側グループの処理）値が小さい場合
        while ($list[$firstPointer] < $centerValue) {
            $firstPointer++; // ポインターを右側に進める
        }
       
        // （右側グループの処理）値が大きい場合
        while ($list[$lastPointer] > $centerValue) {
            $lastPointer--; // ポインターを左側に進める
        }
        //この操作で左側と右側の値を交換する場所は特定

        // 両ポインタの値関係が条件と一致する場合
        if ($firstPointer <= $lastPointer) {
            
            // 特定されたポインタ位置にある値を入れ替える
            // var_dump(array($centerValue, $list[$firstPointer]. "⇔".$list[$lastPointer]));
            $tmp                 = $list[$lastPointer];
            $list[$lastPointer]  = $list[$firstPointer];
            $list[$firstPointer] = $tmp;
            
            // ポインタを進めて分割する位置を指定
            $firstPointer++; // ポインターを右側に進める
            $lastPointer--;  // ポインターを左側に進める
        }
    } while ($firstPointer <= $lastPointer); // 両ポインタの値関係が条件と一致する限り処理

    // 再帰的に左右のグループを処理
    if ($first < $lastPointer) {
        quickSort($list, $first, $lastPointer);
    }

    if ($firstPointer < $last) {
        quickSort($list, $firstPointer, $last);
    }

    return $list;

}