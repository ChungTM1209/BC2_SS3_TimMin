<?php
$arr = [1,2,3,0,6,8,9,4,12];
function findMin($arr){
    $index = 0;
    $min = $arr[0];
    for ($i = 0; $i<count($arr);$i++){
        if ($arr[$i] < $min){
            $min = $arr[$i];
            $index = $i;
        }
    }
    echo ("Min: " . $min . " Vi tri: " . $index);
}
findMin($arr);
?>