<?php
/**
 * 二维数组中的查找
 *
 * 题目描述 : 在一个二维数组中（每个一维数组的长度相同），每一行都按照从左到右递增的顺序排序，每一列都按照从上到下递增的顺序排序。请完成一个函数，输入这样的一个二维数组和一个整数，判断数组中是否含有该整数。
 *
 */

function find($target, $array)
{
    $i = count($array[0]) - 1;
    $j = 0;

    if ($array[count($array) - 1][$i] < $target || $array[0][0] > $target) {
        return false;
    }

    for ($i; $i >= 0; $i--) {
        if ($array[$j][$i] <= $target) {
            for ($j; $j < count($array); $j++) {
                if ($array[$j][$i] == $target) {
                    return true;
                } else if ($array[$j][$i] > $target) {
                    break;
                }
            }
        }
    }

    return false;
}

$s = [[1, 2, 8, 9], [2, 4, 9, 12], [4, 7, 10, 13], [6, 8, 11, 15]];
var_dump(find(1, $s));
var_dump(find(7, $s));
var_dump(find(11, $s));

