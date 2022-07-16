<?php
function sort($arr){
    $len = count($arr);
    for($i=0;$i<$len-1;$i++){
        for ($j=0;$j<$len-$i-1;$j++){
            if($arr[$j]>$arr[$j+1]){
                $temp = $arr[$j];
                $arr[$j] = $arr[$j+1];
                $arr[$j+1] = $arr[$j];
            }
        }
    }
    return $arr;
}