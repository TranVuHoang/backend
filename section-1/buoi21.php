
<?php
//let a = 1; // biến trong javascript

# Biến trong php
$a=1;
echo $a;
$a = 2;
echo '<br>';
echo $a;

/**
 * Hằng trong javascript:
 * const PI = 3.14;
 */

/**
 * Hăng trong PHP
 */
const PI= 3.14;
define('_PI', 3.14);
echo '<br>';
echo PI;

/** Phân biệt nháy đơn ('') và nháy đôi ("") */
$time = "6:30PM";
$str1 = "Hôm nay tôi đi học lúc $time";
echo '<br>';
echo $str1;// hôm nay tôi đi học lúc 6:30PM

$str2 ='Hôm nay tôi đi học lúc $time';
echo '<br>';
echo $str2; // hôm nay tôi đi học lúc $time

/** Array
 * var_dump();  dùng kiểu dữ liệu object, array, resource
 * các kiểu dữ liệu còn lại là dùng echo
 *
 */
$arr1 = [4, 5, 9, 1];
echo '<pre>';
print_r($arr1);
echo '</pre>';

echo '<pre>';
var_dump($arr1);
echo '</pre>';

/**
 * Vòng lặp for trong PHP
 */
$sum = 0;
$count = count($arr1);

for($i = 0;$i < $count; $i++) {
    $sum += $arr1[$i];
}

echo '</br>';
echo 'SUM = ' . $sum;

# Tính tổng các số lẻ
$arr1 = [4, 5, 9, 1];
$sumOdds = 0;

for ($i = 0; $i < $count; $i++) {
    if ($arr1[$i] % 2 == 1) {
        $sumOdds += $arr1[$i];
    }
}

echo '<br/>';
echo 'Sum odds = ' . $sumOdds;

?>