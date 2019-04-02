<?php
/**
 * 斐波那契数列非递归的减法，时间复杂度 O(n)
 */
function fibonacci($n)
{
    $arr = [0, 1];
    if($n < 2){
        return $arr[$n];
    }
    $preOne = 1;
    $preTwo = 0;
    $fibN = 0;

    for($i=2; $i<=$n; $i++){
        $fibN = $preOne + $preTwo;
        $preTwo = $preOne;
        $preOne = $fibN;
    }
    return $fibN;
}
echo fibonacci(10);

echo '<br />';

// 生成器 yield
function fibonacci2($item)
{
    $a = 0;
    $b = 1;
    for($i=0; $i<=$item; $i++){
        yield $a;
        $a = $b - $a;
        $b = $a + $b;
    }
}

$fibo = fibonacci2(10);
foreach($fibo as $value){
    echo "$value\n";
}