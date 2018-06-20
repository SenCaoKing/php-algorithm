<?php
/**
 * Created by Sublime
 * User: SenCaoKing
 * Date: 2018/03/06
 * Time: 13:20
 */
/**
 * 选择排序(思路分析：在要排序的一组数中，选出最小的一个数与第一个位置的数交换。然后在剩下的数当中再找最小的与第二个位置的数交换，如此循环到倒数第二个数和最后一个数为止)
 */

/**
 * ①
 *
 * @param  array  $arr   要排序的数组
 * @return array         返回排序后的数组
 */

$arr = array(1, 43, 54, 62, 21, 66, 32, 78, 36, 76, 39);

function selectSort($arr)
{
	// 双重循环完成，外层控制轮数，内层控制比较次数
	$length = count($arr);
	for($i=0; $i<$length-1; $i++)
	{
		// 先假设最小的值的位置
		$mini = $i;
		for($k=$i+1; $k<$length; $k++)
		{
			// $arr[$mini];//当前已知的最小值
			if($arr[$mini]>$arr[$k])
			{
				// 比较，发现更小的，记录下最小值的位置；并且在下次比较时采用已知的最小值进行比较。
				$mini = $k;
			}
		}
		// 已经确定了当前的最小值的位置，保存到 $mini 中。如果发现最小值的位置与当前假设的位置 $i 不同，则位置互换即可。
		if($mini != $i)
		{
			$tmp = $arr[$mini];
			$arr[$mini] = $arr[$i];
			$arr[$i] = $tmp;
		}
	}
	// 返回最终结果
	return $arr;
}

$sort = selectSort($arr);
print_r($sort); // Array ( [0] => 1 [1] => 21 [2] => 32 [3] => 36 [4] => 39 [5] => 43 [6] => 54 [7] => 62 [8] => 66 [9] => 76 [10] => 78 )

echo "<hr>";

/**
 * ②
 */
function select( $arr ){
    $length = count( $arr );
    // 此处值得注意: outer 的最大值不能超过 length-1,而不是 length,因为如果最后一个数字就剩最后一个了，不需要再拿出来判断大小
    for( $outer = 0; $outer < $length - 1; $outer++ ){
        // 选择基准数字和基准位置
        $min_index = $outer;
        // 和后面的数字依次进行比较,这里值得注意的是 inner 的最大上限是 length,而不能是 length-1
        for( $inner = $outer + 1; $inner < $length; $inner++ ){
            // 如果最小基准位上的数比后面的数字大，那么，将后面数字的索引赋值给 min_index
            if( $arr[ $min_index ] > $arr[ $inner ] ){
                $min_index = $inner;
            }
        }
        // 等所有内循环跑完毕后，判断最小数字的索引位置和 outer 是否相同，如果相同，说明 outer 位置上数是最小的；如果不同，那么， min_index 和 outer 两个位置的数字互换
        if( $min_index != $outer ){
            $temp = $arr[ $outer ];
            $arr[ $outer ] = $arr[ $min_index ];
            $arr[ $min_index ] = $temp;
        }
    }
    return $arr;
}

$sort = select($arr);
print_r($sort); // Array ( [0] => 1 [1] => 21 [2] => 32 [3] => 36 [4] => 39 [5] => 43 [6] => 54 [7] => 62 [8] => 66 [9] => 76 [10] => 78 )

echo "<hr>";

/**
 * 测试 冒泡排序和选择排序 耗时
 */
// 冒泡排序
function bubble( $arr ){
    $length = count($arr);
    $flag = true;
    for( $outer = 0; $outer < $length && $flag; $outer++ ){
        $flag = false;
        for( $inner = $length - 1; $inner > $outer; $inner-- ){
            if( $arr[ $inner ] < $arr[ $inner - 1 ] ){
                $temp = $arr[ $inner ];
                $arr[ $inner ] = $arr[ $inner - 1 ];
                $arr[ $inner - 1 ] = $temp;
                $flag = true;
            }
        }
    }
    return $arr;
}

$length = 200;
for( $i = 0; $i < $length; $i++ ){
    $arr[] = mt_rand(1, 1000);
}

// 冒泡算法
$begin = microtime( true );
for( $i = 0; $i < $length; $i++ ){
    bubble( $arr );
}
$end = microtime( true );
echo PHP_EOL.PHP_EOL.PHP_EOL."冒泡算法耗费时间：".( $end - $begin ).PHP_EOL; // 冒泡算法耗费时间：0.52700591087341

echo "<br>";

// 选择算法
$begin = microtime( true );
for( $i = 0; $i < $length; $i++ ){
    select( $arr );
}
$end = microtime( true );
echo PHP_EOL.PHP_EOL.PHP_EOL."选择算法耗费时间：".( $end - $begin ).PHP_EOL; // 选择算法耗费时间：0.17698788642883

/* 经测试：相同条件下，选择算法耗时更短(能节约一半时间) */


?>