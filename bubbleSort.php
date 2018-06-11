<?php
/**
 * Created by Sublime
 * User: SenCaoKing
 * Date: 2018/03/06
 * Time: 11:00
 */

/**
 * 冒泡排序 ① (思路分析：在要排序的一组数中，对当前还未排好的序列，从前往后对相邻的两个数依次进行比较和调整，让较大的数往下沉，较小的往上冒。即，每当两相邻的数比较后发现它们的排序与排序要求相反时，就将它们互换。)
 * @param  array  $arr   要排序的数组
 * @return array         返回排序后的数组
 */
$arr = array(1, 43, 54, 62, 21, 66, 32, 78, 36, 76, 39);
function bubbleSort($arr){
	$length = count($arr);
	// 该层循环控制，需要冒泡的轮数
	for($i=1; $i<$length; $i++){
		// 该层循环用来控制每轮 冒出一个数 需要比较的次数
		for($k=0; $k<$length-$i; $k++){
			if($arr[$k]>$arr[$k+1]){
				$tmp=$arr[$k+1];
				$arr[$k+1]=$arr[$k];
				$arr[$k]=$tmp;
			}
		}
	}
	return $arr;
}
$sort=bubbleSort($arr);
echo "<pre>";print_r($sort);

echo "<hr>";

/**
 * 冒泡排序 ② 思路分析: 对需要排序的数组从后往前(逆序)进行多遍的扫描，当发现相邻的两个数值的次序与排序要求的规则不一致时，就将这两个数值进行交换。这样比较小(大)的数值将逐渐从后面向前面移动。(就是从大到小或从小到大排列)
 */
function mysort($arr){
    // 循环数组
    for($i=0; $i<count($arr); $i++){
        // 声明一个状态量
        $isSort = false;
        // 循环除去极值后，剩下的数组
        for($j=0; $j<count($arr)-$i-1; $j++){
            // 相邻两个数值比较，并进行排序
            if($arr[$j] > $arr[$j+1]){
                $isSort = true;
                $temp = $arr[$j];
                $arr[$j] = $arr[$j+1];
                $arr[$j+1] = $temp;
            }
        }
        // 如果数组已经排列好，就跳出循环
        if(!$isSort){
            break;
        }
    }
    return $arr;
}

$arr1 = array(8,1,2,6,5,7,3,4);
echo "<pre>";print_r(mysort($arr1));

// $arr1 = array(1,2,3,4,5,6,7,8);
// echo "<pre>";print_r(mysort($arr2));

echo "<hr>";

/**
 * 冒泡排序 ③
 */
$arr2 = [ 8,1,2,6,5,7,3,4 ];
// $arr2 = [ 1,2,3,4,5,6,7,8 ];

$length = count( $arr2 );
// 外部循环
$swap = true;
for( $outer = 0; $outer < $length && $swap; $outer++ ){
    echo "outer : ".$outer.PHP_EOL;
    $swap = false;
    // 当外部循环开始第一轮的时候，从倒数第一位开始往前对比，一直到与正数第一位比较完成后终止
    for( $inner = $length -1; $inner > $outer; $inner-- ){
        if( $arr2[$inner] < $arr2[$inner - 1] ){
            $temp = $arr2[ $inner ];
            $arr2[ $inner ] = $arr2[$inner - 1];
            $arr2[ $inner - 1 ] = $temp;
            $swap = true;
        }
    }
}
print_r($arr2);


?>