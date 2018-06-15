<?php
/**
 * Created by PhpStorm
 * User: SenCaoKing
 * Date: 2018/06/14
 * Time: 22:51
 */
/**
 * 排列组合
 */

function plzh($arr, $size){
    $len = count($arr); // 4
    $max = pow(2, $len); // 16
    $min = pow(2, $size) - 1; // 3
    $r_arr = [];
    for($i=$min; $i<$max; $i++){
        $count = 0;
        $t_arr = [];
        for($j=0; $j<$len; $j++){
            $a = pow(2, $j);
            $t = $i&$a;
            if($t == $a){
                $t_arr[] = $arr[$j];
                $count++;
            }
        }
        if($count == $size){
            $r_arr[] = $t_arr;
        }
    }
    return $r_arr;
}
$data = plzh([1, 2, 3, 4], 2);

echo "<pre>";
print_r($data);



?>