<?php
/**
 * Created by Sublime
 * User: SenCaoKing
 * Date: 2018/03/05
 * Time: 11:00
 */
/**
 * 二分查找法 ①
 * @param  array  $arr   要查找的数组
 * @param  [type] $value 查找的数据
 * @return float         返回查找数据所处的位置(0 开头)
 */
$arr = array(1, 3, 5, 7, 9, 11,13);

function binsearch($arr, $value)
{
	$count = count($arr);
	$first = 0;
	$end = $count - 1;
	while($first <= $end)
	{
		$middle = intval(($first + $end) / 2);
		if($arr[$middle] > $value)
		{
			$end = $middle - 1;
		}
		elseif($arr[$middle] < $value)
		{
			$first = $middle + 1;
		}
		else
		{
			return $middle;
		}
	}
	return -1;
}

$find = binarySearch($arr, 5);
var_dump($find);

/**
 * 二分查找法 ②
 * @param  Array  $arr    要查找的数组
 * @param  [type] $target 要查找的数据
 * @return float          返回查找数据所处的位置(0 开头)
 */
function binarySearch(Array $arr, $target)
{
	$first = 0;
	$end = count($arr) - 1;

	while($first <= $end)
	{
		$middle = floor(($first + $end) / 2);
		// 找到元素
		if($arr[$middle] == $target) return $middle;
		// 中元素比目标大，查找左部
		if($arr[$middle] > $target) $end = $middle - 1;
		// 中元素比目标小，查找右部
		if($arr[$middle] < $target) $first = $middle + 1;
	}

	// 查找失败
	return false;
}

$find = binarySearch($arr, 5);
var_dump($find);

?>