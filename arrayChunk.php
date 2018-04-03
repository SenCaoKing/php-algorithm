<?php
/**
 * Created by Sublime
 * User: SenCaoKing
 * Date: 2018/04/03
 * Time: 16:40
 */
/* 平均拆分数组 */

$arr = array(1, 3, 'Apple', 5, 'Orange', 7, 9, 'Pear', 11, 13);
function chunk($list, $num)
{
	// $temp = [];
	$temp = array();
	// 判断数组
	if (!is_array($list)) {
		return false;
	}
	// 判断数量是否小于列数，小于 直接返回第一列
	if (count($list) < $num) {
		return $temp[] = $list;
	}
	// 向上取整
	$argv = ceil(count($list) / $num);
	// 循环切片
	for ($i = 1; $i <= $num; $i++) {
		$temp[$i] = array_slice($list, $argv * ($i - 1), $argv);
	}
	return $temp;
}

$find = chunk($arr, 4);
print_r($find);
print_r('<br />');
/* 类似数组 array_chunk() */
$chun = array_chunk($arr, 3);
print_r($chun);

?>