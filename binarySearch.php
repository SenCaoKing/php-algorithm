<?php
/**
 * Created by Sublime
 * User: SenCaoKing
 * Date: 2018/03/05
 * Time: 11:00
 */

/**
 * 二分查找法 ① 思路分析: 假设数据是按升序排序的，对于给定值 x，从序列的中间位置开始比较，如果当前位置值等于 x，则查找成功；若 x 小于当前位置值，则在数列的前半段中查找；若 x 大于当前位置值则在数列的后半段中继续查找，直到找到为止。(数据量大的时候使用)
 *
 * 此法有瑕疵，请参考 ②、③
 */
$arr = array(1, 3, 5, 7, 9, 11,13,14,15,16,18,21);

/**
 * @param $arr  所要查找的数组
 * @param $low  查找范围的最小值
 * @param $high 查找范围的最大值
 * @param $k    要查找的数据
 */
function bin_search($arr, $low, $high, $k)
{
    if($low <= $high){
        // 算出范围的中间值
        $mid = intval(($low + $high)/2);
        // 如果中间值等于目标值，则返回该值
        if($arr[$mid] == $k){
            return $mid;
        }else if($arr[$mid] > $k){ // 如果中间值大于目标值，则在最小值和中间值查找
            return bin_search($arr, $low, $mid-1, $k);
        }else{ // 如果中间值小于目标值，则在中间值和最大值查找
            return bin_search($arr, $mid+1, $high, $k);
        }
    }
    return "请给出正确查询范围";
}
var_dump(bin_search($arr, 1, 21, 9)); // int(4)

echo "<hr>";

/**
 * 二分查找法 ②
 * @param  array  $arr   要查找的数组
 * @param  [type] $value 查找的数据
 * @return float         返回查找数据所处的位置(0 开头)
 */
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

$find = binsearch($arr, 9);
var_dump($find); // int(4)

echo "<hr>";

/**
 * 二分查找法 ③
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

$find = binarySearch($arr, 9);
var_dump($find); // float(4)

?>